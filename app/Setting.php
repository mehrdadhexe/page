<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Setting extends Model
{
    public static function getCity()
    {

        $url='bandar';
        if(Session::has('city_name')) {

            $city =City::where('F_Name', Session::get('city_name'))->first();
            $url = $city->F_Url;
        }
        return $url;
    }
    public static function getUrlOff($id)
    {
        $F_Title=Barg::find($id)->F_Title;

        $url=url('/').'/'.Setting::getCity().'/off/'.$id.'/'.$F_Title;

        return $url;
    }
    public static function getOffPrice($id)
    {
        $off=Barg::find($id)->F_Off;
        $fee=Barg::find($id)->F_Fee;

        $price=$fee-(($fee/100)*$off);


        return $price;
    }
    public static function getUrlCat($id)
    {
        $F_Title=Category::find($id)->F_Name;

        $url=url('/').'/'.Setting::getCity().'/category/'.$id.'/'.$F_Title;

        return $url;
    }

}
