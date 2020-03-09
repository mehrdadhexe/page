<div class="col-lg-1 col-md-1 hidden-sm hidden-xs right-aside sticky-aside">
    <div id="nava" class="affix-top" style="">
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
</div>
