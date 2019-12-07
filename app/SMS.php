<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SMS extends Model
{
    public function VerifyLookup($receptor, $token)
    {
        $path = 'https://api.kavenegar.com/v1/56555950686F7939693867767731595A61354B47387462585579453767785369/verify/lookup.json';
        $params = array(
            "receptor" => $receptor,
            "token" => $token,
            "template" => 'verify'
        );

        return $this->execute($path, $params);
    }

    public function execute($url, $data = null)
    {
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/x-www-form-urlencoded',
            'charset: utf-8'
        );
        $fields_string = "";
        if (!is_null($data)) {
            $fields_string = http_build_query($data);
        }

        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $fields_string);
        $res = curl_exec($handle);


        return response()->json(["result" => $res], 200);


    }

    public function send($number)
    {

        if (strlen($number) == 10)
            $number = '0' . $number;
        $data = User::where('F_Username', '=', $number)->first();


        if ($data) {
            $userID = $data->id;
            $user = User::find($userID);
            $sms = rand(1000, 9999);
            $this->VerifyLookup($number, $sms);
            $user->F_SmsCode = $sms;
            $user->password = Hash::make($sms);
            $user->save();

        } else {
            $sms = rand(1000, 9999);
            $this->VerifyLookup($number, $sms);
            $data = ['F_Username' => $number, 'F_SmsCode' => $sms, 'password' => Hash::make($sms)];
            User::insert($data);
        }


    }

//    تایید کد ارسال شده به شماره تلفن
    public function accept($number, $F_Code)
    {

        $sms = rand(1000, 9999);

        if (strlen($number) == 10)
            $number = '0' . $number;

        $data = User::where('F_Username', '=', $number)->first();

        if ($data) {
            if ($F_Code == $data->F_SmsCode) {
                $user = User::find($data->id);
                $user->F_Active = 1;
                $user->password = Hash::make($sms);
                $user->save();
                Auth::loginUsingId($data->id);
                return response()->json(['state' => 'ok','redirect'=>url("/")], 200);
            } else {
                return response()->json(['state' => 'no'], 401);
            }
        }
        else{
            return response()->json(['state' => 'no'], 401);
        }

    }
}
