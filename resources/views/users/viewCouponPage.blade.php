@extends('layout.index')
@section('content')
<main><div class="page-static">
  
    <div class="wrapper-2">
        <div class="container-fluid">
        <div class="row h-position">
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs right-aside sticky-aside">
    <div id="nava" class="affix-bottom" style="top: 1055px;">
        <div class="float-cat">
            <ul>
                                <a href="/bandarabbas/c:todaydeals/" class="float-cat-todaydeal">
                    <li>
                        <i><i class="icon icon-logo_e"></i></i><span>نت‌برگ‌های امروز</span>
                    </li>
                </a>
                    <a href="/bandarabbas/c:all/" class="float-cat-all.">
        <li>
            <i><i class="icon icon-menu"></i></i>
            <span>همه پیشنهادها</span>
        </li>
    </a>
    
        <a href="/bandarabbas/c:restaurant/" class="float-cat-restaurant">
            <li>
                <i>
                    <i class="icon icon-burger"></i>
                </i>
                <span>رستوران و فست فود</span>
            </li>
        </a>
            <a href="/bandarabbas/c:entertainment/" class="float-cat-entertainment">
            <li>
                <i>
                    <i class="icon icon-basketball"></i>
                </i>
                <span>تفریحی و ورزشی</span>
            </li>
        </a>
            <a href="/bandarabbas/c:health/" class="float-cat-health">
            <li>
                <i>
                    <i class="icon icon-car-first-aid-kit"></i>
                </i>
                <span>پزشکی و سلامت</span>
            </li>
        </a>
            <a href="/bandarabbas/c:art/" class="float-cat-art">
            <li>
                <i>
                    <i class="icon icon-Theater"></i>
                </i>
                <span>هنر و تئاتر</span>
            </li>
        </a>
            <a href="/bandarabbas/c:education/" class="float-cat-education">
            <li>
                <i>
                    <i class="icon icon-earth-globe"></i>
                </i>
                <span>آموزشی</span>
            </li>
        </a>
            <a href="/bandarabbas/c:beauty/" class="float-cat-beauty">
            <li>
                <i>
                    <i class="icon icon-lipstick-with-cover"></i>
                </i>
                <span>زیبایی و آرایشی</span>
            </li>
        </a>
            <a href="/bandarabbas/c:product/" class="float-cat-product">
            <li>
                <i>
                    <i class="icon icon-shopping-bag-1"></i>
                </i>
                <span>کالا</span>
            </li>
        </a>
            <a href="/bandarabbas/c:traveltours/" class="float-cat-traveltours">
            <li>
                <i>
                    <i class="icon icon-tour"></i>
                </i>
                <span>تورهای مسافرتی</span>
            </li>
        </a>
            <a href="/bandarabbas/c:giftcode/" class="float-cat-giftcode">
            <li>
                <i>
                    <i class="icon icon-couponcodes"></i>
                </i>
                <span>کد تخفیف</span>
            </li>
        </a>
            <a href="/bandarabbas/c:vip/" class="float-cat-vip">
            <li>
                <i>
                    <i class="icon icon-vip"></i>
                </i>
                <span>پیشنهادات لوکس</span>
            </li>
        </a>
            <a href="/bandarabbas/c:services/" class="float-cat-services">
            <li>
                <i>
                    <i class="icon icon-cleaning"></i>
                </i>
                <span>خدمات</span>
            </li>
        </a>
    <a href="/bandarabbas/c:last/" class="float-cat-last">
    <li class="sc">
        <i>
            <i class="icon icon-timer"></i>
        </i>
        <span>لحظه آخری</span>
    </li>
</a>                    <a href="/bandarabbas/c:favorite/" class="float-cat-favorite">
                        <li>
                            <i><i class="icon icon-favorite"></i></i><span>علاقه مندی</span>
                        </li>
                    </a>
                            </ul>
        </div>
    </div>
