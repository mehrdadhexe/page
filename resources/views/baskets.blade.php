@extends('layout.index')
@section('content')

    <main>

        <!-- Modal-->
        <div class="page-basket basket-quest-login">
            <div class="container-fluid">
                <div class="row h-position">

                    @include('component.float_cat')

                    <div class="col-lg-22 col-md-22 col-sm-24 col-xs-24 clearfix">
                        <div class="row">
                            <div class="col-lg-24">
                                <div class="basket-levels">
                                    <ul class="list-inline list-unstyled">
                                        <li class="active"><a href="/tehran/baskets//">سبد خرید</a><span>۱</span>
                                        </li>
                                        <li>عملیات پرداخت<span>۲</span></li>
                                        <li>دریافت نت برگ<span>۳</span></li>
                                    </ul>
                                    <div class="basket-guide">
                                        <ul class="list-inline list-unstyled">
                                            <li><span data-toggle="modal" data-target="#basket-guide">؟</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-15 col-md-15">
                                <div class="cat-deal-color main-cat">
                                    <div class="basket-main-deal clearfix main-row">
                                        @if(Session::has('cart'))
                                            @foreach($data as $id)
                                                <div nb-postal="" nb-cat-id="cat_" nb-deal-id="deal_162902"
                                                     class="col-lg-24 col-md-24 col-sm-24 basket-item">
                                                    <div class="list-items">
                                                        <div class="li-top-box">
                                                            <a href="" class="clearfix">
                                                                <div class="overlay"></div>
                                                                <img
                                                                    src="{{\App\Barg::find($id)->F_Pic}}"
                                                                    alt=""> </a>
                                                            <div class="list-deal-details">
                                                                <div class="top-panel"><span>
                                                        <a href=""><h3>{{\App\Barg::find($id)->F_Title}}</h3></a></span>
                                                                </div>
                                                                <div class="middle-panel clearfix"><a href=""
                                                                                                      class="deal-desc">

                                                                        {{\App\Barg::find($id)->F_Text}}
                                                                    </a></div>
                                                            </div>

                                                            <div class="list-deal-cp"><span class="deal-delete"><i
                                                                        mj-type="single"
                                                                        mj-success="removeItemCart"
                                                                        mj-target="{{url("baskets/remove")}}/{{$id}}"
                                                                        mj-method="get" mj-model="model2"
                                                                        class="icon icon-garbage-bin"></i></span></div>
                                                        </div>
                                                        <div class="li-bottom-box">
                                                            <div class="top-bp clearfix">
                                                                <select name="quantity"
                                                                        class="single-select pull-right qt"
                                                                        mj-type="select"
                                                                        id-barg="{{$id}}"
                                                                        mj-success="changItemCount"
                                                                        mj-target="{{url("baskets/changeQuantity")}}/{{\App\Barg::find($id)->F_BargID}}"
                                                                        mj-method="post" mj-model="model4">


                                                                    @php
                                                                        $i = 1;
                                                                    @endphp
                                                                    @while ($i<=\App\Barg::find($id)->F_Count)
                                                                        <option value="{{$i}}">{{$i}}</option>
                                                                        @php
                                                                            $i++;
                                                                        @endphp
                                                                    @endwhile
                                                                    @php
                                                                        $F_Fee=\App\Barg::find($id)->F_Fee;
                                                                        $F_Off=\App\Barg::find($id)->F_Off;
                                                                        $full_price=$F_Fee-(($F_Fee/100)*$F_Off);

                                                                    @endphp
                                                                </select> <span class="send-po pull-right">
                            <span nb-num="{{$full_price}}">{{number_format($full_price)}}</span>
                            <span> تومان</span>
                          </span>
                                                                <span
                                                                    class="send-po pull-left"><span>جمع کل: </span><span
                                                                        class="nb-total-item" id="nb-total-item-{{$id}}"
                                                                        nb-total="{{$full_price}}">{{number_format($full_price)}}</span><span> تومان</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif


                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <div class="panel panel-default login-box">
                                    <div class="panel-heading">
                                        <div class="total"><span>جمع کل سبد</span><span>(تومان)</span></div>
                                        @php

                                            $price=0;
                                        @endphp
                                        @if(Session::has('cart'))
                                            @foreach($data as $id)
                                                @php
                                                    $fee=(int)\App\Barg::find($id)->F_Fee;
                                                    $off=(int)\App\Barg::find($id)->F_Off;
                                                    $full_price=$fee-(($fee/100)*$off);
                                                    $price=$price+$full_price;
                                                @endphp
                                            @endforeach
                                        @endif
                                        <div nb-totalbasket="{{$price}}" id="nb-totalbasket" class="num">

                                            {{number_format($price)}}


                                        </div>
                                    </div>
                                    {{--                                    <ul role="tablist" class="nav nav-tabs nav-justified">--}}
                                    {{--                                        <li role="presentation" class="active"><a href="includes/_tab_1.html"--}}
                                    {{--                                                                                  aria-controls="" role="tab"--}}
                                    {{--                                                                                  data-toggle="tab"--}}
                                    {{--                                                                                  data-target="#b-tab1"--}}
                                    {{--                                                                                  onclick="event.preventDefault()"><span>خرید سریع</span></a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                        <li role="presentation"><a href="includes/_tab_2.html" aria-controls=""--}}
                                    {{--                                                                   role="tab" data-toggle="tab" data-target="#b-tab2"--}}
                                    {{--                                                                   onclick="event.preventDefault();appAjax();"><span>ورود /ثبت نام		</span></a>--}}
                                    {{--                                        </li>--}}
                                    {{--                                    </ul>--}}
                                    <div class="panel-body tab-content">
                                        <div id="b-tab1" role="tabpanel"
                                             class="tab-pane nb-signinup-wrapper nb-signin-guest tab-pane personal-tab fade in active">

                                            {{--                                            <h4 class="rb-header">تنها با وارد کردن ایمیل خرید کنید</h4>--}}
                                            {{--                                            <form method="post" accept-charset="utf-8" class="personal-pro"--}}
                                            {{--                                                  mj-type="form" mj-model="model2" mj-method="post"--}}
                                            {{--                                                  mj-target="/users/fastRegister.json" mj-success="successFastRegister"--}}
                                            {{--                                                  action="/tehran/baskets/">--}}
                                            {{--                                                <div style="display:none;"><input type="hidden" name="_method"--}}
                                            {{--                                                                                  value="POST"></div>--}}
                                            {{--                                                <div class="nameandfname">--}}
                                            {{--                                                    <div class="form-group req input-label-animate">--}}
                                            {{--                                                        <div class="input email"><label for="pe3">آدرس--}}
                                            {{--                                                                ایمیل</label><input type="email" name="email"--}}
                                            {{--                                                                                    class="single-input required-input emailcheck fast-register-email"--}}
                                            {{--                                                                                    id="pe3" text="pe3" maxlength="50">--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <span class="hint danger" style="display: none;"></span>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="form-group input-label-animate">--}}
                                            {{--                                                        <div class="input text"><label for="phone">موبایل ( برای دریافت--}}
                                            {{--                                                                پیامک خرید خود لطفا شماره موبایل هم وارد نمایید)</label><input--}}
                                            {{--                                                                type="text" name="phone" maxlength="11"--}}
                                            {{--                                                                class="single-input phonenumbervalid" id="phone"></div>--}}
                                            {{--                                                        <span class="hint danger"></span>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="form-group">--}}
                                            {{--                                                        <button type="submit" class="nb-btn nb-btn-success"--}}
                                            {{--                                                                mj-for="model2">نهایی کردن خرید--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </form>--}}
                                            <div class="form-group text-center">
                                                @auth
                                                    <form method="post" accept-charset="utf-8" class="personal-pro"
                                                          action="{{url('pay')}}">
                                                        @csrf
                                                        <button type="submit" class="nb-btn nb-btn-success"
                                                                mj-for="model2">نهایی کردن خرید
                                                        </button>

                                                    </form>

                                                @endauth

                                                @guest
                                                    <a href="{{url("/users/login/")}}" class="nb-btn nb-btn-success"
                                                       mj-for="model2">ورود به سایت
                                                    </a>

                                                @endguest

                                            </div>
                                            {{--                                            <div class="section-header">--}}
                                            {{--                                                <span class="hx">یا</span>--}}
                                            {{--                                            </div>--}}
                                            {{--                                            <div class="social-pro"><span>ورود از طریق شبکه های اجتماعی</span></div>--}}
                                            {{--                                            <div class="clearfix so-log">--}}
                                            {{--                                                <button data-url="http://google.com"--}}
                                            {{--                                                        class="nb-btn nb-btn-icon nb-btn-warning google-bt social-btn">--}}
                                            {{--                                                    ورود با گوگل<i class="icon icon-google"></i></button>--}}
                                            {{--                                                <button data-url="http://yahoo.com"--}}
                                            {{--                                                        class="nb-btn nb-btn-icon nb-btn-warning yahoo-bt social-btn">--}}
                                            {{--                                                    ورود با یاهو<i class="icon icon-yahoo-big-logo"></i></button>--}}
                                            {{--                                            </div>--}}
                                            <div class="circle-sign"></div>
                                            <div class="e"></div>
                                        </div>

                                        <div id="b-tab2" role="tabpanel"
                                             class="nb-signinup-wrapper nb-signin nb-default-signin personal-tab tab-pane fade in">
                                            <h4 class="rb-header">برای ادامه خرید وارد حساب کاربری خود شوید</h4>
                                            <form method="post" accept-charset="utf-8" class="personal-pro ajaxform"
                                                  action="/tehran/users/login?page=basket">
                                                <div style="display:none;"><input type="hidden" name="_method"
                                                                                  value="POST"></div>
                                                <div class="nameandfname">
                                                    <div class="form-group req input-label-animate">
                                                        <div class="input email"><label for="loginemail">آدرس
                                                                ایمیل</label><input type="email" name="email"
                                                                                    id="loginemail"
                                                                                    class="single-input required-input emailcheck">
                                                        </div>
                                                        <span class="hint danger" style="display: none;"></span>
                                                    </div>
                                                    <div class="form-group req input-label-animate">
                                                        <div class="input password"><label for="password">کلمه
                                                                عبور</label><input type="password" name="password"
                                                                                   class="single-input required-input password-check"
                                                                                   id="password"></div>
                                                        <span class="hint danger" style="display: none;"></span>
                                                    </div>


                                                    <div class="form-group remember-forget">
                                                        <div class="forget-pass"><a href="/users/forgotPassword">رمز
                                                                عبور خود را فراموش کرده اید؟</a></div>
                                                    </div>


                                                    <div class="form-group">
                                                        <button type="submit" class="nb-btn nb-btn-success">ورود
                                                        </button>
                                                        <div class="link-signup clearfix">
                                                            <span>در نت برگ عضو نیستید؟</span><a data-toggle="tab"
                                                                                                 href=".nb-signup"
                                                                                                 class="not-register nb-btn nb-btn-sm nb-btn-border">ثبت
                                                                نام کنید</a></div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="section-header">
                                                <span class="hx">یا</span>
                                            </div>
                                            <div class="social-pro"><a data-toggle="tab" href=".nb-signinotp"><img
                                                        src="/assets/site/img/phone.png"></a>
                                                <div class="clearfix"></div>
                                                <a data-toggle="tab" href=".nb-signinotp">ورود با شماره موبایل</a>
                                            </div>
                                            <div class="section-header">
                                                <span class="hx">یا</span>
                                            </div>
                                            <div class="social-pro"><span>ورود از طریق شبکه های اجتماعی</span></div>
                                            <div class="clearfix so-log">
                                                <button data-url="/tehran/users/social/Google?page=basket"
                                                        class="nb-btn nb-btn-icon nb-btn-warning google-bt social-btn">
                                                    ورود با گوگل<i class="icon icon-google"></i></button>
                                                <button data-url="/tehran/users/social/Yahoo?page=basket"
                                                        class="nb-btn nb-btn-icon nb-btn-warning yahoo-bt social-btn">
                                                    ورود با یاهو<i class="icon icon-yahoo-big-logo"></i></button>
                                            </div>
                                            <div class="circle-sign"></div>
                                            <div class="e"></div>
                                        </div>
                                        <div
                                            class="nb-signinup-wrapper nb-signup personal-tab tab-pane fade basket-register-tab">
                                            <h4 class="rb-header">برای ادامه خرید در نت‌برگ ثبت نام کنید</h4>

                                            <form method="post" accept-charset="utf-8" class="personal-pro ajaxform"
                                                  id="registration-form"
                                                  mj-target="/user/users/verify-register-data?page=basket"
                                                  mj-type="form" mj-method="post" mj-success="registerSuccessCallback"
                                                  action="/tehran/baskets/">
                                                <div style="display:none;"><input type="hidden" name="_method"
                                                                                  value="POST"></div>
                                                <div class="nameandfname">
                                                    <div class="row">
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group req input-label-animate">
                                                            <div class="input text"><label
                                                                    for="user-profile-first-name">نام</label><input
                                                                    type="text" name="user_profile[first_name]"
                                                                    class="single-input required-input"
                                                                    id="user-profile-first-name"></div>
                                                            <span class="hint danger"></span>
                                                        </div>
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group req input-label-animate">
                                                            <div class="input text"><label for="user-profile-last-name">نام
                                                                    خانوادگی</label><input type="text"
                                                                                           name="user_profile[last_name]"
                                                                                           class="single-input required-input"
                                                                                           id="user-profile-last-name">
                                                            </div>
                                                            <span class="hint danger"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group req input-label-animate">
                                                        <div class="input email"><label
                                                                for="registeremail">ایمیل</label><input type="email"
                                                                                                        name="email"
                                                                                                        id="registeremail"
                                                                                                        class="single-input required-input emailcheck">
                                                        </div>
                                                        <span class="hint danger" style="display: none;"></span>
                                                    </div>
                                                    <div class="form-group req input-label-animate">
                                                        <div class="input text"><label for="phone">موبایل</label><input
                                                                type="text" name="phone" maxlength="11"
                                                                class="single-input required-input phonenumbervalid"
                                                                id="phone"></div>
                                                        <span class="hint danger"></span>
                                                    </div>
                                                    <div class="form-group req input-label-animate">
                                                        <div class="input password"><label for="password">کلمه
                                                                عبور</label><input type="password" name="password"
                                                                                   class="single-input required-input password-check"
                                                                                   id="password"></div>
                                                        <span class="hint danger" style="display: none;"></span>
                                                    </div>
                                                    <div class="form-group req input-label-animate">
                                                        <label class="hascontent">شهر محل سکونت</label>
                                                        <select name="user_profile[city_id]"
                                                                class="single-select required-input">
                                                            <option value="">انتخاب شهر</option>
                                                            <option value="42598">اراک</option>
                                                            <option value="42575">اردبیل</option>
                                                            <option value="42574">ارومیه</option>
                                                            <option value="42576">اصفهان</option>
                                                            <option value="42583">اهواز</option>
                                                            <option value="42577">ایلام</option>
                                                            <option value="42582">بجنورد</option>
                                                            <option value="42578">بندر بوشهر</option>
                                                            <option value="42599">بندرعباس</option>
                                                            <option value="42580">بیرجند</option>
                                                            <option value="42573">تبریز</option>
                                                            <option value="42546" selected="selected">تهران</option>
                                                            <option value="42596">خرم‌آباد</option>
                                                            <option value="42595">رشت</option>
                                                            <option value="42586">زاهدان</option>
                                                            <option value="42584">زنجان</option>
                                                            <option value="42597">ساری</option>
                                                            <option value="42585">سمنان</option>
                                                            <option value="42590">سنندج</option>
                                                            <option value="42747">شهرهای شمالی</option>
                                                            <option value="42579">شهرکرد</option>
                                                            <option value="42587">شیراز</option>
                                                            <option value="42588">قزوین</option>
                                                            <option value="42589">قم</option>
                                                            <option value="42581">مشهد</option>
                                                            <option value="42600">همدان</option>
                                                            <option value="42602">کرج</option>
                                                            <option value="42591">کرمان</option>
                                                            <option value="42592">کرمانشاه</option>
                                                            <option value="42745">کیش</option>
                                                            <option value="42594">گرگان</option>
                                                            <option value="42593">یاسوج</option>
                                                            <option value="42601">یزد</option>
                                                        </select><span class="hint danger"></span>
                                                    </div>
                                                    <div class="form-group-checkbox">
                                                        <div class="checkbox checkbox-success checkbox-toggle checked">
                                                            <input type="checkbox" name="subscription" value="1"
                                                                   class="styled" checked="checked" id="subscription">
                                                            <label for="subscription">مایل به اطلاع از تخفیف های شهر خود
                                                                به صورت روزانه می باشم</label>
                                                        </div>
                                                        <div class="accept-law clearfix">
                                                            <div
                                                                class="checkbox checkbox-success checkbox-toggle required-chechbox checked">
                                                                <input type="checkbox" name="rules" value="1"
                                                                       class="styled" checked="checked" id="rules">
                                                                <label for="checkbox2" sync-bybutton="btn1"></label>
                                                            </div>
                                                            <span class="after-lable-rule"><a
                                                                    href="/page/term-and-conditions/" target="_blank"
                                                                    class="rules">قوانین و مقررات&nbsp;</a>را می پذیرم</span>
                                                        </div>
                                                    </div>
                                                    <div class="m-b re-captcha text-center">
                                                        <div class="control-input captcha-net"
                                                             style="display: inline-block;margin: 0 auto;">
                                                            <div class="captcha-block" align="right">
                                                                <div class="g-recaptcha"
                                                                     id="g-recaptcha-register-verify"
                                                                     data-sitekey="6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc"
                                                                     data-recaptcha-id="0">
                                                                    <div style="width: 304px; height: 78px;">
                                                                        <div>
                                                                            <iframe
                                                                                src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc&amp;co=aHR0cHM6Ly9uZXRiYXJnLmNvbTo0NDM.&amp;hl=fa&amp;v=mhgGrlTs_PbFQOW4ejlxlxZn&amp;size=normal&amp;cb=ia1gr63fmjf4"
                                                                                role="presentation"
                                                                                name="a-hgyyqgq8paku" scrolling="no"
                                                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                                                width="304" height="78"
                                                                                frameborder="0"></iframe>
                                                                        </div>
                                                                        <textarea id="g-recaptcha-response"
                                                                                  name="g-recaptcha-response"
                                                                                  class="g-recaptcha-response"
                                                                                  style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="nb-btn nb-btn-success"
                                                                sync-bybutton="btn1">ثبت نام
                                                        </button>
                                                        <div class="link-signup clearfix">
                                                            <span>در نت برگ عضو هستید؟</span><a data-toggle="tab"
                                                                                                href=".nb-signin"
                                                                                                class="not-register nb-btn nb-btn-sm nb-btn-border show-basket">ورود
                                                                به حساب کاربری</a></div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="section-header">
                                                <span class="hx">یا</span>
                                            </div>
                                            <div class="social-pro"><span>ثبت نام از طریق شبکه های اجتماعی</span></div>
                                            <div class="clearfix so-log">
                                                <button
                                                    data-url="/user/users/social/Google?type=register&amp;page=basket"
                                                    class="nb-btn nb-btn-icon nb-btn-warning google-bt social-btn">ثبت
                                                    نام با گوگل<i class="icon icon-google"></i></button>
                                                <button
                                                    data-url="/user/users/social/Yahoo?type=register&amp;page=basket"
                                                    class="nb-btn nb-btn-icon nb-btn-warning yahoo-bt social-btn">ثبت
                                                    نام با یاهو<i class="icon icon-yahoo-big-logo"></i></button>
                                            </div>
                                            <div class="circle-sign"></div>
                                            <div class="e"></div>
                                        </div>
                                        <div class="nb-signinup-wrapper nb-verify-mobile tab-pane personal-tab fade">

                                            <p class="rb-header">تایید کد</p>
                                            <p class="text-body">برای تایید حساب کاربری کد ۴ رقمی ارسال شده از طریق
                                                پیامک را وارد نمایید</p>
                                            <form method="post" accept-charset="utf-8" class="personal-pro ajaxform"
                                                  id="otp-form" mj-target="/otp/otp-verify/verify" mj-type="form"
                                                  mj-success="otpVerifySuccessCallback" mj-method="post"
                                                  action="/tehran/baskets/">
                                                <div style="display:none;"><input type="hidden" name="_method"
                                                                                  value="POST"></div>
                                                <div class="nameandfname">
                                                    <div class="row input-verify-mobile multi-part-input-auto-next">
                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group req input-label-animate pull-left">
                                                            <div class="text input">
                                                                <input maxlength="1" value="" name="code[0]"
                                                                       class="single-input required-input justnumber"
                                                                       dir="ltr" autocomplete="off" type="text">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group req input-label-animate pull-left">
                                                            <div class="text input">
                                                                <input maxlength="1" value="" name="code[1]"
                                                                       class="single-input required-input justnumber"
                                                                       dir="ltr" autocomplete="off" type="text">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group req input-label-animate pull-left">
                                                            <div class="text input">
                                                                <input maxlength="1" value="" name="code[2]"
                                                                       class="single-input required-input justnumber"
                                                                       dir="ltr" autocomplete="off" type="text">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group req input-label-animate pull-left">
                                                            <div class="text input">
                                                                <input maxlength="1" value="" name="code[3]"
                                                                       class="single-input required-input justnumber"
                                                                       dir="ltr" autocomplete="off" type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-24 mobile-number-verify">
                                                            <p class="text-center ltr" data-bind="phone-number">-</p>
                                                            <p class="text-center"><a data-toggle="tab"
                                                                                      href=".nb-edit-mobile">ویرایش
                                                                    شماره موبایل</a></p>
                                                            <div class="text-center countdown-timer">
                                                                <p>مدت زمان باقی مانده برای ارسال مجدد کد</p><span
                                                                    class="countdown"></span>
                                                                <span class="resend">
                        <a mj-type="single" mj-method="post" mj-target="/otp/otp-send/resend-code"
                           mj-success="otpResendSuccessCallback" href="#">ارسال مجدد کد</a>
                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="m-b re-captcha text-center">
                                                        <div class="control-input captcha-net"
                                                             style="display: inline-block;margin: 0 auto;">
                                                            <div class="captcha-block" align="right">
                                                                <div class="g-recaptcha hidden" id="recaptcha-enter-otp"
                                                                     data-sitekey="6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc"
                                                                     style="" data-recaptcha-id="1">
                                                                    <div style="width: 304px; height: 78px;">
                                                                        <div>
                                                                            <iframe
                                                                                src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc&amp;co=aHR0cHM6Ly9uZXRiYXJnLmNvbTo0NDM.&amp;hl=fa&amp;v=mhgGrlTs_PbFQOW4ejlxlxZn&amp;size=normal&amp;cb=tc9gtv2gt40l"
                                                                                role="presentation"
                                                                                name="a-lfl8xessq5k3" scrolling="no"
                                                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                                                width="304" height="78"
                                                                                frameborder="0"></iframe>
                                                                        </div>
                                                                        <textarea id="g-recaptcha-response-1"
                                                                                  name="g-recaptcha-response"
                                                                                  class="g-recaptcha-response"
                                                                                  style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit"
                                                                class="otp-code-verify-button nb-btn nb-btn-disabled"
                                                                disabled="disabled">تایید
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="circle-sign"></div>
                                            <div class="e"></div>
                                        </div>
                                        <div class="nb-signinup-wrapper nb-edit-mobile tab-pane personal-tab fade">

                                            <p class="rb-header">ویرایش شماره موبایل</p>
                                            <p class="text-body">لطفا شماره تلفن همراه جدید خود را وارد کنید</p>
                                            <form method="post" accept-charset="utf-8" class="personal-pro ajaxform"
                                                  mj-target="/otp/otp-verify/edit-number" mj-type="form"
                                                  mj-success="otpEditNumberSuccessCallback" mj-method="post"
                                                  action="/tehran/baskets/">
                                                <div style="display:none;"><input type="hidden" name="_method"
                                                                                  value="POST"></div>
                                                <div class="nameandfname">
                                                    <div class="form-group req input-label-animate">
                                                        <div class="input text">
                                                            <label for="pe3">موبایل</label>
                                                            <input id="pe3" maxlength="11" type="text"
                                                                   name="new_phone_number" dir="ltr"
                                                                   class="single-input required-input phonenumbervalid">
                                                        </div>
                                                        <span class="hint danger"></span>
                                                    </div>
                                                    <div class="m-b re-captcha text-center">
                                                        <div class="control-input captcha-net"
                                                             style="display: inline-block;margin: 0 auto;">
                                                            <div class="captcha-block" align="right">
                                                                <div class="g-recaptcha"
                                                                     id="g-recaptcha-edit-mobile-number"
                                                                     data-sitekey="6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc"
                                                                     data-recaptcha-id="2">
                                                                    <div style="width: 304px; height: 78px;">
                                                                        <div>
                                                                            <iframe
                                                                                src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc&amp;co=aHR0cHM6Ly9uZXRiYXJnLmNvbTo0NDM.&amp;hl=fa&amp;v=mhgGrlTs_PbFQOW4ejlxlxZn&amp;size=normal&amp;cb=warv2rlmyxi7"
                                                                                role="presentation"
                                                                                name="a-d4buw489nqxt" scrolling="no"
                                                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"
                                                                                width="304" height="78"
                                                                                frameborder="0"></iframe>
                                                                        </div>
                                                                        <textarea id="g-recaptcha-response-2"
                                                                                  name="g-recaptcha-response"
                                                                                  class="g-recaptcha-response"
                                                                                  style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="nb-btn nb-btn-success">تایید شماره
                                                            موبایل
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="circle-sign"></div>
                                            <div class="e"></div>
                                        </div>
                                        <div class="nb-signinup-wrapper nb-signinotp tab-pane personal-tab fade">
                                            <h4 class="rb-header">برای ادامه خرید وارد حساب کاربری خود شوید</h4>
                                            <form method="post" accept-charset="utf-8" class="personal-pro ajaxform"
                                                  id="otplogin-form" mj-target="/tehran/users/loginByMobile?page=basket"
                                                  mj-type="form" mj-method="post" mj-success="otpLoginSuccessCallback"
                                                  action="/tehran/users/loginByMobile?page=basket">
                                                <div style="display:none;"><input type="hidden" name="_method"
                                                                                  value="POST"></div>
                                                <div class="nameandfname">
                                                    <div class="form-group req input-label-animate">
                                                        <div class="input text"><label for="phone">موبایل</label><input
                                                                type="text" name="phone" maxlength="11"
                                                                class="single-input required-input phonenumbervalid"
                                                                id="phone"></div>
                                                        <span class="hint danger"></span>
                                                    </div>


                                                    <div class="form-group">
                                                        <button type="submit" class="nb-btn nb-btn-success">ورود
                                                        </button>
                                                        <div class="link-signup clearfix">
                                                            <span>هنوز موبایل تان را تایید نکرده اید؟</span>
                                                            <a data-toggle="tab" href=".nb-signin"
                                                               class="not-register nb-btn nb-btn-sm nb-btn-border show-basket">ورود
                                                                با ایمیل</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="section-header">
                                                <span class="hx">یا</span>
                                            </div>
                                            <div class="social-pro"><span>ورود از طریق شبکه های اجتماعی</span></div>
                                            <div class="clearfix so-log">
                                                <button data-url="/tehran/users/social/Google?page=basket"
                                                        class="nb-btn nb-btn-icon nb-btn-warning google-bt social-btn">
                                                    ورود با گوگل<i class="icon icon-google"></i></button>
                                                <button data-url="/tehran/users/social/Yahoo?page=basket"
                                                        class="nb-btn nb-btn-icon nb-btn-warning yahoo-bt social-btn">
                                                    ورود با یاهو<i class="icon icon-yahoo-big-logo"></i></button>
                                            </div>
                                            <div class="circle-sign"></div>
                                            <div class="e"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs left-aside sticky-aside">
                        <div id="nava2" class="affix-top">
                            <div class="float-left-button">
                                <ul>
                                    <a href="javascript:void(0)">
                                        <li><i><i class="icon icon-support"></i></i><span>۰۲۱-۴۱۰۹۶۱۰۰ : پشتیبانی</span>
                                        </li>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <li><i><i class="icon icon-home-phone"></i></i><span>۰۲۱-۴۲۰۹۱۰۰۰ : شرکت</span>
                                        </li>
                                    </a>
                                    <a href="/page/buy-netbarg/">
                                        <li><i><i class="icon icon-lifebuoy"></i></i><span>راهنمای خرید نت برگ</span>
                                        </li>
                                    </a>
                                    <a href="javascript:void(0)" class="backtotop">
                                        <li><i><i class="icon icon-arrow-up"></i></i></li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
            <div class="fixed-fab smooth-scroll clearfix visible-sm visible-xs" style=""><span class="nb-btn pull-left">نهایی کردن خرید </span>
            </div>
        </div>
    </main>

@endsection
