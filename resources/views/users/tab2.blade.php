@extends('users.userProfiles')
@section('tab')

<div id="tab2" role="tabpanel" class="tab-pane bag active">
    <div class="section-header">
        <h1 class="hx">افزایش موجودی حساب از طریق پرداخت آنلاین</h1>
    </div>
    <div class="row">
        <div class="col-lg-18 col-lg-offset-3 position-size side-space-2">
            <div class="row">
                <div class="col-lg-24 collapse-group bc-margin bt-margin">
                    <div class="form-group my-ca">
                        <span>موجودی حساب شما: </span><span>۰</span><span> تومان</span>
                    </div>
                    <div class="input-outer-btn form-group input-label-animate pay-key req">
                        <label for="cAmount" class="">مبلغ بالای 1000 (تومان)</label>
                        <input type="text" name="cAmount" id="cAmount" class="wal-ch required-input">                    <input type="hidden" name="Charge Amount" id="chargeAmount">                    <button type="button" class="btn nb-btn-success btn-type-1 chargeWallet">افزایش موجودی حساب</button>

                    </div>
                    <div class="bank-checker collapse dis-no">
                        <div class="row banks-row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-24">
                                <label class="radio-wrapper">
                                    <div class="label-parent">
                                        <input type="radio" class="radio-input" name="gateway" value="ayandehParsian" id="gateway-ayandehparsian">
                                        <div class="radio-face"></div><i></i></div>
                                    <span class="clearfix">
						        	<img style="width:28px;" src="https://payment.iiventures.com/public/img/gateways/ayandehParsian.png" class="pull-left">آینده</span></label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-24">
                                <label class="radio-wrapper">
                                    <div class="label-parent">
                                        <input type="radio" class="radio-input" name="gateway" value="newRefah" id="gateway-newrefah">
                                        <div class="radio-face"></div><i></i></div>
                                    <span class="clearfix">
						        	<img style="width:28px;" src="https://payment.iiventures.com/public/img/gateways/newRefah.png" class="pull-left">رفاه</span></label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-24">
                                <label class="radio-wrapper">
                                    <div class="label-parent">
                                        <input type="radio" class="radio-input" name="gateway" value="newParsian" id="gateway-newparsian">
                                        <div class="radio-face"></div><i></i></div>
                                    <span class="clearfix">
						        	<img style="width:28px;" src="https://payment.iiventures.com/public/img/gateways/newParsian.png" class="pull-left">پارسیان</span></label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-24">
                                <label class="radio-wrapper">
                                    <div class="label-parent">
                                        <input type="radio" class="radio-input" name="gateway" value="jibit" id="gateway-jibit">
                                        <div class="radio-face"></div><i></i></div>
                                    <span class="clearfix">
						        	<img style="width:28px;" src="https://payment.iiventures.com/public/img/gateways/jibit.png" class="pull-left">جیبیت</span></label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-24">
                                <label class="radio-wrapper">
                                    <div class="label-parent checked">
                                        <input type="radio" class="radio-input" name="gateway" value="samanWithDiscount" id="gateway-samanwithdiscount" checked="checked">
                                        <div class="radio-face"></div><i></i></div>
                                    <span class="clearfix">
						        	<img style="width:28px;" src="https://payment.iiventures.com/public/img/gateways/samanWithDiscount.png" class="pull-left">سامان</span></label>
                            </div></div>                    <div class="row">
                            <div class="col-lg-24">
                                <label class="chek-bank"><span>درگاههای فوق پذیرنده همه کارتهای عضو شتاب می باشند</span></label>
                            </div>
                            <div class="col-lg-24">
                                <div class="accept-law clearfix">
                                    <div class="pull-left nopadding-x">
                                        <div class="input-outer-btn">
                                            <button id="pay" class="btn nb-btn-success btn-type-1" type="submit">پرداخت</button>                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="result"></div><script src="/assets/site/js/Payments/chargeWallet.js"></script><div class="section-header"><h1 class="hx">افزایش موجودی حساب با استفاده از کد افزایش موجودی</h1></div>
    <div class="row">
        <div class="col-lg-18 col-lg-offset-3 side-space-2">
            <div class="input-outer-btn form-group input-label-animate req bt-margin">
                <form method="post" accept-charset="utf-8" mj-type="form" mj-target="/campaign/campaigns/couponCode.json" mj-method="post" mj-model="model1" mj-success="setUserBalance" action="/users/wallet"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>        <label for="couponCode" class="">کد افزایش موجودی خود را وارد کنید</label>
                    <input type="text" name="coupon_code" id="couponCode" class="required-input">        <button class="btn nb-btn-success btn-type-1 purple-1 chargeWalletCode" type="submit">تایید کد افزایش موجودی</button>
                </form></div>
        </div>
    </div></div>
@endsection
