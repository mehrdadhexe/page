<?php

namespace App\Http\Controllers;

use App\Like;
use App\Trend;
use Illuminate\Http\Request;
use App\Category;
use App\Barg;
use App\City;
use App\Slider;
use App\Comment;
use App\DocumentDetail;
use Carbon\Carbon;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
use Rate;

class BargController extends Controller
{
    public function test()
    {
        return "ahskj";

    }
    public function trend(Request $request, $id)
    {
        $trend = Trend::find($id);
        $barges = Barg::where('F_CategoryID', $trend->F_CategoryID)->get();

        return view('page.trend', ["trend" => $trend, "barges" => $barges]);

    }

    public function search(Request $request)
    {

        $text = $request->s;
        $bargs = Barg::with(['City' => function ($query) {

            $city_id = 1;
            if (Session::has('city_name')) {

                $city = City::where('F_Name', Session::get('city_name'))->first();
                $city_id = $city->F_CityID;
            }
            $query->where("F_CityID", $city_id);
        }])->where('F_Title', 'like', "%$text%")
            ->orWhere('F_Text', 'like', "%$text%")->get();

        $out = array();
        foreach ($bargs as $item) {

            $item->paycount = DocumentDetail::where('F_BargID', $item->F_BargID)->count();
            $item->likecount = Like::where('F_BargID', $item->F_BargID)->count();

            $F_Fee = (int)$item->F_Fee;
            $F_Off = (int)$item->F_Off;
            $item->full_price = $F_Fee - (($F_Fee / 100) * $F_Off);
            array_push($out, $item);
        }

        return view('page.search', ["bargs" => $out, "s" => $text]);
    }

    public function showBylocation($city)
    {

        $city = City::where('F_Url', $city)->first();
        $barg = Barg::where('F_CityID', $city->F_CityID)->get();

        return view('page.map', ['city' => $city, 'barg' => $barg]);

    }

    public function showByCategory($city, $cat_id, $title, Request $request)
    {

        $bargs = Category::with(['Barg' => function ($query) {
            $query->where("F_CityID", 1);
        }])->find($cat_id);

        $out=array();
        foreach ($bargs->Barg as $item) {

            $item->paycount = DocumentDetail::where('F_BargID', $item->F_BargID)->count();
            $item->likecount = Like::where('F_BargID', $item->F_BargID)->count();

            $F_Fee = (int)$item->F_Fee;
            $F_Off = (int)$item->F_Off;
            $item->full_price = $F_Fee - (($F_Fee / 100) * $F_Off);
            array_push($out, $item);
        }



        return view('page.category', ["bargs" => $out,"cat_name"=>$bargs->F_Name]);

    }

    public function ShowBarg($city, $id, $title)
    {

        $barg = Barg::with('City','DocumentDetail','Category', 'Comment', 'Like', 'Media', 'Rate')->Find($id);
        date_default_timezone_set('Asia/Tehran');
        $ts = strtotime("now");
        $te = $barg->F_ExpireDate;
        $nb_server_time = $ts * 1000;
        $nb_end_time = $te * 1000;

        $rate_count = $barg->Rate->count();
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
        $F_Fee = (int)$barg->F_Fee;
        $F_Off = (int)$barg->F_Off;
        $full_price = $F_Fee - (($F_Fee / 100) * $F_Off);

        $current_timestamp = Carbon::now()->timestamp;
        $expire_timestamp=$barg->F_ExpireDate;
        $active ='';
        if($expire_timestamp<$current_timestamp)
            $active ='hidden';

        $data = [
            'barg' => $barg,
            'active' => $active,
            'full_price' => $full_price,
            'rate_darsad' => $rate_darsad,
            'count_pay' => $barg->DocumentDetail->count(),
            'happy_rate_darsad' => $happy_rate_darsad,
            'normal_rate_darsad' => $normal_rate_darsad,
            'sad_rate_darsad' => $sad_rate_darsad,
            'rate_score' => $rate_score,
            'rate_count' => $rate_count,
            'star_count' => $star_count,
            'nb_server_time' => $nb_server_time,
            'nb_end_time' => $nb_end_time
        ];

        return view('page.off_page', $data);
    }

    public function SaveComment(request $request, $id)
    {
        $Auth = 1; //Auth::User()->id;
        $condition = DocumentDetail::where('F_UserID', $Auth)->where('F_BargID', $id)->first();
        if (!$condition == null) {
            return Comment::insert([
                "F_UserID" => $Auth::User()->id,
                "F_Text" => $request->input('F_Text'),
                "F_Date" => date('Y/m/d'),
                "F_Time" => date('H:i:s'),
                "F_BargID" => $id,
            ]);
        }
    }

    public function SaveLike(request $request, $id)
    {
        $Auth = 1; //Auth::User()->id;
        $condition = DocumentDetail::where('F_UserID', $Auth)->where('F_BargID', $id)->first();
        if (!$condition == null) {
            return Like::insert([
                "F_UserID" => $Auth::User()->id,
                "F_Date" => date('Y/m/d'),
                "F_BargID" => $id
            ]);
        }
    }
}
