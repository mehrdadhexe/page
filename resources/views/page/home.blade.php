@extends('layout.index')
@section('content')
    <main>
        @php
            //  F_URL
              //dd(\App\Barg::find(1)->with('Media')->get());
        @endphp
        <div class="page-index page-home">


            @include('component.slider')


            <div class="wrapper-2">
                <div class="container-fluid">
                    <div class="row h-position">


                        @include('component.float_cat')


                        <div class="col-lg-22 col-md-22 col-sm-24 col-xs-24 padd-0-xs clearfix">
                            <section class="related cat-deal-color main-cat around-me clearfix">
                                <header class="section-header">
                                    <h6 class="hx"><span class="icon icon-special-user-offer"></span><span
                                                class="article-h3">پیشنهادات ویژه نت برگ</span></h6>
                                </header>
                                <div class="main-cat-deal-thumbnail clearfix main-row">

                                    @foreach(\App\Suggestions::all() as $offer_item)

                                        <div itemscope="" itemtype="http://schema.org/Offer"
                                             class="col-lg-6 col-md-12 col-sm-12 col-xs-24 cds-item  ">
                                            <div class="cat-deal-smallbox">
                                                <div class="cat-deal-box">
                                                    <a href="{{\App\Setting::getUrlOff($offer_item->F_BargID)}}"
                                                       class="figure"
                                                       style="background-image: url({{\App\Barg::find($offer_item->F_BargID)->F_Pic}}); background-size: cover;">
                                                        <ul class="deal-tag list-unstyled">
                                                        </ul>
                                                        <div class="overlay">
                                                            <div class="nb-btn nb-btn-success">مشاهده و خرید</div>
                                                        </div>
                                                        <img data-src="{{\App\Barg::find($offer_item->F_BargID)->F_Pic}}"
                                                             alt="جشنواره سرزمین فکر بازیا در باغ کتاب" data-type="lazy"
                                                             class="sr-only"
                                                             src="{{\App\Barg::find($offer_item->F_BargID)->F_Pic}}">
                                                    </a>
                                                    <div class="cat-deal-box-main clearfix">
                                                        <h4 itemprop="name" class="cdbm-title">
                                                            <a href="{{\App\Setting::getUrlOff($offer_item->F_BargID)}}"
                                                               itemprop="url" class="truncate">
                                                                {{\App\Barg::find($offer_item->F_BargID)->F_Title}}
                                                            </a>
                                                        </h4>
                                                        <span class="cdbm-total-buy">
                                <span class="ir">
                                    <i class="icon icon-shopping-cart hidden-xs"></i>
                                    <i class="icon icon-shopping-cart_L visible-xs"></i>
                                </span>
                                <span class="cdbm-tb-total">
 {{\App\Barg::find($offer_item->F_BargID)->DocumentDetail->count()}}
                                                                   </span>
                            </span>
                                                    </div>
                                                    <div class="cat-deal-box-footer clearfix">
                                                        <a href="" class="cdbf-location truncate">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">
                                                            {{\App\Barg::find($offer_item->F_BargID)->F_Adress}}

                                                                   </span>
                                                        </a>
                                                        <span class="cdbf-takhfif">
                                <span class="cdbft-shape">
                                    <span class="cdbft-shape-text">
                                        %{{\App\Barg::find($offer_item->F_BargID)->F_Off}}                                    </span>
                                </span>
                            </span>
                                                        <span class="cdbf-price">
                                <ins class="cdbf-netbarg-price">
                                    <span itemprop="price" content="280000">
                                          @php
                                              $fee=\App\Barg::find($offer_item->F_BargID)->F_Fee;
                                              $off=\App\Barg::find($offer_item->F_BargID)->F_Off;
                                              $price=($fee/100)*$off;

                                          @endphp
                                        {{number_format($price)}}
                                                                      </span>
                                    <span itemprop="priceCurrency" content="IRR"> تومان</span>
                                </ins>
                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </section>

                            <section class="cat-big-small">

                                @foreach($section as $item)

                                    <article id="float-cat-restaurant" class="cat-deal-color color-rescoffee">
                                        <header class="section-header"><a href=""
                                                                          class="visible-xs">بیشتر</a>
                                            <h3 class="hx"><span class="ir"><i
                                                            class="icon {{$item["F_Category"]->F_Icon}}"></i></span><a
                                                        href="" class="article-h3">
                                                    {{$item["F_Category"]->F_Name}}


                                                </a>
                                            </h3>
                                        </header>

                                        <div class="main-row clearfix">
                                            @if(count($item["F_Barg"])>=1)
                                                <div itemscope="" itemtype="http://schema.org/Offer"
                                                     class="col-lg-12 col-md-12 col-sm-24 col-xs-24 cat-deal-bigbox">
                                                    <div class="cat-deal-box ">
                                                        <a href="{{\App\Setting::getUrlOff($item["F_Barg"][0]->F_BargID)}}"
                                                           class="figure"
                                                           style="background-image: url(&quot;http://static.netbarg.com/img/responsive_large/deals/154389/1eab03e1.jpg&quot;); background-size: cover;">
                                                            <ul class="deal-tag list-unstyled">
                                                                <li class="violet-label"></li>
                                                            </ul>
                                                            <img data-src="{{$item["F_Barg"][0]->F_Pic}}"
                                                                 alt="" data-type="lazy" shema="1"
                                                                 itemprop="image"
                                                                 content="{{$item["F_Barg"][0]->F_Pic}}"
                                                                 class="sr-only"
                                                                 src="{{$item["F_Barg"][0]->F_Pic}}">
                                                        </a>
                                                        <div class="cat-deal-box-main clearfix">
                                                            <h4 itemprop="name" class="cdbm-title"><a itemprop="url"
                                                                                                      href="{{\App\Setting::getUrlOff($item["F_Barg"][0]->F_BargID)}}"
                                                                                                      class="truncate">


                                                                    {{$item["F_Barg"][0]->F_Title}}


                                                                </a>
                                                            </h4>
                                                            <span class="cdbm-total-buy"><span class="ir"><i
                                                                            class="icon icon-shopping-cart hidden-xs"></i><i
                                                                            class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                                        class="cdbm-tb-total">

                                                    {{$item["F_Barg"][0]->DocumentDetail->count()}}


                                                                </span></span>
                                                        </div>
                                                        <div class="cat-deal-box-footer clearfix"><span
                                                                    class="cdbf-takhfif"><span
                                                                        class="cdbft-shape"><span
                                                                            class="cdbft-shape-text">%{{$item["F_Barg"][0]->F_Off}}</span></span></span><a
                                                                    href=""
                                                                    class="cdbf-location truncate"><span
                                                                        class="ir"><i
                                                                            class="icon icon-location74"></i></span><span
                                                                        class="cdbfl-address">{{$item["F_Barg"][0]->F_Mohale}}</span></a><a
                                                                    href="{{\App\Setting::getUrlOff($item["F_Barg"][0]->F_BargID)}}"
                                                                    class="cdbf-buy-icon">
                                                                <button class="nb-btn nb-btn-icon nb-btn-success">مشاهده
                                                                    و
                                                                    خرید<i
                                                                            class="icon icon-shopping-cart2"></i>
                                                                </button>

                                                            </a><span class="cdbf-price">
            <del class="cdbf-real-price"><span></span></del><ins class="cdbf-netbarg-price">
            <span itemprop="price" content="165000">
                @php
                    $fee=\App\Barg::find($item["F_Barg"][0]->F_BargID)->F_Fee;
                    $off=\App\Barg::find($item["F_Barg"][0]->F_BargID)->F_Off;
                    $price=($fee/100)*$off;

                @endphp
                {{number_format($price)}}



            </span>


                                                                    <span itemprop="priceCurrency"
                                                                          content="IRR"> تومان</span>


                                                                </ins>


                                                            </span>




                                                        </div>
                                                    </div>
                                                </div>
                                            @endif


                                            <div class="col-lg-12 col-md-12 col-sm-24 col-xs-24 cat-deal-smallbox">
                                                <div class="row">

                                                    @if(count($item["F_Barg"])>=2)

                                                        <div itemscope="" itemtype="http://schema.org/Offer"
                                                             class="col-lg-12 col-md-12 col-sm-8 cds-item ">
                                                            <div class="cat-deal-box"><a
                                                                        href="{{\App\Setting::getUrlOff($item["F_Barg"][1]->F_BargID)}}"
                                                                        class="figure"
                                                                        style="background-image: url(&quot;http://static.netbarg.com/img/responsive_small/deals/159010/1b4f03ab.jpg&quot;); background-size: cover;">
                                                                    <ul class="deal-tag list-unstyled">
                                                                        <li class="orange-label"></li>
                                                                        <li class="violet-label"></li>
                                                                    </ul>
                                                                    <div class="overlay">
                                                                        <div class="nb-btn nb-btn-success">مشاهده و
                                                                            خرید
                                                                        </div>
                                                                    </div>
                                                                    <img data-src="{{$item["F_Barg"][1]->F_Pic}}"
                                                                         alt="صبحانه سالم در عمارت خانه پدری"
                                                                         data-type="lazy"
                                                                         shema="1" itemprop="image"
                                                                         content="{{$item["F_Barg"][1]->F_Pic}}"
                                                                         class="sr-only"
                                                                         src="{{$item["F_Barg"][1]->F_Pic}}"></a>
                                                                <div class="cat-deal-box-main clearfix">
                                                                    <h4 itemprop="name" class="cdbm-title"><a
                                                                                itemprop="url"
                                                                                href="{{\App\Setting::getUrlOff($item["F_Barg"][1]->F_BargID)}}"
                                                                                class="truncate">


                                                                            {{$item["F_Barg"][1]->F_Title}}


                                                                        </a>
                                                                    </h4>
                                                                    <span class="cdbm-total-buy"><span class="ir"><i
                                                                                    class="icon icon-shopping-cart hidden-xs"></i><i
                                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                                                class="cdbm-tb-total">
                                              {{$item["F_Barg"][1]->DocumentDetail->count()}}                                       </span></span>
                                                                </div>
                                                                <div class="cat-deal-box-footer clearfix"><a
                                                                            href=""
                                                                            class="cdbf-location truncate"><span
                                                                                class="ir"><i
                                                                                    class="icon icon-location74"></i></span><span
                                                                                class="cdbfl-address">{{$item["F_Barg"][1]->F_Mohale}}</span></a><span
                                                                            class="cdbf-takhfif"><span
                                                                                class="cdbft-shape"><span
                                                                                    class="cdbft-shape-text">%{{$item["F_Barg"][1]->F_Off}}</span></span></span><span
                                                                            class="cdbf-price">
                <del class="cdbf-real-price visible-xs"><span>۱۸,۰۰۰</span></del><ins class="cdbf-netbarg-price"><span
                                                                                    itemprop="price"
                                                                                    content="99000">
                                                                                @php
                                                                                    $fee=\App\Barg::find($item["F_Barg"][1]->F_BargID)->F_Fee;
                                                                                    $off=\App\Barg::find($item["F_Barg"][1]->F_BargID)->F_Off;
                                                                                    $price=($fee/100)*$off;

                                                                                @endphp
                                                                                {{number_format($price)}}

                                                                            </span><span
                                                                                    itemprop="priceCurrency"
                                                                                    content="IRR"> تومان</span></ins></span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    @endif
                                                    @if(count($item["F_Barg"])>=3)
                                                        <div itemscope="" itemtype="http://schema.org/Offer"
                                                             class="col-lg-12 col-md-12 col-sm-8 cds-item ">
                                                            <div class="cat-deal-box"><a
                                                                        href="{{\App\Setting::getUrlOff($item["F_Barg"][2]->F_BargID)}}"
                                                                        class="figure"
                                                                        style="background-image: url(&quot;http://static.netbarg.com/img/responsive_small/deals/158081/1b5e03ab.jpg&quot;); background-size: cover;">
                                                                    <ul class="deal-tag list-unstyled">
                                                                        <li class="orange-label"></li>
                                                                        <li class="violet-label"></li>
                                                                    </ul>
                                                                    <div class="overlay">
                                                                        <div class="nb-btn nb-btn-success">مشاهده و
                                                                            خرید
                                                                        </div>
                                                                    </div>
                                                                    <img data-src="{{$item["F_Barg"][2]->F_Pic}}"
                                                                         alt="بوفه آزاد رستوران زیتون" data-type="lazy"
                                                                         shema="1"
                                                                         itemprop="image"
                                                                         content="{{$item["F_Barg"][2]->F_Pic}}"
                                                                         class="sr-only"
                                                                         src="{{$item["F_Barg"][2]->F_Pic}}"></a>
                                                                <div class="cat-deal-box-main clearfix">
                                                                    <h4 itemprop="name" class="cdbm-title"><a
                                                                                itemprop="url"
                                                                                href="{{\App\Setting::getUrlOff($item["F_Barg"][2]->F_BargID)}}"
                                                                                class="truncate">

                                                                            {{$item["F_Barg"][2]->F_Title}}


                                                                        </a>
                                                                    </h4>
                                                                    <span class="cdbm-total-buy"><span class="ir"><i
                                                                                    class="icon icon-shopping-cart hidden-xs"></i><i
                                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                                                class="cdbm-tb-total">
                                              {{$item["F_Barg"][2]->DocumentDetail->count()}}                                        </span></span>
                                                                </div>
                                                                <div class="cat-deal-box-footer clearfix"><a
                                                                            href="/area/پارک-وی/"
                                                                            class="cdbf-location truncate"><span
                                                                                class="ir"><i
                                                                                    class="icon icon-location74"></i></span><span
                                                                                class="cdbfl-address">{{$item["F_Barg"][2]->F_Mohale}}</span></a><span
                                                                            class="cdbf-takhfif"><span
                                                                                class="cdbft-shape"><span
                                                                                    class="cdbft-shape-text">%{{number_format(\App\Barg::find($item["F_Barg"][2]->F_BargID)->F_Off)}}</span></span></span><span
                                                                            class="cdbf-price">
                <del class="cdbf-real-price visible-xs"><span>۱۲۵,۰۰۰</span></del><ins class="cdbf-netbarg-price"><span
                                                                                    itemprop="price"
                                                                                    content="625000">

                                                                                 @php
                                                                                     $fee=\App\Barg::find($item["F_Barg"][2]->F_BargID)->F_Fee;
                                                                                     $off=\App\Barg::find($item["F_Barg"][2]->F_BargID)->F_Off;
                                                                                     $price=($fee/100)*$off;

                                                                                 @endphp
                                                                                {{number_format($price)}}
                                                                            </span><span
                                                                                    itemprop="priceCurrency"
                                                                                    content="IRR"> تومان</span></ins></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if(count($item["F_Barg"])>=4)
                                                        <div itemscope="" itemtype="http://schema.org/Offer"
                                                             class="col-lg-12 col-md-12 col-sm-8 cds-item ">
                                                            <div class="cat-deal-box"><a
                                                                        href="{{\App\Setting::getUrlOff($item["F_Barg"][3]->F_BargID)}}"
                                                                        class="figure"
                                                                        style="background-image: url(&quot;http://static.netbarg.com/img/responsive_small/deals/157579/1ef603e0.jpg&quot;); background-size: cover;">
                                                                    <ul class="deal-tag list-unstyled">
                                                                        <li class="orange-label"></li>
                                                                        <li class="violet-label"></li>
                                                                    </ul>
                                                                    <div class="overlay">
                                                                        <div class="nb-btn nb-btn-success">مشاهده و
                                                                            خرید
                                                                        </div>
                                                                    </div>
                                                                    <img data-src="{{$item["F_Barg"][3]->F_Pic}}"
                                                                         alt="پیتزا ، خوراک و برگر در رستوران ایتالیایی آوا پلاس"
                                                                         data-type="lazy" shema="1" itemprop="image"
                                                                         content="{{$item["F_Barg"][3]->F_Pic}}"
                                                                         class="sr-only"
                                                                         src="{{$item["F_Barg"][3]->F_Pic}}"></a>
                                                                <div class="cat-deal-box-main clearfix">
                                                                    <h4 itemprop="name" class="cdbm-title"><a
                                                                                itemprop="url"
                                                                                href="{{\App\Setting::getUrlOff($item["F_Barg"][3]->F_BargID)}}"
                                                                                class="truncate">

                                                                            @if(count($item["F_Barg"])>=4)
                                                                                {{$item["F_Barg"][3]->F_Title}}

                                                                            @endif
                                                                        </a>
                                                                    </h4>
                                                                    <span class="cdbm-total-buy"><span class="ir"><i
                                                                                    class="icon icon-shopping-cart hidden-xs"></i><i
                                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span
                                                                                class="cdbm-tb-total">
                                             {{$item["F_Barg"][3]->DocumentDetail->count()}}                                       </span></span>
                                                                </div>
                                                                <div class="cat-deal-box-footer clearfix"><a
                                                                            href=""
                                                                            class="cdbf-location truncate"><span
                                                                                class="ir"><i
                                                                                    class="icon icon-location74"></i></span><span
                                                                                class="cdbfl-address">{{$item["F_Barg"][3]->F_Mohale}}</span></a><span
                                                                            class="cdbf-takhfif"><span
                                                                                class="cdbft-shape"><span
                                                                                    class="cdbft-shape-text">%{{$item["F_Barg"][3]->F_Off}}</span></span></span><span
                                                                            class="cdbf-price">
                <del class="cdbf-real-price visible-xs"><span>۳۹,۰۰۰</span></del><ins class="cdbf-netbarg-price"><span
                                                                                    itemprop="price"
                                                                                    content="198900">
                                                                                 @php

                                                                                     $fee=\App\Barg::find($item["F_Barg"][3]->F_BargID)->F_Fee;
                                                                                     $off=\App\Barg::find($item["F_Barg"][3]->F_BargID)->F_Off;
                                                                                     $price=($fee/100)*$off;

                                                                                 @endphp
                                                                                {{number_format($price)}}

                                                                            </span><span
                                                                                    itemprop="priceCurrency"
                                                                                    content="IRR"> تومان</span></ins></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div class="col-lg-12 col-md-12 col-sm-24 cds-item hidden-xs done">
                                                        <div class="cds-all-view-box"><span class="ir"><i
                                                                        class="icon icon-burger"></i></span>
                                                            <h4 class="cds-title">{{\App\Barg::where('F_CategoryID',$item["F_Category"]->F_CategoryID)->count()}}

                                                                {{\App\Category::find($item["F_Category"]->F_CategoryID)->F_Name}}
                                                            </h4>
                                                            <a href="{{\App\Setting::getUrlCat($item["F_Category"]->F_CategoryID)}}">
                                                                <button class="nb-btn nb-btn-success">مشاهده همه
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </article>
                                    <figure class="figure-ads-baner hidden-xs visible-lg">

                                        <a href="{{url("1/trend")}}"
                                           target="_blank">
                                            <img src="http://static.netbarg.com/img/banner/banners/restaurantBanner/77/c6d90dc9.jpg"
                                                 alt="رستوران و کافی شاپ"> </a>


                                    </figure>
                                @endforeach


                            </section>
                            {{--                            <article class="cat-deal-color main-cat">--}}
                            {{--                                <header class="section-header today-netbarg">--}}
                            {{--                                    <h3 class="hx"><span class="icon icon icon-Logo-fill"></span><span--}}
                            {{--                                                class="article-h3">نت‌برگ‌های امروز</span>--}}
                            {{--                                    </h3><span class="pull-left deals-filter"><span class="clearfix gender-selector">--}}
                            {{--        </span></span></header>--}}
                            {{--                                <div class="main-cat-deal-thumbnail clearfix main-row">--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:restaurant/159166/رستوران-بین-المللیvip-با-منو-غذاهای-ایرانی-و-فرنگی/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159166/1b2b03a9.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159166/1b2b03a9.jpg"--}}
                            {{--                                                         alt="رستوران بین المللیVIP با منو غذاهای ایرانی و فرنگی"--}}
                            {{--                                                         data-type="lazy" shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159166/1b2b03a9.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159166/1b2b03a9.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:restaurant/159166/رستوران-بین-المللیvip-با-منو-غذاهای-ایرانی-و-فرنگی/"--}}
                            {{--                                                                                              class="truncate">رستوران--}}
                            {{--                                                            بین--}}
                            {{--                                                            المللیVIP با منو غذاهای ایرانی و فرنگی</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/شهرک-غرب/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">شهرک غرب</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%33            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۷۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="469000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۴۶,۹۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:entertainment/159243/پرواز-با-پاراگلایدر-توسط-خلبان-باقری/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159243/1d4b03ec.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159243/1d4b03ec.jpg"--}}
                            {{--                                                         alt="پرواز با پاراگلایدر توسط خلبان باقری" data-type="lazy"--}}
                            {{--                                                         shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159243/1d4b03ec.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159243/1d4b03ec.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:entertainment/159243/پرواز-با-پاراگلایدر-توسط-خلبان-باقری/"--}}
                            {{--                                                                                              class="truncate">پرواز با--}}
                            {{--                                                            پاراگلایدر توسط خلبان باقری</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            336                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/بلوار وردآورد/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">بلوار وردآورد</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%40            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۴۵۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="2700000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۲۷۰,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:restaurant/156024/بوفه-شام-رستوران-شهربانو-68/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/156024/216d0405.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/156024/216d0405.jpg"--}}
                            {{--                                                         alt="بوفه شام رستوران شهربانو" data-type="lazy" shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/156024/216d0405.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/156024/216d0405.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:restaurant/156024/بوفه-شام-رستوران-شهربانو-68/"--}}
                            {{--                                                                                              class="truncate">بوفه شام--}}
                            {{--                                                            رستوران شهربانو</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            18233                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/شهرک-غرب/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">شهرک غرب</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%40            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۱۳۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="780000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۷۸,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:restaurant/159207/پکیج-غذاهای-ایرانی-در-رستوران-هتل-سیمرغ/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159207/36a50571.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159207/36a50571.jpg"--}}
                            {{--                                                         alt="پکیج غذاهای ایرانی در رستوران هتل سیمرغ" data-type="lazy"--}}
                            {{--                                                         shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159207/36a50571.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159207/36a50571.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:restaurant/159207/پکیج-غذاهای-ایرانی-در-رستوران-هتل-سیمرغ/"--}}
                            {{--                                                                                              class="truncate">پکیج--}}
                            {{--                                                            غذاهای--}}
                            {{--                                                            ایرانی در رستوران هتل سیمرغ</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/ولیعصر-ساعی-1/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">ولیعصر-ساعی</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%25            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۸۹,۳۰۰</span></del>--}}
                            {{--                                                                              <ins itemprop="price" content="669750"--}}
                            {{--                                                                                   class="cdbf-netbarg-price"><span>۶۶,۹۷۵</span><span--}}
                            {{--                                                                                          itemprop="priceCurrency"--}}
                            {{--                                                                                          content="IRR"> تومان</span></ins></span>--}}
                            {{--                                                </div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:entertainment/159240/آفرود-در-تهران-با-آفرود-باقری/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159240/22dc042d.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159240/22dc042d.jpg"--}}
                            {{--                                                         alt="آفرود در تهران با آفرود باقری" data-type="lazy" shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159240/22dc042d.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159240/22dc042d.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:entertainment/159240/آفرود-در-تهران-با-آفرود-باقری/"--}}
                            {{--                                                                                              class="truncate">آفرود در--}}
                            {{--                                                            تهران با آفرود باقری</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            30                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/وردآورد/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">وردآورد</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%50            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۲۵۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="1250000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۱۲۵,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:restaurant/159200/انواع-سرویس-چای-سنتی-در-سفره-خانه-سنتی-کوهستان/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159200/1bae03b1.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159200/1bae03b1.jpg"--}}
                            {{--                                                         alt="انواع سرویس چای سنتی در سفره خانه سنتی کوهستان"--}}
                            {{--                                                         data-type="lazy" shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159200/1bae03b1.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159200/1bae03b1.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:restaurant/159200/انواع-سرویس-چای-سنتی-در-سفره-خانه-سنتی-کوهستان/"--}}
                            {{--                                                                                              class="truncate">انواع--}}
                            {{--                                                            سرویس--}}
                            {{--                                                            چای سنتی در سفره خانه سنتی کوهستان</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            68                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/خیابان-هنگام/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">خیابان هنگام </span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%55            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۳۵,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="157500"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۱۵,۷۵۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:beauty/159169/کراتینه-مو-در-آرایشگاه-و-آموزشگاه-سوسن/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159169/1f6703f5.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159169/1f6703f5.jpg"--}}
                            {{--                                                         alt="کراتینه مو در آرایشگاه و آموزشگاه سوسن" data-type="lazy"--}}
                            {{--                                                         shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159169/1f6703f5.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159169/1f6703f5.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:beauty/159169/کراتینه-مو-در-آرایشگاه-و-آموزشگاه-سوسن/"--}}
                            {{--                                                                                              class="truncate">کراتینه--}}
                            {{--                                                            مو در--}}
                            {{--                                                            آرایشگاه و آموزشگاه سوسن</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/ستاری/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">ستاری</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%70            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۲۸۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="840000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۸۴,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:health/159187/تزریق-ژل-در-مطب-دکتر-کیوان/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159187/1f2d03f0.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159187/1f2d03f0.jpg"--}}
                            {{--                                                         alt="تزریق ژل در مطب دکتر کیوان" data-type="lazy" shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159187/1f2d03f0.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159187/1f2d03f0.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:health/159187/تزریق-ژل-در-مطب-دکتر-کیوان/"--}}
                            {{--                                                                                              class="truncate">تزریق ژل--}}
                            {{--                                                            در--}}
                            {{--                                                            مطب دکتر کیوان</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/خیابان-ظفر/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">خیابان ظفر</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%70            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۱۵۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="450000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۴۵,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:education/159155/آموزش-زبان-ترکی-استانبولی-در-موسسه-اکسیر/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159155/1f5803f3.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159155/1f5803f3.jpg"--}}
                            {{--                                                         alt="آموزش زبان ترکی استانبولی در موسسه اکسیر" data-type="lazy"--}}
                            {{--                                                         shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159155/1f5803f3.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159155/1f5803f3.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:education/159155/آموزش-زبان-ترکی-استانبولی-در-موسسه-اکسیر/"--}}
                            {{--                                                                                              class="truncate">آموزش--}}
                            {{--                                                            زبان--}}
                            {{--                                                            ترکی استانبولی در موسسه اکسیر</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            1                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/توحید/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">توحید</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%90            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۳۰۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="300000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۳۰,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:health/159190/کامپوزیت-دندان-توسط-دکتر-خانچی/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159190/1e5003dd.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159190/1e5003dd.jpg"--}}
                            {{--                                                         alt="کامپوزیت دندان توسط دکتر خانچی" data-type="lazy" shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159190/1e5003dd.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159190/1e5003dd.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:health/159190/کامپوزیت-دندان-توسط-دکتر-خانچی/"--}}
                            {{--                                                                                              class="truncate">کامپوزیت--}}
                            {{--                                                            دندان توسط دکتر خانچی</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            548                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/سعادت-آباد/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">سعادت آباد</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%61            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۵۰۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="1950000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۱۹۵,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:education/159175/دوره-های-آموزشی-ویژه-کودکان-در-مهد-کودک-نوید-شادی/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159175/373e0573.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159175/373e0573.jpg"--}}
                            {{--                                                         alt="دوره های آموزشی ویژه کودکان در مهد کودک نوید شادی"--}}
                            {{--                                                         data-type="lazy" shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159175/373e0573.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159175/373e0573.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:education/159175/دوره-های-آموزشی-ویژه-کودکان-در-مهد-کودک-نوید-شادی/"--}}
                            {{--                                                                                              class="truncate">دوره های--}}
                            {{--                                                            آموزشی ویژه کودکان در مهد کودک نوید شادی</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            1                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/نارمک/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">نارمک</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%90            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۲۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="20000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۲,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:health/159196/پلاسما-جت-در-مطب-دکتر-خاکپور/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159196/1e1b03d1.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159196/1e1b03d1.jpg"--}}
                            {{--                                                         alt="پلاسما جت در مطب دکتر خاکپور" data-type="lazy" shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159196/1e1b03d1.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159196/1e1b03d1.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:health/159196/پلاسما-جت-در-مطب-دکتر-خاکپور/"--}}
                            {{--                                                                                              class="truncate">پلاسما جت--}}
                            {{--                                                            در--}}
                            {{--                                                            مطب دکتر خاکپور</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a--}}
                            {{--                                                            href="/area/ولیعصر-پارک-ملت-1/"--}}
                            {{--                                                            class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">ولیعصر- پارک ملت</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%57            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۳۰۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="1290000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۱۲۹,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:health/159183/پاکسازی-صورت-و-لیفتینگ-صورت-توسط-دکتر-کلانتری/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159183/18390378.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159183/18390378.jpg"--}}
                            {{--                                                         alt="پاکسازی صورت و لیفتینگ صورت توسط دکتر کلانتری"--}}
                            {{--                                                         data-type="lazy" shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159183/18390378.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159183/18390378.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:health/159183/پاکسازی-صورت-و-لیفتینگ-صورت-توسط-دکتر-کلانتری/"--}}
                            {{--                                                                                              class="truncate">پاکسازی--}}
                            {{--                                                            صورت--}}
                            {{--                                                            و لیفتینگ صورت توسط دکتر کلانتری</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            8                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/ستارخان/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">ستارخان</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%80            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۴۵,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="90000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۹,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:entertainment/159235/تور-رفتینگ-زاینده-رود-1-5-روزه-34/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159235/3ca3062b.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159235/3ca3062b.jpg"--}}
                            {{--                                                         alt="تور رفتینگ زاینده رود 1/5 روزه" data-type="lazy" shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159235/3ca3062b.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159235/3ca3062b.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:entertainment/159235/تور-رفتینگ-زاینده-رود-1-5-روزه-34/"--}}
                            {{--                                                                                              class="truncate">تور--}}
                            {{--                                                            رفتینگ--}}
                            {{--                                                            زاینده رود 1/5 روزه</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/تور-گردشگری/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">تور گردشگری</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%32            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۲۸۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="1904000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۱۹۰,۴۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:beauty/159164/اپیلاسیون-بدن-در-آرایشگاه-نیکان/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159164/26ce045f.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159164/26ce045f.jpg"--}}
                            {{--                                                         alt="اپیلاسیون بدن در آرایشگاه نیکان" data-type="lazy"--}}
                            {{--                                                         shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159164/26ce045f.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159164/26ce045f.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:beauty/159164/اپیلاسیون-بدن-در-آرایشگاه-نیکان/"--}}
                            {{--                                                                                              class="truncate">اپیلاسیون--}}
                            {{--                                                            بدن--}}
                            {{--                                                            در آرایشگاه نیکان</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/نارمك/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">نارمك</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%67            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۲,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="6600"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۶۶۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:beauty/159177/جوانسازی-پوست-در-آرایشگاه-و-آموزشگاه-سوسن/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159177/1f6703f5.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159177/1f6703f5.jpg"--}}
                            {{--                                                         alt="جوانسازی پوست در آرایشگاه و آموزشگاه سوسن"--}}
                            {{--                                                         data-type="lazy"--}}
                            {{--                                                         shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159177/1f6703f5.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159177/1f6703f5.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:beauty/159177/جوانسازی-پوست-در-آرایشگاه-و-آموزشگاه-سوسن/"--}}
                            {{--                                                                                              class="truncate">جوانسازی--}}
                            {{--                                                            پوست--}}
                            {{--                                                            در آرایشگاه و آموزشگاه سوسن</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/ستاری/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">ستاری</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%75            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۷۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="175000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۱۷,۵۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:health/159188/تزریق-بوتاکس-با-دکتر-کیوان/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159188/1b7503ad.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159188/1b7503ad.jpg"--}}
                            {{--                                                         alt="تزریق بوتاکس با دکتر کیوان" data-type="lazy" shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159188/1b7503ad.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159188/1b7503ad.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:health/159188/تزریق-بوتاکس-با-دکتر-کیوان/"--}}
                            {{--                                                                                              class="truncate">تزریق--}}
                            {{--                                                            بوتاکس--}}
                            {{--                                                            با دکتر کیوان</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            3                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/خیابان-ظفر/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">خیابان ظفر</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%71            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۱۰۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="290000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۲۹,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:art/159165/ثبت-خاطرات-به-یادماندنی-در-آتلیه-رویال-آس/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159165/1b4003a9.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159165/1b4003a9.jpg"--}}
                            {{--                                                         alt="ثبت خاطرات به یادماندنی در آتلیه رویال آس"--}}
                            {{--                                                         data-type="lazy"--}}
                            {{--                                                         shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159165/1b4003a9.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159165/1b4003a9.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:art/159165/ثبت-خاطرات-به-یادماندنی-در-آتلیه-رویال-آس/"--}}
                            {{--                                                                                              class="truncate">ثبت--}}
                            {{--                                                            خاطرات به--}}
                            {{--                                                            یادماندنی در آتلیه رویال آس</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            66                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a--}}
                            {{--                                                            href="/area/فلکه-اول-تهرانپارس/"--}}
                            {{--                                                            class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">فلکه اول تهرانپارس</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%85            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۳۵,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="52500"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۵,۲۵۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:health/159193/میکرونیدلینگ-پوست-توسط-دکتر-خدامی/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159193/1c2b03bf.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159193/1c2b03bf.jpg"--}}
                            {{--                                                         alt="میکرونیدلینگ پوست توسط دکتر خدامی" data-type="lazy"--}}
                            {{--                                                         shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159193/1c2b03bf.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159193/1c2b03bf.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:health/159193/میکرونیدلینگ-پوست-توسط-دکتر-خدامی/"--}}
                            {{--                                                                                              class="truncate">میکرونیدلینگ--}}
                            {{--                                                            پوست توسط دکتر خدامی</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/مترو-شریعتی/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">مترو شریعتی</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%87            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۱۵۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="195000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۱۹,۵۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:health/159180/میکرودرم-در-مطب-دکتر-ملکیاری/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159180/1ed803e9.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159180/1ed803e9.jpg"--}}
                            {{--                                                         alt="میکرودرم در مطب دکتر ملکیاری" data-type="lazy" shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159180/1ed803e9.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159180/1ed803e9.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:health/159180/میکرودرم-در-مطب-دکتر-ملکیاری/"--}}
                            {{--                                                                                              class="truncate">میکرودرم--}}
                            {{--                                                            در--}}
                            {{--                                                            مطب دکتر ملکیاری</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            2                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a--}}
                            {{--                                                            href="/area/روبروی مترو قلهک/"--}}
                            {{--                                                            class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">روبروی مترو قلهک</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%91            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۸۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="72000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۷,۲۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:health/159184/تقویت-و-آبرسانی-مو-توسط-دکتر-کلانتری/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159184/4.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159184/4.jpg"--}}
                            {{--                                                         alt="تقویت و آبرسانی مو توسط دکتر کلانتری" data-type="lazy"--}}
                            {{--                                                         shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159184/4.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159184/4.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:health/159184/تقویت-و-آبرسانی-مو-توسط-دکتر-کلانتری/"--}}
                            {{--                                                                                              class="truncate">تقویت و--}}
                            {{--                                                            آبرسانی مو توسط دکتر کلانتری</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            8                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/ستارخان/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">ستارخان</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%80            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۴۵,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="90000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۹,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:entertainment/159231/تور-آبشار-دارنو-جنگل-فراخین-و-ساحل-نوشهر-یکروزه/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159231/33d5058d.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159231/33d5058d.jpg"--}}
                            {{--                                                         alt="تور آبشار دارنو ، جنگل فراخین و ساحل نوشهر یکروزه"--}}
                            {{--                                                         data-type="lazy" shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159231/33d5058d.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159231/33d5058d.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:entertainment/159231/تور-آبشار-دارنو-جنگل-فراخین-و-ساحل-نوشهر-یکروزه/"--}}
                            {{--                                                                                              class="truncate">تور آبشار--}}
                            {{--                                                            دارنو ، جنگل فراخین و ساحل نوشهر یکروزه</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/تور-گردشگری/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">تور گردشگری</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%23            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۸۵,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="654500"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۶۵,۴۵۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:health/159152/لیزر-موهای-زائد-الکساندرایت-در-مطب-دکتر-خدامی/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159152/1c2403c0.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159152/1c2403c0.jpg"--}}
                            {{--                                                         alt="لیزر موهای زائد الکساندرایت در مطب دکتر خدامی"--}}
                            {{--                                                         data-type="lazy" shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159152/1c2403c0.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159152/1c2403c0.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:health/159152/لیزر-موهای-زائد-الکساندرایت-در-مطب-دکتر-خدامی/"--}}
                            {{--                                                                                              class="truncate">لیزر--}}
                            {{--                                                            موهای--}}
                            {{--                                                            زائد الکساندرایت در مطب دکتر خدامی</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy isempty"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            0                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/مترو-شریعتی/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">مترو شریعتی</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%80            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۲۰,۰۰۰</span></del>--}}
                            {{--                                                                              <ins itemprop="price" content="40000"--}}
                            {{--                                                                                   class="cdbf-netbarg-price"><span>۴,۰۰۰</span><span--}}
                            {{--                                                                                          itemprop="priceCurrency"--}}
                            {{--                                                                                          content="IRR"> تومان</span></ins></span>--}}
                            {{--                                                </div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:beauty/159239/کاشت-ناخن-و-ترمیم-ناخن-در-آرایشگاه-صدف/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159239/1b5803ad.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                        <li class="violet-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159239/1b5803ad.jpg"--}}
                            {{--                                                         alt="کاشت ناخن و ترمیم ناخن در آرایشگاه صدف" data-type="lazy"--}}
                            {{--                                                         shema="1" itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159239/1b5803ad.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159239/1b5803ad.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:beauty/159239/کاشت-ناخن-و-ترمیم-ناخن-در-آرایشگاه-صدف/"--}}
                            {{--                                                                                              class="truncate">کاشت ناخن--}}
                            {{--                                                            و--}}
                            {{--                                                            ترمیم ناخن در آرایشگاه صدف</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            1                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a--}}
                            {{--                                                            href="/area/جنت-آباد-مرکزی/"--}}
                            {{--                                                            class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">جنت آباد مرکزی</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%78            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۶۰,۰۰۰</span></del>--}}
                            {{--                                                                              <ins itemprop="price" content="132000"--}}
                            {{--                                                                                   class="cdbf-netbarg-price"><span>۱۳,۲۰۰</span><span--}}
                            {{--                                                                                          itemprop="priceCurrency"--}}
                            {{--                                                                                          content="IRR"> تومان</span></ins></span>--}}
                            {{--                                                </div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:entertainment/159228/هتل-قصر-خورشید-مشهد-با-اقامت-تک/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159228/1b2e03a5.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159228/1b2e03a5.jpg"--}}
                            {{--                                                         alt="هتل قصر خورشید مشهد با اقامت تک" data-type="lazy"--}}
                            {{--                                                         shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159228/1b2e03a5.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159228/1b2e03a5.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:entertainment/159228/هتل-قصر-خورشید-مشهد-با-اقامت-تک/"--}}
                            {{--                                                                                              class="truncate">هتل قصر--}}
                            {{--                                                            خورشید مشهد با اقامت تک</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            82                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/شیرودی/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">شیرودی</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%40            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۸۰,۰۰۰</span></del>--}}
                            {{--                                                                      <ins itemprop="price" content="480000"--}}
                            {{--                                                                           class="cdbf-netbarg-price">--}}
                            {{--                            <span>۴۸,۰۰۰</span><span itemprop="priceCurrency" content="IRR"> تومان</span></ins>--}}
                            {{--                        </span></div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:entertainment/159168/هتل-آپارتمان-ارمغان-مشهد/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159168/10b50306.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159168/10b50306.jpg"--}}
                            {{--                                                         alt="هتل آپارتمان ارمغان مشهد" data-type="lazy" shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159168/10b50306.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159168/10b50306.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:entertainment/159168/هتل-آپارتمان-ارمغان-مشهد/"--}}
                            {{--                                                                                              class="truncate">هتل--}}
                            {{--                                                            آپارتمان--}}
                            {{--                                                            ارمغان مشهد</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            329                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a href="/area/امام-رضا-16/"--}}
                            {{--                                                                                             class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">امام رضا 16</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%30            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۹۰,۰۰۰</span></del>--}}
                            {{--                                                                              <ins itemprop="price" content="630000"--}}
                            {{--                                                                                   class="cdbf-netbarg-price"><span>۶۳,۰۰۰</span><span--}}
                            {{--                                                                                          itemprop="priceCurrency"--}}
                            {{--                                                                                          content="IRR"> تومان</span></ins></span>--}}
                            {{--                                                </div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div itemscope="" itemtype="http://schema.org/Offer"--}}
                            {{--                                         class="col-lg-8 col-md-12 col-sm-12 col-xs-24 cds-item ">--}}
                            {{--                                        <div class="cat-deal-smallbox">--}}
                            {{--                                            <div class="cat-deal-box">--}}
                            {{--                                                <a href="/tehran/d/c:entertainment/159218/هتل-آپارتمان-فاخر-مشهد/"--}}
                            {{--                                                   class="figure"--}}
                            {{--                                                   style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/159218/113b0318.jpg&quot;); background-size: cover;">--}}
                            {{--                                                    <ul class="deal-tag list-unstyled">--}}
                            {{--                                                        <li class="orange-label"></li>--}}
                            {{--                                                    </ul>--}}
                            {{--                                                    <div class="overlay">--}}
                            {{--                                                        <div class="nb-btn nb-btn-success">مشاهده و خرید</div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159218/113b0318.jpg"--}}
                            {{--                                                         alt="هتل آپارتمان فاخر مشهد" data-type="lazy" shema="1"--}}
                            {{--                                                         itemprop="image"--}}
                            {{--                                                         content="http://static.netbarg.com/img/responsive_medium/deals/159218/113b0318.jpg"--}}
                            {{--                                                         class="sr-only"--}}
                            {{--                                                         src="http://static.netbarg.com/img/responsive_medium/deals/159218/113b0318.jpg">--}}
                            {{--                                                </a>--}}
                            {{--                                                <div class="cat-deal-box-main clearfix">--}}
                            {{--                                                    <h4 itemprop="name" class="cdbm-title"><a itemprop="url"--}}
                            {{--                                                                                              href="/tehran/d/c:entertainment/159218/هتل-آپارتمان-فاخر-مشهد/"--}}
                            {{--                                                                                              class="truncate">هتل--}}
                            {{--                                                            آپارتمان--}}
                            {{--                                                            فاخر مشهد</a>--}}
                            {{--                                                    </h4>--}}
                            {{--                                                    <span class="cdbm-total-buy"><span class="ir"><i--}}
                            {{--                                                                    class="icon icon-shopping-cart hidden-xs"></i><i--}}
                            {{--                                                                    class="icon icon-shopping-cart_L visible-xs"></i></span><span--}}
                            {{--                                                                class="cdbm-tb-total">--}}
                            {{--                                            6                                        </span>--}}
                            {{--                                    </span>--}}
                            {{--                                                </div>--}}
                            {{--                                                <div class="cat-deal-box-footer clearfix"><a--}}
                            {{--                                                            href="/area/خیابان-امام-رضا/"--}}
                            {{--                                                            class="cdbf-location truncate"><span--}}
                            {{--                                                                class="ir"><i--}}
                            {{--                                                                    class="icon icon-location74"></i></span><span--}}
                            {{--                                                                class="cdbfl-address">خیابان امام رضا</span></a><span--}}
                            {{--                                                            class="cdbf-takhfif"><span class="cdbft-shape"><span--}}
                            {{--                                                                    class="cdbft-shape-text">%30            </span></span></span><span--}}
                            {{--                                                            class="cdbf-price">--}}
                            {{--                                <del class="cdbf-real-price"> <span>۱۲۰,۰۰۰</span></del>--}}
                            {{--                                                                              <ins itemprop="price" content="840000"--}}
                            {{--                                                                                   class="cdbf-netbarg-price"><span>۸۴,۰۰۰</span><span--}}
                            {{--                                                                                          itemprop="priceCurrency"--}}
                            {{--                                                                                          content="IRR"> تومان</span></ins></span>--}}
                            {{--                                                </div>--}}

                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </article>--}}


                        </div>

                        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs left-aside sticky-aside">
                            <div id="nava2" class="affix-top" style="">
                                <div class="float-left-button">
                                    <ul>
                                        <a href="javascript:void(0)">
                                            <li>
                                                <i><i class="icon icon-support"></i></i><span>۰۲۱-۴۱۰۹۶۱۰۰ : پشتیبانی</span>
                                            </li>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <li>
                                                <i><i class="icon icon-home-phone"></i></i><span>۰۲۱-۴۲۰۹۱۰۰۰ : شرکت</span>
                                            </li>
                                        </a>
                                        <a href="/page/buy-netbarg/">
                                            <li>
                                                <i><i class="icon icon-lifebuoy"></i></i><span>راهنمای خرید نت برگ</span>
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
            </div>
        </div>

        {{--        <div id="subscriptionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"--}}
        {{--             class="modal nb-modal-subscribe fade" style="display: none;">--}}
        {{--            <div role="document" class="Discount-modal-box">--}}
        {{--                <div class="Discount-modal-body">--}}
        {{--                    <div class="Discount-form">--}}
        {{--                        <div class="close-Discount-modal">--}}
        {{--                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i--}}
        {{--                                        aria-hidden="true" class="icon icon-close"></i></button>--}}
        {{--                        </div>--}}
        {{--                        <form method="post" accept-charset="utf-8" class="search-input" mj-type="form"--}}
        {{--                              mj-target="/subscriptions/subscribeEmail.json" mj-method="post"--}}
        {{--                              mj-success="subscribeEmail"--}}
        {{--                              action="/">--}}
        {{--                            <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>--}}
        {{--                            <div class="title-form">برای اطلاع از تخفیفهای روزانه ایمیل خود را وارد کنید</div>--}}
        {{--                            <input name="email" type="email" placeholder="ایمیل خود را وارد کنید" class="form-item">--}}
        {{--                            <div class="dropdown form-item">--}}
        {{--                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"--}}
        {{--                                        class="btn btn-default dropdown-toggle"><span id="city-name">تهران</span><i--}}
        {{--                                            class="icon icon-arrow-down"></i></button>--}}
        {{--                                <div class="dropdown-menu">--}}
        {{--                                    <ul>--}}
        {{--                                        <li><span data-id="42598">اراک</span></li>--}}
        {{--                                        <li><span data-id="42575">اردبیل</span></li>--}}
        {{--                                        <li><span data-id="42574">ارومیه</span></li>--}}
        {{--                                        <li><span data-id="42576">اصفهان</span></li>--}}
        {{--                                        <li><span data-id="42583">اهواز</span></li>--}}
        {{--                                        <li><span data-id="42577">ایلام</span></li>--}}
        {{--                                        <li><span data-id="42582">بجنورد</span></li>--}}
        {{--                                        <li><span data-id="42578">بندر بوشهر</span></li>--}}
        {{--                                        <li><span data-id="42599">بندرعباس</span></li>--}}
        {{--                                        <li><span data-id="42580">بیرجند</span></li>--}}
        {{--                                        <li><span data-id="42573">تبریز</span></li>--}}
        {{--                                        <li><span data-id="42546">تهران</span></li>--}}
        {{--                                        <li><span data-id="42596">خرم‌آباد</span></li>--}}
        {{--                                        <li><span data-id="42595">رشت</span></li>--}}
        {{--                                        <li><span data-id="42586">زاهدان</span></li>--}}
        {{--                                        <li><span data-id="42584">زنجان</span></li>--}}
        {{--                                        <li><span data-id="42597">ساری</span></li>--}}
        {{--                                        <li><span data-id="42585">سمنان</span></li>--}}
        {{--                                        <li><span data-id="42590">سنندج</span></li>--}}
        {{--                                        <li><span data-id="42747">شهرهای شمالی</span></li>--}}
        {{--                                        <li><span data-id="42579">شهرکرد</span></li>--}}
        {{--                                        <li><span data-id="42587">شیراز</span></li>--}}
        {{--                                        <li><span data-id="42588">قزوین</span></li>--}}
        {{--                                        <li><span data-id="42589">قم</span></li>--}}
        {{--                                        <li><span data-id="42581">مشهد</span></li>--}}
        {{--                                        <li><span data-id="42600">همدان</span></li>--}}
        {{--                                        <li><span data-id="42602">کرج</span></li>--}}
        {{--                                        <li><span data-id="42591">کرمان</span></li>--}}
        {{--                                        <li><span data-id="42592">کرمانشاه</span></li>--}}
        {{--                                        <li><span data-id="42745">کیش</span></li>--}}
        {{--                                        <li><span data-id="42594">گرگان</span></li>--}}
        {{--                                        <li><span data-id="42593">یاسوج</span></li>--}}
        {{--                                        <li><span data-id="42601">یزد</span></li>--}}
        {{--                                    </ul>--}}
        {{--                                </div>--}}
        {{--                                <input type="hidden" name="city_id" id="selectCityId" value="42546">--}}
        {{--                            </div>--}}
        {{--                            <button type="submit" class="btn btn-warning btn-type-1">ارسال</button>--}}
        {{--                        </form>--}}
        {{--                        <div class="netbarg_logo"><img src="/assets/site/img/white-logo_subscription.png" alt=""></div>--}}
        {{--                        <div class="percent-pic entertainment"><span class="num"> <span--}}
        {{--                                        class="symbol">%</span>60</span><span class="text">تخفیف</span></div>--}}
        {{--                        <a target="_blank"--}}
        {{--                           href="/tehran/d/c:entertainment/158240/جشنواره-سرزمین-فکر-بازیا-در-باغ-کتاب/?utm_source=home&amp;utm_medium=banner&amp;utm_campaign=modal"--}}
        {{--                           class="Discount-img">--}}
        {{--                            <img src="http://static.netbarg.com/img/responsive_large/deals/158240/21d70411.jpg"--}}
        {{--                                 alt="جشنواره سرزمین فکر بازیا در باغ کتاب">--}}
        {{--                            <div class="on-iamge">--}}
        {{--                                <div class="cat-title">مجموعه</div>--}}
        {{--                                <div class="merchant-name">فکربازیا</div>--}}
        {{--                                <button class="nb-btn nb-btn-success">مشاهده</button>--}}
        {{--                            </div>--}}
        {{--                        </a>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="rate-notif desktop-notif">--}}
        {{--            <div class="main-row"><span class="border-effect"></span>--}}
        {{--                <div class="box-notif">--}}
        {{--                    <div class="circle-deal " id="rating-deal-img">--}}

        {{--                    </div>--}}
        {{--                    <div class="content-part">--}}
        {{--                        <div class="text1"></div>--}}
        {{--                        <div class="emoji_box">--}}
        {{--                            <ul class="list-inline list-unstyled emoji-ratings">--}}
        {{--                                <li>--}}
        {{--                                    <div mj-type="single" rate-value="5" class="rating-box happy"--}}
        {{--                                         mj-success="successNewRating"><i aria-hidden="true"--}}
        {{--                                                                          class="icon icon-happy-face"></i>--}}
        {{--                                        <p>راضی</p>--}}
        {{--                                    </div>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <div mj-type="single" rate-value="3" class="rating-box neutral"--}}
        {{--                                         mj-success="successNewRating"><i aria-hidden="true"--}}
        {{--                                                                          class="icon icon-normal-face"></i>--}}
        {{--                                        <p>متوسط</p>--}}
        {{--                                    </div>--}}
        {{--                                </li>--}}
        {{--                                <li>--}}
        {{--                                    <div mj-type="single" rate-value="1" class="rating-box sad"--}}
        {{--                                         mj-success="successNewRating"><i aria-hidden="true"--}}
        {{--                                                                          class="icon icon-sad-face"></i>--}}
        {{--                                        <p>ناراضی</p>--}}
        {{--                                    </div>--}}
        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                        </div>--}}
        {{--                        <div class="close-icon"><i class="icon icon-close"></i></div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="box-comment">--}}
        {{--                    <form method="post" accept-charset="utf-8" mj-type="form" mj-model="model2" mj-method="post"--}}
        {{--                          mj-success="successGiftCardNotification" mj-target="/rating/ratings/ratingProcess.json"--}}
        {{--                          mj-before="checkRating"--}}
        {{--                    =""="" action="/">--}}
        {{--                    <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>--}}
        {{--                    <input type="hidden" name="rate" id="rate-value"><input type="hidden" name="notification"--}}
        {{--                                                                            id="notification" value="1"><input--}}
        {{--                            type="hidden"--}}
        {{--                            name="deal_user_id"--}}
        {{--                            id="deal-user-id"--}}
        {{--                            value=""><input--}}
        {{--                            type="hidden" name="user_id" id="user-id" value="d41d8cd98f00b204e9800998ecf8427e">--}}
        {{--                    <div class="input textarea"><textarea name="opinion" placeholder="با ثبت نظر کد تخفیف بگیرید"--}}
        {{--                                                          class=""--}}
        {{--                                                          id="opinion" rows="2"></textarea></div>--}}
        {{--                    <button type="submit" class="nb-btn nb-btn-sm nb-btn-success btn-green">ثبت نظر</button>--}}
        {{--                    </form>       </div>--}}
        {{--                <div class="box-off-code active c-rotate1">--}}
        {{--                    <div class="part3">--}}
        {{--                        <div class="circle-off">--}}
        {{--                            <div class="percent-num">%<span id="percent-num-notif"></span></div>--}}
        {{--                            <div class="text">تخفیف</div>--}}
        {{--                        </div>--}}
        {{--                        <div class="content_part2">--}}
        {{--                            <div class="text" id="percent-text-notif"></div>--}}
        {{--                            <div class="code-part">کد تخفیف :<span class="num gift-rating-notification"></span></div>--}}
        {{--                            <a href="/user/userProfiles/index#tab3" class="nb-btn nb-btn-sm nb-btn-rate">خریدهای من </a>--}}
        {{--                            <div class="close-icon"><i class="icon icon-close"></i></div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </main>
@endsection
