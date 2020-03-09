@extends('layout.index')
@section('content')

    <main style="min-height: 680px;">
        <div class="container-fluid">
            <div class="row">
                <div class="nb-breadcrumb-spacer hidden-lg hidden-md hidden-sm"></div>
                <div class="nb-breadcrumb hidden-xs">
                    <div class="container-fluid limit">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-22">
                                <ul>
                                    <li><a href="https://netbarg.com/tehran/"><span>خانه</span></a></li>
                                    <li><a href="/tehran/baskets/"><span>سبد</span></a></li>
                                </ul>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mainModal" tabindex="-1" role="dialog" class="modal nb-modal nb-fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i
                                aria-hidden="true" class="icon icon-close"></i>
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
        <main class="basket-rendering" style="min-height: 680px;">
            <div class="page-basket basket-proccess">
                <div class="container-fluid">
                    <div class="row h-position">

                        @include('component.float_cat')

                        <div class="col-lg-22 col-md-22 col-sm-24 col-xs-24 clearfix">
                            <div class="row">
                                <div class="col-lg-24">
                                    <div class="basket-levels">
                                        <ul class="list-inline list-unstyled main-levels">
                                            <li nb-toggle="confirm-part" class="active-st"><a href="#">سبد
                                                    خرید</a><span>۱</span></li>
                                            <li nb-toggle="payment-part" class="active-st"><a href="#">عملیات پرداخت</a><span>۲</span>
                                            </li>
                                            <li class="active-st"><a href="#">دریافت نت برگ</a><span>۳</span></li>
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
                                <section class="related cat-deal-color main-cat around-me clearfix">

                                    <div class="main-cat-deal-thumbnail clearfix main-row">
                                        <div class="card text-center">
                                            <div class="card-header">
                                                <div class="alert alert-success" role="alert">
                                                    خرید موفق
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <div class="alert alert-success" role="alert">
                                                        کد پیگیری بانک:{{$order->F_PeygiriCode}}
                                                    </div>
                                                </h5>
                                                <p class="card-text">
                                                <div class="alert alert-dark" role="alert">
                                                    <table class="table table-hover table-dark">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">شماره سفارش</th>
                                                            <th scope="col">نام کاربری</th>
                                                            <th scope="col">نام تخفیف</th>
                                                            <th scope="col">تاریخ خرید</th>
                                                            <th scope="col">تعداد</th>
                                                            <th scope="col">کد تخفیف</th>
                                                            <th scope="col">تاریخ انقضا</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($order->OrderDetail as $dit)
                                                            <tr>
                                                                <th scope="col">{{$dit->F_OrderDetailID}}</th>
                                                                <th scope="col">{{\App\User::find($order->F_UserID)->F_Username}}</th>
                                                                <th scope="col">{{\App\Barg::find($dit->F_BargID)->F_Title}}</th>
                                                                <th scope="col">{{$order->F_Date}}</th>
                                                                <th scope="col">{{$dit->F_Count}}</th>
                                                                <th scope="col">{{$dit->F_QRCode}}</th>
                                                                <th scope="col">{{date('Y-m-d',\App\Barg::find($dit->F_BargID)->F_ExpireDate)}}</th>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </p>
                                                <a href="{{url('/users/userProfiles/tab1')}}" class="btn btn-primary">حساب
                                                    کاربری</a>
                                            </div>
                                            <div class="card-footer text-muted">

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        @include('component.support')

                    </div>
                </div>
                <div class="fixed-fab smooth-scroll clearfix visible-sm visible-xs" style="bottom: -82px;"><span
                        class="hidden-xs pay-conf-text">قابل پرداخت: </span><span class=""><i>1,786,106</i><span
                            class="pay-toman">(تومان)</span></span><span data-href="#pay-jump-pay"
                                                                         class="nb-btn pull-left">پرداخت</span></div>
            </div>
        </main>
        <div id="basket-guide" tabindex="-1" role="dialog" class="modal nb-modal nb-fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i
                                aria-hidden="true" class="icon icon-close"></i>
                        </button>
                        <div class="modal-title-wrapper">
                            <h4 class="modal-title ft-3">راهنمای پرداخت</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <h4 class="mb-header">پرداخت آنلاین</h4>
                        <p>شما می‌توانید با استفاده از تمامی کارت های بانکی عضو شبکه شتاب خرید خود را از طریق پرداخت
                            الکترونیک
                            انجام دهید.</p>
                        <h4 class="mb-header">افزایش موجودی حساب</h4>
                        <p>با افزایش موجودی حساب خود, شما می توانید به صورت بسیار سریع و بدون نیاز به مراجعه به درگاه
                            پرداخت
                            بانکی الکترونیک خرید خود را انجام دهید. برای استفاده از این سیستم شما می‌توانید از روش
                            پرداخت از
                            طریق کارت‌های بانکی به صورت آنلاین, واریز وجه به حساب جاری شرکت و یا انتقال وجه از طریق کارت
                            به
                            کارت، موجودی حساب خود را به هر میزان که مایل باشید افزایش دهید و سپس اقدام به خرید
                            نمایید.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="quickview-package" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             class="modal nb-modal fade">
            <div role="document" class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i
                                aria-hidden="true" class="icon icon-close"></i></button>
                    </div>
                    <div class="modal-body clearfix subdeal-description"></div>
                </div>
            </div>
        </div>
        <div id="complete-info" tabindex="-1" role="dialog" class="modal nb-modal nb-fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <i aria-hidden="true" class="icon icon-close"></i>
                        </button>
                        <div class="modal-title-wrapper">
                            <h4 class="modal-title ft-3">تکمیل اطلاعات حساب کاربری</h4>
                        </div>
                    </div>
                    <form method="post" accept-charset="utf-8" class="row" mj-type="form"
                          mj-target="/user/userProfiles/updateUserInfo.json" mj-method="post"
                          mj-success="updateUserInfo" mj-model="model1" action="/tehran/baskets/">
                        <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-24 form-group req input-label-animate position-rel">
                                    <label name="first-name">نام</label>
                                    <input type="text" name="first_name" class="single-input required-input"
                                           id="first-name"> <span class="hint danger"></span>
                                </div>
                                <div class="col-lg-24 form-group req input-label-animate position-rel">
                                    <label name="last-name">نام خانوادگی</label>
                                    <input type="text" name="last_name" class="single-input required-input"
                                           id="last-name"> <span class="hint danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="nb-btn nb-btn-success">ثبت</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection
