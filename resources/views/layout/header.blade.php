@section('header')

    <header style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;">

        <div class="t-fix"></div>
        <div class="tape-1"></div>

        <div style="background: #24c265;" class="top-ads-row hidden-xs clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-22">
                        <a target="_blank"
                           href="http://netbarg.com/tehran/d/c:entertainment/158240/%D8%AC%D8%B4%D9%86%D9%88%D8%A7%D8%B1%D9%87-%D8%B3%D8%B1%D8%B2%D9%85%DB%8C%D9%86-%D9%81%DA%A9%D8%B1-%D8%A8%D8%A7%D8%B2%DB%8C%D8%A7-%D8%AF%D8%B1-%D8%A8%D8%A7%D8%BA-%DA%A9%D8%AA%D8%A7%D8%A8/"
                           class="figure m-b">
                            <img src="http://static.netbarg.com/img/banner/banners/occasionsBanner/53/350505bd.jpg"
                                 class="img-responsive">
                        </a>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1 hidden-sm hidden-xs"></div>
                    <div class="burger-col hidden-lg hidden-md col-xs-8"><i class="burger-icon"><i
                                class="icon icon-menu-options"></i></i></div>
                    <div class="col-md-6 col-xs-8 col-logo ">
                        <!--<a href="/tehran/" class="logo"><img src="/assets/site/img/netbarg.png" class="img-responsive"-->
                        <!--                                     alt=" نت برگ"></a>-->
                    </div>
                    <div class="btn-col hidden-lg hidden-md col-xs-8"><i class="header-icon toggle-search-js"><i
                                class="icon icon-search"></i></i>
                        <a href="{{url('baskets')}}">
                            <i class="header-icon">
                                <i class="icon icon-shopping-cart_main_r crm"></i>
                                <span class="basket-item-quantity">0</span>
                            </i>
                        </a>
                    </div>
                    <div class="col-md-10 col-xs-24 hidden-sm hidden-xs toggle-hidden">
                        <form id="search-form" method="get" class="search" action="/tehran/search/">
                            <div style="overflow: visible" class="search-form-box input-btn site-search"><i
                                    class="icon icon-arrow-back search-close hidden"></i>
                                <div class="easy-autocomplete" style="width: 513px;"><input name="q" id="search-box"
                                                                                            type="text"
                                                                                            placeholder="جستجو (رستوران، مکان ورزشی، کالا، ...)"
                                                                                            autocomplete="off">
                                    <div class="easy-autocomplete-container" id="eac-container-search-box">
                                        <ul></ul>
                                    </div>
                                </div>
                                <button class="btn btn-warning btn-type-1">جستجو</button>
                                <i id="closeSearchResult" class="icon icon-close search-clean hidden"></i>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-6 hidden-sm hidden-xs">
                        <div class="clearfix">
                            @php
                                $url='bandar';
                                if(Session::has('city_name')){
                                 $city=\App\City::where('F_Name',Session::get('city_name'))->first();
                                 $url=$city->F_Url;

                             }




                            @endphp
                            <a href="/{{$url}}/map" class="on-map-deals">
                                <img src="/assets/site/img/netbarghaye-roye-naghshe.svg" alt="تخفیف روی نقشه">
                                <span>تخفیف روی نقشه</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-1 hidden-sm hidden-xs"></div>
                </div>
            </div>
        </div>

        <div class="bar clearfix">
            <div class="bar-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1 hidden-sm hidden-xs"></div>
                        <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
                            <div class="clearfix"><a href="/tehran/" class="home-link"><i
                                        class="icon icon-home"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-13 col-md-11 clearfix mobile">
                            <div class="dropdown dropdown-1">
                                <button type="button" data-toggle="dropdown"
                                        class="btn btn-primary dropdown-toggle selected-city" city-id="42546">

                                    @if(Session::has('city_name'))

                                        {{ Session::get('city_name')}}

                                    @else
                                        بندر عباس
                                    @endif


                                    <span class="inline-block icon icon-arrow-down"></span></button>
                                <ul class="dropdown-menu">
                                    @foreach(\App\City::all() as $city)
                                        <li><a href="{{url('/city/'.$city->F_Url)}}">
                                                <span class="pull-right">{{$city->F_Name}}</span>
                                                <span class="badge"></span>
                                            </a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <a href="{{url('/')}}" type="button" data-toggle="modal" data-target="#mapModal"
                                           class="cities_map"><span class="pull-right"> تمامی شهر ها</span><span
                                                class="map_icon icon icon-more-fill"></span></a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                            <a href="/tehran/baskets/">
                                <div class="basket-wrapper">
                        	<span class="badge">
                        		<i class="basket-item-quantity">0</i>
                        	</span>
                                    <i class="icon icon-shopping-cart_main"></i>

                                </div>
                            </a>
                            @auth
                                <div class="login-dropdown clearfix">
                                    <a data-toggle="dropdown" href="#Page" class="dropdown-toggle"
                                       aria-expanded="false">
                                        <div style="background-image:url(/assets/site/img/user-pic.png)"
                                             class="avatar inline-block"></div>
                                        <span class="avatar-info inline-block">
				<p class="name">
                    @php

                        $name=Auth::user()->name;
                     if($name==null)
                        $name=Auth::user()->F_Username;

                    @endphp

                    {{$name}}

                </p>
				<p class="credit">
					<span>موجودی: ۰ تومان</span>
				</p>
			</span>
                                        <span class="inline-block icon icon-arrow-down"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/user/userProfiles/index#tab1" data-tab="#tab1"><span><i
                                                        class="icon icon-user-avatar"></i></span>ویرایش پروفایل شخصی</a>
                                        </li>
                                        <li><a href="/user/userProfiles/index#tab2" data-tab="#tab2"><span><i
                                                        class="icon icon-wallet"></i></span>کیـف
                                                پول</a></li>
                                        <li><a href="/user/userProfiles/index#tab3" data-tab="#tab3"><span><i
                                                        class="icon icon-logo_e"></i></span>نت
                                                برگ های من</a></li>
                                        <li><a href="/user/userProfiles/index#tab4" data-tab="#tab4"><span><i
                                                        class="icon icon-transaction"></i></span>تراکنش ها</a></li>
                                        <li><a href="/user/userProfiles/index#tab5" data-tab="#tab5"><span><i
                                                        class="icon icon-Comment"></i></span>نظرات
                                                من</a></li>
                                        <li><a href="/user/userProfiles/index#tab6" data-tab="#tab6"><span><i
                                                        class="icon icon-favorite"></i></span>علاقه
                                                مندی ها</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span><i
                                                        class="icon icon-logout"></i></span>خـروج</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>


                            @endauth

                            @guest

                                <div class="loginout">
                                    <a href="{{url("/users/login/")}}" class="login">
			<span>
				<i class="icon icon-Login"></i>
				ورود
			</span>
                                    </a>
                                    <a href="{{url("/users/login/")}}" class="signup">
			<span>
				<i class="icon icon-signup"></i>
				ثبت نام
			</span>
                                    </a>
                                </div>

                            @endguest
                        </div>


                        <div class="col-md-1 hidden-sm hidden-xs">


                        </div>
                    </div>
                </div>
            </div>
            <div class="bar-alert">
                <div class="nb-alert-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-1 hidden-sm hidden-xs"></div>
                            <div class="col-md-22 col-xs-24 header_alert_wrapper">
                            </div>
                            <div class="col-md-1 hidden-sm hidden-xs"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="burger-menu-right hidden-lg hidden-md clearfix out ">
            <div class="fix"></div>
            <div class="wrapper">
                <div class="loginout">
                    <a href="/tehran/users/login/" class="login">
			<span>
				<i class="icon icon-Login"></i>
				ورود
			</span>
                    </a>
                    <a href="/tehran/users/register/" class="signup">
			<span>
				<i class="icon icon-signup"></i>
				ثبت نام
			</span>
                    </a>
                </div>


                <div class="clearfix">
                    <a href="/tehran/dealMap/" class="on-map-deals">
                        <img src="/assets/site/img/netbarghaye-roye-naghshe.svg" alt="نت‌برگ‌های روی نقشه">
                        <span>نت‌برگ‌های روی نقشه</span>
                    </a>
                </div>
                <nav>
                    <ul class="side-cat" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                        <li class="li-home"><a href="/tehran/c:todaydeals/"><i><i
                                        class="icon icon-logo_e"></i></i><span>نت برگ های امروز</span></a>
                        </li>


                        <li class="li-restaurant">

                            <a itemprop="url" href="/tehran/c:restaurant/" data-toggle="collapse"
                               data-target="#sub-menu-8">

                                <i>
                                    <i class="icon icon-burger"></i>
                                </i>
                                <span itemprop="name">رستوران و فست فود</span>
                            </a>
                            <ul class="clearfix step2">
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=31">
                                    <a itemprop="url" href="/tehran/c:traditionalrestaurants/">
                                        غذای ايرانی و سنتی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=34">
                                    <a itemprop="url" href="/tehran/c:italianrestaurants/">
                                        غذای ایتالیایی و ملل </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=37">
                                    <a itemprop="url" href="/tehran/c:fastfood/">
                                        فست فود </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=40">
                                    <a itemprop="url" href="/tehran/c:sofrekhane/">
                                        سفره خانه </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=74">
                                    <a itemprop="url" href="/tehran/c:buffet/">
                                        بوفه </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=75">
                                    <a itemprop="url" href="/tehran/c:coffeeshop/">
                                        كافی شاپ </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=76">
                                    <a itemprop="url" href="/tehran/c:breakfast/">
                                        صبحانه </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=433">
                                    <a itemprop="url" href="/tehran/c:catering/">
                                        کیترینگ </a></li>
                            </ul>
                        </li>


                        <li class="li-entertainment">

                            <a itemprop="url" href="/tehran/c:entertainment/" data-toggle="collapse"
                               data-target="#sub-menu-6">

                                <i>
                                    <i class="icon icon-basketball"></i>
                                </i>
                                <span itemprop="name">تفریحی و ورزشی</span>
                            </a>
                            <ul class="clearfix step2">
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=43">
                                    <a itemprop="url" href="/tehran/c:traveltours/">
                                        تورهای مسافرتی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=46">
                                    <a itemprop="url" href="/tehran/c:hotels/">
                                        هتل و اقامتگاه </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=80">
                                    <a itemprop="url" href="/tehran/c:amusementpark/">
                                        شهربازی و مراکز تفریحی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=81">
                                    <a itemprop="url" href="/tehran/c:groupgames/">
                                        بازی های گروهی و زمین بازی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=82">
                                    <a itemprop="url" href="/tehran/c:swimmingpool/">
                                        استخر و ورزش های آبی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=83">
                                    <a itemprop="url" href="/tehran/c:aerobics/">
                                        ورزش های هوایی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=84">
                                    <a itemprop="url" href="/tehran/c:sportclub/">
                                        باشگاه ورزشی </a></li>
                            </ul>
                        </li>


                        <li class="li-health">

                            <a itemprop="url" href="/tehran/c:health/" data-toggle="collapse"
                               data-target="#sub-menu-15">

                                <i>
                                    <i class="icon icon-car-first-aid-kit"></i>
                                </i>
                                <span itemprop="name">پزشکی و سلامت</span>
                            </a>
                            <ul class="clearfix step2">
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=52">
                                    <a itemprop="url" href="/tehran/c:laser/">
                                        لیزر موهای زائد </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=92">
                                    <a itemprop="url" href="/tehran/c:botox/">
                                        ژل و بوتاکس </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=93">
                                    <a itemprop="url" href="/tehran/c:fitness/">
                                        خدمات تناسب اندام و لاغری </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=94">
                                    <a itemprop="url" href="/tehran/c:massage/">
                                        ماساژ </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=95">
                                    <a itemprop="url" href="/tehran/c:skinandbeauty/">
                                        پوست و زیبایی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=96">
                                    <a itemprop="url" href="/tehran/c:dental/">
                                        خدمات دندانپزشکی </a></li>
                            </ul>
                        </li>


                        <li class="li-art">

                            <a itemprop="url" href="/tehran/c:art/" data-toggle="collapse" data-target="#sub-menu-9">

                                <i>
                                    <i class="icon icon-Theater"></i>
                                </i>
                                <span itemprop="name">هنر و تئاتر</span>
                            </a>
                            <ul class="clearfix step2">
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=58">
                                    <a itemprop="url" href="/tehran/c:performance/">
                                        نمایشی و فرهنگی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=61">
                                    <a itemprop="url" href="/tehran/c:atelier/">
                                        آتلیه و خدمات چاپ </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=77">
                                    <a itemprop="url" href="/tehran/c:theater/">
                                        تئاتر </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=78">
                                    <a itemprop="url" href="/tehran/c:concert/">
                                        کنسرت </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=79">
                                    <a itemprop="url" href="/tehran/c:cinema/">
                                        سینما </a></li>
                            </ul>
                        </li>


                        <li class="li-education">

                            <a itemprop="url" href="/tehran/c:education/" data-toggle="collapse"
                               data-target="#sub-menu-16">

                                <i>
                                    <i class="icon icon-earth-globe"></i>
                                </i>
                                <span itemprop="name">آموزشی</span>
                            </a>
                            <ul class="clearfix step2">
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=64">
                                    <a itemprop="url" href="/tehran/c:computercourses/">
                                        کامپیوتر </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=85">
                                    <a itemprop="url" href="/tehran/c:music/">
                                        موسیقی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=86">
                                    <a itemprop="url" href="/tehran/c:cooking/">
                                        آشپزی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=87">
                                    <a itemprop="url" href="/tehran/c:foreignlanguages/">
                                        زبان های خارجی </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=88">
                                    <a itemprop="url" href="/tehran/c:conference/">
                                        گردهمایی و همایش </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=89">
                                    <a itemprop="url" href="/tehran/c:art/">
                                        هنر </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=90">
                                    <a itemprop="url" href="/tehran/c:accounting/">
                                        حسابداری </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=91">
                                    <a itemprop="url" href="/tehran/c:skill/">
                                        مهارت های فردی </a></li>
                            </ul>
                        </li>


                        <li class="li-beauty">

                            <a itemprop="url" href="/tehran/c:beauty/" data-toggle="collapse" data-target="#sub-menu-7">

                                <i>
                                    <i class="icon icon-lipstick-with-cover"></i>
                                </i>
                                <span itemprop="name">زیبایی و آرایشی</span>
                            </a>
                            <ul class="clearfix step2">
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=97">
                                    <a itemprop="url" href="/tehran/c:hairdressing/">
                                        آرایش مو و صورت </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=98">
                                    <a itemprop="url" href="/tehran/c:nail/">
                                        خدمات ناخن </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=99">
                                    <a itemprop="url" href="/tehran/c:skin/">
                                        خدمات پوست </a></li>
                                <li mj-success="successMegaMenu" class="item2"
                                    mj-target="/Categories/getDescendents?id=100">
                                    <a itemprop="url" href="/tehran/c:waxing/">
                                        اپیلاسیون </a></li>
                            </ul>
                        </li>


                        <li class="li-product">

                            <a itemprop="url" href="/tehran/c:product/" data-toggle="collapse"
                               data-target="#sub-menu-5">

                                <i>
                                    <i class="icon icon-shopping-bag-1"></i>
                                </i>
                                <span itemprop="name">کالا</span>
                            </a>
                            <ul class="clearfix step2">
                                <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover"
                                    mj-target="/Categories/getDescendents?id=107">
                                    <a itemprop="url" href="/tehran/c:product/s:digitaldevices/">
                                        کالای دیجیتال و لوازم جانبی </a>
                                </li>
                                <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover"
                                    mj-target="/Categories/getDescendents?id=101">
                                    <a itemprop="url" href="/tehran/c:product/s:home/">
                                        خانه و آشپزخانه </a>
                                </li>
                                <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover"
                                    mj-target="/Categories/getDescendents?id=102">
                                    <a itemprop="url" href="/tehran/c:product/s:healthAndBeauty/">
                                        آرایشی بهداشتی و پزشکی </a>
                                </li>
                                <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover"
                                    mj-target="/Categories/getDescendents?id=103">
                                    <a itemprop="url" href="/tehran/c:product/s:fashionAndAccessories/">
                                        مد، پوشاک و اکسسوری </a>
                                </li>
                                <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover"
                                    mj-target="/Categories/getDescendents?id=105">
                                    <a itemprop="url" href="/tehran/c:product/s:juvenile/">
                                        کودکانه و سرگرمی </a>
                                </li>
                                <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover"
                                    mj-target="/Categories/getDescendents?id=108">
                                    <a itemprop="url" href="/tehran/c:product/s:sports/">
                                        ورزش و سفر </a>
                                </li>
                                <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover"
                                    mj-target="/Categories/getDescendents?id=106">
                                    <a itemprop="url" href="/tehran/c:product/s:culture/">
                                        ملزومات اداری و هنر </a>
                                </li>
                                <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover"
                                    mj-target="/Categories/getDescendents?id=110">
                                    <a itemprop="url" href="/tehran/c:product/s:tools/">
                                        ابزارآلات </a>
                                </li>
                                <li mj-success="successMegaMenu" class="item2 sc3" mj-type="hover"
                                    mj-target="/Categories/getDescendents?id=132">
                                    <a itemprop="url" href="/tehran/c:product/s:software/">
                                        نرم افزار و بازی </a>
                                </li>
                            </ul>
                        </li>


                        <li class="li-giftcode" itemprop="name">
                            <a itemprop="url" href="/tehran/c:giftcode/" data-toggle="collapse"
                               data-target="#sub-menu-504">
                                <i>
                                    <i class="icon icon-couponcodes"></i>
                                </i>
                                <span>کد تخفیف</span>
                            </a>
                        </li>


                        <li class="li-vip" itemprop="name">
                            <a itemprop="url" href="/tehran/c:vip/" data-toggle="collapse" data-target="#sub-menu-507">
                                <i>
                                    <i class="icon icon-vip"></i>
                                </i>
                                <span>پیشنهادات لوکس</span>
                                <div class="new-item">جدید</div>
                            </a>
                        </li>


                        <li class="li-services" itemprop="name">
                            <a itemprop="url" href="/tehran/c:services/" data-toggle="collapse"
                               data-target="#sub-menu-506">
                                <i>
                                    <i class="icon icon-cleaning"></i>
                                </i>
                                <span>خدمات</span>
                            </a>
                        </li>


                        <li class="sc li-last" itemprop="name">
                            <a itemprop="url" href="/tehran/c:last/">
                                <i>
                                    <i class="icon icon-timer"></i>
                                </i>
                                <span>لحظه آخری</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="spacer"></div>
                <ul class="side-extra-items">
                    <li><a href="tel:+982141096000"><i><i class="icon icon-home-phone"></i></i><span>۰۲۱-۴۱۰۹۶۰۰۰</span></a>
                    </li>
                    <li><a href="/page/buy-netbarg/"><i><i class="icon icon-lifebuoy"></i></i><span>راهنمای خرید</span></a>
                    </li>
                </ul>
            </div>
        </div>


    </header>

@endsection
