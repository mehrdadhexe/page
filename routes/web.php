<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
|
*/


Auth::routes();
Route::get('page/smartpage', function () {
    return view('smartpage.smartpageb');
});

Route::post('/smartpage/save', 'PageSmart@savePage');
Route::get('/smartpage/{id}', 'PageSmart@getPage');
Route::post('/test', 'BargController@test');

Route::get('qr-code', function ()
{
    $F_QRCode="ssda;sdk;asld";
    QrCode::size(200)->format('png')->generate($F_QRCode,storage_path().'/qr_code/'.$F_QRCode.'.png');
    $file=storage_path().'/qr_code/'.$F_QRCode.'.png';
    return Response::download($file);
});
//صفحه اصلی سایت
Route::get('/', 'PageBargContoroller@index');
//نمایش بر اساس شهر
Route::get('/city/{slug}', 'PageBargContoroller@indexByCity');
//درخواست های ایجکس
Route::post('/ajax/{action}', 'PageBargContoroller@ajax');
//صفحه نمایش تخفیف
Route::get('{city}/off/{id}/{title}', 'BargController@ShowBarg');
///صفحه دسته بندی تخفیف
Route::get('{city}/category/{cat_id}/{title}', 'BargController@showByCategory');
//لیست فروشندگان روی نقشه
Route::get('{city}/map', 'BargController@showBylocation');
//پرداخت تخفیف
Route::post('pay', 'CartController@pay_order');
//تایید پرداخت
Route::get('verify', 'CartController@verify_order');
//برگشت از درگاه پرداخت
Route::get('baskets/order/{order_id}', 'CartController@back_order');
//جست و جوی برگ ها
Route::get('search', 'BargController@search');
//trend
Route::get('{id}/trend', 'BargController@trend');
//اضافه کردن به سبد خرید
Route::post('baskets/add/{p_id}', 'CartController@addCart');
//نمایش سبد خرید
Route::get('baskets', 'CartController@showCart');
//خالی کردن سبد خرید
Route::get('baskets/removeAll', 'CartController@removeAllCart');
//حذف ایتم از سبد خرید
Route::get('baskets/remove/{id}', 'CartController@removeItem');
//مدیریت سبد خرید
Route::prefix('baskets')->group(function () {

    Route::post('changeQuantity/{id}','CartController@changeQuantity');


});


//صفحه لوگین مشتری
Route::prefix('users')->group(function () {

    Route::get('login','UserController@ViewLogin');
    Route::post('send_code','UserController@SendCode');
    Route::get('verify_code','UserController@VerifyCode');

});

//پروفایل مشتری
Route::prefix('users/userProfiles')->group(function () {


    Route::get('/','UserController@tab1');
    Route::get('tab1','UserController@tab1');
    Route::get('tab2','UserController@tab2');
    Route::get('tab3','UserController@tab3');
    Route::get('tab4','UserController@tab4');
    Route::get('tab5','UserController@tab5');
    Route::get('tab6','UserController@tab6');

    Route::get('view_order/{qr}','UserController@view_order');
});

