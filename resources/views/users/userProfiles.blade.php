@extends('layout.app')
@section('header')
    @include('layout.header')
@endsection
@section('content')
    <main style="min-height: 756px;">
        <div class="container-fluid">
            <div class="row">
                <div class="nb-breadcrumb-spacer hidden-lg hidden-md hidden-sm"></div>
                <div class="nb-breadcrumb hidden-xs">
                    <div class="container-fluid limit">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-22">
                                <ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                    <li><a href="http://netbarg.com/yazd/"><span itemprop="name">خانه</span></a></li>
                                    <li><a href="/user/user-profiles"><span itemprop="name">پروفایل</span></a></li>
                                </ul>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="changepass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="modal nb-modal nb-fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content pass-re-conf">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i aria-hidden="true"
                                                                                                       class="icon icon-close"></i>
                        </button>
                        <div class="modal-title-wrapper">

                            <button mj-type="single" mj-target="{{url("/test")}}" mj-method="post" mj-success="likeActivity" mj-value="8642">
                                CLICK TO LIKE
                            </button>
                            <h4 class="modal-title ft-3">تغییر رمز عبور</h4>
                        </div>
                    </div>
                    <form method="post" accept-charset="utf-8" class="personal-pro" mj-type="form"
                          mj-target="/user/users/changePassword.json" mj-method="post" mj-model="model1"
                          action="/user/userProfiles/index">
                        <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                        <div class="modal-body">

                            <div class="">
                                <div class="form-group req input-label-animate position-rel">
                                    <label for="password_validation">رمز عبور جدید</label>
                                    <input type="password" name="new_password"
                                           class="single-input required-input password_validation password-check2"
                                           id="password_validation">
                                    <!-- <span class="hint2 danger" style="display:none">لطفا از حروف یا اعداد استفاده کنید تعداد کاراکتر ها 6 تا 12</span> -->
                                    <span class="hint danger" style="display:none"></span>

                                </div>

                                <div class="form-group req input-label-animate position-rel">
                                    <label for="password_confirm">تکرار عبور جدید</label>
                                    <input type="password" name="retry_new_password"
                                           class="single-input required-input password_confirm" id="password_confirm"> <span
                                        class="hint danger"></span>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="nb-btn nb-btn-success">تغییر رمز عبور</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="changegroup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="modal nb-modal nb-fade"
             style="display: none;">
            <div role="document" class="modal-dialog">
                <div class="modal-content cop-form">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i aria-hidden="true"
                                                                                                       class="icon icon-close"></i>
                        </button>
                        <div class="modal-title-wrapper">
                            <h4 class="modal-title ft-3">تغییر گروه سازمانی</h4>
                        </div>
                    </div>
                    <form method="post" accept-charset="utf-8" class="personal-pro" mj-type="form"
                          mj-target="/campaign/campaigns/changeCorporationGroup.json" mj-method="post"
                          mj-success="setUserBalance" mj-model="model1" action="/user/userProfiles/index">
                        <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                        <div class="modal-body">
                            <div class="form-group req input-label-animate position-rel">
                                <label for="coupon_code" class="hascontent">کد عضویت گروه جدید</label>
                                <input type="text" name="coupon_code" class="single-input required-input" id="coupon_code">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="nb-btn nb-btn-success" mj-valid="true">تغییر گروه سازمانی</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="mainModal" tabindex="-1" role="dialog" class="modal nb-modal nb-fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i aria-hidden="true"
                                                                                                       class="icon icon-close"></i>
                        </button>
                        <div class="modal-title-wrapper">
                            <h4 class="modal-title ft-3"></h4>
                        </div>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="body-profile-color">
                <div class="row h-position">
                    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs right-aside sticky-aside">
                        <div id="nava" class="affix-top" style="">
                            <div class="float-cat">
                                <ul>
                                    <a href="/yazd/c:todaydeals/" class="float-cat-todaydeal">
                                        <li>
                                            <i><i class="icon icon-logo_e"></i></i><span>نت‌برگ‌های امروز</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:all/" class="float-cat-all.">
                                        <li>
                                            <i><i class="icon icon-menu"></i></i>
                                            <span>همه پیشنهادها</span>
                                        </li>
                                    </a>

                                    <a href="/yazd/c:restaurant/" class="float-cat-restaurant">
                                        <li>
                                            <i>
                                                <i class="icon icon-burger"></i>
                                            </i>
                                            <span>رستوران و فست فود</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:entertainment/" class="float-cat-entertainment">
                                        <li>
                                            <i>
                                                <i class="icon icon-basketball"></i>
                                            </i>
                                            <span>تفریحی و ورزشی</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:health/" class="float-cat-health">
                                        <li>
                                            <i>
                                                <i class="icon icon-car-first-aid-kit"></i>
                                            </i>
                                            <span>پزشکی و سلامت</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:art/" class="float-cat-art">
                                        <li>
                                            <i>
                                                <i class="icon icon-Theater"></i>
                                            </i>
                                            <span>هنر و تئاتر</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:education/" class="float-cat-education">
                                        <li>
                                            <i>
                                                <i class="icon icon-earth-globe"></i>
                                            </i>
                                            <span>آموزشی</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:beauty/" class="float-cat-beauty">
                                        <li>
                                            <i>
                                                <i class="icon icon-lipstick-with-cover"></i>
                                            </i>
                                            <span>زیبایی و آرایشی</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:product/" class="float-cat-product">
                                        <li>
                                            <i>
                                                <i class="icon icon-shopping-bag-1"></i>
                                            </i>
                                            <span>کالا</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:giftcode/" class="float-cat-giftcode">
                                        <li>
                                            <i>
                                                <i class="icon icon-couponcodes"></i>
                                            </i>
                                            <span>کد تخفیف</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:vip/" class="float-cat-vip">
                                        <li>
                                            <i>
                                                <i class="icon icon-vip"></i>
                                            </i>
                                            <span>پیشنهادات لوکس</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:services/" class="float-cat-services">
                                        <li>
                                            <i>
                                                <i class="icon icon-cleaning"></i>
                                            </i>
                                            <span>خدمات</span>
                                        </li>
                                    </a>
                                    <a href="/yazd/c:last/" class="float-cat-last">
                                        <li class="sc">
                                            <i>
                                                <i class="icon icon-timer"></i>
                                            </i>
                                            <span>لحظه آخری</span>
                                        </li>
                                    </a> <a href="/yazd/c:favorite/" class="float-cat-favorite">
                                        <li>
                                            <i><i class="icon icon-favorite"></i></i><span>علاقه مندی</span>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-22 padd-0-xs clearfix">
                        <div class="profile-page">
                            <div class="tab-wrapper">
                                <div class="tab-header clearfix">
                                    @Auth

                                        <p class="ft-3 name">{{\Illuminate\Support\Facades\Auth::user()->name}} </p>
                                    @endAuth
                                    <span class="user-menu-link clearfix">
                                <a href="/yazd/users/logout" class="link">
                                    <i class="icon icon-logout" style="font-size:2rem;"></i>خروج
                                </a>
                                <a type="button" data-toggle="modal" data-target="#changegroup" class="link">
                                    <i class="icon icon-organization"></i>تغییر گروه سازمانی
                                </a>
                                <a type="button" data-toggle="modal" data-target="#changepass" class="link">
                                    <i class="icon icon-padlock"></i>تغییر رمز عبور
                                </a>
                            </span>
                                </div>
                                <ul role="tablist" class="nav nav-tabs nav-justified">
                                    <li role="presentation" class=""><a href="{{url('users/userProfiles/tab1')}}" aria-controls=""
                                                                        role="tab" data-toggle="tabajax"
                                                                        data-target="#tab1"><i
                                                class="icon icon-user-avatar"></i><span class="hidden-xs hidden-sm">ویرایش پروفایل شخصی</span></a>
                                    </li>
                                    <li role="presentation" class=""><a href="{{url('users/userProfiles/tab2')}}" aria-controls=""
                                                                        role="tab" data-toggle="tabajax"
                                                                        data-target="#tab2"><i
                                                class="icon icon-wallet"></i><span
                                                class="hidden-xs hidden-sm">کیف پول</span></a></li>
                                    <li role="presentation" class=""><a href="{{url('users/userProfiles/tab3')}}" aria-controls="" role="tab"
                                                                        data-toggle="tabajax" data-target="#tab3"><i
                                                class="icon icon-logo_e"></i><span class="hidden-xs hidden-sm">نت‌برگ‌های من</span></a>
                                    </li>
                                    <li role="presentation" class=""><a href="{{url('users/userProfiles/tab4')}}" aria-controls=""
                                                                        role="tab" data-toggle="tabajax"
                                                                        data-target="#tab4"><i
                                                class="icon icon-transaction"></i><span class="hidden-xs hidden-sm">تراکنش ها</span></a>
                                    </li>
                                    <li role="presentation" class=""><a href="{{url('users/userProfiles/tab5')}}" aria-controls="" role="tab"
                                                                        data-toggle="tabajax" data-target="#tab5"><i
                                                class="icon icon-Comment"></i><span
                                                class="hidden-xs hidden-sm">نظرات من</span></a></li>
                                    <li role="presentation" class=""><a href="{{url('users/userProfiles/tab6')}}" aria-controls=""
                                                                        role="tab" data-toggle="tabajax"
                                                                        data-target="#tab6"><i
                                                class="icon icon-favorite"></i><span class="hidden-xs hidden-sm">علاقه مندی ها</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content clearfix">
                                    @yield('tab')

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs left-aside sticky-aside">
                        <div id="nava2" class="affix-top" style="">
                            <div class="float-left-button">
                                <ul>
                                    <a href="javascript:void(0)">
                                        <li><i><i class="icon icon-support"></i></i><span>۰۲۱-۴۱۰۹۶۱۰۰ : پشتیبانی</span>
                                        </li>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <li><i><i class="icon icon-home-phone"></i></i><span>۰۲۱-۴۲۰۹۱۰۰۰ : شرکت</span></li>
                                    </a>
                                    <a href="/page/buy-netbarg/">
                                        <li><i><i class="icon icon-lifebuoy"></i></i><span>راهنمای خرید نت برگ</span></li>
                                    </a>
                                    <a href="javascript:void(0)" class="backtotop">
                                        <li><i><i class="icon icon-arrow-up"></i></i></li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('footer')
    @include('layout.footer')
@endsection
