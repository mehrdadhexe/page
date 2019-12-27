@extends('layout.index')
@section('content')

    <main>

        @php






        @endphp


        <div class="container-fluid">
            <input value="{{$barg->F_BargID}}" type="hidden" class="F_BargID">
            <div class="row">
                <div class="nb-breadcrumb-spacer hidden-lg hidden-md hidden-sm"></div>
                <div class="nb-breadcrumb hidden-xs">
                    <div class="container-fluid limit">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-22">
                                <ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
                                    <li itemprop="itemListElement" itemscope="itemscope"
                                        itemtype="http://schema.org/ListItem"><a href="http://netbarg.com/tehran/"
                                                                                 itemprop="item" itemscope="itemscope"
                                                                                 itemtype="http://schema.org/Thing"><span
                                                itemprop="name">خانه</span></a></li>
                                    <li itemprop="itemListElement" itemscope="itemscope"
                                        itemtype="http://schema.org/ListItem"><a
                                            href="http://netbarg.com/tehran/c:entertainment/" itemprop="item"
                                            itemscope="itemscope" itemtype="http://schema.org/Thing"><span
                                                itemprop="name">تفریحی و ورزشی</span></a></li>
                                    <li itemprop="itemListElement" itemscope="itemscope"
                                        itemtype="http://schema.org/ListItem"><a
                                            href="/tehran/d/c:entertainment/160583/سرزمین-فکر-بازیا-در-جشنواره-تابستانی/"
                                            itemprop="item" itemscope="itemscope"
                                            itemtype="http://schema.org/Thing"><span itemprop="name">سرزمین فکر بازیا در جشنواره تابستانی</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-deal">
            <div class="container-fluid">
                <div class="row h-position">
                    <!-- start sticky -->
                    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs right-aside sticky-aside">
                        <div id="nava" class="affix-top">
                            <div class="float-cat">
                                <ul>
                                @foreach(\App\Category::all() as $cat)
                                    @if($cat->F_Root==1)
                                        <a href="/tehran/c:todaydeals/" class="float-cat-todaydeal">
                                            <li>
                                                <i><i class="icon {{$cat->F_Icon}}"></i></i><span>{{$cat->F_Name}}</span>
                                            </li>
                                        </a>

                                    @endif
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>            <!-- end sticky -->
                    <div class="col-lg-22 col-md-22 main-col">
                        <section class="deal relative clearfix equal dealType3 is-">
                            <div class="row">
                                <div class="col-sm-14 col-xs-24 _1 cell">
                                    <div class="nb-carousel-2">
                                        <div id="upSide" data-ride="carousel" class="carousel slide ">
                                            <ul class="deal-tag list-unstyled">
                                                <li class="orange-label"></li>
                                            </ul>

                                            <div class="carousel-inner ">

                                                <div data-thumb="0" class="item active">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/21d70411.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="0" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1f3c042b.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="0" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1b7303ad.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="0" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1be303bb.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="0" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1bab03ba.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="0" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1b5603b1.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="0" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1c1c03bb.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="1" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1bae03b6.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="1" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1ed303eb.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="1" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1f5a03f3.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="1" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1f5503ef.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="1" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1e0603d6.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="1" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1f1c03e8.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="1" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1e8e03e3.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="2" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1e4203d8.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="2" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1efb03eb.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="2" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1f8903f0.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="2" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1e9d03db.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="2" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1fb00403.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="2" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1f4103f3.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="2" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1e8603de.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="3" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/21f80412.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="3" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/228d0420.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="3" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/224e0419.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="3" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/22e50431.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="3" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/2676045d.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="3" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/2645045c.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="3" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1f0b03f0.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                <div data-thumb="4" class="item ">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_slider/deals/160583/1b8603ae.jpg"
                                                        alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                            </div>
                                            <!-- Controls--><a href="#upSide" role="button" data-slide="next"
                                                               class="left carousel-control"><span aria-hidden="true"
                                                                                                   class="icon icon-arrow-left"></span><span
                                                    class="sr-only">Previous</span></a><a href="#upSide" role="button"
                                                                                          data-slide="prev"
                                                                                          class="right carousel-control"><span
                                                    aria-hidden="true" class="icon icon-arrow-right"></span><span
                                                    class="sr-only">Next</span></a>
                                        </div>
                                        <div id="downSide" class="clearfix">
                                            <div id="thumbCarousel" data-interval="false" class="carousel slide">
                                                <div class="carousel-inner">
                                                    <div class="place-holder"><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
                                                    </div>
                                                    <div class="item active">
                                                        <div data-target="#upSide" data-slide-to="0"
                                                             class="thumb active">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/21d70411.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="1" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1f3c042b.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="2" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1b7303ad.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="3" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1be303bb.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="4" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1bab03ba.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="5" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1b5603b1.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="6" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1c1c03bb.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                    </div>
                                                    <div class="item ">
                                                        <div data-target="#upSide" data-slide-to="7" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1bae03b6.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="8" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1ed303eb.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="9" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1f5a03f3.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="10" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1f5503ef.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="11" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1e0603d6.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="12" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1f1c03e8.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="13" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1e8e03e3.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                    </div>
                                                    <div class="item ">
                                                        <div data-target="#upSide" data-slide-to="14" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1e4203d8.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="15" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1efb03eb.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="16" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1f8903f0.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="17" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1e9d03db.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="18" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1fb00403.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="19" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1f4103f3.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="20" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1e8603de.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                    </div>
                                                    <div class="item ">
                                                        <div data-target="#upSide" data-slide-to="21" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/21f80412.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="22" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/228d0420.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="23" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/224e0419.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="24" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/22e50431.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="25" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/2676045d.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="26" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/2645045c.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>

                                                        <div data-target="#upSide" data-slide-to="27" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1f0b03f0.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>
                                                    </div>
                                                    <div class="item ">
                                                        <div data-target="#upSide" data-slide-to="28" class="thumb ">
                                                            <img
                                                                src="http://static.netbarg.com/img/thumb_deal/deals/160583/1b8603ae.jpg"
                                                                alt="سرزمین فکر بازیا در جشنواره تابستانی"></div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-xs-24 _2 cell">
                                    <div class="top">
                                <span class="off ft-1">
                                %60                                </span>
                                        <h1 class="_h2">
                                            <a href="/tehran/d/c:entertainment/160583/سرزمین-فکر-بازیا-در-جشنواره-تابستانی/"
                                               class="merchant-name ft-2 truncate">سرزمین فکر بازیا در جشنواره
                                                تابستانی </a>
                                        </h1>
                                        <h2 class="_h1">
                                            <a href="/tehran/d/c:entertainment/160583/سرزمین-فکر-بازیا-در-جشنواره-تابستانی/"
                                               class="title ft-2 ellipsis" style="overflow-wrap: break-word;">سرزمین فکر
                                                بازیا با جشنواره تابستانی در باغ کتاب تا 60% تخفیف و پرداخت از 24,000
                                                تومان</a>
                                        </h2>
                                    </div>
                                    <div class="bill clearfix">
                                        <form method="post" accept-charset="utf-8" class="add-to-basket" mj-type="form"
                                              mj-target="/baskets/addToBasket/160583.json" mj-method="post"
                                              mj-success="addToBasket" mj-before="prepairAddToBasket" mj-model="model1"
                                              action="/tehran/d/c:entertainment/160583/%D8%B3%D8%B1%D8%B2%D9%85%DB%8C%D9%86-%D9%81%DA%A9%D8%B1-%D8%A8%D8%A7%D8%B2%DB%8C%D8%A7-%D8%AF%D8%B1-%D8%AC%D8%B4%D9%86%D9%88%D8%A7%D8%B1%D9%87-%D8%AA%D8%A7%D8%A8%D8%B3%D8%AA%D8%A7%D9%86%DB%8C/">
                                            <div style="display:none;"><input name="_method" value="POST" type="hidden">
                                            </div>
                                            <div class="_type3">
                                                <div class="realValue"><span>کمینه ارزش:</span>
                                                    <del>۶۰,۰۰۰</del>
                                                    <span>تومان</span>
                                                </div>
                                                <div class="currentValue"><span>کمینه پرداخت :
</span>
                                                    <ins>۲۴,۰۰۰</ins>
                                                    <span>تومان</span></div>
                                                <a href="#" data-toggle="modal" data-target="#dealProperty"
                                                   class="btn nb-btn nb-btn-success chooseIt hidden">انتخاب نت برگ</a>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="extra clearfix">
                                        <div class="sold">

                                                                        <span class="deal-sell pull-left">
                                        <div class="pull-left">
                                            <i class="icon icon-shopping-cart_L"></i>
                                            <p class="cart-num"><span>
                                             </span>6528 خرید</p>
                                        </div>
                                    </span>
                                            <span class="address">
                                        <div class="pull-right">
                                            <i class="icon icon-location74"></i>
                                            <a href="#">{{$barg->F_Mohale}}</a>
                                        </div>
                                    </span>

                                        </div>
                                        <div class="counter"><i class="icon icon-time-back"></i>
                                            <p>زمان باقیمانده
                                            </p>
                                            <div nb-server-time="{{$nb_server_time}}" nb-end-time="{{$nb_end_time}}"
                                                 class="pull-left countdown clearfix"><span><i
                                                        class="_d">6</i><i>روز</i></span><span><i class="_h">3</i><i>ساعت</i></span><span><i
                                                        class="_m">18</i><i>دقیقه</i></span><span><i
                                                        class="_s">19</i><i>ثانیه</i></span></div>
                                        </div>
                                        <div class="share">

                                            <i class="icon icon-share"></i>
                                            <p>اشتراک با دوستان</p>
                                            <div class="pull-left">

                                                <a class="_gPlus"
                                                   href="https://plus.google.com/share?url={{url()->current()}}">
                                                    <i class="icon icon-google-plus"></i></a>

                                                <a class="_facebook"
                                                   href="http://facebook.com/share.php?u={{url()->current()}}"><i
                                                        class="icon icon-facebook-logo"></i></a>

                                                <a class="_twitter"
                                                   href="https://twitter.com/share?url={{url()->current()}}"><i
                                                        class="icon icon-twitter"></i></a>


                                                <a class="_telegram"
                                                   href="https://telegram.me/share/url?url={{url()->current()}}">
                                                    <i class="icon icon-telegram-logo"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="price-compare" style="display:none;">
                            <div class="icon-torob"><img src="/assets/site/img/torob.png"></div>
                            <div class="left-box">
                                <div class="col-lg-20 col-md-24 text-torob"><span>در صورتی که می‌خواهید از ارزان‌تر بودن قیمت ما نسبت به سرویس‌های مشابه مطمئن شوید، می‌توانید قیمت را در سایت ترب با سایرین مقایسه کنید.</span>
                                </div>
                                <div class="col-lg-4 col-md-24">
                                    <a href="" class="torob-link" target="_blank">
                                        <button class="nb-btn">مقایسه قیمت در ترب</button>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </section>
                        <section class="merchant">
                            <div class="_1">
                                <a href="/merchant/مجموعه-فکر-بازیا/" class="merchant-name">
                                    <span class="ft-3">مجموعه فکر بازیا</span>
                                    <span class="_s ft-7">(صفحه اختصاصی فروشنده)</span>
                                </a>
                                <div class="_left pull-left">
                                                            <span company-id="20288"
                                                                  class="deal-like list-unstyled list-inline"
                                                                  data-toggle="modal" data-target="#signInModal">
                                                                @auth
    @php
    $userid=Auth::user()->id;
    $like='';

    $islike=\App\Like::where('F_UserID',$userid)->where('F_BargID',$barg->F_BargID)->first();
    if($islike)
     $like='heartanimate';

    @endphp                                                              <i
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="افزودن به لیست علاقمندی"
                                                                    class="icon {{$like}}"></i>
                                                                @endauth
                                                                @guest
                                                                        <i
                                                                            data-toggle="tooltip" data-placement="top" title=""
                                                                            data-original-title="افزودن به لیست علاقمندی"
                                                                            class="icon"></i>
                                                                @endguest

                                    <span class="star-count">{{$star_count}}</span>
                                </span>

                                    <div data-toggle="modal" data-target="#commentModal" class="cr-myrate pull-left">
                                        <!-- <span data-star-rate="4.6" class="star datasr" data-toggle="tooltip"
                                         data-placement="top"
                                         title=""
                                         data-original-title="امتیاز دهید">
                                            <i aria-hidden="true" class="icon icon-star"></i>
                                            <i aria-hidden="true" class="icon icon-star"></i>
                                            <i aria-hidden="true" class="icon icon-star"></i>
                                            <i aria-hidden="true" class="icon icon-star"></i>
                                            <i aria-hidden="true" class="icon icon-star"></i>
                                            </span> -->

                                    </div>
                                    <div class="star-rate-per pull-left">
                                        <ul class="star">
                                            <li style="width: {{$rate_darsad}}px;" class="starCur curr"></li>
                                        </ul>
                                        <div class="vote_num">
                                            <div class="text"> از {{$rate_count}} رای</div>
                                        </div>
                                        <i class="icon icon-arrow-down"></i>
                                        <div class="starUser user">{{$rate_score}}</div>
                                    </div>
                                    <div class="circle-progress">
                                        <ul class="list-unstyled list-inline">
                                            <li class="item">
                                                <div data-size="50" data-thickness="3"
                                                     data-value="{{$happy_rate_darsad}}"
                                                     class="prog-bar prog-bar1">
                                                    <canvas width="50" height="50"></canvas>
                                                    <i class="icon icon-happy-face emoji-icon gray"></i><span
                                                        class="prog-bar-num">{{(int)$happy_rate_darsad}}<i>%</i></span>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div data-size="50" data-thickness="3"
                                                     data-value="{{$normal_rate_darsad}}"
                                                     class="prog-bar prog-bar2">
                                                    <canvas width="50" height="50"></canvas>
                                                    <i class="icon icon-normal-face emoji-icon gray"></i><span
                                                        class="prog-bar-num">{{(int)$normal_rate_darsad}}<i>%</i></span>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div data-size="50" data-thickness="3" data-value="{{$sad_rate_darsad}}"
                                                     class="prog-bar prog-bar3">
                                                    <canvas width="50" height="50"></canvas>
                                                    <i class="icon icon-sad-face emoji-icon gray"></i><span
                                                        class="prog-bar-num">{{(int)$sad_rate_darsad}}<i>%</i></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="_2">

                            </div>
                            <div class="_3">
                                <div class="_r">
                                    <div class="_m"><i class="pic"></i>
                                        <p class="truncate">باغ کتاب تهران، بلوکA - شماره تماس:88657244,88657243 </p>
                                    </div>
                                </div>

                                <button data-toggle="modal" data-target="#dealLocation"
                                        class="btn nb-btn nb-btn-danger">نمایش
                                    روی نقشه
                                </button>
                            </div>
                        </section>
                        <!-- detials -->
                        <section class="details clearfix">
                            <div class="col-md-14 _1">
                                <div class="header">
                                    <h3>ویژگی ها</h3>
                                </div>
                                <div class="conditions">
                                    <div class="content description"><p><strong>سرزمین فکر بازیا، تلفیقی از بازی ، علم و
                                                تجربه در جشنواره تابستانی</strong></p>
                                        <p><strong>امکان انتخاب:</strong></p>
                                        <p>بن 50 هزار تومانی بازی های <strong>مجموعه فکر بازیا</strong> با 40% تخفیف
                                            مراجعه در روزهای شنبه الی سه شنبه</p>
                                        <p>بن 50 هزار تومانی بازی های <strong>مجموعه فکر بازیا</strong> با 30% تخفیف
                                            مراجعه در روزهای چهارشنبه الی &nbsp;جمعه</p>
                                        <p><strong>سرزمین فکر بازیا&nbsp;</strong>با الهام از هوش هشت گانه گاردنر در 5
                                            بخش متفاوت : طبیعت بازیا، راز‌بازیا، ساخت‌بازیا، تلاش‌بازیا، صدا‌بازیا</p>
                                        <p><a href="http://netbarg.com/dynimg/img/menu/deals/160590/5cbe0782.jpg"
                                              target="_blank"><span style="color: rgb(184, 49, 47);"><strong>جهت مشاهده لیست بازی های سرزمین فکر بازیا اینجا کلیک کنید</strong></span></a>
                                        </p>
                                        <p>مجموعه فکربازیا بدون پرداخت هزینه ورودی</p>
                                        <p><strong>مجموعه فکر بازیا&nbsp;</strong>منحصر به فرد در<strong>&nbsp;</strong>محیطی
                                            ایمن، علمی و تفریحی</p>
                                        <p>تقویت هوش و خلاقیت در قالب بازی و سرگرمی با فعالیتهای علمی</p>
                                        <p>بوستان های متعدد در فکربازیا مبتنی بر هوش های هشت گانه گاردنر</p>
                                        <p><strong>ظرفیت مجموعه:</strong> 150 نفر</p>
                                        <p><strong>رده سنی:</strong> 4 تا 15 سال</p></div>
                                </div>
                            </div>
                            <div class="col-md-10 _2">
                                <div class="header">
                                    <h3>شرایط استفاده </h3>
                                </div>
                                <div>
                                    <div class="im"><i class="icon icon-calendar-deal"></i>
                                        <p>فرصت استفاده از

                                            19 تیر تا
                                            31 شهریور 1398 </p>
                                    </div>
                                    <div class="im"><i class="icon icon-tag_netbarg"></i>
                                        <p>هر نت برگ برای یک نفر</p>
                                    </div>
                                    <div class="im"><i class="icon icon-phone-call"></i>
                                        <p>مراجعه حتما با هماهنگی و رزرو تلفنی</p>
                                    </div>
                                    <a href="/landing/GreenNetbarg/" target="_blank">
                                        <div class="green-netbarg">
                                            <i class="icon icon-paperless"></i>
                                            <p>ارائه پرینت الزامی نیست. فقط QR کد یا کدهای نت برگ را همراه داشته
                                                باشید</p>
                                        </div>
                                    </a>
                                    <div class="highlights">
                                        <p>نت برگ شامل بن استفاده از بازی های مجموعه فکربازیا به ارزش 50هزار تومان است
                                            ،به طور مثال برای استفاده از دو بازی خانه سازی و استودیو تلویزیون<span
                                                dir="RTL" lang="FA">&nbsp;تهیه 1 نت برگ کفایت می کند&nbsp;</span></p>
                                        <p><strong><span style="color: rgb(226, 80, 65);">هر نت برگ تنها برای یک مرتبه در روز قابل استفاده است</span></strong>
                                        </p>
                                        <p><span dir="RTL" lang="FA"><strong>نت برگی عزیز: در صورت دریافت کارت شارژ مجموعه فکربازیا در مهلت استفاده این نت برگ ، استفاده از اعتبار کارت شارژ ، تا 2 سال بلامانع است</strong></span>
                                        </p>
                                        <p><strong>ساعت پذیرش :</strong> 10 الی 19</p>
                                        <p><strong>شماره تماس:&nbsp;</strong>88657243 - 88657244</p>
                                        <p>وجه نت برگ خریداری شده قابل استرداد نیست</p>
                                        <p>قبل از تهیه نت برگ بررسیهای لازم را به عمل آورید</p>
                                        <p><strong>کسب و کار ملزم به رعایت کلیه موارد درج شده در این پیشنهاد
                                                است</strong></p></div>
                                </div>
                            </div>
                        </section>
                        <!-- end details -->
                        <!-- description -->
                        <section class="desc clearfix _open">
                            <div class="header">
                                <h3>توضیحات</h3>
                            </div>
                            <div>
                                <h2><p dir="RTL">سرزمین فکر بازیا در جشنواره تابستانی تا 60% تخفیف</p></h2>
                                <p dir="RTL">باغ کتاب تهران در جشنوراه تابستانی مجموعه ای منحصر به فرد به نام فکربازیا
                                    با فضایی کاملاً علمی و تفریحی میزبان والدین و کودکان کنجکاو می باشد.در جشنواره
                                    سرزمین فکربازیا کودکان و نوجوانان 4 تا 15 ساله با انجام بازی و سرگرمی های علمی به
                                    تقویت هوش و رشد خلاقیت خود می پردازند. هدف اصلی فکربازیا توانمندسازی فکر و پرورش
                                    هرچه بیشتر خلاقیت در کودکان و نوجوانان است.</p>
                                <p dir="RTL">مجموعه فکربازیا شامل 5 قسمت مجزا مشتمل بر: طبیعت بازیا، راز‌بازیا،
                                    ساخت‌بازیا، تلاش‌بازیا، صدا‌بازیا است و در مجموع 24 بازی طراحی شده&nbsp;</p>
                                <p dir="RTL">در مجموعه تفریحی و سرگرمی فکر‌بازیا هدف :</p>
                                <p dir="RTL">- رشد توانمندی های فردی و اجتماعی کودکان</p>
                                <p dir="RTL">- شناخت و تقویت نقاط قوت و ضعف کودکان با رسیدن به خودآگاهی و خودباوری</p>
                                <p dir="RTL">- تقویت هوش های هشت گانه زیر نظر متخصصان</p>
                                <p dir="RTL">- کسب علم و تجربه در فضایی شاد و جذاب</p>
                                <div
                                    class="col-md-12 col-lg-offset-6 col-sm-24 col-sm-offset-0 col-xs-offset-0 iframe-wrapper"></div>
                            </div>
                        </section>
                        <!-- end description -->
                        <section class="article-comment desc _open ">
                            <div class="header">
                                <h6> امتیاز و نظر خریداران این فروشنده</h6>
                            </div>
                            <div>
                                <div class="cat-deal-color">
                                    <div class="article-comment-box">
                                        @foreach($barg->Comment as $comment)
                                        <div class="acb-row">
                                            <div class="acbr-cell pro-img"><img src="/assets/site/img/user-pic.png">
                                            </div>
                                            <div class="acbr-cell pro-box">
                                                <div class="c-boxer">
                                                    <div class="cb-top clearfix">
                                                        <div class="pull-right">
                                                            <span>{{\App\User::find($comment->F_UserID)->name}}                                        </span>
                                                            <span>۷ روز
					پیش </span>
                                                            <span>
                                            <a href="{{url()->current()}}"
                                               target="_blank">
                                                {{$barg->F_Title}}                                          </a>
                                        </span>
                                                        </div>
                                                        <div class="pull-left">
                                                            <i class="icon icon-happy-face green"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cb-bottom">
                                                        <p>{{$comment->F_Text}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="showMoreWrapper">
                                        <button data-target="#moreComments" class="showMore" mj-type="single"
                                                mj-method="post"
                                                mj-target="/rating/ratings/getMoreRatings/182821/182770/20288/?page=1"
                                                mj-value="" mj-values="getCurrentRatingtId" oninvalid=""
                                                mj-success="successRating">
                                            <span class="_a">بیشتر</span>
                                            <i class="_a icon icon-arrow-down"></i>
                                            <i class="_b icon icon-arrow-up"></i></button>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- question -->
                        <section class="related cat-deal-color main-cat around-me clearfix">
                            <header class="section-header">
                                <h6 class="hx"><span class="icon icon-special-offer-location"></span><span
                                        class="article-h3">نت برگ های اطراف</span></h6>
                            </header>
                            <div class="main-cat-deal-thumbnail clearfix main-row">
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-6 col-md-12 col-sm-12 col-xs-24 cds-item  ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:health/162131/زومبا-در-باشگاه-اریکه-قرن/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/162131/2f270558.jpg"
                                                    alt="زومبا در باشگاه اریکه قرن" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title">
                                                    <a href="/tehran/d/c:health/162131/زومبا-در-باشگاه-اریکه-قرن/"
                                                       itemprop="url" class="truncate">
                                                        زومبا در باشگاه اریکه قرن </a>
                                                </h4>
                                                <span class="cdbm-total-buy">
                                <span class="ir">
                                    <i class="icon icon-shopping-cart hidden-xs"></i>
                                    <i class="icon icon-shopping-cart_L visible-xs"></i>
                                </span>
                                <span class="cdbm-tb-total">
                                    1                                </span>
                            </span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix">
                                                <a href="/area/میرداماد/" class="cdbf-location truncate">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                    <span class="cdbfl-address">
                                    میرداماد                                </span>
                                                </a>
                                                <span class="cdbf-takhfif">
                                <span class="cdbft-shape">
                                    <span class="cdbft-shape-text">
                                        %76                                    </span>
                                </span>
                            </span>
                                                <span class="cdbf-price">
                                <ins class="cdbf-netbarg-price">
                                    <span itemprop="price" content="280000">
                                        ۶۰,۰۰۰                                    </span>
                                    <span itemprop="priceCurrency" content="IRR"> تومان</span>
                                </ins>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-6 col-md-12 col-sm-12 col-xs-24 cds-item  ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:health/149365/میکرونیدلینگ-پوست-در-مطب-دکتر-سیفی/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/149365/1ec803e6.jpg"
                                                    alt="میکرونیدلینگ پوست در مطب دکتر سیفی" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title">
                                                    <a href="/tehran/d/c:health/149365/میکرونیدلینگ-پوست-در-مطب-دکتر-سیفی/"
                                                       itemprop="url" class="truncate">
                                                        میکرونیدلینگ پوست در مطب دکتر سیفی </a>
                                                </h4>
                                                <span class="cdbm-total-buy">
                                <span class="ir">
                                    <i class="icon icon-shopping-cart hidden-xs"></i>
                                    <i class="icon icon-shopping-cart_L visible-xs"></i>
                                </span>
                                <span class="cdbm-tb-total">
                                    86                                </span>
                            </span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix">
                                                <a href="/area/میرداماد/" class="cdbf-location truncate">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                    <span class="cdbfl-address">
                                    میرداماد                                </span>
                                                </a>
                                                <span class="cdbf-takhfif">
                                <span class="cdbft-shape">
                                    <span class="cdbft-shape-text">
                                        %92                                    </span>
                                </span>
                            </span>
                                                <span class="cdbf-price">
                                <ins class="cdbf-netbarg-price">
                                    <span itemprop="price" content="280000">
                                        ۲۰,۰۰۰                                    </span>
                                    <span itemprop="priceCurrency" content="IRR"> تومان</span>
                                </ins>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-6 col-md-12 col-sm-12 col-xs-24 cds-item  ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:restaurant/161926/بستنی-منفی-30-در-فودکورت-پل-طبیعت/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161926/1b9603b5.jpg"
                                                    alt="بستنی منفی 30 در فودکورت پل طبیعت" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title">
                                                    <a href="/tehran/d/c:restaurant/161926/بستنی-منفی-30-در-فودکورت-پل-طبیعت/"
                                                       itemprop="url" class="truncate">
                                                        بستنی منفی 30 در فودکورت پل طبیعت </a>
                                                </h4>
                                                <span class="cdbm-total-buy">
                                <span class="ir">
                                    <i class="icon icon-shopping-cart hidden-xs"></i>
                                    <i class="icon icon-shopping-cart_L visible-xs"></i>
                                </span>
                                <span class="cdbm-tb-total">
                                    12                                </span>
                            </span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix">
                                                <a href="/area/ونک/" class="cdbf-location truncate">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                    <span class="cdbfl-address">
                                    ونک                                </span>
                                                </a>
                                                <span class="cdbf-takhfif">
                                <span class="cdbft-shape">
                                    <span class="cdbft-shape-text">
                                        %34                                    </span>
                                </span>
                            </span>
                                                <span class="cdbf-price">
                                <ins class="cdbf-netbarg-price">
                                    <span itemprop="price" content="280000">
                                        ۱۶,۵۰۰                                    </span>
                                    <span itemprop="priceCurrency" content="IRR"> تومان</span>
                                </ins>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-6 col-md-12 col-sm-12 col-xs-24 cds-item  ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:education/161842/بن-تخفیف-خدمات-آرایشی-در-آرایشگاه-رزالین/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161842/1f0c03ec.jpg"
                                                    alt="بن تخفیف خدمات آرایشی در آرایشگاه رزالین" data-type="lazy">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title">
                                                    <a href="/tehran/d/c:education/161842/بن-تخفیف-خدمات-آرایشی-در-آرایشگاه-رزالین/"
                                                       itemprop="url" class="truncate">
                                                        بن تخفیف خدمات آرایشی در آرایشگاه رزالین </a>
                                                </h4>
                                                <span class="cdbm-total-buy">
                                <span class="ir">
                                    <i class="icon icon-shopping-cart hidden-xs"></i>
                                    <i class="icon icon-shopping-cart_L visible-xs"></i>
                                </span>
                                <span class="cdbm-tb-total">
                                    72                                </span>
                            </span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix">
                                                <a href="/area/میرداماد - میدان مادر/" class="cdbf-location truncate">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                    <span class="cdbfl-address">
                                    میرداماد - میدان مادر                                </span>
                                                </a>
                                                <span class="cdbf-takhfif">
                                <span class="cdbft-shape">
                                    <span class="cdbft-shape-text">
                                        %80                                    </span>
                                </span>
                            </span>
                                                <span class="cdbf-price">
                                <ins class="cdbf-netbarg-price">
                                    <span itemprop="price" content="280000">
                                        ۲,۰۰۰                                    </span>
                                    <span itemprop="priceCurrency" content="IRR"> تومان</span>
                                </ins>
                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="related cat-deal-color main-cat clearfix">
                            <header class="section-header today-netbarg">
                                <h3 class="hx"><span class="icon icon-similar-deals"></span><span class="article-h3">نت‌برگ‌های مشابه</span>
                                </h3>
                            </header>
                            <div class="main-cat-deal-thumbnail clearfix main-row">
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:health/162131/زومبا-در-باشگاه-اریکه-قرن/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/162131/2f270558.jpg"
                                                    alt="زومبا در باشگاه اریکه قرن" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:health/162131/زومبا-در-باشگاه-اریکه-قرن"
                                                                                          class="truncate">زومبا در
                                                        باشگاه اریکه قرن</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        1                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/میرداماد/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">میرداماد</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%76</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۲۵۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="6000000">
                                        ۶۰,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/161257/اسکیت-تفریحی-در-باشگاه-ورزشی-مرلین/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161257/36d805e4.jpg"
                                                    alt="اسکیت تفریحی در باشگاه ورزشی مرلین" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/161257/اسکیت-تفریحی-در-باشگاه-ورزشی-مرلین"
                                                                                          class="truncate">اسکیت تفریحی
                                                        در باشگاه ورزشی مرلین</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        6                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/اتوبان-ستاری/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">اتوبان ستاری</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%50</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۵,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="750000">
                                        ۷,۵۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/160385/شنا-و-آبتنی-در-استخر-شهرک-امید/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/160385/164a0372.jpg"
                                                    alt="شنا و آبتنی در استخر شهرک امید" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/160385/شنا-و-آبتنی-در-استخر-شهرک-امید"
                                                                                          class="truncate">شنا و آبتنی
                                                        در استخر شهرک امید</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        3899                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/شهرک-امید/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">شهرک امید</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%40</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۳۲,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="1920000">
                                        ۱۹,۲۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/161092/شنا-در-استخر-کارگران-شهید-معتمدی/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161092/32.jpg"
                                                    alt="شنا در استخر کارگران (شهید معتمدی)" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/161092/شنا-در-استخر-کارگران-شهید-معتمدی"
                                                                                          class="truncate">شنا در استخر
                                                        کارگران (شهید معتمدی)</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        336                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/خزانه/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">خزانه</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%23</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۵,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="1155000">
                                        ۱۱,۵۵۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/157804/شهربازی-هورا-پارک-واقع-در-مرکز-خرید-سمرقند-57/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/157804/54_2.jpg"
                                                    alt="شهربازی هورا پارک واقع در مرکز خرید سمرقند" data-type="lazy">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/157804/شهربازی-هورا-پارک-واقع-در-مرکز-خرید-سمرقند-57"
                                                                                          class="truncate">شهربازی هورا
                                                        پارک واقع در مرکز خرید سمرقند</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        585                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/جنت-آباد-جنوبی/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">جنت آباد جنوبی</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%81</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۳۰۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="5700000">
                                        ۵۷,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/153678/بدنسازی-در-مجموعه-یادگار-امام-دوره-3-ماهه/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/153678/1b2a03ab.jpg"
                                                    alt="بدنسازی در مجموعه یادگار امام (دوره 3 ماهه)" data-type="lazy">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/153678/بدنسازی-در-مجموعه-یادگار-امام-دوره-3-ماهه"
                                                                                          class="truncate">بدنسازی در
                                                        مجموعه یادگار امام (دوره 3 ماهه)</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        110                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/شهرک-غرب-دادمان/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">شهرک غرب-دادمان</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%45</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۸۰۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="44000000">
                                        ۴۴۰,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/160572/بازی-اسکیت-در-پیست-اسکیت-شهران-شمالی/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/160572/11.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/160572/11.jpg"
                                                    alt="بازی اسکیت در پیست اسکیت شهران شمالی" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/160572/11.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/160572/بازی-اسکیت-در-پیست-اسکیت-شهران-شمالی"
                                                                                          class="truncate">بازی اسکیت در
                                                        پیست اسکیت شهران شمالی</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        54                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/شهران-شمالی/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">شهران شمالی</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%40</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۵,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="900000">
                                        ۹,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/160551/دوچرخه-سواری-در-دهکده-گردشگری-سلامت-صبا/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/160551/1b7603b8.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/160551/1b7603b8.jpg"
                                                    alt="دوچرخه سواری در دهکده گردشگری سلامت صبا" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/160551/1b7603b8.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/160551/دوچرخه-سواری-در-دهکده-گردشگری-سلامت-صبا"
                                                                                          class="truncate">دوچرخه سواری
                                                        در دهکده گردشگری سلامت صبا</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        39                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/اتوبان ساوه/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">اتوبان ساوه</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%40</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="600000">
                                        ۶,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/160448/پرواز-با-پاراگلایدر-توسط-خلبان-باقری-وردآورد-75/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/160448/1d4b03ec.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/160448/1d4b03ec.jpg"
                                                    alt="پرواز با پاراگلایدر توسط خلبان باقری ( وردآورد )"
                                                    data-type="lazy" class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/160448/1d4b03ec.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/160448/پرواز-با-پاراگلایدر-توسط-خلبان-باقری-وردآورد-75"
                                                                                          class="truncate">پرواز با
                                                        پاراگلایدر توسط خلبان باقری ( وردآورد )</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        75                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/بلوار وردآورد/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">بلوار وردآورد</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%56</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۴۵۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="19800000">
                                        ۱۹۸,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/153820/سانس-آزاد-استخر-خوراکیان/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/153820/1e8703dc.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/153820/1e8703dc.jpg"
                                                    alt="سانس آزاد استخر خوراکیان" data-type="lazy" class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/153820/1e8703dc.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/153820/سانس-آزاد-استخر-خوراکیان"
                                                                                          class="truncate">سانس آزاد
                                                        استخر خوراکیان</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        8183                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/دامپزشکی/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">دامپزشکی</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%30</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۲۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="1400000">
                                        ۱۴,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/162797/اتاق-فرار-قاتل-سریالی/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="orange-label"></li>
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/162797/1f1703f1.jpg"
                                                    alt="اتاق فرار قاتل سریالی" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/162797/اتاق-فرار-قاتل-سریالی"
                                                                                          class="truncate">اتاق فرار
                                                        قاتل سریالی</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        1059                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/نارمک/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">نارمک</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%51</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۶۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="2940000">
                                        ۲۹,۴۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/160065/اقامتگاه-بومگردی-سرای-آقا-محمد-کاشان/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/160065/c3990b4a.jpg"
                                                    alt="اقامتگاه بومگردی سرای آقا محمد ( کاشان )" data-type="lazy">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/160065/اقامتگاه-بومگردی-سرای-آقا-محمد-کاشان"
                                                                                          class="truncate">اقامتگاه
                                                        بومگردی سرای آقا محمد ( کاشان )</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        9                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a
                                                    href="/area/کاشان-خیابان ملا حبیب اله/"
                                                    class="cdbf-location truncate"><span class="ir"><i
                                                            class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">کاشان-خیابان ملا حبیب اله</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%40</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۲۲۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="13200000">
                                        ۱۳۲,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/161484/اقامت-تک-و-فولبرد-هتل-آپارتمان2-ستاره-صدف/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161484/1.jpg"
                                                    alt="اقامت تک و فولبرد هتل آپارتمان2 ستاره صدف" data-type="lazy">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/161484/اقامت-تک-و-فولبرد-هتل-آپارتمان2-ستاره-صدف"
                                                                                          class="truncate">اقامت تک و
                                                        فولبرد هتل آپارتمان2 ستاره صدف</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        202                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/مشهد/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">مشهد</span></a><span class="cdbf-takhfif"><span
                                                        class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%30</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۲۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="8400000">
                                        ۸۴,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/161886/منطقه-بازی-بارلوتی/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161886/367f05db.jpg"
                                                    alt="منطقه بازی بارلوتی" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/161886/منطقه-بازی-بارلوتی"
                                                                                          class="truncate">منطقه بازی
                                                        بارلوتی</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        5                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/گیشا/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">گیشا</span></a><span class="cdbf-takhfif"><span
                                                        class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%50</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۲۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="1000000">
                                        ۱۰,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/161303/ps4-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/161303/22d00461.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161303/22d00461.jpg"
                                                    alt="ps4 در مجموعه تفریحی شهدای دانشگاه تهران" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/161303/22d00461.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/161303/ps4-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران"
                                                                                          class="truncate">ps4 در مجموعه
                                                        تفریحی شهدای دانشگاه تهران</a>
                                                </h4>
                                                <span class="cdbm-total-buy isempty"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        0                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a
                                                    href="/area/شهرک دانشگاه تهران/"
                                                    class="cdbf-location truncate"><span class="ir"><i
                                                            class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">شهرک دانشگاه تهران</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%50</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="500000">
                                        ۵,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/160603/اقامت-در-هتل-3-ستاره-کاسنیک/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/160603/702c0860.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/160603/702c0860.jpg"
                                                    alt="اقامت در هتل 3 ستاره کاسنیک" data-type="lazy" class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/160603/702c0860.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/160603/اقامت-در-هتل-3-ستاره-کاسنیک"
                                                                                          class="truncate">اقامت در هتل
                                                        3 ستاره کاسنیک</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        10                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/کرج-جاده چالوس/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">کرج-جاده چالوس</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%45</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۹۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="10450000">
                                        ۱۰۴,۵۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/162238/بازی-ps4-در-گیم-لند-طاها/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/162238/22d20462.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/162238/22d20462.jpg"
                                                    alt="بازی ps4 در گیم لند طاها" data-type="lazy" class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/162238/22d20462.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/162238/بازی-ps4-در-گیم-لند-طاها"
                                                                                          class="truncate">بازی ps4 در
                                                        گیم لند طاها</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        7                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/پونک/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">پونک</span></a><span class="cdbf-takhfif"><span
                                                        class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%50</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="500000">
                                        ۵,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/161063/شنا-در-استخر-باغ-صبا/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/161063/1e9f03e5.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161063/1e9f03e5.jpg"
                                                    alt="شنا در استخر باغ صبا" data-type="lazy" class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/161063/1e9f03e5.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/161063/شنا-در-استخر-باغ-صبا"
                                                                                          class="truncate">شنا در استخر
                                                        باغ صبا</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        9065                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/پونک/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">پونک</span></a><span class="cdbf-takhfif"><span
                                                        class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%51</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۴۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="1960000">
                                        ۱۹,۶۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/162033/بازی-سالتو-در-پارک-ارم/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/162033/222d0411.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/162033/222d0411.jpg"
                                                    alt="بازی سالتو در پارک ارم" data-type="lazy" class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/162033/222d0411.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/162033/بازی-سالتو-در-پارک-ارم"
                                                                                          class="truncate">بازی سالتو در
                                                        پارک ارم</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        90                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/شهربازی-ارم/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">شهربازی ارم</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%30</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="700000">
                                        ۷,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/161538/سرویس-لانج-و-فست-ترک-در-فرودگاه-امام-خمینی/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/161538/4a0006e7.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161538/4a0006e7.jpg"
                                                    alt="سرویس لانج و فست ترک در فرودگاه امام خمینی" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/161538/4a0006e7.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/161538/سرویس-لانج-و-فست-ترک-در-فرودگاه-امام-خمینی"
                                                                                          class="truncate">سرویس لانج و
                                                        فست ترک در فرودگاه امام خمینی</a>
                                                </h4>
                                                <span class="cdbm-total-buy isempty"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        0                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a
                                                    href="/area/فرودگاه امام خمینی/"
                                                    class="cdbf-location truncate"><span class="ir"><i
                                                            class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">فرودگاه امام خمینی</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%10</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۵۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="13500000">
                                        ۱۳۵,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:education/162073/ده-جلسه-آموزش-تنیس-در-مجموعه-تنیس-اسپید/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/162073/41810637.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/162073/41810637.jpg"
                                                    alt="ده جلسه آموزش تنیس در مجموعه تنیس اسپید" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/162073/41810637.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:education/162073/ده-جلسه-آموزش-تنیس-در-مجموعه-تنیس-اسپید"
                                                                                          class="truncate">ده جلسه آموزش
                                                        تنیس در مجموعه تنیس اسپید</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        3                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a
                                                    href="/area/بیمارستان چمران، منطقه ۱، تهران، استان تهران،/"
                                                    class="cdbf-location truncate"><span class="ir"><i
                                                            class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">بیمارستان چمران، منطقه ۱، تهران، استان تهران،</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%50</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۷۰۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="35000000">
                                        ۳۵۰,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/156549/دلفیناریوم-برج-میلاد-89/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/156549/1e5303de.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/156549/1e5303de.jpg"
                                                    alt="دلفیناریوم برج میلاد" data-type="lazy" class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/156549/1e5303de.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/156549/دلفیناریوم-برج-میلاد-89"
                                                                                          class="truncate">دلفیناریوم
                                                        برج میلاد</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        7773                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/برج-میلاد/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">برج میلاد</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%58</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۶۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="2520000">
                                        ۲۵,۲۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:education/160879/trx-کراس-فیت-و-فیوژن-فیتنس-در-مجموعه-دیهیم/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/160879/29ba04f5.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/160879/29ba04f5.jpg"
                                                    alt="TRX، کراس فیت و فیوژن فیتنس در مجموعه دیهیم" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/160879/29ba04f5.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:education/160879/trx-کراس-فیت-و-فیوژن-فیتنس-در-مجموعه-دیهیم"
                                                                                          class="truncate">TRX، کراس فیت
                                                        و فیوژن فیتنس در مجموعه دیهیم</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        24                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/شهید-مدنی-شمالی/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">شهید مدنی شمالی</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%80</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۷۵,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="1500000">
                                        ۱۵,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/162409/پینت-بال-آرمان-با-100-گلوله-رایگان-اولیه-29/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/162409/1bac03ab.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/162409/1bac03ab.jpg"
                                                    alt="پینت بال آرمان با 100 گلوله رایگان اولیه" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/162409/1bac03ab.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/162409/پینت-بال-آرمان-با-100-گلوله-رایگان-اولیه-29"
                                                                                          class="truncate">پینت بال
                                                        آرمان با 100 گلوله رایگان اولیه</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        930                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/خیابان استخر/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">خیابان استخر</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%90</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۲,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="120000">
                                        ۱,۲۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/162232/لاغری-و-چربی-سوزی-در-باشگاه-ترنج/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                    <li class="violet-label"></li>
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/162232/8deb0990.jpg"
                                                    alt="لاغری و چربی سوزی در باشگاه ترنج" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/162232/لاغری-و-چربی-سوزی-در-باشگاه-ترنج"
                                                                                          class="truncate">لاغری و چربی
                                                        سوزی در باشگاه ترنج</a>
                                                </h4>
                                                <span class="cdbm-total-buy isempty"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        0                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/پاسداران/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">پاسداران</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%50</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۲۸۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="14000000">
                                        ۱۴۰,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/161594/هتل-آذین-مشهد-فولبرد/"
                                               class="figure">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161594/1886037c.jpg"
                                                    alt="هتل آذین مشهد ( فولبرد )" data-type="lazy"> </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/161594/هتل-آذین-مشهد-فولبرد"
                                                                                          class="truncate">هتل آذین مشهد
                                                        ( فولبرد )</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        224                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/خیابان-امام-رضا/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">خیابان امام رضا</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%34</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۵۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="9900000">
                                        ۹۹,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/162812/رویا-پارک-اولین-پارک-جادویی-ایران-58/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/162812/1b1503aa.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/162812/1b1503aa.jpg"
                                                    alt="رویا پارک اولین پارک جادویی ایران" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/162812/1b1503aa.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/162812/رویا-پارک-اولین-پارک-جادویی-ایران-58"
                                                                                          class="truncate">رویا پارک
                                                        اولین پارک جادویی ایران</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        5078                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/میدان نیاوران/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">میدان نیاوران</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%30</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۳۵,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="2450000">
                                        ۲۴,۵۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/161435/اقامت-در-هتل-هرندی-تجربه-ای-متفاوت/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/161435/220c0411.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/161435/220c0411.jpg"
                                                    alt="اقامت در هتل هرندی تجربه ای متفاوت" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/161435/220c0411.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/161435/اقامت-در-هتل-هرندی-تجربه-ای-متفاوت"
                                                                                          class="truncate">اقامت در هتل
                                                        هرندی تجربه ای متفاوت</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        567                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/خیابان شوش/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">خیابان شوش</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%46</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۲۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="6480000">
                                        ۶۴,۸۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/159993/اقامت-در-هتل-آپارتمان-گل-نرگس-مشهد/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159993/a36b0a3d.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/159993/a36b0a3d.jpg"
                                                    alt="اقامت در هتل آپارتمان گل نرگس مشهد" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/159993/a36b0a3d.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/159993/اقامت-در-هتل-آپارتمان-گل-نرگس-مشهد"
                                                                                          class="truncate">اقامت در هتل
                                                        آپارتمان گل نرگس مشهد</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        34                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/مشهد/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">مشهد</span></a><span class="cdbf-takhfif"><span
                                                        class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%35</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۰۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="6500000">
                                        ۶۵,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div itemscope="" itemtype="http://schema.org/Offer"
                                     class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">
                                    <div class="cat-deal-smallbox">
                                        <div class="cat-deal-box">
                                            <a href="/tehran/d/c:entertainment/162774/تور-غار-های-كتله-خور-و-عليصدر-یکروزه/"
                                               class="figure"
                                               style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/162774/806108e7.jpg&quot;); background-size: cover;">
                                                <ul class="deal-tag list-unstyled">
                                                </ul>
                                                <div class="overlay">
                                                    <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                </div>
                                                <img
                                                    data-src="http://static.netbarg.com/img/responsive_medium/deals/162774/806108e7.jpg"
                                                    alt="تور غار های كتله خور و عليصدر یکروزه" data-type="lazy"
                                                    class="sr-only"
                                                    src="http://static.netbarg.com/img/responsive_medium/deals/162774/806108e7.jpg">
                                            </a>
                                            <div class="cat-deal-box-main clearfix">
                                                <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                          href="/tehran/d/c:entertainment/162774/تور-غار-های-كتله-خور-و-عليصدر-یکروزه"
                                                                                          class="truncate">تور غار های
                                                        كتله خور و عليصدر یکروزه</a>
                                                </h4>
                                                <span class="cdbm-total-buy"><span class="ir"><i
                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                        class="cdbm-tb-total">
                                        11                                    </span></span>
                                            </div>
                                            <div class="cat-deal-box-footer clearfix"><a href="/area/زرتشت-غربی/"
                                                                                         class="cdbf-location truncate"><span
                                                        class="ir"><i class="icon icon-location74"></i></span><span
                                                        class="cdbfl-address">زرتشت غربی</span></a><span
                                                    class="cdbf-takhfif"><span class="cdbft-shape"><span
                                                            class="cdbft-shape-text">%30</span></span></span><span
                                                    class="cdbf-price">
              <del class="cdbf-real-price"> <span>۱۵۰,۰۰۰                    </span></del><ins
                                                        class="cdbf-netbarg-price"><span itemprop="price"
                                                                                         content="10500000">
                                        ۱۰۵,۰۰۰                                        </span><span
                                                            itemprop="priceCurrency"
                                                            content="IRR"> تومان</span></ins></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="tags clearfix">
                            <header class="section-header">
                                <h3 class="hx"><span class="icon icon-tag_netbarg-2"></span><span class="article-h3">برچسب های مرتبط</span>
                                </h3>
                            </header>
                            <ul class="clearfix">
                                <li><a href="/trend/تخفیف-های-کودک-و-نوجوان/"
                                       class="inh"><span>تخفیف های کودک و نوجوان</span></a></li>
                                <li><a href="/trend/تفریحات-گروهی/" class="inh"><span>تفریحات گروهی</span></a></li>
                                <li><a href="/trend/خانه-بازی-کودک-در-تهران/"
                                       class="inh"><span>خانه بازی کودک در تهران</span></a></li>
                                <li><a href="/trend/خانه-مشاغل-کودکان/" class="inh"><span>خانه مشاغل کودکان</span></a>
                                </li>
                                <li><a href="/trend/مرکز-بازی-کودک/" class="inh"><span>مرکز بازی کودک</span></a></li>
                                <li><a href="/trend/شهر-مشاغل-کودک/" class="inh"><span>شهر مشاغل کودک</span></a></li>
                                <li><a href="/trend/شهربازی-مشاغل-کودک/" class="inh"><span>شهربازی مشاغل کودک</span></a>
                                </li>
                                <li><a href="/trend/مراکز-تفریحی-تهران/" class="inh"><span>مراکز تفریحی تهران</span></a>
                                </li>
                                <li><a href="/trend/برای-تفریح-در-تهران-کجا-بریم/" class="inh"><span>برای تفریح در تهران کجا بریم</span></a>
                                </li>
                                <li><a href="/trend/مکان-های-تفریحی-تهران/"
                                       class="inh"><span>مکان های تفریحی تهران</span></a></li>
                                <li><a href="/trend/تفریحات-تهران/" class="inh"><span>تفریحات تهران</span></a></li>
                                <li><a href="/trend/تفریح-در-تهران/" class="inh"><span>تفریح در تهران</span></a></li>
                                <li><a href="/trend/پیشنهادات-برتر-نت-برگ/"
                                       class="inh"><span>پیشنهادات برتر نت برگ</span></a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs left-aside sticky-aside">
                        <div id="nava2" class="affix-top">
                            <div class="float-left-button">
                                <ul>
                                    <a href="javascript:void(0)">
                                        <li><i><i class="icon icon-support"></i></i><span>۰۲۱-۴۱۰۹۶۱۰۰ : پشتیبانی</span>
                                        </li>
                                    </a>
                                    <a href="javascript:void(0)">
                                        <li><i><i class="icon icon-home-phone"></i></i><span>۰۲۱-۴۲۰۹۱۰۰۰ : شرکت</span>
                                        </li>
                                    </a>
                                    <a href="/page/buy-netbarg/">
                                        <li><i><i class="icon icon-lifebuoy"></i></i><span>راهنمای خرید نت برگ</span>
                                        </li>
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

            <div id="dealProperty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 class="default-property modal nb-modal nb-fade">
                <div role="document" class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i
                                    aria-hidden="true" class="icon icon-close"></i>
                            </button>
                            <div class="modal-title-wrapper">
                                <h4 class="modal-title ft-3">مجموعه فکر بازیا</h4>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-24">
                                    <div class="clearfix dealProp ">
                                        <div class="_1">
                                            <a href="/tehran/d/c:entertainment/160586/سرزمین-فکر-بازیا-مراجعه-در-روزهای-شنبه-الی-سه-شنبه">
                                                <div class="_img">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_medium/deals/160586/21d70411.jpg"
                                                        alt="سرزمین فکر بازیا مراجعه در روزهای شنبه الی سه شنبه"></div>
                                            </a>
                                            <div class="_d">
                                                <a href="/tehran/d/c:entertainment/160586/سرزمین-فکر-بازیا-مراجعه-در-روزهای-شنبه-الی-سه-شنبه">سرزمین
                                                    فکر بازیا مراجعه در روزهای شنبه الی سه شنبه با 40% تخفیف و پرداخت
                                                    تنها 30,000 تومان</a>
                                                <div class="sold"><i class="icon icon-shopping-cart_L"></i><span>
                                                            1171                                                        </span><span>فروخته شده</span>
                                                </div>
                                                <div class="exp"><i class="icon icon-time-back"></i><span>۶ روز و ۳ ساعت مانده</span>
                                                </div>
                                            </div>
                                        </div>
                                        <form method="post" accept-charset="utf-8" mj-type="form"
                                              mj-target="/baskets/addToBasket/160586.json" mj-method="post"
                                              mj-success="addToBasket" mj-before="prepairAddToBasket" mj-model="model1"
                                              action="/tehran/d/c:entertainment/160583/%D8%B3%D8%B1%D8%B2%D9%85%DB%8C%D9%86-%D9%81%DA%A9%D8%B1-%D8%A8%D8%A7%D8%B2%DB%8C%D8%A7-%D8%AF%D8%B1-%D8%AC%D8%B4%D9%86%D9%88%D8%A7%D8%B1%D9%87-%D8%AA%D8%A7%D8%A8%D8%B3%D8%AA%D8%A7%D9%86%DB%8C/">
                                            <div style="display:none;"><input name="_method" value="POST" type="hidden">
                                            </div>
                                            <div class="_2"><span class="off ft-1">%40</span>
                                                <select name="item_quantity" class="single-select _quantity">
                                                    <option value="1" selected="selected">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                                <div class="realValue">
                                                    <del>۵۰,۰۰۰</del>
                                                </div>
                                                <div class="currentValue">
                                                    <del class="hidden">500000</del>
                                                    <ins>۳۰,۰۰۰</ins>
                                                    <span>تومان</span>
                                                </div>
                                                <div role="group" aria-label="" class="sideBySideBtn btn-group">
                                                    <button type="submit" data-type="basket"
                                                            class="btn btn-default addBasket160586">اضافه
                                                        به سبد
                                                    </button>
                                                    <button type="submit" data-type="buy"
                                                            class="btn btn-default goBasket160586">خرید نت
                                                        برگ
                                                    </button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-24">
                                    <div class="clearfix dealProp ">
                                        <div class="_1">
                                            <a href="/tehran/d/c:entertainment/160588/سرزمین-فکر-بازیا-مراجعه-در-روزهای-چهارشنبه-تا-جمعه">
                                                <div class="_img">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_medium/deals/160588/21d70411.jpg"
                                                        alt="سرزمین فکر بازیا مراجعه در روزهای چهارشنبه تا جمعه"></div>
                                            </a>
                                            <div class="_d">
                                                <a href="/tehran/d/c:entertainment/160588/سرزمین-فکر-بازیا-مراجعه-در-روزهای-چهارشنبه-تا-جمعه">سرزمین
                                                    فکر بازیا مراجعه در روزهای چهارشنبه الی جمعه با 30% تخفیف و پرداخت
                                                    تنها 35,000 تومان</a>
                                                <div class="sold"><i class="icon icon-shopping-cart_L"></i><span>
                                                            883                                                        </span><span>فروخته شده</span>
                                                </div>
                                                <div class="exp"><i class="icon icon-time-back"></i><span>۶ روز و ۳ ساعت مانده</span>
                                                </div>
                                            </div>
                                        </div>
                                        <form method="post" accept-charset="utf-8" mj-type="form"
                                              mj-target="/baskets/addToBasket/160588.json" mj-method="post"
                                              mj-success="addToBasket" mj-before="prepairAddToBasket" mj-model="model1"
                                              action="/tehran/d/c:entertainment/160583/%D8%B3%D8%B1%D8%B2%D9%85%DB%8C%D9%86-%D9%81%DA%A9%D8%B1-%D8%A8%D8%A7%D8%B2%DB%8C%D8%A7-%D8%AF%D8%B1-%D8%AC%D8%B4%D9%86%D9%88%D8%A7%D8%B1%D9%87-%D8%AA%D8%A7%D8%A8%D8%B3%D8%AA%D8%A7%D9%86%DB%8C/">
                                            <div style="display:none;"><input name="_method" value="POST" type="hidden">
                                            </div>
                                            <div class="_2"><span class="off ft-1">%30</span>
                                                <select name="item_quantity" class="single-select _quantity">
                                                    <option value="1" selected="selected">1</option>
                                                    <option value="2">2</option>
                                                </select>
                                                <div class="realValue">
                                                    <del>۵۰,۰۰۰</del>
                                                </div>
                                                <div class="currentValue">
                                                    <del class="hidden">500000</del>
                                                    <ins>۳۵,۰۰۰</ins>
                                                    <span>تومان</span>
                                                </div>
                                                <div role="group" aria-label="" class="sideBySideBtn btn-group">
                                                    <button type="submit" data-type="basket"
                                                            class="btn btn-default addBasket160588">اضافه
                                                        به سبد
                                                    </button>
                                                    <button type="submit" data-type="buy"
                                                            class="btn btn-default goBasket160588">خرید نت
                                                        برگ
                                                    </button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-24">
                                    <div class="clearfix dealProp done">
                                        <div class="_1">
                                            <a href="/tehran/d/c:entertainment/158783/جشنواره-تابستانی-سرزمین-فکر-بازیا">
                                                <div class="_img">
                                                    <img
                                                        src="http://static.netbarg.com/img/responsive_medium/deals/158783/21d70411.jpg"
                                                        alt="جشنواره تابستانی سرزمین فکر بازیا"></div>
                                            </a>
                                            <div class="_d">
                                                <a href="/tehran/d/c:entertainment/158783/جشنواره-تابستانی-سرزمین-فکر-بازیا">جشنواره
                                                    تابستانی سرزمین فکر بازیا در باغ کتاب با 60% تخفیف و پرداخت تنها
                                                    24,000 تومان به جای 60,000 تومان</a>
                                                <div class="sold"><i class="icon icon-shopping-cart_L"></i><span>
                                                            2237                                                        </span><span>فروخته شده</span>
                                                </div>
                                                <div class="exp"><i class="icon icon-time-back"></i><span>0</span>
                                                </div>
                                            </div>
                                        </div>
                                        <form method="post" accept-charset="utf-8" mj-type="form"
                                              mj-target="/baskets/addToBasket/158783.json" mj-method="post"
                                              mj-success="addToBasket" mj-before="prepairAddToBasket" mj-model="model1"
                                              action="/tehran/d/c:entertainment/160583/%D8%B3%D8%B1%D8%B2%D9%85%DB%8C%D9%86-%D9%81%DA%A9%D8%B1-%D8%A8%D8%A7%D8%B2%DB%8C%D8%A7-%D8%AF%D8%B1-%D8%AC%D8%B4%D9%86%D9%88%D8%A7%D8%B1%D9%87-%D8%AA%D8%A7%D8%A8%D8%B3%D8%AA%D8%A7%D9%86%DB%8C/">
                                            <div style="display:none;"><input name="_method" value="POST" type="hidden">
                                            </div>
                                            <div class="_2"><span class="off ft-1">%60</span>
                                                <select disabled="" class="single-select _quantity">
                                                    <option>تعداد</option>
                                                </select>

                                                <div class="realValue">
                                                    <del>۶۰,۰۰۰</del>
                                                </div>
                                                <div class="currentValue">
                                                    <del class="hidden">600000</del>
                                                    <ins>۲۴,۰۰۰</ins>
                                                    <span>تومان</span>
                                                </div>
                                                <button class="btn btn-default nb-btn-disabled">تمام شد</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- map modal -->
            <div id="editQ" tabindex="-1" role="dialog" class="modal fade">
                <div role="document" class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title title-admin">ارسال پاسخ به سوال</h4>
                        </div>
                        <form method="post" accept-charset="utf-8" class="comment-form" mj-type="form"
                              mj-target="/comment/admin/comments/replyFromClient/160583.json" mj-method="post"
                              mj-success="responseDataCommentAdmin"
                              action="/tehran/d/c:entertainment/160583/%D8%B3%D8%B1%D8%B2%D9%85%DB%8C%D9%86-%D9%81%DA%A9%D8%B1-%D8%A8%D8%A7%D8%B2%DB%8C%D8%A7-%D8%AF%D8%B1-%D8%AC%D8%B4%D9%86%D9%88%D8%A7%D8%B1%D9%87-%D8%AA%D8%A7%D8%A8%D8%B3%D8%AA%D8%A7%D9%86%DB%8C/">
                            <div style="display:none;"><input name="_method" value="POST" type="hidden"></div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-24 m-b">
                                        <div class="input textarea"><textarea name="mainQBody" id="mainQBody"
                                                                              placeholder="سوال کاربر"
                                                                              class="single-input" rows="5"></textarea>
                                        </div>
                                        <input name="mainQId" id="mainQId" type="hidden"><input name="deal_id"
                                                                                                id="deal_id"
                                                                                                type="hidden"><input
                                            name="admin_reply_id" id="admin_reply_id" type="hidden"><input name="typeQ"
                                                                                                           id="typeQ"
                                                                                                           type="hidden">
                                    </div>
                                    <div class="col-xs-24 m-b">
                                        <select name="defaultAnswers" type="select" id="defaultAnswers"
                                                class="form-control" onchange="prepareReplyAdminComment(this)"></select>
                                    </div>
                                    <div class="col-xs-24 m-b">
                                        <div class="input textarea"><textarea name="adminReply"
                                                                              placeholder="پاسخ خود را تایپ کنید ..."
                                                                              class="single-input" id="adminreply"
                                                                              rows="5"></textarea></div>
                                    </div>
                                    <div class="col-xs-24">
                                        <div class="checkbox checkbox-success checked">

                                            <input name="status" value="1" class="styled" id="status" type="checkbox">
                                            <label for="status">فعال شدن نظر و پاسخ</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-24">
                                        <div class="checkbox checkbox-success  checked">
                                            <input name="notify" value="1" class="styled" checked="checked" id="notify"
                                                   type="checkbox"> <label for="notify">ارسال پاسخ به کاربر از طریق
                                                ایمیل</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer clearfix">
                                <button type="submit" class="btn btn-success pull-left" mj-for="model1">ثبت</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="reply" tabindex="-1" role="dialog" class="InDealPage modal nb-modal fade">
                <div role="document" class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i
                                    aria-hidden="true" class="icon icon-close"></i>
                            </button>
                            <div class="modal-title-wrapper">
                                <h4 class="modal-title ft-3">پاسخ شما به این دیدگاه</h4>
                            </div>
                        </div>
                        <div class="modal-body clearfix">
                            <iframe src="" class="embded-iframe" data-test=""></iframe>
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
        </div>


        <div id="giftCardModal" tabindex="-1" role="dialog" class="modal nb-modal nb-fade">
            <div role="document" class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i
                                aria-hidden="true" class="icon icon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body modal-body-gift">

                    </div>
                </div>
            </div>
        </div>

        <button id="giftCardModalTrigger" data-toggle="modal" data-target="#giftCardModal"
                class="btn nb-btn nb-btn-danger hidden"></button>

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



        <script type="application/ld+json">

            {
        "@context": "http://schema.org/",
        "@type": "Product",
        "name": "سرزمین فکر بازیا در جشنواره تابستانی",
        "image": "http://static.netbarg.com/img/responsive_medium/deals/160583/21d70411.jpg",
        "description": "سرزمین فکر بازیا با جشنواره تابستانی در باغ کتاب تا 60% تخفیف و پرداخت از 24,000 تومان",
        "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "98",
        "ratingCount": "98"
        },
        "offers": {
        "@type": "Offer",
        "priceCurrency": "IRR",
        "price": "300000",
        "priceValidUntil": "2019-09-02",
        "availability": "http://schema.org/InStock",
        "seller": {
        "@type": "Organization",
        "name": "مجموعه فکر بازیا"
        }
        }
        }






        </script>


    </main>
@endsection
