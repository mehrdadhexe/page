<?php

namespace App\Http\Controllers;

use App\Ajax;
use App\Barg;
use App\Category;
use App\SMS;
use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Client;
use Laravel\Passport\Http\Middleware\CheckClientCredentials;
use Laravel\Passport\Passport;
use Lcobucci\JWT\Claim;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Parsing\DecoderTest;
use PhpParser\Parser\Tokens;

class ApiController extends Controller
{
    public $sms;

    public function __construct()
    {
        $this->sms = new SMS();

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

        return Category::all();
    }

    public function showBarg($ID)
    {
        $barg = Barg::with(['Media', 'Rate', 'Comment', 'Like'])->where('F_BargID', $ID)->first();

        return $barg;
    }

    public function showByCategory($ID)
    {
        $category = Category::with(['Barg'])->where('F_CategoryID', $ID)->first();
        return $category;
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
