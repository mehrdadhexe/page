<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8/>
    <title>بندر تخفیف</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no'/>
    <script src='https://api.mapbox.com/mapbox.js/v3.2.0/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v3.2.0/mapbox.css' rel='stylesheet'/>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
    <style>

        .gm-control-active > img {
            box-sizing: content-box;
            display: none;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .gm-control-active > img:nth-child(1) {
            display: block
        }

        .gm-control-active:hover > img:nth-child(1), .gm-control-active:active > img:nth-child(1) {
            display: none
        }

        .gm-control-active:hover > img:nth-child(2), .gm-control-active:active > img:nth-child(3) {
            display: block
        }
    </style>
    <link type="text/css" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans">
    <style>.gm-ui-hover-effect {
            opacity: .6
        }

        .gm-ui-hover-effect:hover {
            opacity: 1
        }
    </style>
    <style>.gm-style .gm-style-cc span, .gm-style .gm-style-cc a, .gm-style .gm-style-mtc div {
            font-size: 10px;
            box-sizing: border-box
        }
    </style>
    <style>@media print {
            .gm-style .gmnoprint, .gmnoprint {
                display: none
            }
        }

        @media screen {
            .gm-style .gmnoscreen, .gmnoscreen {
                display: none
            }
        }</style>
    <style>.gm-style-pbc {
            transition: opacity ease-in-out;
            background-color: rgba(0, 0, 0, 0.45);
            text-align: center
        }

        .gm-style-pbt {
            font-size: 22px;
            color: white;
            font-family: Roboto, Arial, sans-serif;
            position: relative;
            margin: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }
    </style>
    <style>.gm-style img {
            max-width: none;
        }

        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }</style>
    <title>نت‌برگ‌های روی نقشه</title>
    <!-- General Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript"
            src="https://bam.nr-data.net/1/322454d465?a=113564921&amp;v=1123.df1c7f8&amp;to=NlwEbEJSDUoCVUINVw8WM0pZHApXB1NOSkgJSQ%3D%3D&amp;rst=1480&amp;ref=http://takhfifbnd.ir/kish/dealMap/&amp;ap=64&amp;be=192&amp;fe=1454&amp;dc=410&amp;perf=%7B%22timing%22:%7B%22of%22:1562065117367,%22n%22:0,%22f%22:-1,%22dn%22:-1,%22dne%22:-1,%22c%22:-1,%22ce%22:-1,%22rq%22:-1,%22rp%22:-1,%22rpe%22:-1,%22dl%22:171,%22di%22:408,%22ds%22:409,%22de%22:453,%22dc%22:1453,%22l%22:1453,%22le%22:1459%7D,%22navigation%22:%7B%7D%7D&amp;at=GhsHGgpIHkQ%3D&amp;jsonp=NREUM.setToken"></script>
    <script src="https://js-agent.newrelic.com/nr-1123.min.js"></script>
    <script type="text/javascript">window.NREUM || (NREUM = {}), __nr_require = function (e, n, t) {
            function r(t) {
                if (!n[t]) {
                    var o = n[t] = {exports: {}};
                    e[t][0].call(o.exports, function (n) {
                        var o = e[t][1][n];
                        return r(o || n)
                    }, o, o.exports)
                }
                return n[t].exports
            }

            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < t.length; o++) r(t[o]);
            return r
        }({
            1: [function (e, n, t) {
                function r() {
                }

                function o(e, n, t) {
                    return function () {
                        return i(e, [c.now()].concat(u(arguments)), n ? null : this, t), n ? void 0 : this
                    }
                }

                var i = e("handle"), a = e(3), u = e(4), f = e("ee").get("tracer"), c = e("loader"), s = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = s);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    d = "api-", l = d + "ixn-";
                a(p, function (e, n) {
                    s[n] = o(d + n, !0, "api")
                }), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), n.exports = newrelic, s.interaction = function () {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function (e, n) {
                        var t = {}, r = this, o = "function" == typeof n;
                        return i(l + "tracer", [c.now(), e, t], r), function () {
                            if (f.emit((o ? "" : "no-") + "fn-start", [c.now(), r, o], t), o) try {
                                return n.apply(this, arguments)
                            } catch (e) {
                                throw f.emit("fn-err", [arguments, this, e], t), e
                            } finally {
                                f.emit("fn-end", [c.now()], t)
                            }
                        }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (e, n) {
                    m[n] = o(l + n)
                }), newrelic.noticeError = function (e, n) {
                    "string" == typeof e && (e = new Error(e)), i("err", [e, c.now(), !1, n])
                }
            }, {}], 2: [function (e, n, t) {
                function r(e, n) {
                    if (!o) return !1;
                    if (e !== o) return !1;
                    if (!n) return !0;
                    if (!i) return !1;
                    for (var t = i.split("."), r = n.split("."), a = 0; a < r.length; a++) if (r[a] !== t[a]) return !1;
                    return !0
                }

                var o = null, i = null, a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var u = navigator.userAgent, f = u.match(a);
                    f && u.indexOf("Chrome") === -1 && u.indexOf("Chromium") === -1 && (o = "Safari", i = f[1])
                }
                n.exports = {agent: o, version: i, match: r}
            }, {}], 3: [function (e, n, t) {
                function r(e, n) {
                    var t = [], r = "", i = 0;
                    for (r in e) o.call(e, r) && (t[i] = n(r, e[r]), i += 1);
                    return t
                }

                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}], 4: [function (e, n, t) {
                function r(e, n, t) {
                    n || (n = 0), "undefined" == typeof t && (t = e ? e.length : 0);
                    for (var r = -1, o = t - n || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = e[n + r];
                    return i
                }

                n.exports = r
            }, {}], 5: [function (e, n, t) {
                n.exports = {exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart}
            }, {}], ee: [function (e, n, t) {
                function r() {
                }

                function o(e) {
                    function n(e) {
                        return e && e instanceof r ? e : e ? f(e, u, i) : i()
                    }

                    function t(t, r, o, i) {
                        if (!d.aborted || i) {
                            e && e(t, r, o);
                            for (var a = n(o), u = v(t), f = u.length, c = 0; c < f; c++) u[c].apply(a, r);
                            var p = s[y[t]];
                            return p && p.push([b, t, r, a]), a
                        }
                    }

                    function l(e, n) {
                        h[e] = v(e).concat(n)
                    }

                    function m(e, n) {
                        var t = h[e];
                        if (t) for (var r = 0; r < t.length; r++) t[r] === n && t.splice(r, 1)
                    }

                    function v(e) {
                        return h[e] || []
                    }

                    function g(e) {
                        return p[e] = p[e] || o(t)
                    }

                    function w(e, n) {
                        c(e, function (e, t) {
                            n = n || "feature", y[t] = n, n in s || (s[n] = [])
                        })
                    }

                    var h = {}, y = {}, b = {
                        on: l,
                        addEventListener: l,
                        removeEventListener: m,
                        emit: t,
                        get: g,
                        listeners: v,
                        context: n,
                        buffer: w,
                        abort: a,
                        aborted: !1
                    };
                    return b
                }

                function i() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (d.aborted = !0, s = d.backlog = {})
                }

                var u = "nr@context", f = e("gos"), c = e(3), s = {}, p = {}, d = n.exports = o();
                d.backlog = s
            }, {}], gos: [function (e, n, t) {
                function r(e, n, t) {
                    if (o.call(e, n)) return e[n];
                    var r = t();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(e, n, {value: r, writable: !0, enumerable: !1}), r
                    } catch (i) {
                    }
                    return e[n] = r, r
                }

                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}], handle: [function (e, n, t) {
                function r(e, n, t, r) {
                    o.buffer([e], r), o.emit(e, n, t)
                }

                var o = e("ee").get("handle");
                n.exports = r, r.ee = o
            }, {}], id: [function (e, n, t) {
                function r(e) {
                    var n = typeof e;
                    return !e || "object" !== n && "function" !== n ? -1 : e === window ? 0 : a(e, i, function () {
                        return o++
                    })
                }

                var o = 1, i = "nr@id", a = e("gos");
                n.exports = r
            }, {}], loader: [function (e, n, t) {
                function r() {
                    if (!E++) {
                        var e = x.info = NREUM.info, n = l.getElementsByTagName("script")[0];
                        if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && n)) return s.abort();
                        c(y, function (n, t) {
                            e[n] || (e[n] = t)
                        }), f("mark", ["onload", a() + x.offset], null, "api");
                        var t = l.createElement("script");
                        t.src = "https://" + e.agent, n.parentNode.insertBefore(t, n)
                    }
                }

                function o() {
                    "complete" === l.readyState && i()
                }

                function i() {
                    f("mark", ["domContent", a() + x.offset], null, "api")
                }

                function a() {
                    return O.exists && performance.now ? Math.round(performance.now()) : (u = Math.max((new Date).getTime(), u)) - x.offset
                }

                var u = (new Date).getTime(), f = e("handle"), c = e(3), s = e("ee"), p = e(2), d = window,
                    l = d.document, m = "addEventListener", v = "attachEvent", g = d.XMLHttpRequest,
                    w = g && g.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: d.setImmediate,
                    CT: clearTimeout,
                    XHR: g,
                    REQ: d.Request,
                    EV: d.Event,
                    PR: d.Promise,
                    MO: d.MutationObserver
                };
                var h = "" + location, y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1123.min.js"
                    }, b = g && w && w[m] && !/CriOS/.test(navigator.userAgent),
                    x = n.exports = {offset: u, now: a, origin: h, features: {}, xhrWrappable: b, userAgent: p};
                e(1), l[m] ? (l[m]("DOMContentLoaded", i, !1), d[m]("load", r, !1)) : (l[v]("onreadystatechange", o), d[v]("onload", r)), f("mark", ["firstbyte", u], null, "api");
                var E = 0, O = e(5)
            }, {}]
        }, {}, ["loader"]);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="iranian modern business">
    <meta name="description" content="Page description ...">
    <!-- Twitter Cards-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="netbarg">
    <meta name="twitter:creator" content="netbarg">
    <!-- Open Graph Meta Tags-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="netbarg">
    <meta property="og:title" content="netbarg">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="http://takhfifbnd.ir">
    <meta property="article:publisher" content="">
    <link rel="alternate" hreflang="fa-IR" href="http://takhfifbnd.ir/">
    <!--style-->

    <link rel="stylesheet" href="{{url("/assets/site/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{url("/assets/site/css/bootstrap-rtl.min.css")}}">
    <link rel="stylesheet" href="{{url("/assets/site/css/select2.min.css")}}">
    <link rel="stylesheet" href="{{url("/assets/site/fonts/iran_sans/fontiran.css")}}">
    <link rel="stylesheet" href="{{url("/assets/site/css/kit.css")}}">
    <link rel="stylesheet" href="{{url("/assets/site/css/app.css")}}">
    <script src='https://api.mapbox.com/mapbox.js/v3.2.0/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v3.2.0/mapbox.css' rel='stylesheet'/>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        #map {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }
    </style>


