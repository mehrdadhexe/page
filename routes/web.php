<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
|
*/
//User
Auth::routes();
Route::get('page/smartpage', function () {
    return view('smartpage.smartpageb');
});

Route::post('/smartpage/save', 'PageSmart@savePage');
Route::get('/smartpage/{id}', 'PageSmart@getPage');
///

//صفحه اصلی سایت
Route::get('/', 'PageBargContoroller@index');
//درخواست های ایجکس
Route::post('/ajax/{action}', 'PageBargContoroller@ajax');
//صفحه نمایش تخفیف
Route::get('{city}/off/{id}/{title}', 'BargController@ShowBarg');
///صفحه دسته بندی تخفیف
Route::get('{city}/category/{cat_id}/{title}', function () {
    return view('page.category');
});

//لیست فروشندگان روی نقشه
Route::prefix('{city}/map')->group(function () {

    Route::get('/','PageBargContoroller@index');

});

//سبد خرید
Route::get('/baskets', function () {
    return view('baskets');
});



//صفحه لوگین مشتری
Route::prefix('users')->group(function () {

    Route::get('login','UserController@ViewLogin');
    Route::post('send_code','UserController@SendCode');
    Route::get('verify_code','UserController@VerifyCode');

});

//پروفایل مشتری
Route::prefix('users/userProfiles')->group(function () {

    Route::get('/', function () {
        return view('users.userProfiles');
    });
    Route::get('index', function () {

        return view('users.userProfiles');
    });

});

