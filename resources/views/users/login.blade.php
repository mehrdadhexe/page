@extends('layout.index')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="nb-breadcrumb-spacer hidden-lg hidden-md hidden-sm"></div>
            <div class="nb-breadcrumb hidden-xs">
                <div class="container-fluid limit">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-22">
                            <ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="http://schema.org/ListItem"><a href="http://takhfifbnd.ir/yazd/"
                                                                             itemprop="item" itemscope="itemscope"
                                                                             itemtype="http://schema.org/Thing"><span
                                                itemprop="name">خانه</span></a></li>
                                <li itemprop="itemListElement" itemscope="itemscope"
                                    itemtype="http://schema.org/ListItem"><a href="/users/login" itemprop="item"
                                                                             itemscope="itemscope"
                                                                             itemtype="http://schema.org/Thing"><span
                                                itemprop="name">ورود</span></a></li>
                            </ul>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main>
        <div class="page-signinup">
            <div class="wrapper-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
                        <div class="col-lg-10 col-md-10">
                            <div class="panel panel-default">
                                <div class="panel-body tab-content">
                                    <div class="nb-signinup-wrapper nb-signin tab-pane personal-tab fade">
                                        <p class="rb-header">ورود به حساب کاربری</p>
                                        <form method="post" accept-charset="utf-8" class="personal-pro ajaxform"
                                              action="/yazd/users/login/">
                                            <div style="display:none;"><input type="hidden" name="_method" value="POST">
                                            </div>
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
                                                    <div class="forget-pass"><a href="/users/forgotPassword">رمز عبور
                                                            خود را فراموش کرده اید؟</a></div>
                                                </div>


                                                <div class="form-group">
                                                    <button type="submit" class="nb-btn nb-btn-success">ورود</button>
                                                    <div class="link-signup clearfix"><span>در نت برگ عضو نیستید؟</span><a
                                                                data-toggle="tab" href=".nb-signup"
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
                                            <button data-url="/yazd/users/social/Google"
                                                    class="nb-btn nb-btn-icon nb-btn-warning google-bt social-btn">ورود
                                                با گوگل<i class="icon icon-google"></i></button>
                                            <button data-url="/yazd/users/social/Yahoo"
                                                    class="nb-btn nb-btn-icon nb-btn-warning yahoo-bt social-btn">ورود
                                                با یاهو<i class="icon icon-yahoo-big-logo"></i></button>
                                        </div>
                                        <div class="circle-sign"></div>
                                        <div class="e"></div>
                                    </div>
                                    <div class="nb-signinup-wrapper nb-signinotp tab-pane personal-tab fade in active">
                                        <p class="rb-header">ورود به حساب کاربری</p>
                                        <form method="post" accept-charset="utf-8" class="personal-pro ajaxform"
                                              id="otplogin-form" mj-target="/users/send_code" mj-type="form"
                                              mj-method="post" mj-success="otpLoginSuccessCallback"
                                              action="/users/send_code">
                                            @csrf
                                            <div style="display:none;"><input type="hidden" name="_method" value="POST">
                                            </div>
                                            <div class="nameandfname">
                                                <div class="form-group req input-label-animate">
                                                    <div class="input text"><label for="phone">موبایل</label><input
                                                                type="text" name="phone" maxlength="11"
                                                                class="single-input required-input phonenumbervalid"
                                                                id="phone"></div>
                                                    <span class="hint danger"></span>
                                                </div>


                                                <div class="form-group">
                                                    <button type="submit" class="nb-btn nb-btn-success">ورود</button>
                                                    <div class="link-signup clearfix">
{{--                                                        <span>هنوز موبایل تان را تایید نکرده اید؟</span>--}}
{{--                                                        <a data-toggle="tab" href=".nb-signin"--}}
{{--                                                           class="not-register nb-btn nb-btn-sm nb-btn-border show-basket">ورود--}}
{{--                                                            با ایمیل</a>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="section-header">
{{--                                            <span class="hx">یا</span>--}}
                                        </div>
                                        <div class="social-pro"><span>
                                                شماره همراه خود را وارد کنید




                                            </span></div>
                                        <div class="clearfix so-log">
{{--                                            <button data-url="/yazd/users/social/Google"--}}
{{--                                                    class="nb-btn nb-btn-icon nb-btn-warning google-bt social-btn">ورود--}}
{{--                                                با گوگل<i class="icon icon-google"></i></button>--}}
{{--                                            <button data-url="/yazd/users/social/Yahoo"--}}
{{--                                                    class="nb-btn nb-btn-icon nb-btn-warning yahoo-bt social-btn">ورود--}}
{{--                                                با یاهو<i class="icon icon-yahoo-big-logo"></i></button>--}}
                                        </div>
                                        <div class="circle-sign"></div>
                                        <div class="e"></div>
                                    </div>
                                    <div class="nb-signinup-wrapper nb-signup personal-tab tab-pane fade basket-register-tab">
                                        <p class="rb-header">ثبت نام در نت برگ</p>

                                        <form method="post" accept-charset="utf-8" class="personal-pro ajaxform"
                                              id="registration-form"
                                              mj-target="/user/users/verify-register-data?page=register" mj-type="form"
                                              mj-method="post" mj-success="registerSuccessCallback"
                                              action="/yazd/users/login/">
                                            <div style="display:none;"><input type="hidden" name="_method" value="POST">
                                            </div>
                                            <div class="nameandfname">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group req input-label-animate">
                                                        <div class="input text"><label
                                                                    for="user-profile-first-name">نام</label><input
                                                                    type="text" name="user_profile[first_name]"
                                                                    class="single-input required-input"
                                                                    id="user-profile-first-name"></div>
                                                        <span class="hint danger"></span>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group req input-label-animate">
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
                                                        <label for="subscription">مایل به اطلاع از تخفیف های شهر خود به
                                                            صورت روزانه می باشم</label>
                                                    </div>
                                                    <div class="accept-law clearfix">
                                                        <div class="checkbox checkbox-success checkbox-toggle required-chechbox checked">
                                                            <input type="checkbox" name="rules" value="1" class="styled"
                                                                   checked="checked" id="rules"> <label for="checkbox2"
                                                                                                        sync-bybutton="btn1"></label>
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
                                                            <div class="g-recaptcha" id="g-recaptcha-register-verify"
                                                                 data-sitekey="6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc"
                                                                 data-recaptcha-id="0">
                                                                <div style="width: 304px; height: 78px;">
                                                                    <div>
                                                                        <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc&amp;co=aHR0cDovL25ldGJhcmcuY29tOjgw&amp;hl=fa&amp;v=v1560753160450&amp;size=normal&amp;cb=dkm6jfk0ri64"
                                                                                role="presentation"
                                                                                name="a-u4vb63m4eqvh" scrolling="no"
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
                                            <button data-url="/user/users/social/Google?type=register"
                                                    class="nb-btn nb-btn-icon nb-btn-warning google-bt social-btn">ثبت
                                                نام با گوگل<i class="icon icon-google"></i></button>
                                            <button data-url="/user/users/social/Yahoo?type=register"
                                                    class="nb-btn nb-btn-icon nb-btn-warning yahoo-bt social-btn">ثبت
                                                نام با یاهو<i class="icon icon-yahoo-big-logo"></i></button>
                                        </div>
                                        <div class="circle-sign"></div>
                                        <div class="e"></div>
                                    </div>
                                    <div class="nb-signinup-wrapper nb-verify-mobile tab-pane personal-tab fade">

                                        <p class="rb-header">تایید کد</p>
                                        <p class="text-body">برای تایید حساب کاربری کد ۴ رقمی ارسال شده از طریق پیامک را
                                            وارد نمایید</p>
                                        <form method="get" accept-charset="utf-8" class="personal-pro ajaxform"
                                              id="otp-form" mj-target="/users/verify_code/" mj-type="form"
                                              mj-success="otpVerifySuccessCallback" mj-method="get"
                                              action="/users/verify_code/">
                                            <div style="display:none;"><input type="hidden" name="_method" value="GET">
                                            </div>
                                            @csrf
                                            <div class="nameandfname">
                                                <div class="row input-verify-mobile multi-part-input-auto-next">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group req input-label-animate pull-left">
                                                        <div class="text input">
                                                            <input maxlength="1" value="" name="code[0]"
                                                                   class="single-input required-input justnumber"
                                                                   dir="ltr" autocomplete="off" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group req input-label-animate pull-left">
                                                        <div class="text input">
                                                            <input maxlength="1" value="" name="code[1]"
                                                                   class="single-input required-input justnumber"
                                                                   dir="ltr" autocomplete="off" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group req input-label-animate pull-left">
                                                        <div class="text input">
                                                            <input maxlength="1" value="" name="code[2]"
                                                                   class="single-input required-input justnumber"
                                                                   dir="ltr" autocomplete="off" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group req input-label-animate pull-left">
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
{{--                                                        <p class="text-center"><a data-toggle="tab"--}}
{{--                                                                                  href=".nb-edit-mobile">ویرایش شماره--}}
{{--                                                                موبایل</a></p>--}}
                                                        <input type="hidden" data-bind="phone-number-mobile" name="number">
                                                        <div class="text-center countdown-timer">
                                                            <p>مدت زمان باقی مانده برای ارسال مجدد کد</p><span
                                                                    class="countdown"></span>
                                                            <span class="resend">
                        <a mj-type="single" mj-method="post" mj-target="http://takhfifbnd.ir/otp/otp-send/resend-code"
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
                                                                        <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc&amp;co=aHR0cDovL25ldGJhcmcuY29tOjgw&amp;hl=fa&amp;v=v1560753160450&amp;size=normal&amp;cb=nnredhokbgo"
                                                                                role="presentation"
                                                                                name="a-5rt0szgs6cj7" scrolling="no"
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
                                    <div class="nb-signinup-wrapper nb-edit-mobile tab-pane personal-tab fade ">

                                        <p class="rb-header">ویرایش شماره موبایل</p>
                                        <p class="text-body">لطفا شماره تلفن همراه جدید خود را وارد کنید</p>
                                        <form method="post" accept-charset="utf-8" class="personal-pro ajaxform"
                                              mj-target="http://takhfifbnd.ir/otp/otp-verify/edit-number" mj-type="form"
                                              mj-success="otpEditNumberSuccessCallback" mj-method="post"
                                              action="/yazd/users/login/">
                                            <div style="display:none;"><input type="hidden" name="_method" value="POST">
                                            </div>
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
{{--                                                <div class="m-b re-captcha text-center">--}}
{{--                                                    <div class="control-input captcha-net"--}}
{{--                                                         style="display: inline-block;margin: 0 auto;">--}}
{{--                                                        <div class="captcha-block" align="right">--}}
{{--                                                            <div class="g-recaptcha" id="g-recaptcha-edit-mobile-number"--}}
{{--                                                                 data-sitekey="6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc"--}}
{{--                                                                 data-recaptcha-id="2">--}}
{{--                                                                <div style="width: 304px; height: 78px;">--}}
{{--                                                                    <div>--}}
{{--                                                                        <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfyZz0UAAAAAABOhV3qPjoUSA6U-lg1I76PjhKc&amp;co=aHR0cDovL25ldGJhcmcuY29tOjgw&amp;hl=fa&amp;v=v1560753160450&amp;size=normal&amp;cb=qki8jfsr3sdt"--}}
{{--                                                                                role="presentation"--}}
{{--                                                                                name="a-x6avnzmdn2lx" scrolling="no"--}}
{{--                                                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"--}}
{{--                                                                                width="304" height="78"--}}
{{--                                                                                frameborder="0"></iframe>--}}
{{--                                                                    </div>--}}
{{--                                                                    <textarea id="g-recaptcha-response-2"--}}
{{--                                                                              name="g-recaptcha-response"--}}
{{--                                                                              class="g-recaptcha-response"--}}
{{--                                                                              style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
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
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs"><img src="/assets/site/img/signin.jpg"
                                                                                  alt="netbarg-signin"
                                                                                  class="img-responsive nb-center">
                        </div>
                        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</main>
@endsection