</head>
<body>


<div id="over" class="row">
    <div id="cards" class="col-lg-8 col-md-9 col-sm-11">
        <div class="wr" style="min-height: 533px; padding-bottom: 533px; margin-top: 0px;">

            @foreach($barg as $item)
                <div class="card" data-uid="157059">
                    <div class="w-top clearfix"><img
                            src="{{$item->F_Pic}}"
                            onerror="defaultImg(this)" style="height:74px;width:117px;">
                        <p>{{$item->F_Text}}</p><span>{{$item->F_Title}}</span></div>
                    <div class="w-bottom clearfix">
                        <div class="count"><span class="icon icon-shopping-cart_main"></span><span class="num">3</span>
                        </div>
                        <div class="span badge">{{$item->F_Off}} %</div>
                        <a href="{{\App\Setting::getUrlOff($item->F_BargID)}}" target="_blank"
                           class="span badge green-link">مشاهده و خرید</a>
                        <div class="spacer"></div>
                        <ins class="new-price">{{number_format(\App\Setting::getOffPrice($item->F_BargID))}} تومان</ins>
                        <del class="old-price">{{number_format($item->F_Fee)}}</del>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    {{--    <div id="cats" class="col-lg-4 col-lg-offset-12 col-md-6 col-md-offset-9 col-sm-8 col-sm-offset-5">--}}
    {{--        <div class="result hidden-xs hidden-sm">--}}
    {{--            <div class="checkbox">--}}
    {{--                <input id="check_all_lg" name="all_cat" value="1" checked="" class="styled" type="checkbox">--}}
    {{--                <label for="check_all_lg" class="select-cat"></label>--}}
    {{--            </div>--}}
    {{--            <i class="_2 icon icon-menu"></i><span>تمامی پیشنهادات</span>--}}
    {{--        </div>--}}
    {{--        <ul>--}}
    {{--            <li data-alias="product" data-catid="5"><i></i><span>کالا</span>--}}
    {{--                <div class="checkbox"><input id="check_product" name="cats" value="5" checked="" class="styled"--}}
    {{--                                             type="checkbox"><label class="select-cat" for="check_product"></label>--}}
    {{--                </div>--}}
    {{--            </li>--}}
    {{--            <li data-alias="entertainment" data-catid="6"><i></i><span>تفریحی و ورزشی</span>--}}
    {{--                <div class="checkbox"><input id="check_entertainment" name="cats" value="6" checked="" class="styled"--}}
    {{--                                             type="checkbox"><label class="select-cat"--}}
    {{--                                                                    for="check_entertainment"></label></div>--}}
    {{--            </li>--}}
    {{--            <li data-alias="beauty" data-catid="7"><i></i><span>زیبایی و آرایشی</span>--}}
    {{--                <div class="checkbox"><input id="check_beauty" name="cats" value="7" checked="" class="styled"--}}
    {{--                                             type="checkbox"><label class="select-cat" for="check_beauty"></label></div>--}}
    {{--            </li>--}}
    {{--            <li data-alias="restaurant" data-catid="8"><i></i><span>رستوران و فست فود</span>--}}
    {{--                <div class="checkbox"><input id="check_restaurant" name="cats" value="8" checked="" class="styled"--}}
    {{--                                             type="checkbox"><label class="select-cat" for="check_restaurant"></label>--}}
    {{--                </div>--}}
    {{--            </li>--}}
    {{--            <li data-alias="art" data-catid="9"><i></i><span>هنر و تئاتر</span>--}}
    {{--                <div class="checkbox"><input id="check_art" name="cats" value="9" checked="" class="styled"--}}
    {{--                                             type="checkbox"><label class="select-cat" for="check_art"></label></div>--}}
    {{--            </li>--}}
    {{--            <li data-alias="health" data-catid="15"><i></i><span>پزشکی و سلامت</span>--}}
    {{--                <div class="checkbox"><input id="check_health" name="cats" value="15" checked="" class="styled"--}}
    {{--                                             type="checkbox"><label class="select-cat" for="check_health"></label></div>--}}
    {{--            </li>--}}
    {{--            <li data-alias="education" data-catid="16"><i></i><span>آموزشی</span>--}}
    {{--                <div class="checkbox"><input id="check_education" name="cats" value="16" checked="" class="styled"--}}
    {{--                                             type="checkbox"><label class="select-cat" for="check_education"></label>--}}
    {{--                </div>--}}
    {{--            </li>--}}
    {{--            <li data-alias="services" data-catid="506"><i></i><span>خدمات</span>--}}
    {{--                <div class="checkbox"><input id="check_services" name="cats" value="506" checked="" class="styled"--}}
    {{--                                             type="checkbox"><label class="select-cat" for="check_services"></label>--}}
    {{--                </div>--}}
    {{--            </li>--}}
    {{--            <li data-alias="vip" data-catid="507"><i></i><span>پیشنهادات لوکس</span>--}}
    {{--                <div class="checkbox"><input id="check_vip" name="cats" value="507" checked="" class="styled"--}}
    {{--                                             type="checkbox"><label class="select-cat" for="check_vip"></label></div>--}}
    {{--            </li>--}}
    {{--        </ul>--}}
    {{--    </div>--}}
