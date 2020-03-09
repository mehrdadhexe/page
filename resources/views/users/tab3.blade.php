@extends('users.userProfiles')
@section('tab')
<div id="tab3" role="tabpanel" class="tab-pane active"><div class="top-table dis-none-767">
        <div class="row">
            <div class="col-lg-12 col-md-14 col-xs-14 col-xs-offset-10 col-md-offset-10 col-lg-offset-12">
                <form class="row">
                    <div class="sort-label col-xs-12">مرتب سازی بر اساس :</div>
                    <div class="col-xs-12">
                        <select name="filter" class="single-select" mj-type="select" mj-target="/dealUsers/index" mj-method="post" mj-success="dealUserFilltering"><option value="all" selected="selected">تمامی</option><option value="available">موجود</option><option value="used">استفاده شده</option><option value="open">در انتظار خریداران بیشتر</option><option value="expired">تاریخ اعتبار به پایان رسیده</option><option value="refund">باز پرداخت شده</option></select>                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="table-responsive clearfix dis-none-991">
        <table class="table table-striped table-bordered table-1 mynet-table">
            <thead>
            <tr>
                <th>نت برگ</th>
                <th>تاریخ خرید</th>
                <th>تعداد</th>
                <th>وضعیت</th>
                <th>مبلغ پرداختی (تومان)</th>
                <th>کـد عمـومـــی | کد اختصاصی</th>
                <th>مشاهده</th>
                <th>یادداشت</th>
                <th>امتیاز و نظر</th>
                <th>جزییات</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <div class="empty-content">
        <div class="row">
            <div class="col-lg-24 col-md-24 col-xs-24">
                <div class="text1">موردی برای نمایش یافت نشد</div>
            </div>
        </div>
    </div>
    <!-- paginator  -->

    <script>
        $('.pagination li.active a').removeAttr('href');
    </script>
    <!-- model boxes  -->
    <!-- modal note   -->
    <div tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="my-note modal nb-modal fade">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <form method="post" accept-charset="utf-8" class="" mj-type="form" mj-model="model1" mj-method="post" action="/dealUsers/index"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>            <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i aria-hidden="true" class="icon icon-close"></i>
                        </button>
                        <div class="modal-title-wrapper">
                            <h4 class="modal-title ft-3">یادداشت من</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>یادداشت شخصی: مثلا برای روز دوشنبه رزرو کردم</p>
                        <div class="input textarea"><textarea name="note" placeholder="یادداشت خود را تایپ کنید ..." class="single-input" id="note" rows="5"></textarea></div>            </div>
                    <div class="modal-footer">
                        <button type="submit" class="nb-btn  nb-btn-success btn-green" mj-for="model1">ثبت یادداشت</button>
                    </div>
                </form>        </div>
        </div>
    </div>
    <!-- modal rating -->
    <div id="rateModal-only" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="modal nb-modal nb-fade not-hide modal-body-gift">
        <div role="document" class="modal-dialog">
            <div class="modal-content rating-data user-profile-rate">

            </div>
        </div>
    </div>
</div>
@endsection
