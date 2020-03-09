@extends('layout.app')
@section('header')
    @include('layout.header')
@endsection
@section('content')
    <main>
        <div class="page-index">
            <div class="wrapper-2">
                <div class="container-fluid">
                    <div class="row h-position">

                        @include('component.float_cat')


                        <div class="col-lg-22 col-md-22 col-sm-24 col-xs-24 padd-0-xs clearfix">
                            <article class="cat-deal-color main-cat clearfix">
                                <header class="section-header today-netbarg">
                                    <h3 class="hx"><span class="icon icon icon-Logo-fill"></span><span id="searchFor"
                                                                                                       class="article-h3">نتیجه جستجو برای {{$s}} </span>
                                    </h3>
                                </header>

                                <div class="main-cat-deal-list clearfix main-row general-row-deal grd">

                                    @foreach($bargs as $item)

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items ">
                                                <a href=""
                                                   class="figure clearfix"
                                                   style="background-image: url({{$item->F_Pic}}); background-size: cover;">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                    </ul>
                                                    <img
                                                        data-src="{{$item->F_Pic}}"
                                                        alt="{{$item->F_Title}}" data-type="lazy"
                                                        class="sr-only"
                                                        src="{{$item->F_Pic}}">
                                                </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">


                                                        <span>
                                                        <a href="">
                                                        <h3>{{$item->F_Title}}</h3>
                                                        </a>
                                                        </span>
                                                    </div>
                                                    <div class="middle-panel clearfix">
                                                        <a href=""
                                                           class="deal-desc">
                                                            <span class="hidden-xs">{{$item->F_Text}}</span>
                                                            <span
                                                                class="visible-xs">{{$item->F_Text}}</span>
                                                        </a></div>

                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                                                    <span class="time-rem">

                                                                        <span></span>
                                                                    </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                                                    <span class="address">
                                                                        <a href="">
                                                                            <i class="icon icon-location74"></i>
                                                                            {{$item->F_Mohale}}

                                                                                                                                                  </a>
                                                                    </span>
                                                            <span class="deal-sell">
                                                                        <i class="icon icon-shopping-cart_L"></i>
                                                                        {{$item->paycount}}                                                                           خرید
                                                                    </span>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">
                                                        ٪{{$item->F_Off}}
                                                    </div>
                                                    <div class="cp-holder">
                                                        <a href="/area/انقلاب/"
                                                           class="cdbf-location truncate visible-xs">
                                                            <span class="ir">
                                                                <i class="icon icon-location74"></i>
                                                            </span>
                                                            <span class="cdbfl-address">
                                                            انقلاب                                                            </span>
                                                        </a>
                                                        <span class="cp-price-float clearfix">
                                                            <span class="discount">
                                                                <del>{{$item->F_Fee}}</del>
                                                            </span>
                                                            <span class="full-price">
                                                                <span class="full-price-s">{{$item->full_price}}</span>
                                                                <span class="full-price-s irr"> تومان</span>
                                                            </span>
                                                        </span>
                                                        <a href="/tehran/d/c:health/177097/ماساژ-ریلکسی-در-سلامت-کده-زن-روز-58/"
                                                           class="nb-btn nb-btn-icon nb-btn-success">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach

                                </div>

                            </article>
                            <div class="col-md-1"></div>
                        </div>

                        @include('component.support')

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('footer')
    @include('layout.footer')
@endsection
