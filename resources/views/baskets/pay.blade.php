@extends('layout.index')
@section('content')

    <main style="min-height: 680px;"><div class="container-fluid"><div class="row"><div class="nb-breadcrumb-spacer hidden-lg hidden-md hidden-sm"></div><div class="nb-breadcrumb hidden-xs"><div class="container-fluid limit"><div class="row"><div class="col-md-1"></div><div class="col-md-22"><ul><li><a href="https://netbarg.com/tehran/"><span>خانه</span></a></li><li><a href="/tehran/baskets/"><span>سبد</span></a></li></ul></div><div class="col-md-1"></div></div></div></div></div></div>    <div id="mainModal" tabindex="-1" role="dialog" class="modal nb-modal nb-fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i aria-hidden="true" class="icon icon-close"></i>
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
                                            <li nb-toggle="payment-part" class="active"><a href="#">عملیات پرداخت</a><span>۲</span></li>
                                            <li><a href="#">دریافت نت برگ</a><span>۳</span></li>
                                        </ul>
                                        <div class="basket-guide">
                                            <ul class="list-inline list-unstyled">
                                                <li><span data-toggle="modal" data-target="#basket-guide">؟</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row part confirm-part hidden">
                                <div class="col-lg-15 col-md-15">
                                    <div id="add_gift" class="gift-section personal-tab">
                                        <form action="javascript:avoid()" type="post" class="location-pro">
                                            <div class="address-pro gifter">
                                                <div id="donate" class="header-section"><i class="icon icon-gift hidden-xs"></i>
                                                    <p>از این قسمت میتوانید نت‌برگ‌های خود را هدیه دهید</p><a href="javascript:void(0)" class="add-gift nb-btn nb-btn-gift">هدیه
                                                        دهید</a>
                                                </div>
                                                <div id="donate_form" class="open-edit-address hidden">
                                                    <div class="row">
                                                        <div class="col-lg-24">
                                                            <div class="section-header2">
                                                                <div class="header-section"><i class="icon icon-gift hidden-xs"></i>
                                                                    <p>از این قسمت میتوانید نت‌برگ‌های خود را هدیه دهید</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-24">
                                                            <div class="row padd-left-20 padd-right-20">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-24 form-group req input-label-animate">
                                                                    <div>
                                                                        <label for="donate1" class="hascontent">از طرف</label>
                                                                        <input id="donate1" readonly="" maxlength="50" type="text" value="bitanik.system@gmail.com" name="name" class="single-input required-input">
                                                                        <span class="hint danger"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-24 form-group req input-label-animate">
                                                                    <div>
                                                                        <label for="donate2">به (نام دوست)</label>
                                                                        <input id="donate2" maxlength="50" type="text" name="friend_name" class="single-input required-input">
                                                                    </div>
                                                                    <span class="hint danger"></span>
                                                                </div>
                                                                <div class="col-lg-24 col-md-24 col-sm-24 col-xs-24 form-group req input-label-animate">
                                                                    <div>
                                                                        <label for="donate3">ایمیل دوست</label>
                                                                        <input id="donate3" maxlength="50" type="email" name="friend_email" class="single-input required-input emailcheck">
                                                                    </div>
                                                                    <span class="hint danger" style="display: none;"></span>
                                                                </div>
                                                                <div class="col-lg-24 col-md-24 col-sm-24 col-xs-24 input-label-animate">
                                                                    <label for="donate4">پیام شما</label>
                                                                    <textarea id="donate4" name="text" class="single-input"></textarea>
                                                                </div>
                                                                <div class="btn-group no-margin clearfix col-lg-10 col-md-10 col-sm-12 col-xs-24 pull-left">
                                                                    <button type="submit" class="nb-btn nb-btn-sm nb-btn-success btn-green">
                                                                        ذخیره
                                                                    </button>
                                                                    <button type="button" class="nb-btn nb-btn-sm nb-btn-default bt-cancel">
                                                                        انصراف
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="editable_gift" class="gift-section personal-tab hidden">
                                        <form class="location-pro show-gift">
                                            <div class="form-fix-pro">
                                                <div class="row">
                                                    <div class="col-lg-24 form-fix-pro side-space-2">
                                                        <div class="section-header2 radio-wrapper">
                                                            <div class="header-section">
                                                                <div class="hs"><i class="icon icon-gift"></i><span class="gift-pink">سبد هدیه</span><span class="gift-black">از طرف</span><span class="gift-pink t_from"></span><span class="gift-black">به</span><span class="gift-pink t_to"></span><span class="gift-pink t_email"></span></div>
                                                                <p class="t_text"></p>
                                                            </div>
                                                            <button id="edit_donation" type="button" data-index="0" data-url="#" class="outer-btn"><i class="icon icon-pencil-edit"></i>
                                                            </button>
                                                            <button id="delete_donation" type="button" class="outer-btn"><i class="icon icon-garbage-bin"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="cat-deal-color main-cat">
                                        <div class="basket-main-deal clearfix main-row">
                                            <div nb-cat-id="cat_6" nb-deal-id="deal_178631" nb-city-id="city_42546" class="col-lg-24 col-md-24 col-sm-24 basket-item">
                                                <div class="list-items">
                                                    <div class="li-top-box">
                                                        <a href="/tehran/d/c:entertainment/178631/سانس-آزاد-جمعه-و-ایام-تعطیل-بالای-120-cm-اپارک" class="clearfix">
                                                            <div class="overlay"></div>
                                                            <img src="https://static.netbarg.com/img/responsive_medium/deals/178631/1e5b03de.jpg" alt="سانس آزاد جمعه و ایام تعطیل بالای 120 cm اپارک">                                                                                                            </a>
                                                        <div class="list-deal-details">
                                                            <div class="top-panel"><span>
                                                                                                                            <a href="/merchant/اپارک/"><h3>اپارک</h3></a></span></div>
                                                            <div class="middle-panel clearfix">
                                                                <a href="/tehran/d/c:entertainment/178631/سانس-آزاد-جمعه-و-ایام-تعطیل-بالای-120-cm-اپارک" class="deal-desc">سانس آزاد جمعه و ایام تعطیل بالای 120 cm اپارک با 19% تخفیف و پرداخت تنها 105,065 تومان به جای 129,710 تومان</a>
                                                            </div>
                                                        </div>
                                                        <div class="list-deal-cp">
                                                        <span class="deal-delete">
                                                                                                                <i mj-type="single" mj-target="/baskets/deleteFromBasket.json?deal_id=178631&amp;deal_property_group_id=" mj-method="post" mj-model="model2" mj-success="deleteFromBasket" class="icon icon-garbage-bin">
                                                        </i>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="li-bottom-box">
                                                        <div class="top-bp clearfix">
                                                            <select name="quantity" class="single-select pull-right qt" mj-type="select" mj-target="/baskets/changeQuantity.json?deal_id=178631&amp;deal_property_group_id=" mj-method="post" mj-model="model4"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17" selected="selected">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option></select>                                                        <span class="send-po pull-right">
                                                            <span nb-num="105065.1">105,065.1</span>
                                                            <span> تومان</span>
                                                        </span>
                                                            <span class="send-po pull-left"><span>جمع کل: </span>
                                                            <span nb-total="1786106.7000000002">1,786,106.7,000,000,002</span><span> تومان</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="pay-jump">
                                            <div class="total"><span>جمع کل سبد</span><span>(تومان)</span></div>
                                            <div nb-totalbasket="1786106" class="num">1,786,106</div>
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
                                                    <p nb-final-price="1786106">1,786,106</p>
                                                </div>
                                                <div type="button" nb-toggle="payment-part" class="nb-btn nb-btn-success confOrder">تایید
                                                    سفارش
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row part payment-part">
                                <div class="col-lg-15 col-md-15">
                                    <div id="my-address" class="gift-section personal-tab hidden">
                                        <div class="section-header">
                                            <h1 class="hx">آدرس ارسال</h1>
                                        </div>
                                        <p class="gs-myadress"><span></span></p>
                                    </div>
                                    <div id="frozen_gift" class="gift-section personal-tab hidden">
                                        <form class="location-pro ajaxform">
                                            <div class="form-fix-pro show-gifter">
                                                <div class="row">
                                                    <div class="col-lg-24 form-fix-pro side-space-2">
                                                        <div class="section-header2 radio-wrapper cursor-none">
                                                            <div class="header-section">
                                                                <div class="hs"><i class="icon icon-gift"></i><span class="gift-pink">سبد هدیه</span><span class="gift-black">از طرف </span><span class="gift-pink t_from"></span><span class="gift-black">به </span><span class="gift-pink t_to"></span><span class="gift-pink t_email"></span></div>
                                                                <p class="t_text"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="cat-deal-color main-cat freez-row">
                                        <div class="basket-main-deal clearfix main-row">
                                            <div nb-cat-id="cat_6" nb-deal-id="deal_178631" nb-city-id="city_42546" class="col-lg-24 col-md-24 col-sm-24 mirror">
                                                <div class="list-items">
                                                    <div class="li-top-box">
                                                        <a href="/tehran/d/c:entertainment/178631/سانس-آزاد-جمعه-و-ایام-تعطیل-بالای-120-cm-اپارک" class="clearfix">
                                                            <div class="overlay"></div>
                                                            <img src="https://static.netbarg.com/img/responsive_medium/deals/178631/1e5b03de.jpg" alt="">                                                                                                            </a>
                                                        <div class="list-deal-details">
                                                            <div class="top-panel"><span>
                                                            <a href="/merchant/اپارک/"><h3>اپارک</h3></a>
                                                        </span></div>
                                                            <div class="middle-panel clearfix"><a href="/tehran/d/c:entertainment/178631/سانس-آزاد-جمعه-و-ایام-تعطیل-بالای-120-cm-اپارک" class="deal-desc">سانس آزاد جمعه و ایام تعطیل بالای 120 cm اپارک با 19% تخفیف و پرداخت تنها 105,065 تومان به جای 129,710 تومان</a></div>

                                                            <!-- <div class="bottom-panel-b">
                                                                <div class="bpb-1"><span>رنگ بنفش </span><span>سایز L</span></div>
                                                                <div class="bpb-2"><a href="/tehran/d/c:entertainment/178631/سانس-آزاد-جمعه-و-ایام-تعطیل-بالای-120-cm-اپارک" class="bottom-panel-b-change">(ویرایش)</a></div>
                                                            </div> -->
                                                        </div>

                                                    </div>
                                                    <div class="li-bottom-box">
                                                        <div class="top-bp clearfix">
                                                            <select name="quantity" class="single-select pull-right qt" mj-method="post" mj-model="model4" disabled="disabled"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17" selected="selected">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="71">71</option><option value="72">72</option><option value="73">73</option><option value="74">74</option><option value="75">75</option><option value="76">76</option><option value="77">77</option><option value="78">78</option><option value="79">79</option><option value="80">80</option><option value="81">81</option><option value="82">82</option><option value="83">83</option><option value="84">84</option><option value="85">85</option><option value="86">86</option><option value="87">87</option><option value="88">88</option><option value="89">89</option><option value="90">90</option><option value="91">91</option><option value="92">92</option><option value="93">93</option><option value="94">94</option><option value="95">95</option><option value="96">96</option><option value="97">97</option><option value="98">98</option><option value="99">99</option><option value="100">100</option></select>                                                        <span class="send-po pull-right">

                             <span nb-num-mirror="105065.1">105,065.1</span>
                            <span> تومان</span>
                          </span>
                                                            <span class="send-po pull-left"><span>جمع کل: </span><span nb-total-mirror="1786106.7">1,786,106.7,000,000,002</span><span> تومان</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" id="pay-jump-pay">
                                            <div class="total"><span>جمع کل سبد</span><span>(تومان)</span></div>
                                            <div nb-totalbasket-mirror="" class="num">1,786,106</div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="basket-confirm basket-payment bp-scroll">
                                                <div class="gift-code">
                                                    <p><span>مبلغ کد هدیه</span><span>(تومان)</span></p>
                                                    <p nb-gift-price-mirror="">0</p>
                                                </div>
                                                <div class="balance">
                                                    <p>کسر از موجودی حساب<span>(تومان)</span>:</p>
                                                    <p nb-balance-mirror="">0</p>
                                                </div>
                                                <div class="total m-b">
                                                    <p><span>مبلغ قابل پرداخت</span><span>(تومان)</span></p>
                                                    <p nb-final-price-mirror="">1,786,106</p>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#menu1">پرداخت آنلاین</a></li>
                                                </ul>
                                                <input type="hidden" name="user-address-id" id="user-address-id" value=""><input type="hidden" name="h_giftCode" id="h-giftcode" value=""><input type="hidden" name="use_wallet" id="use-wallet" value="1"><input type="hidden" name="h_from" id="h-from" value=""><input type="hidden" name="h_to" id="h-to" value=""><input type="hidden" name="gift-email" id="gift-email" value=""><input type="hidden" name="h_text" id="h-text" value=""><div class="tab-content">
                                                    <div id="menu1" class="tab-pane fade in active">
                                                        <div class="bank-checker">
                                                            <div class="row banks-row">
                                                                <div class="col-lg-12 col-md-24 col-sm-8 col-xs-24">
                                                                    <label class="radio-wrapper">
                                                                        <div class="label-parent">
                                                                            <input type="radio" class="radio-input" name="gateway" value="saman" id="gateway-saman" checked="checked">
                                                                            <div class="radio-face"></div><i></i></div>
                                                                        <span class="clearfix">
				        	<img style="width:28px;" src="/assets/site/img/bank-saman.png" class="pull-left">سامان</span></label>
                                                                </div></div>                <div class="row">
                                                                <div class="col-lg-24">
                                                                    <label class="chek-bank"><span>درگاه‌های فوق پذیرنده تمامی کارت‌های بانکی عضو شبکه شتاب هستند.</span></label>
                                                                </div>
                                                                <div class="col-lg-24">
                                                                    <div class="accept-law clearfix">
                                                                        <label class="checkbox checkbox-success checkbox-toggle required-chechbox checked">
                                                                            <input type="checkbox" name="ruls" value="1" class="styled" id="ruls1" checked="checked">                                <label sync-bybutton="ruls1" for="ruls1"><a href="/page/term-and-conditions/" target="_blank">قوانین نت برگ را می
                                                                                    پذیرم</a></label>
                                                                        </label>
                                                                        <div class="pull-left nopadding-x">
                                                                            <div class="input-outer-btn">
                                                                                <button type="submit" id="pay" class="btn nb-btn-success btn-type-2 p1" sync-bybutton="ruls1">پرداخت
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="menu3" class="tab-pane fade hidden">
                                                        <div class="bank-checker">
                                                            <form method="post" accept-charset="utf-8" class="buy-with-wallet" action="/buy_with_wallets/buy"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div><input type="hidden" name="user-address-id" id="user-address-id" value=""><input type="hidden" name="h_giftCode" id="h-giftcode" value=""><input type="hidden" name="use_wallet" id="use-wallet" value="1"><input type="hidden" name="h_from" id="h-from" value=""><input type="hidden" name="h_to" id="h-to" value=""><input type="hidden" name="gift-email" id="gift-email" value=""><input type="hidden" name="h_text" id="h-text" value="">            <div class="row">
                                                                    <div class="col-lg-24">
                                                                        <label class="chek-bank"><span>مبلغ قابل پرداخت از موجودی شما کسر می شود.</span></label>
                                                                    </div>
                                                                    <div class="col-lg-24">
                                                                        <div class="accept-law clearfix">
                                                                            <lable class="checkbox checkbox-success checkbox-toggle required-chechbox checked">
                                                                                <input type="checkbox" name="ruls" value="1" class="styled" checked="checked" id="ruls3">                            <label sync-bybutton="ruls3" for="ruls3"></label>
                                                                            </lable>
                                                                            <span class="after-lable-rule">
                        <a href="/page/term-and-conditions/" target="_blank" class="rules">قوانین و مقررات&nbsp;</a>را می پذیرم</span>
                                                                            <div class="pull-left nopadding-x">
                                                                                <div class="input-outer-btn">
                                                                                    <button type="submit" class="btn nb-btn-success btn-type-2 p1 payBasket" sync-bybutton="ruls3">پرداخت
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>        </div>
                                                    </div>
                                                </div>
                                                <div id="result"></div><script src="/assets/site/js/Payments/payment.js"></script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <section class="related cat-deal-color main-cat around-me clearfix">
                                    <header class="section-header">
                                        <h6 class="hx"><span class="icon icon-special-offer-location"></span><span class="article-h3">شاید به این نت برگ ها علاقمند باشید</span></h6>
                                    </header>
                                    <div class="main-cat-deal-thumbnail clearfix main-row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-24 cds-item  ">
                                            <div class="cat-deal-smallbox">
                                                <div class="cat-deal-box">
                                                    <a href="/tehran/d/c:entertainment/175365/بازی-و-شادی-در-خانه-کودک-رنگین-کمان-12/" class="figure">
                                                        <ul class="deal-tag list-unstyled">
                                                        </ul>
                                                        <div class="overlay">
                                                            <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                        </div>
                                                        <img data-src="https://static.netbarg.com/img/responsive_medium/deals/175365/39dd061c.jpg" alt="بازی و شادی در خانه کودک رنگین کمان" data-type="lazy">                            </a>
                                                    <div class="cat-deal-box-main clearfix">
                                                        <h4 class="cdbm-title">
                                                            <a href="/tehran/d/c:entertainment/175365/بازی-و-شادی-در-خانه-کودک-رنگین-کمان-12/" class="truncate">
                                                                بازی و شادی در خانه کودک رنگین کمان                                    </a>
                                                        </h4>
                                                        <span class="cdbm-total-buy">
                                <span class="ir">
                                    <i class="icon icon-shopping-cart hidden-xs"></i>
                                    <i class="icon icon-shopping-cart_L visible-xs"></i>
                                </span>
                                <span class="cdbm-tb-total">
                                    48                                </span>
                            </span>
                                                    </div>
                                                    <div class="cat-deal-box-footer clearfix">
                                                        <a href="/area/بلوار-کوهک/" class="cdbf-location truncate">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">
                                    بلوار کوهک                                </span>
                                                        </a>
                                                        <span class="cdbf-takhfif">
                                <span class="cdbft-shape">
                                    <span class="cdbft-shape-text">
                                        %50                                    </span>
                                </span>
                            </span>
                                                        <span class="cdbf-price">
                                <ins class="cdbf-netbarg-price">
                                    <span>
                                        ۱۲,۰۰۰                                    </span>
                                    <span> تومان</span>
                                </ins>
                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-24 cds-item  ">
                                            <div class="cat-deal-smallbox">
                                                <div class="cat-deal-box">
                                                    <a href="/tehran/d/c:entertainment/167503/دوچرخه-سواری-در-پیست-دوچرخه-سواری-پارک-چیتگر-52/" class="figure">
                                                        <ul class="deal-tag list-unstyled">
                                                        </ul>
                                                        <div class="overlay">
                                                            <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                        </div>
                                                        <img data-src="https://static.netbarg.com/img/responsive_medium/deals/167503/1ee903e2.jpg" alt="دوچرخه سواری در پیست دوچرخه سواری پارک چیتگر" data-type="lazy">                            </a>
                                                    <div class="cat-deal-box-main clearfix">
                                                        <h4 class="cdbm-title">
                                                            <a href="/tehran/d/c:entertainment/167503/دوچرخه-سواری-در-پیست-دوچرخه-سواری-پارک-چیتگر-52/" class="truncate">
                                                                دوچرخه سواری در پیست دوچرخه سواری پارک چیتگر                                    </a>
                                                        </h4>
                                                        <span class="cdbm-total-buy">
                                <span class="ir">
                                    <i class="icon icon-shopping-cart hidden-xs"></i>
                                    <i class="icon icon-shopping-cart_L visible-xs"></i>
                                </span>
                                <span class="cdbm-tb-total">
                                    1926                                </span>
                            </span>
                                                    </div>
                                                    <div class="cat-deal-box-footer clearfix">
                                                        <a href="/area/چیتگر/" class="cdbf-location truncate">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">
                                    چیتگر                                </span>
                                                        </a>
                                                        <span class="cdbf-takhfif">
                                <span class="cdbft-shape">
                                    <span class="cdbft-shape-text">
                                        %45                                    </span>
                                </span>
                            </span>
                                                        <span class="cdbf-price">
                                <ins class="cdbf-netbarg-price">
                                    <span>
                                        ۶,۶۰۰                                    </span>
                                    <span> تومان</span>
                                </ins>
                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-24 cds-item  ">
                                            <div class="cat-deal-smallbox">
                                                <div class="cat-deal-box">
                                                    <a href="/tehran/d/c:restaurant/175046/منو-متنوع-غذایی-در-رستوران-بین-المللی-نوما-4/" class="figure">
                                                        <ul class="deal-tag list-unstyled">
                                                        </ul>
                                                        <div class="overlay">
                                                            <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                        </div>
                                                        <img data-src="https://static.netbarg.com/img/responsive_medium/deals/175046/555.jpg" alt="منو متنوع غذایی در رستوران بین المللی نوما" data-type="lazy">                            </a>
                                                    <div class="cat-deal-box-main clearfix">
                                                        <h4 class="cdbm-title">
                                                            <a href="/tehran/d/c:restaurant/175046/منو-متنوع-غذایی-در-رستوران-بین-المللی-نوما-4/" class="truncate">
                                                                منو متنوع غذایی در رستوران بین المللی نوما                                    </a>
                                                        </h4>
                                                        <span class="cdbm-total-buy">
                                <span class="ir">
                                    <i class="icon icon-shopping-cart hidden-xs"></i>
                                    <i class="icon icon-shopping-cart_L visible-xs"></i>
                                </span>
                                <span class="cdbm-tb-total">
                                    1240                                </span>
                            </span>
                                                    </div>
                                                    <div class="cat-deal-box-footer clearfix">
                                                        <a href="/area/شهرک-گلستان/" class="cdbf-location truncate">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">
                                    شهرک گلستان                                </span>
                                                        </a>
                                                        <span class="cdbf-takhfif">
                                <span class="cdbft-shape">
                                    <span class="cdbft-shape-text">
                                        %46                                    </span>
                                </span>
                            </span>
                                                        <span class="cdbf-price">
                                <ins class="cdbf-netbarg-price">
                                    <span>
                                        ۲۴,۳۰۰                                    </span>
                                    <span> تومان</span>
                                </ins>
                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-24 cds-item  ">
                                            <div class="cat-deal-smallbox">
                                                <div class="cat-deal-box">
                                                    <a href="/tehran/d/c:restaurant/164957/منو-کافه-و-سرویس-چای-سنتی-در-کافه-آشتی/" class="figure">
                                                        <ul class="deal-tag list-unstyled">
                                                        </ul>
                                                        <div class="overlay">
                                                            <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                        </div>
                                                        <img data-src="https://static.netbarg.com/img/responsive_medium/deals/164957/70430865.jpg" alt="منو کافه و سرویس چای سنتی در کافه آشتی" data-type="lazy">                            </a>
                                                    <div class="cat-deal-box-main clearfix">
                                                        <h4 class="cdbm-title">
                                                            <a href="/tehran/d/c:restaurant/164957/منو-کافه-و-سرویس-چای-سنتی-در-کافه-آشتی/" class="truncate">
                                                                منو کافه و سرویس چای سنتی در کافه آشتی                                    </a>
                                                        </h4>
                                                        <span class="cdbm-total-buy">
                                <span class="ir">
                                    <i class="icon icon-shopping-cart hidden-xs"></i>
                                    <i class="icon icon-shopping-cart_L visible-xs"></i>
                                </span>
                                <span class="cdbm-tb-total">
                                    14                                </span>
                            </span>
                                                    </div>
                                                    <div class="cat-deal-box-footer clearfix">
                                                        <a href="/area/همت-غرب/" class="cdbf-location truncate">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">
                                    همت غرب                                </span>
                                                        </a>
                                                        <span class="cdbf-takhfif">
                                <span class="cdbft-shape">
                                    <span class="cdbft-shape-text">
                                        %50                                    </span>
                                </span>
                            </span>
                                                        <span class="cdbf-price">
                                <ins class="cdbf-netbarg-price">
                                    <span>
                                        ۷,۵۰۰                                    </span>
                                    <span> تومان</span>
                                </ins>
                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                      @include('component.support')

                    </div>
                </div>
                <div class="fixed-fab smooth-scroll clearfix visible-sm visible-xs" style="bottom: -82px;"><span class="hidden-xs pay-conf-text">قابل پرداخت: </span><span class=""><i>1,786,106</i><span class="pay-toman">(تومان)</span></span><span data-href="#pay-jump-pay" class="nb-btn pull-left">پرداخت</span></div></div>
        </main>
        <div id="basket-guide" tabindex="-1" role="dialog" class="modal nb-modal nb-fade">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i aria-hidden="true" class="icon icon-close"></i>
                        </button>
                        <div class="modal-title-wrapper">
                            <h4 class="modal-title ft-3">راهنمای پرداخت</h4>
                        </div>
                    </div>
                    <div class="modal-body">
                        <h4 class="mb-header">پرداخت آنلاین</h4>
                        <p>شما می‌توانید با استفاده از تمامی کارت های بانکی عضو شبکه شتاب خرید خود را از طریق پرداخت الکترونیک
                            انجام دهید.</p>
                        <h4 class="mb-header">افزایش موجودی حساب</h4>
                        <p>با افزایش موجودی حساب خود, شما می توانید به صورت بسیار سریع و بدون نیاز به مراجعه به درگاه پرداخت
                            بانکی الکترونیک خرید خود را انجام دهید. برای استفاده از این سیستم شما می‌توانید از روش پرداخت از
                            طریق کارت‌های بانکی به صورت آنلاین, واریز وجه به حساب جاری شرکت و یا انتقال وجه از طریق کارت به
                            کارت، موجودی حساب خود را به هر میزان که مایل باشید افزایش دهید و سپس اقدام به خرید نمایید.</p>
                    </div>
                </div>
            </div>
        </div><div id="quickview-package" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" class="modal nb-modal fade">
            <div role="document" class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i aria-hidden="true" class="icon icon-close"></i></button>
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
                    <form method="post" accept-charset="utf-8" class="row" mj-type="form" mj-target="/user/userProfiles/updateUserInfo.json" mj-method="post" mj-success="updateUserInfo" mj-model="model1" action="/tehran/baskets/"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>				<div class="modal-body">
                            <div class="row">
                                <div class="col-lg-24 form-group req input-label-animate position-rel">
                                    <label name="first-name">نام</label>
                                    <input type="text" name="first_name" class="single-input required-input" id="first-name">							<span class="hint danger"></span>
                                </div>
                                <div class="col-lg-24 form-group req input-label-animate position-rel">
                                    <label name="last-name">نام خانوادگی</label>
                                    <input type="text" name="last_name" class="single-input required-input" id="last-name">							<span class="hint danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="nb-btn nb-btn-success">ثبت</button>
                        </div>
                    </form>		</div>
            </div>
        </div></main>

@endsection
