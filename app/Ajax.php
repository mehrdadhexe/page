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
}