</div>

<style>
    .menu-ui {
        background: #fff;
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1;
        border-radius: 3px;
        width: 120px;
        border: 1px solid rgba(0, 0, 0, 0.4);
    }

    .menu-ui a {
        font-size: 13px;
        color: #404040;
        display: block;
        margin: 0;
        padding: 0;
        padding: 10px;
        text-decoration: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.25);
        text-align: center;
    }

    .menu-ui a:first-child {
        border-radius: 3px 3px 0 0;
    }

    .menu-ui a:last-child {
        border: none;
        border-radius: 0 0 3px 3px;
    }

    .menu-ui a:hover {
        background: #f8f8f8;
        color: #404040;
    }

    .menu-ui a.active,
    .menu-ui a.active:hover {
        background: #3887BE;
        color: #FFF;
    }
</style>
<div id='map'></div>


<script src="{{url("/assets/site/js/jquery-1.12.0.min.js")}}"></script>
<script src="{{url("/assets/site/js/bootstrap.min.js")}}"></script>
<script src="{{url("/assets/site/js/bowser.js")}}"></script>
<script src="{{url("/assets/site/js/select2.full.min.js")}}"></script>
<script src="{{url("/assets/site/js/i18n/fa.js")}}"></script>
<script src="{{url("/assets/site/js/jquery.mousewheel.min.js")}}"></script>
<script src="{{url("/assets/site/js/dealMap.js")}}"></script>
<script src="{{url("/assets/site/js/hcsticky.js")}}"></script>
<script>
    L.mapbox.accessToken = 'pk.eyJ1IjoibWVocmRhZGhleGUiLCJhIjoiY2p4bG5ydHRnMDgyMjN5bnVzbWQ0bGd0NyJ9.a3YeBVPewDXN8ZTHapWNNQ';

    var map = L.mapbox.map('map')
        .setView([{{$city->F_lat}},{{$city->F_lang}}],{{$city->F_Dist}})
        .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));

    //  56.29789945499169,"lat":27.192132066462804
    var location_city = {
        "type": "FeatureCollection",
        "features": [
                @foreach($barg as $item)
            {
                "type": "Feature",
                "properties": {
                    "marker-color": "#f76565",
                    "title": "بیتانیک سیستم ",
                    "marker-symbol": "alcohol-shop"
                },
                "geometry": {
                    "type": "Point",
                    "coordinates": [
                        {{$item->F_lang}},
                        {{$item->F_lat}}

                    ]
                }
            },
            @endforeach
        ]
    };


    var myFeatureLayer = L.mapbox.featureLayer(location_city)
        .addTo(map);


    var food = document.getElementById('check_product');
    var all = document.getElementById('check_entertainment');

    food.onclick = function (e) {
        // The setFilter function takes a GeoJSON feature object
        // and returns true to show it or false to hide it.
        if (this.checked == true) {
            myFeatureLayer.setFilter(function (f) {
                return f.properties['marker-symbol'] === 'bar';
            });
        } else {
            myFeatureLayer.setFilter(function (f) {
                // Returning true for all markers shows everything.
                return true;
            });

        }


    };

    all.onclick = function () {
        food.className = '';
        this.className = 'active';
        myFeatureLayer.setFilter(function (f) {
            // Returning true for all markers shows everything.
            return true;
        });
        return false;
    };

    $(".card").click(function () {
        $('.card').removeClass('hey');
        $(this).addClass('hey');
        $(".count").show();
        $(this).find(".count").hide();

    });
</script>


</body>
</html>

