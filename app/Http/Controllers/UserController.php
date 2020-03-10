<?php

namespace App\Http\Controllers;

use App\Barg;
use App\Order;
use App\OrderDetail;
use App\Setting;
use App\SMS;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public $sms;
    public $qr="";

    public function __construct()
    {
        $this->sms = new SMS();
    }
    public function view_order($qr)

    {
        
       
        $order = OrderDetail::with('Order','Barg')->where('F_QRCode',$qr)->first();

        return view('users.viewCouponPage',['order'=>$order]);
    }
    public function tab1()
    {

        $userID = Auth::user()->id;
        $user = User::find($userID);
        return view('users.tab1', ["user" => $user]);
    }
    public function tab2()
    {
        return view('users.tab2');
    }

    public function tab3()
    {
        $user_id = Auth::user()->id;
        
        $order = Order::with(['OrderDetail' => function ($query) {

            $query->with('Barg');

        }])->where('F_UserID', $user_id)->get();

        return view('users.tab3',['orders'=>$order]);

    }
    public function tab4()
    {
        return view('users.tab4');
    }
    public function tab5()
    {
        return view('users.tab5');
    }
    public function tab6()
    {
        $userID = Auth::user()->id;
        $user = User::with('Like')->find($userID);

        return view('users.tab6', ["Like" => $user->Like]);
    }


    public function VerifyCode(Request $request)
    {


        $code = join('', $request->code);
        $number = $request->number;
        if (strlen($number) == 10)
            $number = '0' . $number;

        return $this->sms->accept($number, $code);
    }

    public function SendCode(Request $request)
    {
        $number = $request->phone;
        return $this->sms->send($number);
    }

    public function ViewLogin()
    {
        return view('users.login');
    }
}
