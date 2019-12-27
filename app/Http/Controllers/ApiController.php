<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Psr7\str;
use http\Client\Response;
use App\Ajax;
use App\Barg;
use App\Category;
use App\SMS;
use App\User;
use Cassandra\Float_;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\URL;
use Laravel\Passport\Client;
use Laravel\Passport\Http\Middleware\CheckClientCredentials;
use Laravel\Passport\Passport;
use Lcobucci\JWT\Claim;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Parsing\DecoderTest;
use PhpParser\Parser\Tokens;
use SoapClient;


class ApiController extends Controller
{
    public $sms;

    public function __construct()
    {
        $this->sms = new SMS();

    }

    public function showLocation()
    {
        $data = [];
        $barges = Barg::all();
        foreach ($barges as $barg) {


            $object = (object)[];
            $object->F_BargID=$barg->F_BargID;
            $object->F_lat=(float)$barg->F_lat;
            $object->F_lang=(float)$barg->F_lang;
            $object->F_Title=$barg->F_Title;
            array_push($data,$object);

        }

        return $data;
    }

    public function getPayLink(Request $request)
    {
        $barges = $request->barges;

        $encrypted = Crypt::encryptString($barges);

        return ["pay_url" => url('/') . '/api/pay/' . $encrypted];
    }

    public function payLink($barges)
    {

        $decrypted = Crypt::decryptString($barges);
        $barges_arr = explode('-', $decrypted);
        return $barges_arr;
//        $price_main = 0;
//        foreach ($barges_arr as $barg_id) {
//            $barg = Barg::find($barg_id);
//            $price_item = $barg->F_Fee - (($barg->F_Fee / 100) * $barg->F_Off);
//            $price_main = $price_main + (int)$price_item;
//        }
//        return $this->payOrder($price_main);
    }

