<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PageSmart extends Controller
{
    public function getPage($id)
    {
        $page = \App\PageSmart::find($id);
        return view('smartpage.page',['page'=>$page]);
    }
    public function savePageAjex($id,Request $request)
    {

        $page = \App\PageSmart::find($id);
        $page->data=serialize($request->data);
        $page->html=$request->html;
        $page->theme=$request->theme;
        $page->save();

        return $id;
    }
    public function editPageAjex($id)
    {
        $page = \App\PageSmart::find($id);

        return unserialize($page->data) ;
    }
    public function editPage($id)
    {
        $page = \App\PageSmart::find($id);
        return view('smartpage.page_edit',['page'=>$page]);
    }
    public function savePage(Request $request)
    {

        $date =  Carbon::now();
        $date_now= $date->toDateTimeString();
        $user_id=1;
        $page = new \App\PageSmart();
        $page->html=$request->html;
        $page->theme=$request->theme;
        $page->data=serialize($request->data);
        $page->user_id=$user_id;
        $page->date=$date_now;
        $page->save();
        return $page->id;

    }
}
