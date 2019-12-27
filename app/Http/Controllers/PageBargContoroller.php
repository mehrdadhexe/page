<?php

namespace App\Http\Controllers;

use App\Ajax;
use Illuminate\Http\Request;
use App\Category;
use App\Barg;
use App\City;
use App\Slider;


class PageBargContoroller extends Controller
{
    public function ajax($action,Request $request)
    {
        $ajax= new Ajax();
        if($action=='like')
        {
            return $ajax->like($request);
        }

    }

    public function index(Request $request)
    {
        $request->session()->forget('city_name');

        $limit = 5;
        $catx = 2;
        $cityid = 1;
        $cat =  Category::with('Barg')->take(2)->get();
        $important = json_decode(Category::where('F_Important',1)->pluck('F_CategoryID'));
        $push = array();
        foreach($important as $id)
        {
            $category = Category::find($id);
            $Barg  =  Barg::with('DocumentDetail')->where('F_CityID',$cityid)->where('F_CategoryID',$id)->where('F_State',1)->orderBy('F_Off','ASC')->take($limit)->get();
            $Bargs = array('F_Category'=> $category,'F_Barg' =>$Barg);
            array_push($push ,$Bargs);
        }

        return view('page.home',["section"=>$push]);

    }
    public function indexByCity($slug,Request $request)
    {
        $city=City::where('F_Url',$slug)->first();
        $limit = 5;
        $catx = 2;
        $cityid = $city->F_CityID;
        $cat =  Category::with('Barg')->take(2)->get();
        $important = json_decode(Category::where('F_Important',1)->pluck('F_CategoryID'));
        $push = array();
        foreach($important as $id)
        {
            $category = Category::find($id);
            $Barg  =  Barg::with('DocumentDetail')->where('F_CityID',$cityid)->where('F_CategoryID',$id)->where('F_State',1)->orderBy('F_Off','ASC')->take($limit)->get();
            $Bargs = array('F_Category'=> $category,'F_Barg' =>$Barg);
            array_push($push ,$Bargs);
        }

        $request->session()->put('city_name',$city->F_Name);

        return view('page.home',["section"=>$push]);

    }


    public function search()
    {
        $cityid = 1;
        $text = $_GET['q'];
        return Barg::
                    where('F_Title','like',"%$text%")
                    ->orWhere('F_Text','like',"%$text%")->get();
    }
}