    public function payOrder($price_main)
    {
        $order_id = 1;
        $MerchantID = 'b7c7dd52-8cdd-11e9-96ce-000c29344814'; //Required
        $Amount = $price_main;
        $Description = 'سفارش خرید '; // Required
        $Email = 'UserEmail@Mail.Com'; // Optional
        $Mobile = '07633118'; // Optional
        $CallbackURL = url('/api/app/pay/verify');
        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        $result = $client->PaymentRequest(
            [
                'MerchantID' => $MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL,
            ]
        );

        if ($result->Status == 100) {
            return redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result->Authority);

        } else {
            echo 'ERR: ' . $result->Status;

        }

    }

    public function payVerify()
    {
        $MerchantID = 'b7c7dd52-8cdd-11e9-96ce-000c29344814';
        $Amount = $_GET['Price'];
        $Authority = $_GET['Authority'];

        if ($_GET['Status'] == 'OK') {

            $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $Amount,
                ]
            );

            if ($result->Status == 100) {
                echo '<a href="app://app?RefID=' . $result->Status . '&Status=' . $result->Status . '">بازگشت به بندر تخفیف</a>';
            } else {
                echo '<a href="app://app?RefID=&Status=' . $result->Status . '">بازگشت به بندر تخفیف</a>';
            }
        } else {
            echo 'بازگشت ';
        }


    }

    public function logout(Request $request)
    {

        $value = $request->bearerToken();
        $id = (new Parser())->parse($value)->getHeader('jti');
        $token = $request->user()->tokens()->find($id);
        $token->revoke();
        return response()->json(['state' => 1, 'msg' => "توکن منقضی شد"], 200);

    }

    public function checkLogin(Request $request)
    {

        $user = Auth::User();
        $users = array($user);

        if (Auth::check()) {
            return response()->json(['state' => 1, "users" => $users], 200);
        } else {
            return response()->json(['state' => -1, 'users' => "توکن منقضی می باشد"], 401);
        }
    }

    public function VerifyCode(Request $request)
    {

//        code = int
//        number=string

        $code = $request->code;
        $number = $request->number;
        if (strlen($number) == 10)
            $number = '0' . $number;

        return $this->sms->accept($number, $code);

    }

    public function SendCode(Request $request)
    {
//        phone=string
        $number = $request->phone;
        return $this->sms->send($number);
    }

    public function Search(Request $request)
    {

        //cityID =int
        //q=string

        $cityID = 1;
        $text = $request->q;
        return Barg::where('F_Title', 'like', "%$text%")->orWhere('F_Text', 'like', "%$text%")->get();
    }

    public function Category(Request $request)
    {


        return ['data' => Category::all()];
    }

    public function showBarg($ID)
    {
        $barg = Barg::with(['Media', 'Rate', 'Comment', 'DocumentDetail', 'Like'])->where('F_BargID', $ID)->first();

        $barg->pay_count = $barg->DocumentDetail->count();
        //  ["data"=>$barg,"pay_count"=>98];
        return $barg;
    }

    public function showByCategory($ID)
    {
        $category = Category::with(['Barg'])->where('F_CategoryID', $ID)->first();
        $Category = Category::with(['Barg'])->where('F_CategoryID', $ID)->Find($ID);
        $data = array();

        foreach ($Category->barg as $barg) {
            date_default_timezone_set('Asia/Tehran');
            $ts = strtotime("now");
            $te = $barg->F_ExpireDate;
            $nb_server_time = $ts * 1000;
            $nb_end_time = $te * 1000;


            $rate_count = $barg->Rate->count();
            $pay_count = $barg->DocumentDetail->count();
            $rate_darsad = 0;
            $happy_rate_darsad = 0;
            $normal_rate_darsad = 0;
            $sad_rate_darsad = 0;
            $rate_score = 0;
            $star_count = 0;


            if ($rate_count > 0) {
                $happy_rate_count = $barg->Rate->where('F_Score', '=', 1)->count();
                $normal_rate_count = $barg->Rate->where('F_Score', '=', 2)->count();
                $sad_rate_count = $barg->Rate->where('F_Score', '=', 3)->count();

                $happy_rate_darsad = (int)(number_format(($happy_rate_count / $rate_count), 2) * 100);
                $normal_rate_darsad = (int)(number_format(($normal_rate_count / $rate_count), 2) * 100);
                $sad_rate_darsad = (int)(number_format(($sad_rate_count / $rate_count), 2) * 100);

                $col = $happy_rate_darsad + $normal_rate_darsad + $sad_rate_darsad;
                if ($col > 100) {

                    $ezaf = ($col - 100) / 3;
                    $happy_rate_darsad = $happy_rate_darsad - $ezaf;
                    $normal_rate_darsad = $normal_rate_darsad - $ezaf;
                    $sad_rate_darsad = $sad_rate_darsad - $ezaf;
                }

                $rate_score = number_format((($normal_rate_darsad - ($sad_rate_darsad / 10)) + $happy_rate_darsad) / 20, 1);
                $rate_darsad = (int)($rate_score * 20);

                $star_count = $barg->Like->count();


            }

     $data_p = [
                'barg' => $barg,
                'rate_darsad' => $rate_darsad,
                'happy_rate_darsad' => $happy_rate_darsad,
                'normal_rate_darsad' => $normal_rate_darsad,
                'sad_rate_darsad' => $sad_rate_darsad,
                'rate_score' => (float) $rate_score,
                'rate_count' => $rate_count,
                'pay_count' => $pay_count,
                'star_count' => $star_count,
                'nb_server_time' => $nb_server_time,
                'nb_end_time' => $nb_end_time
            ];

            array_push($data,$data_p);

        }



        return ['data'=>$data];
    }

    public function ajax($action, Request $request)
    {
//        id=int =>آی دی برگ
//        text=string =>متن نظر
//        score=int =>امتیاز =>امتیاز باید از یک تا پنج باشد

        $ajax = new Ajax();
        if ($action == 'like') {
            return $ajax->like($request);
        }
        elseif  ($action == 'comment') {
            return $ajax->comment($request);
        }
        elseif  ($action == 'rate') {
            return $ajax->rate($request);
        }

    }


}
