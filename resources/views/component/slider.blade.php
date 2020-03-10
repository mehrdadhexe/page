<div class="wrapper-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>

            <div class="col-lg-3 hidden-md hidden-sm hidden-xs">
                <nav>
                    <ul class="side-cat" itemscope=""
                        itemtype="http://www.schema.org/SiteNavigationElement">


                        @foreach(\App\Category::all() as $cat)
                            @if($cat->F_Root==1)
                                <li class="li-home"><a href="{{url('/')}}/{{\App\Setting::getCity()}}/category/{{$cat->F_CategoryID}}/{{$cat->F_Name}}"
                                                       style="height: 39.3333px; line-height: 38.3333px;"><i><i
                                                class="icon {{$cat->F_Icon}}"></i></i><span>{{$cat->F_Name}}</span></a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="col-lg-19 col-md-22">
                <div class="slider-full clearfix ">
                    <div class="overlay"></div>
                    <div id="carousel_2" data-ride="carousel" class="carousel carousel-2 slide nb-carousel">
                        <!-- Indicators-->
                        <!-- <ol class="carousel-indicators">
                                        <li data-target="#carousel_2" data-slide-to=""
                                class=" ">
                                <i class="icon"></i>
                            </li>
                                </ol> -->
                        <!-- Wrapper for slides-->
                        <div role="listbox" class="carousel-inner">
                            @php
                                $i=1;
                            @endphp
                            @foreach(\App\Slider::all() as $slider)

                                <div class="item <?php if ($i == 1) echo 'active';?>">
                                    <ul class="deal-tag list-unstyled">
                                    </ul>
                                    <a href="">
                                        <img src="{{$slider->img}}" alt="{{$slider->alt}}"> </a>
                                </div>
                                @php
                                    $i++;
                                @endphp
                            @endforeach

                        </div>
                        <!-- Controls--><a href="#carousel_2" role="button" data-slide="prev"
                                           class="left carousel-control"><span aria-hidden="true"
                                                                               class="icon icon-arrow-left"></span><span
                                class="sr-only">Previous</span></a><a href="#carousel_2" role="button"
                                                                      data-slide="next"
                                                                      class="right carousel-control"><span
                                aria-hidden="true" class="icon icon-arrow-right"></span><span
                                class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
            <div class="col-lg-22 col-md-22">
                <div class="row under-slider-banner">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <a target="_blank"
                           href="http://takhfifbnd.ir/trend/%D9%85%DB%8C%DA%A9%D8%B1%D9%88%D8%AF%D8%B1%D9%85/"
                           class="figure m-b">
                            <img src="http://static.netbarg.com/img/banner/banners/rightSmallBanner/93/50f40701.jpg"
                                 alt="netbarg"> </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <a target="_blank"
                           href="http://takhfifbnd.ir/trend/%D9%87%D8%AA%D9%84-%D9%85%D8%B4%D9%87%D8%AF/"
                           class="figure m-b">
                            <img src="http://static.netbarg.com/img/banner/banners/centerSmallBanner/91/59010762.jpg"
                                 alt="netbarg"> </a>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <a target="_blank"
                           href="http://takhfifbnd.ir/trend/%D8%A7%D8%B3%D8%AA%D8%AE%D8%B1%D9%87%D8%A7%DB%8C-%D8%BA%D8%B1%D8%A8-%D8%AA%D9%87%D8%B1%D8%A7%D9%86/"
                           class="figure m-b">
                            <img src="http://static.netbarg.com/img/banner/banners/leftSmallBanner/89/47f7068c.jpg"
                                 alt="netbarg"> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
        </div>
    </div>
</div>
