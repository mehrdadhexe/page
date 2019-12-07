<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Ajax extends Model
{
    public function like($request)
    {

if(Auth::check()){
        $Auth =Auth::User()->id;
        $id=$request->id;
        $condition = DocumentDetail::where('F_UserID',$Auth)->where('F_BargID',$id)->first();
        if(!$condition == null)
        {
            $islike= Like::where('F_UserID',$Auth)->where('F_BargID',$id)->first();
            if($islike){

                Like::where('F_UserID',$Auth)->where('F_BargID',$id)->delete();
                return response(['islike'=>false,'islogin'=>true,'msg'=>'محصول از لیست علاقه مندی شما حذف شد'],200);
            }
            else{
                Like::insert([
                    "F_UserID"=>$Auth,
                    "F_Date"=> date('Y/m/d'),
                    "F_BargID"=>$id
                ]);

                return response(['islike'=>true,'islogin'=>true,'msg'=>'محصول به لیست علاقه مندی شما اضافه شد'],200);

            }

        }
        else{
            return response(['islike'=>false,'msg'=>'برای لایک کردن باید محصول را خریداری کنید'],200);
        }
}else{
    return response(['islike'=>false,'msg'=>'برای لایک کردن باید لاگین کنید'],200);
}

    }

    public function comment($request)
    {



        if(Auth::check()){
            $Auth =Auth::User()->id;
            $id=$request->id;
            $condition = DocumentDetail::where('F_UserID',$Auth)->where('F_BargID',$id)->first();
            if(!$condition == null)
            {
                $text=$request->text;
                Comment::insert([
                        "F_UserID"=>$Auth,
                        "F_Text"=> $text,
                        "F_Date"=> date('Y/m/d'),
                        "F_Time"=> date('h:i'),
                        "F_BargID"=>$id
                    ]);

                    return response(['is_comment'=>true,'islogin'=>true,'msg'=>'نظر شما ارسال شد'],200);


            }
            else{
                return response(['is_comment'=>false,'msg'=>'برای ارسال نظر باید محصول را خریداری کنید'],200);
            }
        }else{
            return response(['is_comment'=>false,'msg'=>'برای ارسال نظر باید لاگین کنید'],200);
        }

    }
    public function rate($request)
    {
        if(Auth::check()){
            $Auth =Auth::User()->id;
            $id=$request->id;
            $condition = DocumentDetail::where('F_UserID',$Auth)->where('F_BargID',$id)->first();
            if(!$condition == null)
            {

                $score=$request->score;
                $israte= Rate::where('F_UserID',$Auth)->where('F_BargID',$id)->first();
                if($israte){

                    return response(['is_rate'=>false,'islogin'=>true,'msg'=>'شما قبلا برای این محصول امتیاز ثبت کرده اید'],200);
                }
                else{
                    Rate::insert([
                        "F_UserID"=>$Auth,
                        "F_Score"=> $score,
                        "F_Date"=> date('Y/m/d'),
                        "F_Time"=> date('h:i'),
                        "F_BargID"=>$id
                    ]);

                    return response(['is_rate'=>true,'islogin'=>true,'msg'=>'امتیاز شما ثبت شد'],200);
                }





            }
            else{
                return response(['is_rate'=>false,'msg'=>'برای ثبت امتیاز باید محصول را خریداری کنید'],200);
            }
        }else{
            return response(['is_rate'=>false,'msg'=>'برای ثبت امتیاز باید لاگین کنید'],200);
        }

    }

}
