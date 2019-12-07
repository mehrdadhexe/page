<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
|API=U
|--------------------------------------------------------------------------
|
| Here is Where you can register API routes for your application. These
| Is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/',function(Request $request){

    return $request->user();

});
