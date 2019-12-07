<?php

namespace App\Http\Controllers;

use App\SMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class UserController extends Controller
{
    public $sms;

    public function __construct()
    {
        $this->sms = new SMS();

    }

    public function VerifyCode(Request $request)
    {


        $code = join('', $request->code);
        $number = $request->number;
        if(strlen($number)==10)
            $number='0'.$number;

        return $this->sms->accept($number,$code);

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
