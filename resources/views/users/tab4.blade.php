@extends('users.userProfiles')
@section('tab')
<div id="tab4" role="tabpanel" class="tab-pane active"><div class="trans-table-main clearfix">
        <div class="top-table dis-none-767 trans">
            <div class="row">
                <div class="col-xs-10" data-koofy="3">
                    <button class="nb-btn nb-btn-sm nb-btn-primary" mj-type="single" mj-target="/transactions/index?status=all" mj-method="post" mj-model="model2" mj-success="transactionFilltering">همه
                    </button>
                    <button class="nb-btn nb-btn-sm nb-btn-border" mj-type="single" mj-target="/transactions/index?status=buy" mj-method="post" mj-model="model2" mj-success="transactionFilltering">خرید
                    </button>
                    <button class="nb-btn nb-btn-sm nb-btn-border" mj-type="single" mj-target="/transactions/index?status=others" mj-method="post" mj-model="model2" mj-success="transactionFilltering">غیر خرید
                    </button>
                </div>
                <div class="col-lg-12 col-lg-offset-2 col-xs-14">
                    <form class="row">
                        <div class="sort-label col-xs-12">مرتب سازی بر اساس :</div>
                        <div class="col-xs-12">
                            <select name="filter" class="single-select" mj-type="select" mj-target="/transactions/index?status=all" mj-method="post" mj-model="model4" mj-success="transactionFilltering"><option value="" selected="selected">انتخاب کنید</option><option value="daily">۲۴ ساعت گذشته</option><option value="weekly">هفتگی</option><option value="monthly">ماهانه</option></select>                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive clearfix dis-none-767">
            <table class="table table-striped table-bordered table-1">
                <thead>
                <tr>
                    <th>تاریخ</th>
                    <th>کد سفارش</th>
                    <th>توضیح</th>
                    <th><span class="green">واریز</span><span>&nbsp; / &nbsp;</span><span class="red">برداشت</span><span class="toman-size">(تومان)</span></th>
                    <th>باقیمانده موجودی<span class="toman-size">(تومان)</span></th>
                    <th>خرید از طریق</th>
                    <th>جزئیات</th>
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
    </div>
    <script>
        $('.pagination li.active a').removeAttr('href');
    </script></div>
@endsection
