@extends('users.userProfiles')
@section('tab')
<div id="tab3" role="tabpanel" class="tab-pane active">
    <div class="top-table dis-none-767">
        <div class="row">
            <div class="col-lg-12 col-md-14 col-xs-14 col-xs-offset-10 col-md-offset-10 col-lg-offset-12">
                <form class="row">
                    <div class="sort-label col-xs-12">مرتب سازی بر اساس :</div>
                    <div class="col-xs-12">
                        <select name="filter" class="single-select" mj-type="select" mj-target="/dealUsers/index" mj-method="post" mj-success="dealUserFilltering">
                            <option value="all" selected="selected">تمامی</option>
                            <option value="available">موجود</option>
                            <option value="used">استفاده شده</option>
                            <option value="open">در انتظار خریداران بیشتر</option>
                            <option value="expired">تاریخ اعتبار به پایان رسیده</option>
                            <option value="refund">باز پرداخت شده</option>
                        </select> </div>
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
                    <th>کـد عمـومـــی </th>
                    <th>جزییات</th>
                </tr>
            </thead>
            <tbody>



                @foreach($orders as $order)
                @foreach($order->OrderDetail as $order_item)

                
                <tr class="board">
                    <td class="deal-td">
                        <div class="dis-table">
                            <a href="/tehran/d/c:art/174694/پکیج-1-چاپ-عکس-10-15-در-چاپ-فتو-گراد-90/">
                                <img width="100" height="100" src="{{$order_item->Barg->F_Pic}}" alt=""> </a>
                        </div>
                        <div class="dis-table">
                            <h4 class="deal-td-title"><a href="/merchant/فتو-گراد/"><span>{{ App\User::find($order_item->Barg->F_UserID)->name}} </span></a>
                            </h4>
                            <p>
                                <a href="/tehran/d/c:art/174694/پکیج-1-چاپ-عکس-10-15-در-چاپ-فتو-گراد-90/" class="button" target="_blank">{{$order_item->Barg->F_Title}}</a> </p>
                        </div>
                    </td>
                    <td>{{$order->F_Date}}</td>
                    <td>{{$order_item->F_Count}}</td>
                    <td>
                        
                    
@if($order_item->F_State==1)

                        موجود 
@else
ناموجود

@endif
                    
                    
                    </td>
                  
                    <td class="more">
                        <span class="code">{{$order_item->F_QRCode}} </span>

                    </td>
                    <td class="view-icon">
                        <a href="{{url('users/userProfiles/view_order')}}/{{$order_item->F_QRCode}}" class="button" target="_blank"><i class="icon icon-arrow-left"></i></a> </td>
                </tr>
                @endforeach
                @endforeach









            </tbody>
        </table>
    </div>
    <!-- <div class="empty-content">
        <div class="row">
            <div class="col-lg-24 col-md-24 col-xs-24">
                <div class="text1">موردی برای نمایش یافت نشد</div>
            </div>
        </div>
    </div> -->
    <!-- paginator  -->

    <script>
        $('.pagination li.active a').removeAttr('href');
    </script>
    <!-- model boxes  -->
    <!-- modal note   -->
    <div tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="my-note modal nb-modal fade">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <form method="post" accept-charset="utf-8" class="" mj-type="form" mj-model="model1" mj-method="post" action="/dealUsers/index">
                    <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i aria-hidden="true" class="icon icon-close"></i>
                        </button>
                        <div class="modal-title-wrapper">
                            <h4 class="modal-title ft-3">یادداشت من</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>یادداشت شخصی: مثلا برای روز دوشنبه رزرو کردم</p>
                        <div class="input textarea"><textarea name="note" placeholder="یادداشت خود را تایپ کنید ..." class="single-input" id="note" rows="5"></textarea></div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="nb-btn  nb-btn-success btn-green" mj-for="model1">ثبت یادداشت</button>
                    </div>
                </form>
            </div>
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