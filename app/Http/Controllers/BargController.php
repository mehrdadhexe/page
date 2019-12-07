<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Barg;
use App\City;
use App\Slider;
use App\Comment;
use App\DocumentDetail;
use DB;
use Rate;

class BargController extends Controller
{

    public function ShowBarg($city,$id,$title)
    {
        $barg=Barg::with('City','Comment','Like','Media','Rate')->Find($id);
        date_default_timezone_set('Asia/Tehran');
        $ts=strtotime("now");
        $te=$barg->F_ExpireDate;
        $nb_server_time=$ts*1000;
        $nb_end_time=$te*1000;


        $rate_count=$barg->Rate->count();
        $rate_darsad=0;
        $happy_rate_darsad=0;
        $normal_rate_darsad=0;
        $sad_rate_darsad=0;
        $rate_score=0;
        $star_count=0;



        if($rate_count>0)
        {
            $happy_rate_count=$barg->Rate->where('F_Score','=',1)->count();
            $normal_rate_count=$barg->Rate->where('F_Score','=',2)->count();
            $sad_rate_count=$barg->Rate->where('F_Score','=',3)->count();

            $happy_rate_darsad=(int)(number_format(($happy_rate_count/$rate_count),2)*100);
            $normal_rate_darsad=(int)(number_format(($normal_rate_count/$rate_count),2)*100);
            $sad_rate_darsad=(int)(number_format(($sad_rate_count/$rate_count),2)*100);

            $col=$happy_rate_darsad+$normal_rate_darsad+$sad_rate_darsad;
            if($col>100)
            {

                $ezaf=($col-100)/3;
                $happy_rate_darsad=$happy_rate_darsad-$ezaf;
                $normal_rate_darsad=$normal_rate_darsad-$ezaf;
                $sad_rate_darsad=$sad_rate_darsad-$ezaf;
            }

            $rate_score=number_format((($normal_rate_darsad-($sad_rate_darsad/10))+$happy_rate_darsad)/20,1);
            $rate_darsad=(int)($rate_score*20);

            $star_count=$barg->Like->count();


        }


        $data=[
            'barg'=>$barg,
            'rate_darsad'=>$rate_darsad,
            'happy_rate_darsad'=>$happy_rate_darsad,
            'normal_rate_darsad'=>$normal_rate_darsad,
            'sad_rate_darsad'=>$sad_rate_darsad,
            'rate_score'=>$rate_score,
            'rate_count'=>$rate_count,
            'star_count'=>$star_count,
            'nb_server_time'=>$nb_server_time,
            'nb_end_time'=>$nb_end_time
            ];

        return view('page.off_page',$data);
    }

    public function SaveComment(request $request,$id)
    {
        $Auth = 1;//Auth::User()->id;
        $condition = DocumentDetail::where('F_UserID',$Auth)->where('F_BargID',$id)->first();
        if(!$condition == null)
        {
            return Comment::insert([
                "F_UserID"=>$Auth::User()->id,
                "F_Text"=>$request->input('F_Text') ,
                "F_Date"=> date('Y/m/d'),
                "F_Time"=> date('H:i:s'),
                "F_BargID"=>$id ,
            ]);
        }
    }


    public function SaveLike(request $request,$id)
    {
        $Auth = 1;//Auth::User()->id;
        $condition = DocumentDetail::where('F_UserID',$Auth)->where('F_BargID',$id)->first();
        if(!$condition == null)
        {
            return Like::insert([
                "F_UserID"=>$Auth::User()->id,
                "F_Date"=> date('Y/m/d'),
                "F_BargID"=>$id
            ]);
        }
    }
}
