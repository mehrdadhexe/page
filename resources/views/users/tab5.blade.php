@extends('users.userProfiles')
@section('tab')
<div id="tab5" role="tabpanel" class="tab-pane active">    <div id="rateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="modal nb-modal nb-fade">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                        <i aria-hidden="true" class="icon icon-close"></i>
                    </button>
                    <div class="modal-title-wrapper">
                        <h4 class="modal-title ft-3">امتیاز و نظر شما به فروشنده</h4>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="starIt-wrapper m-b">
                        <span>ثبت امتیاز:</span>
                        <div id="starIt" class="starIt">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <input type="hidden" name="star" class="star-hidden-input">
                        </div>
                    </div>
                    <p>نظر خود را با ما در میان بگذارید:</p>
                    <textarea placeholder="نظر خود را تایپ کنید ..." class="single-input"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="nb-btn nb-btn-success">ثبت نظر و امتیاز</button>
                </div>
            </div>
        </div>
    </div>
    <div class="empty-content">
        <div class="row">
            <div class="col-lg-24 col-md-24 col-xs-24">
                <div class="text1">موردی برای نمایش یافت نشد</div>
            </div>
        </div>
    </div>
    <script>
        $('.pagination li.active a').removeAttr('href');
    </script>
</div>
@endsection
