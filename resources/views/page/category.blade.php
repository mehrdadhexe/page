@extends('layout.app')
@section('header')
    @include('layout.header')
@endsection
@section('content')
    <main><div class="container-fluid"><div class="row"><div class="nb-breadcrumb-spacer hidden-lg hidden-md hidden-sm"></div><div class="nb-breadcrumb hidden-xs"><div class="container-fluid limit"><div class="row"><div class="col-md-1"></div><div class="col-md-22"><ul itemscope="" itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><a href="http://netbarg.com/tehran/" itemprop="item" itemscope="itemscope" itemtype="http://schema.org/Thing"><span itemprop="name">خانه</span></a></li><li itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><a href="http://netbarg.com/tehran/c:entertainment/" itemprop="item" itemscope="itemscope" itemtype="http://schema.org/Thing"><span itemprop="name">تفریحی و ورزشی</span></a></li></ul></div><div class="col-md-1"></div></div></div></div></div></div><div class="page-index">
            <div class="wrapper-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
                        <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
                            <nav>
                                <ul class="side-cat" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                                    <li class="li-home"><a href="/tehran/c:todaydeals/" style="height: 21.3333px; line-height: 20.3333px;"><i><i class="icon icon-logo_e"></i></i><span>نت برگ های امروز</span></a></li>


                                    <li class="li-restaurant">

                                        <a itemprop="url" href="/tehran/c:restaurant/" data-toggle="collapse" data-target="#sub-menu-8" style="height: 21.3333px; line-height: 20.3333px;">

                                            <i>
                                                <i class="icon icon-burger"></i>
                                            </i>
                                            <span itemprop="name">رستوران و فست فود</span>
                                        </a>
                                        <ul class="clearfix step2">
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=31">
                                                <a itemprop="url" href="/tehran/c:traditionalrestaurants/">
                                                    غذای ايرانی و سنتی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=34">
                                                <a itemprop="url" href="/tehran/c:italianrestaurants/">
                                                    غذای ایتالیایی و ملل                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=37">
                                                <a itemprop="url" href="/tehran/c:fastfood/">
                                                    فست فود                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=40">
                                                <a itemprop="url" href="/tehran/c:sofrekhane/">
                                                    سفره خانه                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=74">
                                                <a itemprop="url" href="/tehran/c:buffet/">
                                                    بوفه                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=75">
                                                <a itemprop="url" href="/tehran/c:coffeeshop/">
                                                    كافی شاپ                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=76">
                                                <a itemprop="url" href="/tehran/c:breakfast/">
                                                    صبحانه                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=433">
                                                <a itemprop="url" href="/tehran/c:catering/">
                                                    کیترینگ                                </a>                            </li>
                                        </ul>
                                    </li>




                                    <li class="li-entertainment">

                                        <a itemprop="url" href="/tehran/c:entertainment/" data-toggle="collapse" data-target="#sub-menu-6" style="height: 21.3333px; line-height: 20.3333px;">

                                            <i>
                                                <i class="icon icon-basketball"></i>
                                            </i>
                                            <span itemprop="name">تفریحی و ورزشی</span>
                                        </a>
                                        <ul class="clearfix step2">
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=43">
                                                <a itemprop="url" href="/tehran/c:traveltours/">
                                                    تورهای مسافرتی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=46">
                                                <a itemprop="url" href="/tehran/c:hotels/">
                                                    هتل و اقامتگاه                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=80">
                                                <a itemprop="url" href="/tehran/c:amusementpark/">
                                                    شهربازی و مراکز تفریحی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=81">
                                                <a itemprop="url" href="/tehran/c:groupgames/">
                                                    بازی های گروهی و زمین بازی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=82">
                                                <a itemprop="url" href="/tehran/c:swimmingpool/">
                                                    استخر و ورزش های آبی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=83">
                                                <a itemprop="url" href="/tehran/c:aerobics/">
                                                    ورزش های هوایی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=84">
                                                <a itemprop="url" href="/tehran/c:sportclub/">
                                                    باشگاه ورزشی                                </a>                            </li>
                                        </ul>
                                    </li>




                                    <li class="li-health">

                                        <a itemprop="url" href="/tehran/c:health/" data-toggle="collapse" data-target="#sub-menu-15" style="height: 21.3333px; line-height: 20.3333px;">

                                            <i>
                                                <i class="icon icon-car-first-aid-kit"></i>
                                            </i>
                                            <span itemprop="name">پزشکی و سلامت</span>
                                        </a>
                                        <ul class="clearfix step2">
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=52">
                                                <a itemprop="url" href="/tehran/c:laser/">
                                                    لیزر موهای زائد                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=92">
                                                <a itemprop="url" href="/tehran/c:botox/">
                                                    ژل و بوتاکس                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=93">
                                                <a itemprop="url" href="/tehran/c:fitness/">
                                                    خدمات تناسب اندام و لاغری                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=94">
                                                <a itemprop="url" href="/tehran/c:massage/">
                                                    ماساژ                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=95">
                                                <a itemprop="url" href="/tehran/c:skinandbeauty/">
                                                    پوست و زیبایی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=96">
                                                <a itemprop="url" href="/tehran/c:dental/">
                                                    خدمات دندانپزشکی                                </a>                            </li>
                                        </ul>
                                    </li>




                                    <li class="li-art">

                                        <a itemprop="url" href="/tehran/c:art/" data-toggle="collapse" data-target="#sub-menu-9" style="height: 21.3333px; line-height: 20.3333px;">

                                            <i>
                                                <i class="icon icon-Theater"></i>
                                            </i>
                                            <span itemprop="name">هنر و تئاتر</span>
                                        </a>
                                        <ul class="clearfix step2">
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=58">
                                                <a itemprop="url" href="/tehran/c:performance/">
                                                    نمایشی و فرهنگی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=61">
                                                <a itemprop="url" href="/tehran/c:atelier/">
                                                    آتلیه و خدمات چاپ                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=77">
                                                <a itemprop="url" href="/tehran/c:theater/">
                                                    تئاتر                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=78">
                                                <a itemprop="url" href="/tehran/c:concert/">
                                                    کنسرت                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=79">
                                                <a itemprop="url" href="/tehran/c:cinema/">
                                                    سینما                                </a>                            </li>
                                        </ul>
                                    </li>




                                    <li class="li-education">

                                        <a itemprop="url" href="/tehran/c:education/" data-toggle="collapse" data-target="#sub-menu-16" style="height: 21.3333px; line-height: 20.3333px;">

                                            <i>
                                                <i class="icon icon-earth-globe"></i>
                                            </i>
                                            <span itemprop="name">آموزشی</span>
                                        </a>
                                        <ul class="clearfix step2">
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=64">
                                                <a itemprop="url" href="/tehran/c:computercourses/">
                                                    کامپیوتر                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=85">
                                                <a itemprop="url" href="/tehran/c:music/">
                                                    موسیقی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=86">
                                                <a itemprop="url" href="/tehran/c:cooking/">
                                                    آشپزی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=87">
                                                <a itemprop="url" href="/tehran/c:foreignlanguages/">
                                                    زبان های خارجی                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=88">
                                                <a itemprop="url" href="/tehran/c:conference/">
                                                    گردهمایی و همایش                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=89">
                                                <a itemprop="url" href="/tehran/c:art/">
                                                    هنر                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=90">
                                                <a itemprop="url" href="/tehran/c:accounting/">
                                                    حسابداری                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=91">
                                                <a itemprop="url" href="/tehran/c:skill/">
                                                    مهارت های فردی                                </a>                            </li>
                                        </ul>
                                    </li>




                                    <li class="li-beauty">

                                        <a itemprop="url" href="/tehran/c:beauty/" data-toggle="collapse" data-target="#sub-menu-7" style="height: 21.3333px; line-height: 20.3333px;">

                                            <i>
                                                <i class="icon icon-lipstick-with-cover"></i>
                                            </i>
                                            <span itemprop="name">زیبایی و آرایشی</span>
                                        </a>
                                        <ul class="clearfix step2">
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=97">
                                                <a itemprop="url" href="/tehran/c:hairdressing/">
                                                    آرایش مو و صورت                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=98">
                                                <a itemprop="url" href="/tehran/c:nail/">
                                                    خدمات ناخن                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=99">
                                                <a itemprop="url" href="/tehran/c:skin/">
                                                    خدمات پوست                                </a>                            </li>
                                            <li mj-success="successMegaMenu" class="item2" mj-target="/Categories/getDescendents?id=100">
                                                <a itemprop="url" href="/tehran/c:waxing/">
                                                    اپیلاسیون                                </a>                            </li>
                                        </ul>
                                    </li>




                                    <li class="li-product">

                                        <a itemprop="url" href="/tehran/c:product/" data-toggle="collapse" data-target="#sub-menu-5" style="height: 21.3333px; line-height: 20.3333px;">

                                            <i>
                                                <i class="icon icon-shopping-bag-1"></i>
                                            </i>
                                            <span itemprop="name">کالا</span>
                                        </a>
                                        <ul class="clearfix step2">
                                            <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover" mj-target="/Categories/getDescendents?id=107">
                                                <a itemprop="url" href="/tehran/c:product/s:digitaldevices/">
                                                    کالای دیجیتال و لوازم جانبی                                </a>
                                            </li>
                                            <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover" mj-target="/Categories/getDescendents?id=101">
                                                <a itemprop="url" href="/tehran/c:product/s:home/">
                                                    خانه و آشپزخانه                                </a>
                                            </li>
                                            <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover" mj-target="/Categories/getDescendents?id=102">
                                                <a itemprop="url" href="/tehran/c:product/s:healthAndBeauty/">
                                                    آرایشی بهداشتی و پزشکی                                </a>
                                            </li>
                                            <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover" mj-target="/Categories/getDescendents?id=103">
                                                <a itemprop="url" href="/tehran/c:product/s:fashionAndAccessories/">
                                                    مد، پوشاک و اکسسوری                                </a>
                                            </li>
                                            <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover" mj-target="/Categories/getDescendents?id=105">
                                                <a itemprop="url" href="/tehran/c:product/s:juvenile/">
                                                    کودکانه و سرگرمی                                </a>
                                            </li>
                                            <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover" mj-target="/Categories/getDescendents?id=108">
                                                <a itemprop="url" href="/tehran/c:product/s:sports/">
                                                    ورزش و سفر                                </a>
                                            </li>
                                            <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover" mj-target="/Categories/getDescendents?id=106">
                                                <a itemprop="url" href="/tehran/c:product/s:culture/">
                                                    ملزومات اداری و هنر                                </a>
                                            </li>
                                            <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover" mj-target="/Categories/getDescendents?id=110">
                                                <a itemprop="url" href="/tehran/c:product/s:tools/">
                                                    ابزارآلات                                </a>
                                            </li>
                                            <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover" mj-target="/Categories/getDescendents?id=132">
                                                <a itemprop="url" href="/tehran/c:product/s:software/">
                                                    نرم افزار و بازی                                </a>
                                            </li>
                                        </ul>
                                    </li>





                                    <li class="li-giftcode" itemprop="name">
                                        <a itemprop="url" href="/tehran/c:giftcode/" data-toggle="collapse" data-target="#sub-menu-504" style="height: 21.3333px; line-height: 20.3333px;">
                                            <i>
                                                <i class="icon icon-couponcodes"></i>
                                            </i>
                                            <span>کد تخفیف</span>
                                        </a>
                                    </li>





                                    <li class="li-vip" itemprop="name">
                                        <a itemprop="url" href="/tehran/c:vip/" data-toggle="collapse" data-target="#sub-menu-507" style="height: 21.3333px; line-height: 20.3333px;">
                                            <i>
                                                <i class="icon icon-vip"></i>
                                            </i>
                                            <span>پیشنهادات لوکس</span>
                                            <div class="new-item">جدید </div>
                                        </a>
                                    </li>





                                    <li class="li-services" itemprop="name">
                                        <a itemprop="url" href="/tehran/c:services/" data-toggle="collapse" data-target="#sub-menu-506" style="height: 21.3333px; line-height: 20.3333px;">
                                            <i>
                                                <i class="icon icon-cleaning"></i>
                                            </i>
                                            <span>خدمات</span>
                                        </a>
                                    </li>



                                    <li class="sc li-last" itemprop="name">
                                        <a itemprop="url" href="/tehran/c:last/" style="height: 21.3333px; line-height: 20.3333px;">
                                            <i>
                                                <i class="icon icon-timer"></i>
                                            </i>
                                            <span>لحظه آخری</span>
                                        </a>
                                    </li></ul>                    </nav>
                        </div>
                        <div class="col-lg-19 col-md-22">
                            <div class="slider-full clearfix ">
                                <div class="overlay"></div>
                                <div id="carousel_2" data-ride="carousel" class="carousel carousel-2 slide nb-carousel">
                                    <!-- Indicators-->
                                    <!-- <ol class="carousel-indicators">
                                                        <li data-target="#carousel_2" data-slide-to=""
                                                class="  ">
                                                <i class="icon"></i>
                                            </li>
                                                </ol> -->
                                    <!-- Wrapper for slides-->
                                    <div role="listbox" class="carousel-inner">
                                        <div class="item">
                                            <ul class="deal-tag list-unstyled">
                                            </ul>
                                            <a href="http://netbarg.com/tehran/d/c:entertainment/156549/دلفیناریوم-برج-میلاد-98/">
                                                <img src="http://static.netbarg.com/img/banner/sliders/6/332310d7.jpg" alt="">                    </a>
                                        </div>
                                        <div class="item">
                                            <ul class="deal-tag list-unstyled">
                                            </ul>
                                            <a href="http://netbarg.com/trend/%D8%A7%D8%AA%D8%A7%D9%82-%D9%81%D8%B1%D8%A7%D8%B1/">
                                                <img src="http://static.netbarg.com/img/banner/sliders/6/229c041d.jpg" alt="">                    </a>
                                        </div>
                                        <div class="item">
                                            <ul class="deal-tag list-unstyled">
                                            </ul>
                                            <a href="http://netbarg.com/trend/%D9%BE%DB%8C%D9%86%D8%AA-%D8%A8%D8%A7%D9%84/">
                                                <img src="http://static.netbarg.com/img/banner/sliders/6/724d1d8b.jpg" alt="">                    </a>
                                        </div>
                                        <div class="item">
                                            <ul class="deal-tag list-unstyled">
                                            </ul>
                                            <a href="http://netbarg.com/trend/%D8%AA%D9%88%D8%B1-%DB%8C%DA%A9-%D8%B1%D9%88%D8%B2%D9%87/">
                                                <img src="http://static.netbarg.com/img/banner/sliders/6/bcbb1cd1.jpg" alt="">                    </a>
                                        </div>
                                        <div class="item">
                                            <ul class="deal-tag list-unstyled">
                                            </ul>
                                            <a href="http://netbarg.com/trend/%D8%AA%D9%88%D8%B1-%D8%B7%D8%A8%DB%8C%D8%B9%D8%AA-%DA%AF%D8%B1%D8%AF%DB%8C/">
                                                <img src="http://static.netbarg.com/img/banner/sliders/6/f9ad1dea.jpg" alt="">                    </a>
                                        </div>
                                        <div class="item">
                                            <ul class="deal-tag list-unstyled">
                                            </ul>
                                            <a href="http://netbarg.com/trend/%D8%AA%D8%AE%D9%81%DB%8C%D9%81-%D9%87%D8%A7%DB%8C-%DA%A9%D9%88%D8%AF%DA%A9-%D9%88-%D9%86%D9%88%D8%AC%D9%88%D8%A7%D9%86/">
                                                <img src="http://static.netbarg.com/img/banner/sliders/6/31c104e7.jpg" alt="">                    </a>
                                        </div>
                                        <div class="item active">
                                            <ul class="deal-tag list-unstyled">
                                            </ul>
                                            <a href="http://netbarg.com/trend/%D9%87%D8%AA%D9%84-%D9%85%D8%B4%D9%87%D8%AF/">
                                                <img src="http://static.netbarg.com/img/banner/sliders/6/0ff502cc.jpg" alt="">                    </a>
                                        </div>
                                        <div class="item">
                                            <ul class="deal-tag list-unstyled">
                                            </ul>
                                            <a href="http://netbarg.com/tehran/d/c:entertainment/160583/%D8%B3%D8%B1%D8%B2%D9%85%DB%8C%D9%86-%D9%81%DA%A9%D8%B1-%D8%A8%D8%A7%D8%B2%DB%8C%D8%A7-%D8%AF%D8%B1-%D8%AC%D8%B4%D9%86%D9%88%D8%A7%D8%B1%D9%87-%D8%AA%D8%A7%D8%A8%D8%B3%D8%AA%D8%A7%D9%86%DB%8C/">
                                                <img src="http://static.netbarg.com/img/banner/sliders/6/40a80fab.jpg" alt="">                    </a>
                                        </div>
                                    </div>
                                    <!-- Controls--><a href="#carousel_2" role="button" data-slide="prev" class="left carousel-control"><span aria-hidden="true" class="icon icon-arrow-left"></span><span class="sr-only">Previous</span></a><a href="#carousel_2" role="button" data-slide="next" class="right carousel-control"><span aria-hidden="true" class="icon icon-arrow-right"></span><span class="sr-only">Next</span></a>
                                </div>
                            </div>




                        </div>
                        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
                    </div>
                </div>
            </div>
            <div class="wrapper-2">
                <div class="container-fluid">
                    <div class="row h-position">
                        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs right-aside sticky-aside">
                            <div id="nava" class="affix-top">
                                <div class="float-cat">
                                    <ul>
                                        <a href="/tehran/c:todaydeals/" class="float-cat-todaydeal">
                                            <li>
                                                <i><i class="icon icon-logo_e"></i></i><span>نت‌برگ‌های امروز</span>
                                            </li>
                                        </a>

                                        <a href="/tehran/c:restaurant/" class="float-cat-restaurant">
                                            <li>
                                                <i>
                                                    <i class="icon icon-burger"></i>
                                                </i>
                                                <span>رستوران و فست فود</span>
                                            </li>
                                        </a>
                                        <a href="/tehran/c:entertainment/" class="float-cat-entertainment active">
                                            <li>
                                                <i>
                                                    <i class="icon icon-basketball"></i>
                                                </i>
                                                <span>تفریحی و ورزشی</span>
                                            </li>
                                        </a>
                                        <a href="/tehran/c:health/" class="float-cat-health">
                                            <li>
                                                <i>
                                                    <i class="icon icon-car-first-aid-kit"></i>
                                                </i>
                                                <span>پزشکی و سلامت</span>
                                            </li>
                                        </a>
                                        <a href="/tehran/c:art/" class="float-cat-art">
                                            <li>
                                                <i>
                                                    <i class="icon icon-Theater"></i>
                                                </i>
                                                <span>هنر و تئاتر</span>
                                            </li>
                                        </a>
                                        <a href="/tehran/c:education/" class="float-cat-education">
                                            <li>
                                                <i>
                                                    <i class="icon icon-earth-globe"></i>
                                                </i>
                                                <span>آموزشی</span>
                                            </li>
                                        </a>
                                        <a href="/tehran/c:beauty/" class="float-cat-beauty">
                                            <li>
                                                <i>
                                                    <i class="icon icon-lipstick-with-cover"></i>
                                                </i>
                                                <span>زیبایی و آرایشی</span>
                                            </li>
                                        </a>
                                        <a href="/tehran/c:product/" class="float-cat-product">
                                            <li>
                                                <i>
                                                    <i class="icon icon-shopping-bag-1"></i>
                                                </i>
                                                <span>کالا</span>
                                            </li>
                                        </a>
                                        <a href="/tehran/c:giftcode/" class="float-cat-giftcode">
                                            <li>
                                                <i>
                                                    <i class="icon icon-couponcodes"></i>
                                                </i>
                                                <span>کد تخفیف</span>
                                            </li>
                                        </a>
                                        <a href="/tehran/c:vip/" class="float-cat-vip">
                                            <li>
                                                <i>
                                                    <i class="icon icon-vip"></i>
                                                </i>
                                                <span>پیشنهادات لوکس</span>
                                            </li>
                                        </a>
                                        <a href="/tehran/c:services/" class="float-cat-services">
                                            <li>
                                                <i>
                                                    <i class="icon icon-cleaning"></i>
                                                </i>
                                                <span>خدمات</span>
                                            </li>
                                        </a>
                                        <a href="/tehran/c:last/" class="float-cat-last">
                                            <li class="sc calc">
                                                <i>
                                                    <i class="icon icon-timer"></i>
                                                </i>
                                                <span>لحظه آخری</span>
                                            </li>
                                        </a>            </ul>
                                </div>
                            </div>
                        </div>                <div class="col-lg-22 col-md-22 col-sm-24 col-xs-24 padd-0-xs clearfix">
                            <article class="cat-deal-color main-cat clearfix">
                            </article>
                            <article class="cat-deal-color main-cat clearfix">
                                <header class="section-header today-netbarg">
                                    <h3 class="hx">
                                        <span class="icon icon icon-Logo-fill"></span>
                                        <span class="article-h3">
                                                                            نت‌برگ‌های تفریحی و ورزشی                                                                    </span>
                                    </h3>
                                    <span class="pull-left deals-filter"><span class="clearfix gender-selector">
                  <ul class="list-inline list-unstyled">
                    <li class="female-filter">
                      <input id="genderFemale" value="2" name="gender_filter" type="radio">
                      <label for="genderFemale" data-gender="2" mj-type="single" mj-target="/tehran/c:groupgames?gender=2" mj-method="post" class="label-gender" mj-model="model2" mj-success="changeFilter" mj-value="0"><i class="icon icon-woman"></i></label>
                    </li>
                    <li class="both">
                      <input id="genderBoth" value="3" name="gender_filter" checked="checked" type="radio">
                      <label for="genderBoth" data-gender="3" mj-type="single" mj-target="/tehran/c:groupgames?gender=3" mj-method="post" class="label-gender" mj-model="model2" mj-success="changeFilter" mj-value="0"><i class="icon icon-man-woman"></i></label>
                    </li>
                    <li class="male-filter">
                      <input id="genderMale" value="1" name="gender_filter" type="radio">
                      <label for="genderMale" data-gender="1" mj-type="single" mj-target="/tehran/c:groupgames?gender=1" mj-method="post" class="label-gender" mj-model="model2" mj-success="changeFilter" mj-value="0"><i class="icon icon-man"></i></label>
                    </li>
                  </ul></span><span class="clearfix view-selector hidden-xs">
                  <ul class="list-inline list-unstyled">
                                          <li class="thumbnail-select " mj-type="single" mj-target="/tehran/c:groupgames?gender=3" mj-method="post" mj-model="model2" mj-success="changeView" mj-value="1"><a href="javascript:void(0);"><i class="icon icon-tile-view"></i></a></li>
                    <li class="row-select active" mj-type="single" mj-target="/tehran/c:groupgames?gender=3" mj-method="post" mj-model="model2" mj-success="changeView" mj-value="0"><a href="javascript:void(0);"><i class="icon icon-list-view"></i></a></li>
                  </ul>
                </span></span>
                                </header>
                                <div class="row cat-filter-box">
                                    <div class="col-lg-24 col-md-24 cat-filter">
                                        <div class="owl-carousel slide3 owl-rtl owl-loaded owl-drag">








                                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1206px;"><div class="owl-item active" style="width: auto; margin-left: 7px;"><div class="item">
                                                            <div class="slide_item">
                                                                <input id="cfilter6" class="deal-category filter-entertainment" value="entertainment" name="cat_filter" checked="checked" type="radio">
                                                                <label for="cfilter6" class="nb-btn nb-btn-sm name label-cat-filter" mj-type="single" mj-target="/tehran/c:entertainment?gender=3" mj-method="post" mj-model="model2" mj-success="changeFilter" mj-value="0">همه</label>
                                                            </div>
                                                        </div></div><div class="owl-item active" style="width: auto; margin-left: 7px;"><div class="item">
                                                            <div class="slide_item">
                                                                <input id="cfilter43" class="deal-category filter-entertainment" value="traveltours" name="cat_filter" type="radio">
                                                                <label for="cfilter43" class="nb-btn nb-btn-sm name label-cat-filter" mj-type="single" mj-target="/tehran/c:traveltours?gender=3" mj-method="post" mj-model="model2" mj-success="changeFilter" mj-value="0">تورهای مسافرتی</label>
                                                            </div>
                                                        </div></div><div class="owl-item active" style="width: auto; margin-left: 7px;"><div class="item">
                                                            <div class="slide_item">
                                                                <input id="cfilter46" class="deal-category filter-entertainment" value="hotels" name="cat_filter" type="radio">
                                                                <label for="cfilter46" class="nb-btn nb-btn-sm name label-cat-filter" mj-type="single" mj-target="/tehran/c:hotels?gender=3" mj-method="post" mj-model="model2" mj-success="changeFilter" mj-value="0">هتل و اقامتگاه</label>
                                                            </div>
                                                        </div></div><div class="owl-item active" style="width: auto; margin-left: 7px;"><div class="item">
                                                            <div class="slide_item">
                                                                <input id="cfilter80" class="deal-category filter-entertainment" value="amusementpark" name="cat_filter" type="radio">
                                                                <label for="cfilter80" class="nb-btn nb-btn-sm name label-cat-filter" mj-type="single" mj-target="/tehran/c:amusementpark?gender=3" mj-method="post" mj-model="model2" mj-success="changeFilter" mj-value="0">شهربازی و مراکز تفریحی</label>
                                                            </div>
                                                        </div></div><div class="owl-item" style="width: auto; margin-left: 7px;"><div class="item">
                                                            <div class="slide_item">
                                                                <input id="cfilter81" class="deal-category filter-entertainment" value="groupgames" name="cat_filter" type="radio">
                                                                <label for="cfilter81" class="nb-btn nb-btn-sm name label-cat-filter" mj-type="single" mj-target="/tehran/c:groupgames?gender=3" mj-method="post" mj-model="model2" mj-success="changeFilter" mj-value="0">بازی های گروهی و زمین بازی</label>
                                                            </div>
                                                        </div></div><div class="owl-item" style="width: auto; margin-left: 7px;"><div class="item">
                                                            <div class="slide_item">
                                                                <input id="cfilter82" class="deal-category filter-entertainment" value="swimmingpool" name="cat_filter" type="radio">
                                                                <label for="cfilter82" class="nb-btn nb-btn-sm name label-cat-filter" mj-type="single" mj-target="/tehran/c:swimmingpool?gender=3" mj-method="post" mj-model="model2" mj-success="changeFilter" mj-value="0">استخر و ورزش های آبی</label>
                                                            </div>
                                                        </div></div><div class="owl-item" style="width: auto; margin-left: 7px;"><div class="item">
                                                            <div class="slide_item">
                                                                <input id="cfilter83" class="deal-category filter-entertainment" value="aerobics" name="cat_filter" type="radio">
                                                                <label for="cfilter83" class="nb-btn nb-btn-sm name label-cat-filter" mj-type="single" mj-target="/tehran/c:aerobics?gender=3" mj-method="post" mj-model="model2" mj-success="changeFilter" mj-value="0">ورزش های هوایی</label>
                                                            </div>
                                                        </div></div><div class="owl-item" style="width: auto; margin-left: 7px;"><div class="item">
                                                            <div class="slide_item">
                                                                <input id="cfilter84" class="deal-category filter-entertainment" value="sportclub" name="cat_filter" type="radio">
                                                                <label for="cfilter84" class="nb-btn nb-btn-sm name label-cat-filter" mj-type="single" mj-target="/tehran/c:sportclub?gender=3" mj-method="post" mj-model="model2" mj-success="changeFilter" mj-value="0">باشگاه ورزشی</label>
                                                            </div>
                                                        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                                        <div data-target=".slide3" class="owl_btns"><span class="arrow right prev"><i class="icon-arrow-right icon"></i></span><span class="arrow left next"><i class="icon-arrow-left icon">        </i></span></div>
                                    </div>
                                </div>

                                <section class="section-body-ajax">


                                    <div class="main-cat-deal-list clearfix main-row general-row-deal grd">

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/127405/پینت-بال-اسنایپر/" class="figure clearfix" style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/127405/1e8203dd.jpg&quot;); background-size: cover;">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/127405/1e8203dd.jpg" alt="پینت بال اسنایپر" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/127405/1e8203dd.jpg" class="sr-only" src="http://static.netbarg.com/img/responsive_medium/deals/127405/1e8203dd.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="351" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>145</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پینت-بال-اسنایپر"><h3>پینت بال اسنایپر</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/127405/پینت-بال-اسنایپر/" class="deal-desc">پینت بال در باشگاه اسنایپر ورودیه و گلوله اولیه تا 92% تخفیف و پرداخت از 960 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۴ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/دهکده-المپیک/">
                                        <i class="icon icon-location74"></i>دهکده المپیک                                     </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    6202                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪92</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/دهکده-المپیک/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">دهکده المپیک </span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۲,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="9600" class="full-price-s">۹۶۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/127405/پینت-بال-اسنایپر/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/152627/بازی-هیحان-انگیز-اتاق-فرار-بیمارستان-زامبی-14/" class="figure clearfix" style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/152627/1b2703aa.jpg&quot;); background-size: cover;">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/152627/1b2703aa.jpg" alt="بازی هیحان انگیز اتاق فرار بیمارستان زامبی" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/152627/1b2703aa.jpg" class="sr-only" src="http://static.netbarg.com/img/responsive_medium/deals/152627/1b2703aa.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="18998" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>76</span>
                            </span>
                                                        <span>
                                <a href="/merchant/اتاق-فرار-بیمارستان-زامبی"><h3>اتاق فرار بیمارستان زامبی</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/152627/بازی-هیحان-انگیز-اتاق-فرار-بیمارستان-زامبی-14/" class="deal-desc">بازی هیحان انگیز اتاق فرار بیمارستان زامبی تا 51% تخفیف و پرداخت از 29،400 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۷ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/پارک-وی/">
                                        <i class="icon icon-location74"></i>پارک وی                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    3675                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪51</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/پارک-وی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">پارک وی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۶۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="294000" class="full-price-s">۲۹,۴۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/152627/بازی-هیحان-انگیز-اتاق-فرار-بیمارستان-زامبی-14/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/153857/مجتمع-کوروش-با-بازی-معمای-تسلا/" class="figure clearfix" style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/153857/181f0377.jpg&quot;); background-size: cover;">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/153857/181f0377.jpg" alt="مجتمع کوروش با بازی معمای تسلا" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/153857/181f0377.jpg" class="sr-only" src="http://static.netbarg.com/img/responsive_medium/deals/153857/181f0377.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="12333" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>60</span>
                            </span>
                                                        <span>
                                <a href="/merchant/بازی-در-مجتمع-کوروش"><h3>بازی در مجتمع کوروش</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/153857/مجتمع-کوروش-با-بازی-معمای-تسلا/" class="deal-desc">مجتمع کوروش با بازی معمای تسلا (escape me) تا 71% تخفیف و پرداخت از 17،400 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/اتوبان-ستاری/">
                                        <i class="icon icon-location74"></i>اتوبان ستاری                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    2139                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪71</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/اتوبان-ستاری/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">اتوبان ستاری</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۶۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="174000" class="full-price-s">۱۷,۴۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/153857/مجتمع-کوروش-با-بازی-معمای-تسلا/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/135198/لیزرتگ-پینت-بال-لیزری-در-مجموعه-پرواز-36/" class="figure clearfix" style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/135198/0eda02e2.jpg&quot;); background-size: cover;">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/135198/0eda02e2.jpg" alt="لیزرتگ (پینت بال لیزری) در مجموعه پرواز" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/135198/0eda02e2.jpg" class="sr-only" src="http://static.netbarg.com/img/responsive_medium/deals/135198/0eda02e2.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="4402" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>82</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پینت-بال-پرواز"><h3>پینت بال پرواز</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/135198/لیزرتگ-پینت-بال-لیزری-در-مجموعه-پرواز-36/" class="deal-desc">لیزرتگ (پینت بال لیزری) در مجموعه پرواز با 45% تخفیف و پرداخت تنها 11,000 تومان به جای 20,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۶ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/سعادت-آباد/">
                                        <i class="icon icon-location74"></i>سعادت آباد                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    2243                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪45</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/سعادت-آباد/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">سعادت آباد</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۲۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="110000" class="full-price-s">۱۱,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/135198/لیزرتگ-پینت-بال-لیزری-در-مجموعه-پرواز-36/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/145162/پینت-بال-vip-38/" class="figure clearfix" style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/145162/4123954ae83b701922d7c1bf89ba7030559b36.jpg&quot;); background-size: cover;">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/145162/4123954ae83b701922d7c1bf89ba7030559b36.jpg" alt="پینت بال VIP " data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/145162/4123954ae83b701922d7c1bf89ba7030559b36.jpg" class="sr-only" src="http://static.netbarg.com/img/responsive_medium/deals/145162/4123954ae83b701922d7c1bf89ba7030559b36.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="12304" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>36</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پینت-بال-باشگاه-vip"><h3>پینت بال باشگاه vip</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/145162/پینت-بال-vip-38/" class="deal-desc">پینت بال VIP با 90% تخفیف و پرداخت تنها 1,200 تومان به جای 12,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۷ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/هنگام/">
                                        <i class="icon icon-location74"></i>هنگام                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    2702                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪90</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/هنگام/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">هنگام</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۲,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="12000" class="full-price-s">۱,۲۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/145162/پینت-بال-vip-38/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/149664/ورودی-پینت-بال-فایتر-همراه-با-100-گلوله-رایگان/" class="figure clearfix" style="background-image: url(&quot;http://static.netbarg.com/img/responsive_medium/deals/149664/1ede03e9.jpg&quot;); background-size: cover;">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/149664/1ede03e9.jpg" alt="ورودی پینت بال فایتر همراه با 100 گلوله رایگان" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/149664/1ede03e9.jpg" class="sr-only" src="http://static.netbarg.com/img/responsive_medium/deals/149664/1ede03e9.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20121" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>33</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-فایتر-چیتگر"><h3>مجموعه فایتر (چیتگر)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/149664/ورودی-پینت-بال-فایتر-همراه-با-100-گلوله-رایگان/" class="deal-desc">ورودی پینت بال فایتر (چیتگر) همراه با 100 گلوله رایگان برای لیدر گروه با 90% تخفیف و پرداخت تنها 1,500 تومان به جای 15,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۷ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/چیتگر/">
                                        <i class="icon icon-location74"></i>چیتگر                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    1557                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪90</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/چیتگر/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">چیتگر</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="15000" class="full-price-s">۱,۵۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/149664/ورودی-پینت-بال-فایتر-همراه-با-100-گلوله-رایگان/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/153799/بازی-مهیج-فرار-از-زندان-escape-me/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/153799/1c0403b7.jpg" alt="بازی مهیج فرار از زندان (escape me)" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/153799/1c0403b7.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20532" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>19</span>
                            </span>
                                                        <span>
                                <a href="/merchant/بازی-فرار-از-زندان-خیابان-دولت"><h3>بازی فرار از زندان( خیابان دولت)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/153799/بازی-مهیج-فرار-از-زندان-escape-me/" class="deal-desc">بازی مهیج فرار از زندان (escape me) تا 71% تخفیف و پرداخت از 17،400 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/خیابان-شریعتی/">
                                        <i class="icon icon-location74"></i>خیابان شریعتی                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    1500                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪71</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/خیابان-شریعتی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">خیابان شریعتی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۶۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="174000" class="full-price-s">۱۷,۴۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/153799/بازی-مهیج-فرار-از-زندان-escape-me/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/152810/پینت-بال-قلعه-مجموعه-ای-مجهز-با-100-گلوله-رایگان-18/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/152810/1e5703da.jpg" alt="پینت بال قلعه مجموعه ای مجهز با 100 گلوله رایگان" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/152810/1e5703da.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="9932" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>62</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پینت-بال-قلعه"><h3>پینت بال قلعه</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/152810/پینت-بال-قلعه-مجموعه-ای-مجهز-با-100-گلوله-رایگان-18/" class="deal-desc">پینت بال قلعه مجموعه ای تازه تاسیس و مجهز تا 94% تخفیف و پرداخت از 900 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۴ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/دهکده-المپیک/">
                                        <i class="icon icon-location74"></i>دهکده المپیک                                     </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    8508                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪94</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/دهکده-المپیک/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">دهکده المپیک </span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="9000" class="full-price-s">۹۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/152810/پینت-بال-قلعه-مجموعه-ای-مجهز-با-100-گلوله-رایگان-18/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:art/118831/نجات-گونه-های-کمیاب-گیاهی-باغ-ملی-گیاه-شناسی/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/118831/398338ab8609ab0971eb16ac0024bd36d8182d.jpg" alt="نجات گونه های کمیاب گیاهی باغ ملی گیاه شناسی" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/118831/398338ab8609ab0971eb16ac0024bd36d8182d.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="427" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>637</span>
                            </span>
                                                        <span>
                                <a href="/merchant/باغ-گیاه-شناسی-ملی-ایران"><h3>باغ گیاه شناسی ملی ایران</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:art/118831/نجات-گونه-های-کمیاب-گیاهی-باغ-ملی-گیاه-شناسی/" class="deal-desc">نجات گونه های کمیاب گیاهی به همراه بلیت رایگان باغ ملی گیاه شناسی در کمپین قبول سرپرستی یک دانه، نجات یک گونه ، با 35% تخفیف و پرداخت تنها 19,500 تومان به جای 30,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/باغ-گیاه-شناسی-ملی-ایران/">
                                        <i class="icon icon-location74"></i>باغ گیاه شناسی ملی ایران                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    1145                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪35</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/باغ-گیاه-شناسی-ملی-ایران/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">باغ گیاه شناسی ملی ایران</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۳۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="195000" class="full-price-s">۱۹,۵۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:art/118831/نجات-گونه-های-کمیاب-گیاهی-باغ-ملی-گیاه-شناسی/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/136030/ورودیه-پینت-بال-باشگاه-پرواز-70/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/136030/1b7503a6.jpg" alt="ورودیه پینت بال باشگاه پرواز" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/136030/1b7503a6.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="4402" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>82</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پینت-بال-پرواز"><h3>پینت بال پرواز</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/136030/ورودیه-پینت-بال-باشگاه-پرواز-70/" class="deal-desc">ورودیه بازی پرهیجان پینت بال در باشگاه پرواز با 90% تخفیف و پرداخت تنها 1.200 تومان به جای 12,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۷ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/سعادت-آباد/">
                                        <i class="icon icon-location74"></i>سعادت آباد                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    878                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪90</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/سعادت-آباد/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">سعادت آباد</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۲,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="12000" class="full-price-s">۱,۲۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/136030/ورودیه-پینت-بال-باشگاه-پرواز-70/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/153263/پینت-بال-مجموعه-ورزشی-کاج/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/153263/1b8003aa.jpg" alt="پینت بال مجموعه ورزشی کاج" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/153263/1b8003aa.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="12566" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>61</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-ورزشی-تفریحی-کاج-لیزر-تگ-و-پینت-بال-سرخه-حصار"><h3>مجموعه ورزشی تفریحی کاج (لیزر تگ  و پینت بال سرخه حصار)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/153263/پینت-بال-مجموعه-ورزشی-کاج/" class="deal-desc">پینت بال دهکده تفریحی ورزشی کاج  با 90% تخفیف و پرداخت تنها 700 تومان به جای 7,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۶ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/سه-راه-تهرانپارس/">
                                        <i class="icon icon-location74"></i>سه راه تهرانپارس                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    3917                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪90</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/سه-راه-تهرانپارس/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">سه راه تهرانپارس</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۷,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="7000" class="full-price-s">۷۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/153263/پینت-بال-مجموعه-ورزشی-کاج/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/153894/بازی-فرار-از-مدرسه-زنگ-هنر-escape-me/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/153894/18a00386.jpg" alt="بازی فرار از مدرسه زنگ هنر(escape me)" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/153894/18a00386.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="9544" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>80</span>
                            </span>
                                                        <span>
                                <a href="/merchant/بازی-فرار-از-مدرسه-زنگ-هنر"><h3>بازی فرار از مدرسه زنگ هنر</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/153894/بازی-فرار-از-مدرسه-زنگ-هنر-escape-me/" class="deal-desc">بازی فرار از مدرسه زنگ هنر (escape me) تا 72% تخفیف و پرداخت از 12،600 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/خیابان-طالقانی/">
                                        <i class="icon icon-location74"></i>خیابان طالقانی                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    671                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪72</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/خیابان-طالقانی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">خیابان طالقانی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۴۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="126000" class="full-price-s">۱۲,۶۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/153894/بازی-فرار-از-مدرسه-زنگ-هنر-escape-me/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159600/شادی-و-نشاط-کودکانه-در-خانه-بازی-باران/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159600/1e6403d8.jpg" alt="شادی و نشاط کودکانه در خانه بازی باران" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159600/1e6403d8.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="17772" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>24</span>
                            </span>
                                                        <span>
                                <a href="/merchant/خانه-بازی-باران"><h3>خانه بازی باران</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159600/شادی-و-نشاط-کودکانه-در-خانه-بازی-باران/" class="deal-desc">شادی و نشاط کودکانه در خانه بازی باران با 50% تخفیف و پرداخت تنها 10,000 تومان به جای 20,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/شهرک-گلستان/">
                                        <i class="icon icon-location74"></i>شهرک گلستان                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    2969                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/شهرک-گلستان/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">شهرک گلستان</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۲۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="100000" class="full-price-s">۱۰,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159600/شادی-و-نشاط-کودکانه-در-خانه-بازی-باران/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/160642/بازی-مهیج-اتاق-فرار-در-مجموعه-طهران-1346/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/160642/142b0355.jpg" alt="بازی مهیج اتاق فرار در مجموعه طهران 1346" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/160642/142b0355.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="14573" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>45</span>
                            </span>
                                                        <span>
                                <a href="/merchant/اتاق-فرار-طهران-1346"><h3>اتاق فرار "طهران 1346"</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/160642/بازی-مهیج-اتاق-فرار-در-مجموعه-طهران-1346/" class="deal-desc">بازی هیجان انگیز اتاق فرار ( اسکیپ روم ) طهران 1346 با 43% تخفیف و پرداخت تنها 22,800 تومان به جای 40,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/خیابان-نوفل-لوشاتو/">
                                        <i class="icon icon-location74"></i>خیابان نوفل لوشاتو                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    4890                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪43</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/خیابان-نوفل-لوشاتو/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">خیابان نوفل لوشاتو</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۴۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="228000" class="full-price-s">۲۲,۸۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/160642/بازی-مهیج-اتاق-فرار-در-مجموعه-طهران-1346/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159997/بازی-در-اتاق-فرار-قلعه/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159997/82910945.jpg" alt="بازی در اتاق فرار قلعه" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159997/82910945.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21244" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>11</span>
                            </span>
                                                        <span>
                                <a href="/merchant/اتاق-فرار-قلعه"><h3>اتاق فرار قلعه</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159997/بازی-در-اتاق-فرار-قلعه/" class="deal-desc">یک ساعت بازی در اتاق فرار قلعه تا 60% تخفیف و پرداخت از  28,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۵ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/سعادت-اباد/">
                                        <i class="icon icon-location74"></i>سعادت اباد                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    381                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪60</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/سعادت-اباد/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">سعادت اباد</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۷۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="280000" class="full-price-s">۲۸,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159997/بازی-در-اتاق-فرار-قلعه/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159981/آب-بازی-با-تفنگ-آبپاش-در-مجموعه-فایتر-دریاچه-چیتگر/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159981/b95a0afb.jpg" alt="آب بازی با تفنگ آبپاش در مجموعه فایتر دریاچه چیتگر" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159981/b95a0afb.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20121" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>33</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-فایتر-چیتگر"><h3>مجموعه فایتر (چیتگر)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159981/آب-بازی-با-تفنگ-آبپاش-در-مجموعه-فایتر-دریاچه-چیتگر/" class="deal-desc">آب بازی با تفنگ آبپاش در مجموعه فایتر دریاچه چیتگر با 88% تخفیف و پرداخت تنها 1,200 تومان به جای 10,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/چیتگر/">
                                        <i class="icon icon-location74"></i>چیتگر                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    364                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪88</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/چیتگر/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">چیتگر</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="12000" class="full-price-s">۱,۲۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159981/آب-بازی-با-تفنگ-آبپاش-در-مجموعه-فایتر-دریاچه-چیتگر/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159016/بیلیارد-و-ps4-در-مجموعه-توپ-چو/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159016/1b4e03b0.jpg" alt="بیلیارد و ps4 در مجموعه توپ چو" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159016/1b4e03b0.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21139" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>8</span>
                            </span>
                                                        <span>
                                <a href="/merchant/توپ-چو"><h3>توپ چو</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159016/بیلیارد-و-ps4-در-مجموعه-توپ-چو/" class="deal-desc">بیلیارد و ps4 در مجموعه توپ چو تا 50% تخفیف و پرداخت از 4,500 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۲ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/تهران سر/">
                                        <i class="icon icon-location74"></i>تهران سر                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    312                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/تهران سر/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">تهران سر</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۹,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="45000" class="full-price-s">۴,۵۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159016/بیلیارد-و-ps4-در-مجموعه-توپ-چو/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/157804/شهربازی-هورا-پارک-واقع-در-مرکز-خرید-سمرقند-57/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/157804/54_2.jpg" alt="شهربازی هورا پارک واقع در مرکز خرید سمرقند" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/157804/54_2.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="12942" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>26</span>
                            </span>
                                                        <span>
                                <a href="/merchant/شهربازی-هورا-پارک"><h3>شهربازی هورا پارک</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/157804/شهربازی-هورا-پارک-واقع-در-مرکز-خرید-سمرقند-57/" class="deal-desc">لحظاتی شاد در شهربازی هورا پارک واقع در مرکز خرید سمرقند با 81% تخفیف و پرداخت تنها 57,000 تومان به جای 300,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/جنت-آباد-جنوبی/">
                                        <i class="icon icon-location74"></i>جنت آباد جنوبی                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    585                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪81</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/جنت-آباد-جنوبی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">جنت آباد جنوبی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۳۰۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="570000" class="full-price-s">۵۷,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/157804/شهربازی-هورا-پارک-واقع-در-مرکز-خرید-سمرقند-57/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159094/لیزر-تگ-در-مجموعه-ورزشی-کاج-سرخه-حصار-94/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159094/1e7c03d6.jpg" alt="لیزر تگ در مجموعه ورزشی کاج سرخه حصار" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159094/1e7c03d6.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="12566" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>61</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-ورزشی-تفریحی-کاج-لیزر-تگ-و-پینت-بال-سرخه-حصار"><h3>مجموعه ورزشی تفریحی کاج (لیزر تگ  و پینت بال سرخه حصار)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159094/لیزر-تگ-در-مجموعه-ورزشی-کاج-سرخه-حصار-94/" class="deal-desc">بازی لیزر تگ در مجموعه ورزشی کاج سرخه حصار با 50% تخفیف و پرداخت تنها 12,500 تومان به جای 25,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۲ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/سه-راه-تهرانپارس/">
                                        <i class="icon icon-location74"></i>سه راه تهرانپارس                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    1490                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/سه-راه-تهرانپارس/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">سه راه تهرانپارس</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۲۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="125000" class="full-price-s">۱۲,۵۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159094/لیزر-تگ-در-مجموعه-ورزشی-کاج-سرخه-حصار-94/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159840/پینت-بال-در-باشگاه-شوتر-13/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159840/1bb003b1.jpg" alt="پینت بال در باشگاه شوتر" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159840/1bb003b1.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="15583" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>22</span>
                            </span>
                                                        <span>
                                <a href="/merchant/باشگاه-پینت-بال-شوترshooter"><h3>باشگاه پینت بال شوترshooter</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159840/پینت-بال-در-باشگاه-شوتر-13/" class="deal-desc">ورودی بازی پینت بال در باشگاه شوتر با 90% تخفیف و پرداخت تنها 1,200 تومان به جای 12,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/نیاوران-یاسر/">
                                        <i class="icon icon-location74"></i>نیاوران - یاسر                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    1766                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪90</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/نیاوران-یاسر/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">نیاوران - یاسر</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۲,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="12000" class="full-price-s">۱,۲۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159840/پینت-بال-در-باشگاه-شوتر-13/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162409/پینت-بال-آرمان-با-100-گلوله-رایگان-اولیه-29/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162409/1bac03ab.jpg" alt="پینت بال آرمان با 100 گلوله رایگان اولیه" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162409/1bac03ab.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="15223" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>23</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پینت-بال-آرمان"><h3>پینت بال آرمان</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162409/پینت-بال-آرمان-با-100-گلوله-رایگان-اولیه-29/" class="deal-desc">ورودی پینت بال آرمان همراه با 100 گلوله رایگان تجربه ای به یاد ماندنی با 90% تخفیف و پرداخت تنها 1,200 تومان به جای 12,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۶ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/خیابان استخر/">
                                        <i class="icon icon-location74"></i>خیابان استخر                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    930                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪90</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/خیابان استخر/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">خیابان استخر</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۲,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="12000" class="full-price-s">۱,۲۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162409/پینت-بال-آرمان-با-100-گلوله-رایگان-اولیه-29/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/160649/اسکیت-در-پیست-اسکیت-بهاران-25/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/160649/5685.jpg" alt="اسکیت در پیست اسکیت بهاران " data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/160649/5685.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="13601" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>2</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پیست-اسکیت-بهاران"><h3>پیست اسکیت بهاران</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/160649/اسکیت-در-پیست-اسکیت-بهاران-25/" class="deal-desc">اسکیت در پیست اسکیت بهاران تا 40%  تخفیف و پرداخت از 9,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/شهران/">
                                        <i class="icon icon-location74"></i>شهران                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    104                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪40</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/شهران/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">شهران</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="90000" class="full-price-s">۹,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/160649/اسکیت-در-پیست-اسکیت-بهاران-25/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161303/ps4-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161303/22d00461.jpg" alt="ps4 در مجموعه تفریحی شهدای دانشگاه تهران" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161303/22d00461.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20801" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>1</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-تفریحی-ورزشی-شهدای-دانشگاه-تهران"><h3>مجموعه تفریحی ورزشی شهدای دانشگاه تهران</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161303/ps4-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران/" class="deal-desc">بازی ps4 در مجموعه تفریحی ورزشی شهدای دانشگاه تهران با 50% تخفیف و پرداخت تنها 5,000 تومان به جای 10,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/شهرک دانشگاه تهران/">
                                        <i class="icon icon-location74"></i>شهرک دانشگاه تهران                                    </a>
                                </span>
                                                            <span class="deal-sell isempty">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    0                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/شهرک دانشگاه تهران/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">شهرک دانشگاه تهران</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="50000" class="full-price-s">۵,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161303/ps4-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162539/بازی-و-آموزش-تنیس-در-مجموعه-ورزشی-تختی/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162539/33.jpg" alt="بازی و آموزش تنیس در مجموعه ورزشی تختی" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162539/33.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="12053" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>5</span>
                            </span>
                                                        <span>
                                <a href="/merchant/استادیوم-ورزشی-تختی-پیروزی"><h3>استادیوم ورزشی تختی (پیروزی)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162539/بازی-و-آموزش-تنیس-در-مجموعه-ورزشی-تختی/" class="deal-desc">بازی و آموزش تنیس در مجموعه ورزشی تختی تا 50% تخفیف و پرداخت از 22,500 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/پیروزی (استادیوم تختی)/">
                                        <i class="icon icon-location74"></i>پیروزی (استادیوم تختی)                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    11                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/پیروزی (استادیوم تختی)/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">پیروزی (استادیوم تختی)</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۴۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="225000" class="full-price-s">۲۲,۵۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162539/بازی-و-آموزش-تنیس-در-مجموعه-ورزشی-تختی/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159087/اتاق-فرار-از-تنگنا-در-مجموعه-دالون-47/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159087/2535043c.jpg" alt="اتاق فرار از تنگنا در مجموعه دالون" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159087/2535043c.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="17953" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>15</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-دالون"><h3>مجموعه دالون</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159087/اتاق-فرار-از-تنگنا-در-مجموعه-دالون-47/" class="deal-desc">یک ساعت بازی در اتاق فرار از تنگنا مجموعه دالون با 40% تخفیف و پرداخت تنها 36,000 تومان به جای 60,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۶ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/لواسان/">
                                        <i class="icon icon-location74"></i>لواسان                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    331                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪40</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/لواسان/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">لواسان</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۶۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="360000" class="full-price-s">۳۶,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159087/اتاق-فرار-از-تنگنا-در-مجموعه-دالون-47/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161066/بازی-در-گیم-نت-پاشا/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161066/368c05df.jpg" alt="بازی در گیم نت پاشا" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161066/368c05df.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21374" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>0</span>
                            </span>
                                                        <span>
                                <a href="/merchant/گیم-نت-پاشا"><h3>گیم نت پاشا</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161066/بازی-در-گیم-نت-پاشا/" class="deal-desc">یک ساعت بازی در گیم نت پاشا تا 50% تخفیف و پرداخت از 6,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۷ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/صادقیه-بلوار-اباذر/">
                                        <i class="icon icon-location74"></i>صادقیه-بلوار اباذر                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    82                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/صادقیه-بلوار-اباذر/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">صادقیه-بلوار اباذر</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۲,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="60000" class="full-price-s">۶,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161066/بازی-در-گیم-نت-پاشا/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161996/گلف-در-باشگاه-مینی-گلف-مینیاتور/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161996/7c6e08f9.jpg" alt="گلف در باشگاه مینی گلف مینیاتور" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161996/7c6e08f9.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21372" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>2</span>
                            </span>
                                                        <span>
                                <a href="/merchant/باشگاه-مینی-گلف-مینیاتور"><h3>باشگاه مینی گلف مینیاتور</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161996/گلف-در-باشگاه-مینی-گلف-مینیاتور/" class="deal-desc">بازی گلف در باشگاه مینی گلف مینیاتور با 50% تخفیف و پرداخت تنها 20,000 تومان به جای 40,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/ولیعصر-پارک-ملت/">
                                        <i class="icon icon-location74"></i>ولیعصر - پارک ملت                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    44                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/ولیعصر-پارک-ملت/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">ولیعصر - پارک ملت</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۴۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="200000" class="full-price-s">۲۰,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161996/گلف-در-باشگاه-مینی-گلف-مینیاتور/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162797/اتاق-فرار-قاتل-سریالی/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162797/1f1703f1.jpg" alt="اتاق فرار قاتل سریالی" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162797/1f1703f1.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="19906" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>42</span>
                            </span>
                                                        <span>
                                <a href="/merchant/اتاق-فرار-قاتل-سریالی"><h3>اتاق فرار قاتل سریالی</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162797/اتاق-فرار-قاتل-سریالی/" class="deal-desc">بازی هیجان انگیز اتاق فرار قاتل سریالی تا 51% تخفیف و پرداخت از 29,400 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۵ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/نارمک/">
                                        <i class="icon icon-location74"></i>نارمک                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    1059                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪51</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/نارمک/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">نارمک</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۶۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="294000" class="full-price-s">۲۹,۴۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162797/اتاق-فرار-قاتل-سریالی/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161302/اسنوکر-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161302/370f05e1.jpg" alt="اسنوکر در مجموعه تفریحی شهدای دانشگاه تهران" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161302/370f05e1.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20801" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>1</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-تفریحی-ورزشی-شهدای-دانشگاه-تهران"><h3>مجموعه تفریحی ورزشی شهدای دانشگاه تهران</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161302/اسنوکر-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران/" class="deal-desc">اسنوکر در مجموعه تفریحی ورزشی شهدای دانشگاه تهران با 50% تخفیف و پرداخت تنها 12,500 تومان به جای 25,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/شهرک دانشگاه تهران/">
                                        <i class="icon icon-location74"></i>شهرک دانشگاه تهران                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    1                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/شهرک دانشگاه تهران/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">شهرک دانشگاه تهران</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۲۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="125000" class="full-price-s">۱۲,۵۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161302/اسنوکر-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161258/بازی-بسکتبال-در-باشگاه-ورزشی-مرلین/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161258/fd6f0c10.jpg" alt="بازی بسکتبال در باشگاه ورزشی مرلین" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161258/fd6f0c10.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21396" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>1</span>
                            </span>
                                                        <span>
                                <a href="/merchant/باشگاه-ورزشی-مرلین"><h3>باشگاه ورزشی مرلین</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161258/بازی-بسکتبال-در-باشگاه-ورزشی-مرلین/" class="deal-desc">اجاره زمین بازی بسکتبال در باشگاه ورزشی مرلین با 50% تخفیف و پرداخت تنها 7,500 تومان به جای 15,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۲ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/اتوبان-ستاری/">
                                        <i class="icon icon-location74"></i>اتوبان ستاری                                    </a>
                                </span>
                                                            <span class="deal-sell isempty">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    0                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/اتوبان-ستاری/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">اتوبان ستاری</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="75000" class="full-price-s">۷,۵۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161258/بازی-بسکتبال-در-باشگاه-ورزشی-مرلین/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/160211/بازی-مهیج-مگاریس-mega-race/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/160211/53700701.jpg" alt="بازی مهیج مگاریس ( mega race )" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/160211/53700701.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21272" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>6</span>
                            </span>
                                                        <span>
                                <a href="/merchant/بازی-mega-race"><h3>بازی mega race</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/160211/بازی-مهیج-مگاریس-mega-race/" class="deal-desc">بازی مهیج مگاریس ( mega race ) با 60% تخفیف و پرداخت تنها 8,000 تومان به جای 20,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۷ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/شهرک-غرب/">
                                        <i class="icon icon-location74"></i>شهرک غرب                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    45                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪60</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/شهرک-غرب/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">شهرک غرب</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۲۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="80000" class="full-price-s">۸,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/160211/بازی-مهیج-مگاریس-mega-race/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162027/گیم-نت-عرفان-با-بهترین-بازی-های-2018-و-2019/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162027/1eaf03d9.jpg" alt="گیم نت عرفان با بهترین بازی های 2018 و 2019" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162027/1eaf03d9.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="19614" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>0</span>
                            </span>
                                                        <span>
                                <a href="/merchant/گیم-نت-عرفان"><h3>گیم نت عرفان</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162027/گیم-نت-عرفان-با-بهترین-بازی-های-2018-و-2019/" class="deal-desc">گیم نت عرفان با بهترین بازی های 2018 و 2019 (تک نفره) تا 50% تخفیف و پرداخت از 3,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۲ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/آزادی/">
                                        <i class="icon icon-location74"></i>آزادی                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    4                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/آزادی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">آزادی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۶,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="30000" class="full-price-s">۳,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162027/گیم-نت-عرفان-با-بهترین-بازی-های-2018-و-2019/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/160887/ورودیه-سالن-سرپوشیده-پینت-بال-فارست/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/160887/a23f0a45.jpg" alt="ورودیه سالن سرپوشیده پینت بال فارست" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/160887/a23f0a45.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="14259" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>33</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پینت-بال-فارست-(ستارخان)"><h3>پینت بال فارست (ستارخان)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/160887/ورودیه-سالن-سرپوشیده-پینت-بال-فارست/" class="deal-desc">ورودیه سالن سرپوشیده پینت بال فارست ( ستارخان ) با 90% تخفیف و پرداخت تنها 1,200 تومان به جای 12,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۴ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/ستارخان/">
                                        <i class="icon icon-location74"></i>ستارخان                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    3847                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪90</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/ستارخان/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">ستارخان</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۲,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="12000" class="full-price-s">۱,۲۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/160887/ورودیه-سالن-سرپوشیده-پینت-بال-فارست/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/160572/بازی-اسکیت-در-پیست-اسکیت-شهران-شمالی/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/160572/11.jpg" alt="بازی اسکیت در پیست اسکیت شهران شمالی" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/160572/11.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="13523" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>5</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پیست-اسکیت-شهران-شمالی"><h3>پیست اسکیت شهران شمالی</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/160572/بازی-اسکیت-در-پیست-اسکیت-شهران-شمالی/" class="deal-desc">بازی اسکیت در پیست اسکیت شهران شمالی تا 40% تخفیف و پرداخت از 9,000  تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/شهران-شمالی/">
                                        <i class="icon icon-location74"></i>شهران شمالی                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    54                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪40</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/شهران-شمالی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">شهران شمالی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="90000" class="full-price-s">۹,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/160572/بازی-اسکیت-در-پیست-اسکیت-شهران-شمالی/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161301/بیلیارد-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161301/3c2a0623.jpg" alt="بیلیارد در مجموعه تفریحی شهدای دانشگاه تهران" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161301/3c2a0623.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20801" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>1</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-تفریحی-ورزشی-شهدای-دانشگاه-تهران"><h3>مجموعه تفریحی ورزشی شهدای دانشگاه تهران</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161301/بیلیارد-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران/" class="deal-desc">بیلیارد در مجموعه تفریحی ورزشی شهدای دانشگاه تهران با 50% تخفیف و پرداخت تنها 10,000 تومان به جای 20,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/شهرک دانشگاه تهران/">
                                        <i class="icon icon-location74"></i>شهرک دانشگاه تهران                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    1                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/شهرک دانشگاه تهران/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">شهرک دانشگاه تهران</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۲۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="100000" class="full-price-s">۱۰,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161301/بیلیارد-در-مجموعه-تفریحی-شهدای-دانشگاه-تهران/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/157100/برد-گیم-نارمک/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/157100/1f4103e5.jpg" alt="برد گیم نارمک" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/157100/1f4103e5.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20934" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>5</span>
                            </span>
                                                        <span>
                                <a href="/merchant/بردگیم-هفت-حوض"><h3>بردگیم(هفت حوض)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/157100/برد-گیم-نارمک/" class="deal-desc">یک ساعت بازی در برد گیم نارمک تا 53% تخفیف و پرداخت از 5,640 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/هفت-حوض/">
                                        <i class="icon icon-location74"></i>هفت حوض                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    90                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪53</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/هفت-حوض/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">هفت حوض</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۲,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="56400" class="full-price-s">۵,۶۴۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/157100/برد-گیم-نارمک/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159325/اتاق-فرار-تهرومز-بازی-کاملا-مهیج/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159325/1ee603e7.jpg" alt="اتاق فرار تهرومز بازی کاملا مهیج" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159325/1ee603e7.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20143" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>9</span>
                            </span>
                                                        <span>
                                <a href="/merchant/اتاق-فرار-تهرومز"><h3>اتاق فرار تهرومز</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159325/اتاق-فرار-تهرومز-بازی-کاملا-مهیج/" class="deal-desc">بازی هیجان انگیز فرار از سلول انفرادی در مجموعه اتاق فرار تهرومز با 60% تخفیف و پرداخت تنها 24،000 تومان به جای 60,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۵ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/امیریه-خیابان قلمستان/">
                                        <i class="icon icon-location74"></i>امیریه-خیابان قلمستان                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    109                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪60</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/امیریه-خیابان قلمستان/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">امیریه-خیابان قلمستان</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۶۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="240000" class="full-price-s">۲۴,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159325/اتاق-فرار-تهرومز-بازی-کاملا-مهیج/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161289/کودک-شاد-و-خلاق-با-هوش-حرکتی-26/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161289/2.jpg" alt="کودک شاد و خلاق با هوش حرکتی" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161289/2.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="12707" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>10</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-آموزشی-هوش-حرکتی"><h3>مجموعه آموزشی  هوش حرکتی</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161289/کودک-شاد-و-خلاق-با-هوش-حرکتی-26/" class="deal-desc">کودک شاد و خلاق در مرکز تبسم با هوش حرکتی با 90% تخفیف و پرداخت تنها 5,000 تومان به جای 50,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۲ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/میدان دکتر فاطمی(جهاد)/">
                                        <i class="icon icon-location74"></i>میدان دکتر فاطمی(جهاد)                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    244                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪90</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/میدان دکتر فاطمی(جهاد)/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">میدان دکتر فاطمی(جهاد)</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۵۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="50000" class="full-price-s">۵,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161289/کودک-شاد-و-خلاق-با-هوش-حرکتی-26/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162868/دریاچه-شهدای-خلیج-فارس-چیتگر-با-4-بازی-جذاب-75/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162868/1e6303e1.jpg" alt="دریاچه شهدای خلیج فارس (چیتگر) با 4 بازی جذاب" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162868/1e6303e1.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="8488" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>137</span>
                            </span>
                                                        <span>
                                <a href="/merchant/دریاچه-شهدای-خلیج-فارس(چیتگر)"><h3>دریاچه شهدای خلیج فارس(چیتگر)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162868/دریاچه-شهدای-خلیج-فارس-چیتگر-با-4-بازی-جذاب-75/" class="deal-desc">دریاچه شهدای خلیج فارس (چیتگر) با سرسره سقوط آزاد و خروشان، رول گلایدر و پرش در آسمان تا 30% تخفیف و پرداخت از 6,300 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۵ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/دریاچه-خلیج-فارس/">
                                        <i class="icon icon-location74"></i>دریاچه خلیج فارس                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    2919                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪30</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/دریاچه-خلیج-فارس/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">دریاچه خلیج فارس</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۹,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="63000" class="full-price-s">۶,۳۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162868/دریاچه-شهدای-خلیج-فارس-چیتگر-با-4-بازی-جذاب-75/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161384/ورودی-اتاق-خشم-دریاچه-خلیج-فارس-62/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161384/189d037c.jpg" alt="ورودی اتاق خشم دریاچه خلیج فارس" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161384/189d037c.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20776" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>20</span>
                            </span>
                                                        <span>
                                <a href="/merchant/اتاق-خشم"><h3>اتاق خشم</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161384/ورودی-اتاق-خشم-دریاچه-خلیج-فارس-62/" class="deal-desc">ورودی اتاق خشم دریاچه خلیج فارس، احساس آرامش با شکستن هر نوع وسیله با 50% تخفیف و پرداخت تنها 6,000 تومان به جای 12,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/دریاچه-خلیج-فارس/">
                                        <i class="icon icon-location74"></i>دریاچه خلیج فارس                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    110                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/دریاچه-خلیج-فارس/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">دریاچه خلیج فارس</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۲,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="60000" class="full-price-s">۶,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161384/ورودی-اتاق-خشم-دریاچه-خلیج-فارس-62/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/152779/یک-ساعت-پینت-بال-با-تیرهای-نامحدود-در-باشگاه-پرواز-93/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/152779/1856979cec09808a31c238de83823c4ebdb15d.jpg" alt="یک ساعت پینت بال با تیرهای نامحدود در باشگاه پرواز" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/152779/1856979cec09808a31c238de83823c4ebdb15d.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="4402" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>82</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پینت-بال-پرواز"><h3>پینت بال پرواز</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/152779/یک-ساعت-پینت-بال-با-تیرهای-نامحدود-در-باشگاه-پرواز-93/" class="deal-desc">پینت بال با تیرهای نامحدود (free ball) در باشگاه پرواز با 46% تخفیف و پرداخت تنها 29.700 تومان به جای 55,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۷ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/سعادت-آباد/">
                                        <i class="icon icon-location74"></i>سعادت آباد                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    317                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪46</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/سعادت-آباد/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">سعادت آباد</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۵۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="297000" class="full-price-s">۲۹,۷۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/152779/یک-ساعت-پینت-بال-با-تیرهای-نامحدود-در-باشگاه-پرواز-93/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159703/اتاق-فرار-گاراژ-متروکه/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159703/1bcf03b1.jpg" alt="اتاق فرار گاراژ متروکه" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159703/1bcf03b1.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="18998" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>76</span>
                            </span>
                                                        <span>
                                <a href="/merchant/اتاق-فرار-بیمارستان-زامبی"><h3>اتاق فرار بیمارستان زامبی</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159703/اتاق-فرار-گاراژ-متروکه/" class="deal-desc">بازی مهیج فرار از گاراژ متروکه تا 51% تخفیف و پرداخت از 29،400 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/پارک-وی/">
                                        <i class="icon icon-location74"></i>پارک وی                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    648                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪51</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/پارک-وی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">پارک وی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۶۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="294000" class="full-price-s">۲۹,۴۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159703/اتاق-فرار-گاراژ-متروکه/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/160551/دوچرخه-سواری-در-دهکده-گردشگری-سلامت-صبا/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/160551/1b7603b8.jpg" alt="دوچرخه سواری در دهکده گردشگری سلامت صبا" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/160551/1b7603b8.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="19777" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>38</span>
                            </span>
                                                        <span>
                                <a href="/merchant/دهکده-گردشگری-سلامت-صبا"><h3>دهکده گردشگری سلامت صبا</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/160551/دوچرخه-سواری-در-دهکده-گردشگری-سلامت-صبا/" class="deal-desc">استفاده از پیست دوچرخه سواری دهکده گردشگری سلامت صبا با 40% تخفیف و پرداخت تنها 6,000 تومان به جای 10,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/اتوبان ساوه/">
                                        <i class="icon icon-location74"></i>اتوبان ساوه                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    39                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪40</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/اتوبان ساوه/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">اتوبان ساوه</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="60000" class="full-price-s">۶,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/160551/دوچرخه-سواری-در-دهکده-گردشگری-سلامت-صبا/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161784/گیم-نت-آراد-با-بازی-های-مهیج-ps4/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161784/70ac0857.jpg" alt="گیم نت آراد با بازی های مهیج PS4" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161784/70ac0857.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21479" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>0</span>
                            </span>
                                                        <span>
                                <a href="/merchant/گیم-نت-آراد-39"><h3>گیم نت آراد</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161784/گیم-نت-آراد-با-بازی-های-مهیج-ps4/" class="deal-desc">بازی PS4 در گیم نت آراد تا 80% تخفیف و پرداخت از 1,600 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/سردار-جنگل-شمالی/">
                                        <i class="icon icon-location74"></i>سردار جنگل شمالی                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    21                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪80</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/سردار-جنگل-شمالی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">سردار جنگل شمالی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۸,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="16000" class="full-price-s">۱,۶۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161784/گیم-نت-آراد-با-بازی-های-مهیج-ps4/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159961/بازی-در-گیم-نت-سایکو/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159961/31d80545.jpg" alt="بازی در گیم نت سایکو" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159961/31d80545.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21228" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>4</span>
                            </span>
                                                        <span>
                                <a href="/merchant/گیم-نت-سایکو-psycho"><h3>گیم نت سایکو Psycho</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159961/بازی-در-گیم-نت-سایکو/" class="deal-desc">یک ساعت بازی در گیم نت سایکو تا 50% تخفیف و پرداخت از 7,500 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۵ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/بلوار-مرزداران/">
                                        <i class="icon icon-location74"></i>بلوار مرزداران                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    8                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/بلوار-مرزداران/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">بلوار مرزداران</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="75000" class="full-price-s">۷,۵۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159961/بازی-در-گیم-نت-سایکو/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161886/منطقه-بازی-بارلوتی/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161886/367f05db.jpg" alt="منطقه بازی بارلوتی" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161886/367f05db.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21485" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>1</span>
                            </span>
                                                        <span>
                                <a href="/merchant/منطقه-بازی-بارلوتی"><h3>منطقه بازی بارلوتی</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161886/منطقه-بازی-بارلوتی/" class="deal-desc">بهترین بازی های کامپیوتری در منطقه بازی بارلوتی با 50% تخفیف و پرداخت تنها 10,000 تومان به جای 20,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/گیشا/">
                                        <i class="icon icon-location74"></i>گیشا                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    5                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/گیشا/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">گیشا</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۲۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="100000" class="full-price-s">۱۰,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161886/منطقه-بازی-بارلوتی/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161257/اسکیت-تفریحی-در-باشگاه-ورزشی-مرلین/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161257/36d805e4.jpg" alt="اسکیت تفریحی در باشگاه ورزشی مرلین" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161257/36d805e4.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21396" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>1</span>
                            </span>
                                                        <span>
                                <a href="/merchant/باشگاه-ورزشی-مرلین"><h3>باشگاه ورزشی مرلین</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161257/اسکیت-تفریحی-در-باشگاه-ورزشی-مرلین/" class="deal-desc">اجاره زمین بازی اسکیت در باشگاه ورزشی مرلین با 50% تخفیف و پرداخت تنها 7,500 تومان به جای 15,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/اتوبان-ستاری/">
                                        <i class="icon icon-location74"></i>اتوبان ستاری                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    6                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/اتوبان-ستاری/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">اتوبان ستاری</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="75000" class="full-price-s">۷,۵۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161257/اسکیت-تفریحی-در-باشگاه-ورزشی-مرلین/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/153288/بازی-دوئل-در-مجموعه-پرواز/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/153288/472c0600.jpg" alt="بازی دوئل در مجموعه پرواز" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/153288/472c0600.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="4402" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>82</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پینت-بال-پرواز"><h3>پینت بال پرواز</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/153288/بازی-دوئل-در-مجموعه-پرواز/" class="deal-desc">بازی دوئل در مجموعه پرواز با 44% تخفیف و پرداخت تنها 19,600 تومان به جای 35,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۲ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/سعادت-آباد/">
                                        <i class="icon icon-location74"></i>سعادت آباد                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    19                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪44</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/سعادت-آباد/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">سعادت آباد</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۳۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="196000" class="full-price-s">۱۹,۶۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/153288/بازی-دوئل-در-مجموعه-پرواز/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161735/پینت-بال-فارست/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161735/0544.jpg" alt="پینت بال فارست" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161735/0544.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="14259" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>33</span>
                            </span>
                                                        <span>
                                <a href="/merchant/پینت-بال-فارست-(ستارخان)"><h3>پینت بال فارست (ستارخان)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161735/پینت-بال-فارست/" class="deal-desc">ورودیه پینت بال فارست (ستارخان) با 90% تخفیف و پرداخت تنها 1,200 تومان به جای 12,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/ستارخان/">
                                        <i class="icon icon-location74"></i>ستارخان                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    3875                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪90</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/ستارخان/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">ستارخان</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۲,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="12000" class="full-price-s">۱,۲۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161735/پینت-بال-فارست/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162838/دریاچه-شهدای-خلیج-فارس-چیتگر-با-6-بازی-جذاب-87/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162838/1e0103dd.jpg" alt="دریاچه شهدای خلیج فارس (چیتگر) با 6 بازی جذاب" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162838/1e0103dd.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="8488" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>137</span>
                            </span>
                                                        <span>
                                <a href="/merchant/دریاچه-شهدای-خلیج-فارس(چیتگر)"><h3>دریاچه شهدای خلیج فارس(چیتگر)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162838/دریاچه-شهدای-خلیج-فارس-چیتگر-با-6-بازی-جذاب-87/" class="deal-desc">دریاچه شهدای خلیج فارس (چیتگر) با ماژول میز VR ، اسکی VR ، کایاک VR ، موج سواری VR ، چرخ و فلک و اسکای فلایر تا 30% تخفیف و پرداخت از 7,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۵ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/دریاچه-خلیج-فارس/">
                                        <i class="icon icon-location74"></i>دریاچه خلیج فارس                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    1278                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪30</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/دریاچه-خلیج-فارس/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">دریاچه خلیج فارس</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="70000" class="full-price-s">۷,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162838/دریاچه-شهدای-خلیج-فارس-چیتگر-با-6-بازی-جذاب-87/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/160446/آفرود-در-تهران-با-آفرود-باقری-87/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/160446/22dc042d.jpg" alt="آفرود در تهران با آفرود باقری" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/160446/22dc042d.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="18073" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>13</span>
                            </span>
                                                        <span>
                                <a href="/merchant/آفرود-باقری"><h3>آفرود(باقری)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/160446/آفرود-در-تهران-با-آفرود-باقری-87/" class="deal-desc">هیجان آفرود در تهران با آفرود باقری با 40% تخفیف و پرداخت تنها 150,000 تومان به جای 250,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۵ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/وردآورد/">
                                        <i class="icon icon-location74"></i>وردآورد                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    48                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪40</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/وردآورد/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">وردآورد</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۲۵۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="1500000" class="full-price-s">۱۵۰,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/160446/آفرود-در-تهران-با-آفرود-باقری-87/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159906/بازی-ps4-در-گیم-نت-سینما-ایران/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159906/1b1d03a8.jpg" alt="بازی PS4 در گیم نت سینما ایران" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159906/1b1d03a8.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="18082" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>17</span>
                            </span>
                                                        <span>
                                <a href="/merchant/گیم-نت-سینما-ایران"><h3>گیم نت سینما ایران</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159906/بازی-ps4-در-گیم-نت-سینما-ایران/" class="deal-desc">بازی PS4 در گیم نت سینما ایران با 50% تخفیف و پرداخت تنها 5,000 تومان به جای 10,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۷ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/شریعتی-بهار-شیراز/">
                                        <i class="icon icon-location74"></i>شریعتی-بهار شیراز                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    402                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/شریعتی-بهار-شیراز/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">شریعتی-بهار شیراز</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="50000" class="full-price-s">۵,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159906/بازی-ps4-در-گیم-نت-سینما-ایران/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161380/بازی-در-گیم-نت-s4/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161380/367e05d5.jpg" alt="بازی در گیم نت S4" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161380/367e05d5.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21411" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>0</span>
                            </span>
                                                        <span>
                                <a href="/merchant/گیم-نت-s4"><h3>گیم نت S4</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161380/بازی-در-گیم-نت-s4/" class="deal-desc">یک ساعت بازی در گیم نت S4 با 50% تخفیف و پرداخت تنها 6,500 تومان به جای 13,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/پونک/">
                                        <i class="icon icon-location74"></i>پونک                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    3                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/پونک/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">پونک</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۳,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="65000" class="full-price-s">۶,۵۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161380/بازی-در-گیم-نت-s4/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161549/بازی-مهیج-اتاق-فرار-نجات-شهر-در-عمارت-دبیرالملک/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161549/77.jpg" alt="بازی مهیج اتاق فرار نجات شهر در عمارت دبیرالملک" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161549/77.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="12358" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>35</span>
                            </span>
                                                        <span>
                                <a href="/merchant/اتاق-فرار"><h3>اتاق فرار</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161549/بازی-مهیج-اتاق-فرار-نجات-شهر-در-عمارت-دبیرالملک/" class="deal-desc">اتاق فرار «نجات شهر» در عمارت تاریخی دبیرالملک بازی کاملا هیجان انگیز با 43% تخفیف و پرداخت تنها 22,800 تومان به جای 40,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۴ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/سرچشمه/">
                                        <i class="icon icon-location74"></i>سرچشمه                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    3740                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪43</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/سرچشمه/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">سرچشمه</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۴۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="228000" class="full-price-s">۲۲,۸۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161549/بازی-مهیج-اتاق-فرار-نجات-شهر-در-عمارت-دبیرالملک/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162677/بازی-فرار-atm-از-مجموعه-بازی-های-فرار-کینزا/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162677/189f037c.jpg" alt="بازی فرار ATM از مجموعه بازی های فرار کینزا" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162677/189f037c.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="18916" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>8</span>
                            </span>
                                                        <span>
                                <a href="/merchant/بازی-فرار-کینزا"><h3>بازی فرار کینزا</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162677/بازی-فرار-atm-از-مجموعه-بازی-های-فرار-کینزا/" class="deal-desc">بازی فرار ATM از مجموعه بازیهای فرار کینزا با 50% تخفیف و پرداخت تنها 25,000 تومان به جای 50,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/پارک-ساعی/">
                                        <i class="icon icon-location74"></i>پارک ساعی                                    </a>
                                </span>
                                                            <span class="deal-sell isempty">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    0                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/پارک-ساعی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">پارک ساعی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۵۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="250000" class="full-price-s">۲۵,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162677/بازی-فرار-atm-از-مجموعه-بازی-های-فرار-کینزا/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162238/بازی-ps4-در-گیم-لند-طاها/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162238/22d20462.jpg" alt="بازی ps4 در گیم لند طاها" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162238/22d20462.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21539" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>0</span>
                            </span>
                                                        <span>
                                <a href="/merchant/گیم-لند-طاها"><h3>گیم لند طاها</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162238/بازی-ps4-در-گیم-لند-طاها/" class="deal-desc">یک ساعت بازی ps4 در گیم لند طاها تا 50% تخفیف و پرداخت از 5,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۴ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/پونک/">
                                        <i class="icon icon-location74"></i>پونک                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    7                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/پونک/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">پونک</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="50000" class="full-price-s">۵,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162238/بازی-ps4-در-گیم-لند-طاها/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/161077/بازی-در-گیم-نت-اسکای/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/161077/221d0410.jpg" alt="بازی در گیم نت اسکای" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/161077/221d0410.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="11640" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>8</span>
                            </span>
                                                        <span>
                                <a href="/merchant/گیم-نت-اسکای-ستارخان"><h3>گیم نت اسکای (ستارخان)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/161077/بازی-در-گیم-نت-اسکای/" class="deal-desc">گیم نت اسکای با انواع بازی های روز دنیا تا 50% تخفیف و پرداخت از 10,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/ستارخان/">
                                        <i class="icon icon-location74"></i>ستارخان                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    4                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/ستارخان/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">ستارخان</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۲۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="100000" class="full-price-s">۱۰,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/161077/بازی-در-گیم-نت-اسکای/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162619/اتاق-فرار-مردگان-متحرک-از-مجموعه-escape-master/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162619/1f7003f4.jpg" alt="اتاق فرار مردگان متحرک از مجموعه escape master" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162619/1f7003f4.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20691" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>20</span>
                            </span>
                                                        <span>
                                <a href="/merchant/اتاق-فرار-مردگان-متحرک"><h3>اتاق فرار مردگان متحرک</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162619/اتاق-فرار-مردگان-متحرک-از-مجموعه-escape-master/" class="deal-desc">بازی ترسناک اتاق فرار مردگان متحرک از مجموعه escape master تا 50% تخفیف و پرداخت از 30,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۸ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/نارمک/">
                                        <i class="icon icon-location74"></i>نارمک                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    296                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/نارمک/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">نارمک</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۶۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="300000" class="full-price-s">۳۰,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162619/اتاق-فرار-مردگان-متحرک-از-مجموعه-escape-master/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162410/شهربازی-و-خانه-کودک-در-مجموعه-شهدای-دانشگاه-تهران/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162410/675807fb.jpg" alt="شهربازی و خانه کودک در مجموعه شهدای دانشگاه تهران" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162410/675807fb.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20801" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>1</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-تفریحی-ورزشی-شهدای-دانشگاه-تهران"><h3>مجموعه تفریحی ورزشی شهدای دانشگاه تهران</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162410/شهربازی-و-خانه-کودک-در-مجموعه-شهدای-دانشگاه-تهران/" class="deal-desc">شهربازی و خانه کودک در مجموعه تفریحی ورزشی شهدای دانشگاه تهران با 50% تخفیف و پرداخت تنها 10,000 تومان به جای 20,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۶ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/شهرک دانشگاه تهران/">
                                        <i class="icon icon-location74"></i>شهرک دانشگاه تهران                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    2                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪50</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/شهرک دانشگاه تهران/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">شهرک دانشگاه تهران</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۲۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="100000" class="full-price-s">۱۰,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162410/شهربازی-و-خانه-کودک-در-مجموعه-شهدای-دانشگاه-تهران/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/162671/بازی-فرار-طلسم-سیاه-از-مجموعه-بازی-های-فرار-کینزا-18/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/162671/1b7403a7.jpg" alt="بازی فرار طلسم سیاه از مجموعه بازی های فرار کینزا" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/162671/1b7403a7.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="18916" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>8</span>
                            </span>
                                                        <span>
                                <a href="/merchant/بازی-فرار-کینزا"><h3>بازی فرار کینزا</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/162671/بازی-فرار-طلسم-سیاه-از-مجموعه-بازی-های-فرار-کینزا-18/" class="deal-desc">بازی طلسم سیاه از مجموعه بازیهای فرار کینزا با 52% تخفیف و پرداخت تنها 24,000 تومان به جای 50,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۱۱ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/پارک-ساعی/">
                                        <i class="icon icon-location74"></i>پارک ساعی                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    245                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪52</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/پارک-ساعی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">پارک ساعی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۵۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="240000" class="full-price-s">۲۴,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/162671/بازی-فرار-طلسم-سیاه-از-مجموعه-بازی-های-فرار-کینزا-18/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/160600/اسکیت-تفریحی-در-اسکیت-میرداماد/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/160600/24.jpg" alt="اسکیت تفریحی در اسکیت میرداماد" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/160600/24.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21312" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>0</span>
                            </span>
                                                        <span>
                                <a href="/merchant/اسکیت-میرداماد"><h3>اسکیت میرداماد</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/160600/اسکیت-تفریحی-در-اسکیت-میرداماد/" class="deal-desc">اسکیت تفریحی در اسکیت میرداماد با 60% تخفیف و پرداخت تنها 6,000 تومان به جای 15,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۴ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/میرداماد/">
                                        <i class="icon icon-location74"></i>میرداماد                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    13                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪60</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/میرداماد/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">میرداماد</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۱۵,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="60000" class="full-price-s">۶,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/160600/اسکیت-تفریحی-در-اسکیت-میرداماد/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:education/159767/دارت-در-نگین-پردیسان-غرب/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159767/6b6d0876.jpg" alt="دارت در نگین پردیسان غرب" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159767/6b6d0876.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="21220" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>3</span>
                            </span>
                                                        <span>
                                <a href="/merchant/نگین-پردیسان-غرب-آموزش"><h3>نگین پردیسان غرب ( آموزش )</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:education/159767/دارت-در-نگین-پردیسان-غرب/" class="deal-desc">بازی دارت در نگین پردیسان غرب با 75% تخفیف و پرداخت تنها 10,000 تومان به جای 40,000 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۵ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/شهرک-فرهنگیان/">
                                        <i class="icon icon-location74"></i>شهرک فرهنگیان                                    </a>
                                </span>
                                                            <span class="deal-sell isempty">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    0                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪75</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/شهرک-فرهنگیان/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">شهرک فرهنگیان</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۴۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="100000" class="full-price-s">۱۰,۰۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:education/159767/دارت-در-نگین-پردیسان-غرب/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:education/157589/آموزش-و-افزایش-مهارت-رانندگی-با-دستگاه-شبیه-ساز-35/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/157589/13c7034d.jpg" alt="آموزش و افزایش مهارت رانندگی با دستگاه شبیه ساز" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/157589/13c7034d.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="20865" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>20</span>
                            </span>
                                                        <span>
                                <a href="/merchant/شبیه-ساز-رانندگی-طالقانی"><h3>شبیه ساز رانندگی(طالقانی)</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:education/157589/آموزش-و-افزایش-مهارت-رانندگی-با-دستگاه-شبیه-ساز-35/" class="deal-desc">آموزش و افزایش مهارت رانندگی با دستگاه شبیه ساز تجربه ای منحصر بفرد تا 55% تخفیف و پرداخت از 25,200 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۶ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/خیابان-طالقانی/">
                                        <i class="icon icon-location74"></i>خیابان طالقانی                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    167                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪55</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/خیابان-طالقانی/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">خیابان طالقانی</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۵۶,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="252000" class="full-price-s">۲۵,۲۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:education/157589/آموزش-و-افزایش-مهارت-رانندگی-با-دستگاه-شبیه-ساز-35/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-24 col-md-24 col-sm-24">
                                            <div class="list-items " itemscope="" itemtype="http://schema.org/Offer">
                                                <a href="/tehran/d/c:entertainment/159080/اتاق-فرار-از-تله-در-مجموعه-دالون-89/" class="figure clearfix">
                                                    <div class="overlay"></div>
                                                    <ul class="deal-tag list-unstyled">
                                                        <li class="orange-label"></li>
                                                        <li class="violet-label"></li>
                                                    </ul>
                                                    <img data-src="http://static.netbarg.com/img/responsive_medium/deals/159080/1ec103e9.jpg" alt="اتاق فرار از تله در مجموعه دالون" data-type="lazy" shema="1" itemprop="image" content="http://static.netbarg.com/img/responsive_medium/deals/159080/1ec103e9.jpg">                    </a>
                                                <div class="list-deal-details">
                                                    <div class="top-panel">
                                                        <span company-id="17953" class="deal-like list-unstyled list-inline" data-toggle="modal" data-target="#signInModal">
                                <i class="icon"></i><span>15</span>
                            </span>
                                                        <span>
                                <a href="/merchant/مجموعه-دالون"><h3>مجموعه دالون</h3></a>
                            </span>
                                                    </div>
                                                    <div class="middle-panel clearfix" itemprop="description">
                                                        <a href="/tehran/d/c:entertainment/159080/اتاق-فرار-از-تله-در-مجموعه-دالون-89/" class="deal-desc">یک ساعت بازی در اتاق فرار از تله مجموعه دالون تا 54% تخفیف و  پرداخت از  36,800 تومان</a>
                                                    </div>
                                                    <div class="bottom-panel">
                                                        <div class="top-bp clearfix">
                                <span class="time-rem">
                                    <i class="icon icon-time-back"></i>
                                    <span>۶ روز و ۰ ساعت مانده</span>
                                </span>
                                                        </div>
                                                        <div class="bottom-bp">
                                <span class="address">
                                <a href="/area/لواسان/">
                                        <i class="icon icon-location74"></i>لواسان                                    </a>
                                </span>
                                                            <span class="deal-sell">
                                    <i class="icon icon-shopping-cart_L"></i>
                                    350                                        خرید
                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-deal-cp">
                                                    <div class="list-discount-tag">٪54</div>
                                                    <div class="cp-holder">
                                                        <a href="/area/لواسان/" class="cdbf-location truncate visible-xs">
                                <span class="ir">
                                    <i class="icon icon-location74"></i>
                                </span>
                                                            <span class="cdbfl-address">لواسان</span>
                                                        </a>
                                                        <span itemprop="" content="" class="cp-price-float clearfix">
                                <span class="discount">
                                    <del>۸۰,۰۰۰</del>
                                </span>
                                <span class="full-price">
                                    <span itemprop="price" content="368000" class="full-price-s">۳۶,۸۰۰</span>
                                    <span itemprop="priceCurrency" content="IRR" class="full-price-s irr"> تومان</span>
                                </span>
                            </span>
                                                        <a class="nb-btn nb-btn-icon nb-btn-success hidden-xs" href="/tehran/d/c:entertainment/159080/اتاق-فرار-از-تله-در-مجموعه-دالون-89/">مشاهده و خرید
                                                            <i class="icon icon-shopping-cart2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </section>
                            </article>

                        </div>
                        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs left-aside sticky-aside">
                            <div id="nava2" class="affix-top">
                                <div class="float-left-button">
                                    <ul>
                                        <a href="javascript:void(0)">
                                            <li><i><i class="icon icon-support"></i></i><span>۰۲۱-۴۱۰۹۶۱۰۰ : پشتیبانی</span></li>
                                        </a>
                                        <a href="javascript:void(0)">
                                            <li><i><i class="icon icon-home-phone"></i></i><span>۰۲۱-۴۲۰۹۱۰۰۰ : شرکت</span></li>
                                        </a>
                                        <a href="/page/buy-netbarg/">
                                            <li><i><i class="icon icon-lifebuoy"></i></i><span>راهنمای خرید نت برگ</span></li>
                                        </a>
                                        <a href="javascript:void(0)" class="backtotop">
                                            <li><i><i class="icon icon-arrow-up"></i></i></li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>            </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('footer')
    @include('layout.footer')
@endsection