</div>            <div class="col-lg-22 col-md-22 col-sm-24 col-xs-24 clearfix page-contactus">
            <section>
                <div class="page-productstatus">
                <div class="_1 col-lg-24">
                    <div class="photo-box col-lg-8 col-md-10 col-sm-10 col-xs-24 cat-deal-box">
                                                    <div class="figure" style="background-image: url(&quot;{{$order->Barg->F_Pic}}&quot;); background-size: cover;">
                                <img src="{{$order->Barg->F_Pic}}" class="sr-only def-img">
                            </div>
                                                </div>
                    <div class="info-box col-lg-16 col-md-14 col-sm-14">
                        <div class="row">
                            <div class="des-box col-lg-24 col-md-24">
                                <div class="title-kala col-lg-24 col-md-24">
                                    <span>{{ App\User::find($order->Barg->F_UserID)->name}} </span>
                                    <p>

                                    {{$order->Barg->F_Title}} 
                                    </p>
                                                                      </div>
                            </div>
                        </div>
                        <div class="row hidden-sm hidden-md">
                            <div class="detail-box col-lg-24 col-md-24">
                            <div class="detail-child col-lg-8 col-md-8 col-sm-12">
                                <p><span class="question">تاریخ خرید :</span><span class="answer"> {{$order->Order->F_Date}}</span></p>
                            </div>
                            <div class="detail-child col-lg-8 col-md-8 col-sm-12">
                                <p><span class="question">تاریخ شروع اعتبار :</span><span class="answer">{{$order->Barg->F_CreateDate}} </span></p>
                            </div>
                            <div class="detail-child col-lg-8 col-md-8 col-sm-12">
                                <p><span class="question">تاریخ پایان اعتبار :</span><span class="answer">{{date('Y-m-d',$order->Barg->F_ExpireDate)}}</span></p>
                            </div>
                            <div class="detail-child col-lg-8 col-md-8 col-sm-12">
                                <p><span class="question">تعداد :</span><span class="answer">{{$order->F_Count}} عدد</span></p>
                            </div>
                            <div class="detail-child col-lg-8 col-md-8 col-sm-12">
                                <p><span class="question">قیمت :</span><span class="answer green">{{App\Setting::getOffPrice($order->Barg->F_BargID)}} تومان</span>
                                <del>{{$order->Barg->F_Fee}}</del>
                                </p>
                            </div>
                            <div class="detail-child col-lg-8 col-md-8 col-sm-12">
                                <p><span class="question">کل پرداختی :</span><span class="answer green">{{$order->Order->F_FinalFactor}} تومان</span></p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="info-box hidden-lg hidden-xs">
                        <div class="detail-box col-lg-24 col-md-24">
                            <div class="detail-child col-lg-8 col-md-8 col-sm-8">
                                <p><span class="question">تاریخ خرید :</span><span class="answer">19 اسفند</span></p>
                            </div>
                            <div class="detail-child col-lg-8 col-md-8 col-sm-8">
                                <p><span class="question">تاریخ شروع اعتبار :</span><span class="answer">17 اردیبهشت</span></p>
                            </div>
                            <div class="detail-child col-lg-8 col-md-8 col-sm-8">
                                <p><span class="question">تاریخ پایان اعتبار :</span><span class="answer">31 خرداد</span></p>
                            </div>
                            <div class="detail-child col-lg-8 col-md-8 col-sm-8">
                                <p><span class="question">تعداد :</span><span class="answer">1 عدد</span></p>
                            </div>
                            <div class="detail-child col-lg-8 col-md-8 col-sm-8">
                                <p><span class="question">قیمت :</span><span class="answer green">۱,۵۰۰ تومان</span>
                                    <del>۲,۵۰۰</del>
                                </p>
                            </div>
                            <div class="detail-child col-lg-8 col-md-8 col-sm-8">
                                <p><span class="question">کل پرداختی :</span><span class="answer green">۱,۵۰۰ تومان</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                                <div class="_5 col-lg-24">
                    <div class="barcod-text col-lg-24 col-md-24">
                    <div class="col-lg-24 col-md-24 col-sm-24 col-xs-24">
                        <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs"><span>لطفا بارکدهای خود را در زمان مراجعه به همراه داشته باشید</span></div>
                    </div>
                    <div class="col-lg-24 col-md-24 col-sm-24 col-xs-24">
                        <div class="row">
                        <div class="slide_show">
                            <ul class="slide1" style="text-align: center; list-style: outside none none; padding-right: 0px;">
                                                            <li class="item" style="width: 24%; display: inline-block;">
                                    <div class="slide_item">
                                    <div class="code-box">
                                        <div class="circle-right"></div>
                                        <div class="circle-left"></div>
                                        {{$order->F_QRCode}}
                                                                                </div>
                                    <div class="barcod-box">
                                        <div class="inner-barcod">
                                        <div class="circle2-right"></div>
                                        <div class="circle2-left"></div>
@php
$pic_bas64  = base64_encode(file_get_contents(storage_path() . '/qr_code/' . $order->F_QRCode . '.png'));
@endphp

        <img class="qrcode" src="data:image/png;base64, {{$pic_bas64}}" alt="[Image: Deal qr code]">
                                                                                <p class="counter">1 از 1</p>
                                        </div>
                                    </div>
                                    </div>
                                </li>
                                                        </ul>
                            <div data-target=".slide1" class="owl_btns" style="display: none;"><span class="arrow right prev"><i class="icon-arrow-right icon"></i></span><span class="arrow left next"><i class="icon-arrow-left icon"></i></span></div>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                        <div class="row btn-barcod">
                        <button id="barcode" class="nb-btn view-barcode"><i class="icon icon-arrow-down"></i><i class="icon icon-arrow-up"></i><span>مشاهده بارکدها</span></button>
                        </div>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                                <div class="clearfix"></div>

        </div>
    </div>
</div>

</main>

@endsection