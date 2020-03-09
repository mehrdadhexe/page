<div class="col-lg-9 col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading" id="pay-jump">
            <div class="total"><span>جمع کل سبد</span><span>(تومان)</span></div>
            <div nb-totalbasket="105065" class="num">105,065</div>
        </div>
        <div class="panel-body">
            <div class="basket-confirm bp-scroll">
                <div id="nb_gift" nb-gift-price="0" nb-min="" nb-max="" nb-for-deal="" nb-for-cat="" nb-for-city="" nb-percent="" nb-gift-code="" class="input-btn">
                    <form method="post" accept-charset="utf-8" mj-type="form" mj-target="/baskets/useCampaignCode.json" mj-method="post" mj-model="model1" mj-success="basketGiftCode" action="/tehran/baskets/"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div><div class="input text"><input type="text" name="gift_code" placeholder="کد هدیه" autocomplete="off" id="gift-code"></div>                                            <button type="submit" id="submitGiftCode" mj-for="model1" class="btn btn-warning btn-type-1">تایید کد هدیه
                        </button>
                    </form>                                            <button id="deleteGiftCode" class="btn btn-danger btn-type-1">حذف کد هدیه
                    </button>
                </div>
                <p class="hint danger"></p>
                <div class="gift-code">
                    <p><span>مبلغ کد هدیه</span><span>(تومان)</span></p>
                    <p id="gift_text" class="gift-price">0</p>
                </div>
                <div class="balance">
                    <label class="checkbox checkbox-success">
                        <input id="balance1" type="checkbox" checked="" class="styled">
                        <label for="balance1">استفاده از موجودی
                            حساب<span>(0 تومان)</span>:</label>
                    </label>
                    <p nb-balance="0">0</p>
                </div>
                <div class="total m-b">
                    <p><span>مبلغ قابل پرداخت</span><span>(تومان)</span></p>
                    <p nb-final-price="105065">105,065</p>
                </div>
                <div type="button" nb-toggle="payment-part" class="nb-btn nb-btn-success confOrder">تایید
                    سفارش
                </div>
            </div>
        </div>
    </div>
</div>
