@extends('layout.app')
@section('header')
    @include('layout.header')
@endsection
@section('content')
    <main>

        <div class="container-fluid"><div class="row"><div class="nb-breadcrumb-spacer hidden-lg hidden-md hidden-sm"></div><div class="nb-breadcrumb hidden-xs"><div class="container-fluid limit"><div class="row"><div class="col-md-1"></div><div class="col-md-22"><ul itemscope="" itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><a href="http://netbarg.com/tehran/" itemprop="item" itemscope="itemscope" itemtype="http://schema.org/Thing"><span itemprop="name">خانه</span></a></li><li itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"><a href="http://netbarg.com/tehran/c:entertainment/" itemprop="item" itemscope="itemscope" itemtype="http://schema.org/Thing"><span itemprop="name">تفریحی و ورزشی</span></a></li></ul></div><div class="col-md-1"></div></div></div></div></div></div><div class="page-index">
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

                                </header>


                                <section class="section-body-ajax">


                                    <div class="main-cat-deal-list clearfix main-row general-row-deal grd">

                                        @foreach ($bargs as $barg)
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
                                        @endforeach


                                            {{ $bargs->links() }}


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
