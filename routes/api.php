<?php

use Illuminate\Http\Request;

//ارسال پیام
Route::post('sms/send', 'ApiController@SendCode');
//تایید شماره
Route::post('sms/verify', 'ApiController@VerifyCode');
//چک کردن لوگین
Route::get('login/check', 'ApiController@checkLogin')->middleware(['web','auth:api']);
//خروج
Route::get('login/logout', 'ApiController@logout')->middleware(['web','auth:api']);
//جست و جو
Route::get('search', 'ApiController@Search');
//دسته بندی
Route::get('category', 'ApiController@Category');
//نمایش برگ
Route::get('barg/{ID}', 'ApiController@showBarg');
//نمایش برگ بر اساس دسته بندی
Route::get('barges/category/{ID}', 'ApiController@showByCategory');
//لایک کردن برگ  ثبت رتبه برگ و ارسال کامنت
//action=like,comment,rate
Route::post('ajax/{action}', 'ApiController@ajax')->middleware(['auth:api']);
