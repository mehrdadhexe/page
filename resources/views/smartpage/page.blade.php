<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover,user-scalable=no">
    <meta name="theme-color" content="#000000">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>طراحی سایت</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <link href="{{url('/smartpage/css/page.css')}}" rel="stylesheet">
    <link href="{{url('/smartpage/css/bootstrap-iconpicker.min.css')}}" rel="stylesheet">

</head>


<body class="theme-undefined" style="background: {{$page->theme}};">
<noscript>You need to enable JavaScript to use SHORBY.</noscript>
<div id="root">
    <div class="smartpage-container container" style="">
        {!! $page->html !!}
    </div>
</div>


<div id="react-beautiful-dnd-announcement-0" aria-live="assertive" role="log" aria-atomic="true"
     style="position: absolute; width: 1px; height: 1px; margin: -1px; border: 0px none; padding: 0px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); clip-path: inset(100%);"></div>
<img
    src="//sumo.com/api/event/?site_id=1008bfd3734fa87f9cb4197a6158d6952da9ed5a96d5ba2cfef48f398972ffc0&amp;app_id=2d1fffc9-378f-4b61-ac79-2dc8a077b827&amp;shortcut_id=&amp;visitor_id=257a77da9037c4f4db972458d6eb4eb11df4f9fcad7fcf649296c2021283ea9a&amp;event=pageview&amp;href=https%3A%2F%2Fdash.shorby.com%2Fsmartpage&amp;ref=&amp;cache=0.8068578014221858"
    alt="" style="display: none;">

<div style="display: none;">
    <div>
        Count = <span id="num">#</span>
        <button type="button" id="inc">+</button>
        <button type="button" id="dec">-</button>
    </div>

    <div>
        <p>First Name: <span id="firstName"></span></p>
        <input id="firstNameInput" type="text" val=""/>
        <p>Last Name: <span id="lastName"></span></p>
        <input id="lastNameInput" type="text" val=""/>
    </div>
</div>

<script type="text/javascript" src="{{url('/smartpage/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="{{url('/smartpage/js/main.js')}}"></script>

</body>
</html>
