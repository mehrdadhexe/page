@extends('users.userProfiles')
@section('tab')
<div id="tab1" role="tabpanel" class="tab-pane active"><div class="personal-tab">
        <div class="section-header">
            <h1 class="hx">ویرایش پروفایل شخصی</h1>
        </div>
        <form enctype="multipart/form-data" method="post" accept-charset="utf-8" class="row personal-pro" id="profile-information-form" mj-type="form" mj-target="/user/userProfiles/edit.json" mj-method="post" mj-model="model1" mj-success="profileEditSuccess" action="/user/UserProfiles/edit"><div style="display:none;"><input type="hidden" name="_method" value="PUT"></div>    <div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 user-pro-pic">
                <div class="nb-thumbnail-circle">
                    <div class="pic_profile" style="background-image:url(/assets/site/img/user-pic.png)"></div>
                </div>
                <a href="javascript:void(0)" class="pro-img-edit">ویرایش</a>
                <input type="file" name="profile_image" class="profile-image" id="profile-image"><a codal-url="/user/userProfiles/delete.json" codal-ms="آیا از حذف این رکورد اطمینان دارید" codal-method="delete" codal-success="removeImg" data-toggle="modal" data-target="#remove-address" class="removeImgProfile a-disabled">حذف </a>    </div>
            <div class="col-lg-17 col-lg-offset-1 col-md-offset-1 col-md-18 col-sm-18 side-space-2">
                <div class="row nameandfname">
                    <div class="col-lg-23 side-space-2">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group req input-label-animate">
                                <div class="input text"><label for="first-name" class="hascontent">نام</label><input type="text" name="first_name" class="single-input required-input" maxlength="100" id="first-name" value="{{$user->name}}"></div>                        <span class="hint danger"></span>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group req input-label-animate">
                                <div class="input text"><label for="last-name" class="hascontent">نام خانوادگی</label><input type="text" name="last_name" class="single-input required-input" maxlength="100" id="last-name" value="{{$user->F_Family}}"></div>                        <span class="hint danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-23 form-group side-space-2 req input-label-animate">
                        <div class="input email"><label for="email" class="hascontent">ایمیل</label><input type="email" name="email" class="single-input required-input" readonly="readonly" id="email" value="{{$user->email}}"></div>                <!-- <label>ایمیل</label> -->
                    </div>

                    <div class="col-lg-23 form-group side-space-2 req input-label-animate phonenumber-verify">
                        <div class="input text">
                            <div class="input text"><label for="phone" class="hascontent">تلفن همراه</label><input type="text" name="phone" class="single-input required-input phonenumber-check verification-phone verify-notok" maxlength="11" minlength="11" disabled="disabled" id="phone" value="{{$user->F_Username}}"></div>
                            <span class="verifyok verifyok-btn" style="display: block;">
                        <i class="icon icon-checkmark"></i>
                    </span>

                            <span class="verifynotok verifynotok-btn" style="">
                        <i class="icon icon-close-circular-button-symbol"></i>
                    </span>
                        </div>
                        <p class="hint sucssed">
                            شماره موبایل تایید شده است
                        </p>
                    </div>
                    <div class="col-lg-23 form-group side-space-2 input-label-animate">
                        <div class="input text"><label for="national-code">کد ملی</label><input type="text" name="national_code" class="single-input idcode-check" maxlength="10" id="national-code"></div>            </div>
                    <div class="col-lg-23 form-group side-space-2 input-label-animate">
                        <div class="input text"><label for="sheba">شماره شبا</label><input type="text" name="sheba" class="single-input" maxlength="50" id="sheba"></div>                <!-- <label>شماره شبا (به غیر از بانک سامان)</label> -->
                    </div>
                    <div class="col-lg-23 form-group side-space-2">
                        <div class="row">
                            <div class="col-lg-14 col-md-14 col-xs-10 not-100">
                                <label class="checkbox-toggle">
                                    <input type="checkbox" name="gender_id" value="1">                            <i>مرد</i><span></span><i>زن</i>
                                </label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-xs-14 not-100 clearfix">
                                <button type="submit" class="nb-btn nb-btn-icon nb-btn-success pull-left profile" mj-for="model1" id="update-profile-information-button">ثبت تغییرات<i class="icon icon-reload-symbol"></i></button>                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>    <div class="section-header">
            <h1 class="hx">آدرس های من</h1>
        </div>
        <div class="row location-pro ajaxform">
            <div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 user-pro-pic"><img src="/assets/site/img/location.png" class="pic-location"></div>
            <div class="col-lg-17 col-lg-offset-1 col-md-offset-1 col-md-18 col-sm-18 address-pro form-fix-pro side-space-2">

                <div class="row">

                    <div class="col-lg-23 clearfix side-space-2">
                        <button type="button" data-url="/user/userAddresses/add" class="add-address nb-btn nb-btn-icon nb-btn-warning pull-left">افزودن آدرس<i class="icon icon-mathematical-addition-sign"></i></button>
                    </div>
                    <div class="col-lg-23 open-edit-address dis-no side-space-2">
                        <div class="row ajax-address">
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="section-header">
            <h1 class="hx">لینک شبکه های اجتماعی</h1>
        </div>
        <div class="row social-pro">
            <div class="col-lg-3 col-md-3 col-sm-3 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 user-pro-pic"><img src="/assets/site/img/gy.png" class="pic-location gy"></div>
            <div class="col-lg-17 col-lg-offset-1 col-md-offset-1 col-md-18 col-sm-18 side-space-2">
                <div class="row">
                    <div class="col-lg-23 side-space-2"><span>شما می توانید شبکه های اجتماعی خود را به حساب کاربریتان متصل کنید تا در آینده بتوانید به راحتی از طریق آنها به همین حساب کاربری وارد شوید</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-17 col-lg-offset-1 col-md-offset-1 col-md-18 col-sm-18 side-space-2 clearfix so-log">
                <div class="row">
                    <div class="col-lg-23 side-space-2 btn_profile1">
                        <div class="btn_box">
                            <button data-url="/user/users/social/Yahoo" class="nb-btn nb-btn-icon nb-btn-warning yahoo-bt pull-left social-btn">لینک با یاهو<i class="icon icon-yahoo-big-logo"></i>
                            </button>
                        </div>
                        <div class="btn_box">
                            <button data-url="/user/users/social/Google" class="nb-btn nb-btn-icon nb-btn-warning google-bt pull-left social-btn">لینک با گوگل<i class="icon icon-google"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
