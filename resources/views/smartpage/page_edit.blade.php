<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover,user-scalable=no">
    <meta name="theme-color" content="#000000">
    <meta name="_token" content="{{csrf_token()}}"/>
    <title>طراحی سایت</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <link href="{{url('/smartpage/css/app.css')}}" rel="stylesheet">
    <link href="{{url('/smartpage/css/bootstrap-iconpicker.min.css')}}" rel="stylesheet">

</head>


<body class="theme-undefined">
<noscript>You need to enable JavaScript to use SHORBY.</noscript>
<div id="root">
    <div class="smartpage-container container" style="">
        {{--        <div id="fg">--}}
        {{--            <button class="btn btn-secondary" data-iconset="fontawesome5" data-icon="fas fa-wifi"--}}
        {{--                    role="iconpicker"></button>--}}

        {{--        </div>--}}
        <form novalidate="">

            <div class="page-header">
                <span class="settings-button service-button add_setting_bt">تنظیمات</span><a
                    class="insights-button service-button" href="/">صفحات من</a>

                <div src-data="" class="avatar"
                     style="">
                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="camera"
                         class="svg-inline--fa fa-w-16 fa-camera" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 512 512">
                        <path fill="currentColor"
                              d="M324.3 64c3.3 0 6.3 2.1 7.5 5.2l22.1 58.8H464c8.8 0 16 7.2 16 16v288c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h110.2l20.1-53.6c2.3-6.2 8.3-10.4 15-10.4h131m0-32h-131c-20 0-37.9 12.4-44.9 31.1L136 96H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48h-88l-14.3-38c-5.8-15.7-20.7-26-37.4-26zM256 408c-66.2 0-120-53.8-120-120s53.8-120 120-120 120 53.8 120 120-53.8 120-120 120zm0-208c-48.5 0-88 39.5-88 88s39.5 88 88 88 88-39.5 88-88-39.5-88-88-88z"></path>
                    </svg>
                </div>


                <div class="bio-title add_title_bt"><h1 class="empty"><span>عنوان</span></h1></div>
            </div>


            <div class="blocks-num-1 messengers messengers_items">


            </div>


            <div class="add-block-button">
                <span class="add_messengers_bt"><svg aria-hidden="true" data-prefix="fal" data-icon="plus"
                                                     class="svg-inline--fa fa-plus fa-w-12 " role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path
                            fill="currentColor"
                            d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z"></path></svg> اضافه کردن پیام رسان</span>
            </div>
            <div class="add-block-button">
                <span class="add-block-block-item"><svg aria-hidden="true" data-prefix="fal" data-icon="plus"
                                                        class="svg-inline--fa fa-plus fa-w-12 " role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path
                            fill="currentColor"
                            d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z"></path></svg> اضافه کردن بلوک</span>
            </div>
            <div></div>
            <div class="add-block-button add-social-links"><span class="add_social_bt"><svg aria-hidden="true"
                                                                                            data-prefix="fal"
                                                                                            data-icon="plus"
                                                                                            class="svg-inline--fa fa-plus fa-w-12 "
                                                                                            role="img"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 384 512"><path
                            fill="currentColor"
                            d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z"></path></svg> اضافه کردن شبکه های اجتماعی</span>
            </div>
            <div class="block_warp">

            </div>
            <div class="social-links">


            </div>


            <div class="action-sheet slidein-enter-block hide">
                <div class="table-align">
                    <div class="table-cell-bottom">
                        <div class="action-sheet-body">
                            <div class="action-sheet-header">
                                <span class="clickable-icon danger left" title="Remove"
                                      onclick="remove_block_item(this)"><svg
                                        aria-hidden="true" data-prefix="fal" data-icon="trash-alt"
                                        class="svg-inline--fa fa-trash-alt fa-w-14 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path
                                            fill="currentColor"
                                            d="M336 64l-33.6-44.8C293.3 7.1 279.1 0 264 0h-80c-15.1 0-29.3 7.1-38.4 19.2L112 64H24C10.7 64 0 74.7 0 88v2c0 3.3 2.7 6 6 6h26v368c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V96h26c3.3 0 6-2.7 6-6v-2c0-13.3-10.7-24-24-24h-88zM184 32h80c5 0 9.8 2.4 12.8 6.4L296 64H152l19.2-25.6c3-4 7.8-6.4 12.8-6.4zm200 432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V96h320v368zm-176-44V156c0-6.6 5.4-12 12-12h8c6.6 0 12 5.4 12 12v264c0 6.6-5.4 12-12 12h-8c-6.6 0-12-5.4-12-12zm-80 0V156c0-6.6 5.4-12 12-12h8c6.6 0 12 5.4 12 12v264c0 6.6-5.4 12-12 12h-8c-6.6 0-12-5.4-12-12zm160 0V156c0-6.6 5.4-12 12-12h8c6.6 0 12 5.4 12 12v264c0 6.6-5.4 12-12 12h-8c-6.6 0-12-5.4-12-12z"></path></svg></span><span
                                    class="clickable-icon right success" title="Done"><svg aria-hidden="true"
                                                                                           data-prefix="far"
                                                                                           data-icon="check"
                                                                                           class="svg-inline--fa fa-check fa-w-16 "
                                                                                           role="img"
                                                                                           xmlns="http://www.w3.org/2000/svg"
                                                                                           viewBox="0 0 512 512"><path
                                            fill="currentColor"
                                            d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z"></path></svg></span>
                                <div class="action-sheet-title">تنظیمات بلوک</div>
                            </div>
                            <div>
                                <div>
                                    <div class="with-loading form-group">
                                        <input name="settings.blocks[0].id"
                                               type="hidden"
                                               class="form-control" value=""
                                               autofocus="autofocus">

                                        <input name="settings.blocks[0].url"
                                               placeholder="http://url..." type="text"
                                               class="form-control" value=""
                                               autofocus="autofocus"></div>
                                    <div class="form-group">
                                        <div class="input-group input-stack-row">
                                            {{--                                            <div class="input-group-prepend icon-picker-dropdown dropdown">--}}
                                            {{--                                                <button type="button" aria-haspopup="true" aria-expanded="false"--}}
                                            {{--                                                        class="btn-outline-border dropdown-toggle btn btn-secondary">--}}
                                            {{--                                                    <span class="small">No Icon</span>&nbsp;--}}
                                            {{--                                                </button>--}}
                                            {{--                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">--}}
                                            {{--                                                    <div class="dropdown-filter search-row"><input type="text"--}}
                                            {{--                                                                                                   class="form-control form-control-sm"--}}
                                            {{--                                                                                                   placeholder="Find in 1104 icons"--}}
                                            {{--                                                                                                   value=""><span--}}
                                            {{--                                                            class="btn-add-pixel-badge close-btn" title="Close"><svg--}}
                                            {{--                                                                aria-hidden="true" data-prefix="fal" data-icon="times"--}}
                                            {{--                                                                class="svg-inline--fa fa-times fa-w-10 " role="img"--}}
                                            {{--                                                                xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                viewBox="0 0 320 512"><path fill="currentColor"--}}
                                            {{--                                                                                            d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path></svg></span>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="dropdown-scrolled-items">--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="behance"--}}
                                            {{--                                                                 class="svg-inline--fa fa-behance fa-w-18 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 576 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M232 237.2c31.8-15.2 48.4-38.2 48.4-74 0-70.6-52.6-87.8-113.3-87.8H0v354.4h171.8c64.4 0 124.9-30.9 124.9-102.9 0-44.5-21.1-77.4-64.7-89.7zM77.9 135.9H151c28.1 0 53.4 7.9 53.4 40.5 0 30.1-19.7 42.2-47.5 42.2h-79v-82.7zm83.3 233.7H77.9V272h84.9c34.3 0 56 14.3 56 50.6 0 35.8-25.9 47-57.6 47zm358.5-240.7H376V94h143.7v34.9zM576 305.2c0-75.9-44.4-139.2-124.9-139.2-78.2 0-131.3 58.8-131.3 135.8 0 79.9 50.3 134.7 131.3 134.7 61.3 0 101-27.6 120.1-86.3H509c-6.7 21.9-34.3 33.5-55.7 33.5-41.3 0-63-24.2-63-65.3h185.1c.3-4.2.6-8.7.6-13.2zM390.4 274c2.3-33.7 24.7-54.8 58.5-54.8 35.4 0 53.2 20.8 56.2 54.8H390.4z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="behance-square"--}}
                                            {{--                                                                 class="svg-inline--fa fa-behance-square fa-w-14 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M186.5 293c0 19.3-14 25.4-31.2 25.4h-45.1v-52.9h46c18.6.1 30.3 7.8 30.3 27.5zm-7.7-82.3c0-17.7-13.7-21.9-28.9-21.9h-39.6v44.8H153c15.1 0 25.8-6.6 25.8-22.9zm132.3 23.2c-18.3 0-30.5 11.4-31.7 29.7h62.2c-1.7-18.5-11.3-29.7-30.5-29.7zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zM271.7 185h77.8v-18.9h-77.8V185zm-43 110.3c0-24.1-11.4-44.9-35-51.6 17.2-8.2 26.2-17.7 26.2-37 0-38.2-28.5-47.5-61.4-47.5H68v192h93.1c34.9-.2 67.6-16.9 67.6-55.9zM380 280.5c0-41.1-24.1-75.4-67.6-75.4-42.4 0-71.1 31.8-71.1 73.6 0 43.3 27.3 73 71.1 73 33.2 0 54.7-14.9 65.1-46.8h-33.7c-3.7 11.9-18.6 18.1-30.2 18.1-22.4 0-34.1-13.1-34.1-35.3h100.2c.1-2.3.3-4.8.3-7.2z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="facebook"--}}
                                            {{--                                                                 class="svg-inline--fa fa-facebook fa-w-14 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="facebook-f"--}}
                                            {{--                                                                 class="svg-inline--fa fa-facebook-f fa-w-9 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 264 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="facebook-messenger"--}}
                                            {{--                                                                 class="svg-inline--fa fa-facebook-messenger fa-w-14 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="instagram"--}}
                                            {{--                                                                 class="svg-inline--fa fa-instagram fa-w-14 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab" data-icon="itunes"--}}
                                            {{--                                                                 class="svg-inline--fa fa-itunes fa-w-14 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M223.6 80.3C129 80.3 52.5 157 52.5 251.5S129 422.8 223.6 422.8s171.2-76.7 171.2-171.2c0-94.6-76.7-171.3-171.2-171.3zm79.4 240c-3.2 13.6-13.5 21.2-27.3 23.8-12.1 2.2-22.2 2.8-31.9-5-11.8-10-12-26.4-1.4-36.8 8.4-8 20.3-9.6 38-12.8 3-.5 5.6-1.2 7.7-3.7 3.2-3.6 2.2-2 2.2-80.8 0-5.6-2.7-7.1-8.4-6.1-4 .7-91.9 17.1-91.9 17.1-5 1.1-6.7 2.6-6.7 8.3 0 116.1.5 110.8-1.2 118.5-2.1 9-7.6 15.8-14.9 19.6-8.3 4.6-23.4 6.6-31.4 5.2-21.4-4-28.9-28.7-14.4-42.9 8.4-8 20.3-9.6 38-12.8 3-.5 5.6-1.2 7.7-3.7 5-5.7.9-127 2.6-133.7.4-2.6 1.5-4.8 3.5-6.4 2.1-1.7 5.8-2.7 6.7-2.7 101-19 113.3-21.4 115.1-21.4 5.7-.4 9 3 9 8.7-.1 170.6.4 161.4-1 167.6zM345.2 32H102.8C45.9 32 0 77.9 0 134.8v242.4C0 434.1 45.9 480 102.8 480h242.4c57 0 102.8-45.9 102.8-102.8V134.8C448 77.9 402.1 32 345.2 32zM223.6 444c-106.3 0-192.5-86.2-192.5-192.5S117.3 59 223.6 59s192.5 86.2 192.5 192.5S329.9 444 223.6 444z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="itunes-note"--}}
                                            {{--                                                                 class="svg-inline--fa fa-itunes-note fa-w-12 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 384 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M381.9 388.2c-6.4 27.4-27.2 42.8-55.1 48-24.5 4.5-44.9 5.6-64.5-10.2-23.9-20.1-24.2-53.4-2.7-74.4 17-16.2 40.9-19.5 76.8-25.8 6-1.1 11.2-2.5 15.6-7.4 6.4-7.2 4.4-4.1 4.4-163.2 0-11.2-5.5-14.3-17-12.3-8.2 1.4-185.7 34.6-185.7 34.6-10.2 2.2-13.4 5.2-13.4 16.7 0 234.7 1.1 223.9-2.5 239.5-4.2 18.2-15.4 31.9-30.2 39.5-16.8 9.3-47.2 13.4-63.4 10.4-43.2-8.1-58.4-58-29.1-86.6 17-16.2 40.9-19.5 76.8-25.8 6-1.1 11.2-2.5 15.6-7.4 10.1-11.5 1.8-256.6 5.2-270.2.8-5.2 3-9.6 7.1-12.9 4.2-3.5 11.8-5.5 13.4-5.5 204-38.2 228.9-43.1 232.4-43.1 11.5-.8 18.1 6 18.1 17.6.2 344.5 1.1 326-1.8 338.5z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="kickstarter"--}}
                                            {{--                                                                 class="svg-inline--fa fa-kickstarter fa-w-14 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M400 480H48c-26.4 0-48-21.6-48-48V80c0-26.4 21.6-48 48-48h352c26.4 0 48 21.6 48 48v352c0 26.4-21.6 48-48 48zM199.6 178.5c0-30.7-17.6-45.1-39.7-45.1-25.8 0-40 19.8-40 44.5v154.8c0 25.8 13.7 45.6 40.5 45.6 21.5 0 39.2-14 39.2-45.6v-41.8l60.6 75.7c12.3 14.9 39 16.8 55.8 0 14.6-15.1 14.8-36.8 4-50.4l-49.1-62.8 40.5-58.7c9.4-13.5 9.5-34.5-5.6-49.1-16.4-15.9-44.6-17.3-61.4 7l-44.8 64.7v-38.8z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="kickstarter-k"--}}
                                            {{--                                                                 class="svg-inline--fa fa-kickstarter-k fa-w-12 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 384 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M147.3 114.4c0-56.2-32.5-82.4-73.4-82.4C26.2 32 0 68.2 0 113.4v283c0 47.3 25.3 83.4 74.9 83.4 39.8 0 72.4-25.6 72.4-83.4v-76.5l112.1 138.3c22.7 27.2 72.1 30.7 103.2 0 27-27.6 27.3-67.4 7.4-92.2l-90.8-114.8 74.9-107.4c17.4-24.7 17.5-63.1-10.4-89.8-30.3-29-82.4-31.6-113.6 12.8L147.3 185v-70.6z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab" data-icon="medium"--}}
                                            {{--                                                                 class="svg-inline--fa fa-medium fa-w-14 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M0 32v448h448V32H0zm372.2 106.1l-24 23c-2.1 1.6-3.1 4.2-2.7 6.7v169.3c-.4 2.6.6 5.2 2.7 6.7l23.5 23v5.1h-118V367l24.3-23.6c2.4-2.4 2.4-3.1 2.4-6.7V199.8l-67.6 171.6h-9.1L125 199.8v115c-.7 4.8 1 9.7 4.4 13.2l31.6 38.3v5.1H71.2v-5.1l31.6-38.3c3.4-3.5 4.9-8.4 4.1-13.2v-133c.4-3.7-1-7.3-3.8-9.8L75 138.1V133h87.3l67.4 148L289 133.1h83.2v5z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="medium-m"--}}
                                            {{--                                                                 class="svg-inline--fa fa-medium-m fa-w-16 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 512 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M71.5 142.3c.6-5.9-1.7-11.8-6.1-15.8L20.3 72.1V64h140.2l108.4 237.7L364.2 64h133.7v8.1l-38.6 37c-3.3 2.5-5 6.7-4.3 10.8v272c-.7 4.1 1 8.3 4.3 10.8l37.7 37v8.1H307.3v-8.1l39.1-37.9c3.8-3.8 3.8-5 3.8-10.8V171.2L241.5 447.1h-14.7L100.4 171.2v184.9c-1.1 7.8 1.5 15.6 7 21.2l50.8 61.6v8.1h-144v-8L65 377.3c5.4-5.6 7.9-13.5 6.5-21.2V142.3z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="patreon"--}}
                                            {{--                                                                 class="svg-inline--fa fa-patreon fa-w-16 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 512 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M512 194.8c0 101.3-82.4 183.8-183.8 183.8-101.7 0-184.4-82.4-184.4-183.8 0-101.6 82.7-184.3 184.4-184.3C429.6 10.5 512 93.2 512 194.8zM0 501.5h90v-491H0v491z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="pinterest"--}}
                                            {{--                                                                 class="svg-inline--fa fa-pinterest fa-w-16 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 496 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="pinterest-p"--}}
                                            {{--                                                                 class="svg-inline--fa fa-pinterest-p fa-w-12 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 384 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="pinterest-square"--}}
                                            {{--                                                                 class="svg-inline--fa fa-pinterest-square fa-w-14 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M448 80v352c0 26.5-21.5 48-48 48H154.4c9.8-16.4 22.4-40 27.4-59.3 3-11.5 15.3-58.4 15.3-58.4 8 15.3 31.4 28.2 56.3 28.2 74.1 0 127.4-68.1 127.4-152.7 0-81.1-66.2-141.8-151.4-141.8-106 0-162.2 71.1-162.2 148.6 0 36 19.2 80.8 49.8 95.1 4.7 2.2 7.1 1.2 8.2-3.3.8-3.4 5-20.1 6.8-27.8.6-2.5.3-4.6-1.7-7-10.1-12.3-18.3-34.9-18.3-56 0-54.2 41-106.6 110.9-106.6 60.3 0 102.6 41.1 102.6 99.9 0 66.4-33.5 112.4-77.2 112.4-24.1 0-42.1-19.9-36.4-44.4 6.9-29.2 20.3-60.7 20.3-81.8 0-53-75.5-45.7-75.5 25 0 21.7 7.3 36.5 7.3 36.5-31.4 132.8-36.1 134.5-29.6 192.6l2.2.8H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab" data-icon="slack"--}}
                                            {{--                                                                 class="svg-inline--fa fa-slack fa-w-14 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M244.2 217.5l19.3 57.7-59.8 20-19.3-57.7 59.8-20zm41.4 243.7C131.6 507.4 65 471.6 18.8 317.6S8.4 97 162.4 50.8C316.4 4.6 383 40.4 429.2 194.4c46.2 154 10.4 220.6-143.6 266.8zM366.2 265c-3.9-12.2-17.2-18.6-29.4-14.7l-29 9.7-19.3-57.7 29-9.7c12.2-3.9 18.6-17.2 14.7-29.4-3.9-12.2-17.2-18.6-29.4-14.7l-29 9.7-10-30.1c-3.9-12.2-17.2-18.6-29.4-14.7-12.2 3.9-18.6 17.2-14.7 29.4l10 30.1-59.8 20.1-10-30.1c-3.9-12.2-17.2-18.6-29.4-14.7-12.2 3.9-18.6 17.2-14.7 29.4l10 30.1-29 9.7c-12.2 3.9-18.6 17.2-14.7 29.4 3.2 9.3 12.2 15.4 21.5 15.8 4.3.6 7.7-1 36.9-10.7l19.3 57.7-29 9.7c-12.2 3.9-18.6 17.2-14.7 29.4 3.2 9.3 12.2 15.4 21.5 15.8 4.3.6 7.7-1 36.9-10.7l10 30.1c3.7 10.8 15.8 18.6 29.4 14.7 12.2-3.9 18.6-17.2 14.7-29.4l-10-30.1 59.8-20.1 10 30.1c3.7 10.8 15.8 18.6 29.4 14.7 12.2-3.9 18.6-17.2 14.7-29.4l-10-30.1 29-9.7c12.2-4.2 18.6-17.5 14.7-29.6z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="slack-hash"--}}
                                            {{--                                                                 class="svg-inline--fa fa-slack-hash fa-w-14 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M446.2 270.4c-6.2-19-26.9-29.1-46-22.9l-45.4 15.1-30.3-90 45.4-15.1c19.1-6.2 29.1-26.8 23-45.9-6.2-19-26.9-29.1-46-22.9l-45.4 15.1-15.7-47c-6.2-19-26.9-29.1-46-22.9-19.1 6.2-29.1 26.8-23 45.9l15.7 47-93.4 31.2-15.7-47c-6.2-19-26.9-29.1-46-22.9-19.1 6.2-29.1 26.8-23 45.9l15.7 47-45.3 15c-19.1 6.2-29.1 26.8-23 45.9 5 14.5 19.1 24 33.6 24.6 6.8 1 12-1.6 57.7-16.8l30.3 90L78 354.8c-19 6.2-29.1 26.9-23 45.9 5 14.5 19.1 24 33.6 24.6 6.8 1 12-1.6 57.7-16.8l15.7 47c5.9 16.9 24.7 29 46 22.9 19.1-6.2 29.1-26.8 23-45.9l-15.7-47 93.6-31.3 15.7 47c5.9 16.9 24.7 29 46 22.9 19.1-6.2 29.1-26.8 23-45.9l-15.7-47 45.4-15.1c19-6 29.1-26.7 22.9-45.7zm-254.1 47.2l-30.3-90.2 93.5-31.3 30.3 90.2-93.5 31.3z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="soundcloud"--}}
                                            {{--                                                                 class="svg-inline--fa fa-soundcloud fa-w-20 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 640 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M111.4 256.3l5.8 65-5.8 68.3c-.3 2.5-2.2 4.4-4.4 4.4s-4.2-1.9-4.2-4.4l-5.6-68.3 5.6-65c0-2.2 1.9-4.2 4.2-4.2 2.2 0 4.1 2 4.4 4.2zm21.4-45.6c-2.8 0-4.7 2.2-5 5l-5 105.6 5 68.3c.3 2.8 2.2 5 5 5 2.5 0 4.7-2.2 4.7-5l5.8-68.3-5.8-105.6c0-2.8-2.2-5-4.7-5zm25.5-24.1c-3.1 0-5.3 2.2-5.6 5.3l-4.4 130 4.4 67.8c.3 3.1 2.5 5.3 5.6 5.3 2.8 0 5.3-2.2 5.3-5.3l5.3-67.8-5.3-130c0-3.1-2.5-5.3-5.3-5.3zM7.2 283.2c-1.4 0-2.2 1.1-2.5 2.5L0 321.3l4.7 35c.3 1.4 1.1 2.5 2.5 2.5s2.2-1.1 2.5-2.5l5.6-35-5.6-35.6c-.3-1.4-1.1-2.5-2.5-2.5zm23.6-21.9c-1.4 0-2.5 1.1-2.5 2.5l-6.4 57.5 6.4 56.1c0 1.7 1.1 2.8 2.5 2.8s2.5-1.1 2.8-2.5l7.2-56.4-7.2-57.5c-.3-1.4-1.4-2.5-2.8-2.5zm25.3-11.4c-1.7 0-3.1 1.4-3.3 3.3L47 321.3l5.8 65.8c.3 1.7 1.7 3.1 3.3 3.1 1.7 0 3.1-1.4 3.1-3.1l6.9-65.8-6.9-68.1c0-1.9-1.4-3.3-3.1-3.3zm25.3-2.2c-1.9 0-3.6 1.4-3.6 3.6l-5.8 70 5.8 67.8c0 2.2 1.7 3.6 3.6 3.6s3.6-1.4 3.9-3.6l6.4-67.8-6.4-70c-.3-2.2-2-3.6-3.9-3.6zm241.4-110.9c-1.1-.8-2.8-1.4-4.2-1.4-2.2 0-4.2.8-5.6 1.9-1.9 1.7-3.1 4.2-3.3 6.7v.8l-3.3 176.7 1.7 32.5 1.7 31.7c.3 4.7 4.2 8.6 8.9 8.6s8.6-3.9 8.6-8.6l3.9-64.2-3.9-177.5c-.4-3-2-5.8-4.5-7.2zm-26.7 15.3c-1.4-.8-2.8-1.4-4.4-1.4s-3.1.6-4.4 1.4c-2.2 1.4-3.6 3.9-3.6 6.7l-.3 1.7-2.8 160.8s0 .3 3.1 65.6v.3c0 1.7.6 3.3 1.7 4.7 1.7 1.9 3.9 3.1 6.4 3.1 2.2 0 4.2-1.1 5.6-2.5 1.7-1.4 2.5-3.3 2.5-5.6l.3-6.7 3.1-58.6-3.3-162.8c-.3-2.8-1.7-5.3-3.9-6.7zm-111.4 22.5c-3.1 0-5.8 2.8-5.8 6.1l-4.4 140.6 4.4 67.2c.3 3.3 2.8 5.8 5.8 5.8 3.3 0 5.8-2.5 6.1-5.8l5-67.2-5-140.6c-.2-3.3-2.7-6.1-6.1-6.1zm376.7 62.8c-10.8 0-21.1 2.2-30.6 6.1-6.4-70.8-65.8-126.4-138.3-126.4-17.8 0-35 3.3-50.3 9.4-6.1 2.2-7.8 4.4-7.8 9.2v249.7c0 5 3.9 8.6 8.6 9.2h218.3c43.3 0 78.6-35 78.6-78.3.1-43.6-35.2-78.9-78.5-78.9zm-296.7-60.3c-4.2 0-7.5 3.3-7.8 7.8l-3.3 136.7 3.3 65.6c.3 4.2 3.6 7.5 7.8 7.5 4.2 0 7.5-3.3 7.5-7.5l3.9-65.6-3.9-136.7c-.3-4.5-3.3-7.8-7.5-7.8zm-53.6-7.8c-3.3 0-6.4 3.1-6.4 6.7l-3.9 145.3 3.9 66.9c.3 3.6 3.1 6.4 6.4 6.4 3.6 0 6.4-2.8 6.7-6.4l4.4-66.9-4.4-145.3c-.3-3.6-3.1-6.7-6.7-6.7zm26.7 3.4c-3.9 0-6.9 3.1-6.9 6.9L227 321.3l3.9 66.4c.3 3.9 3.1 6.9 6.9 6.9s6.9-3.1 6.9-6.9l4.2-66.4-4.2-141.7c0-3.9-3-6.9-6.9-6.9z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="spotify"--}}
                                            {{--                                                                 class="svg-inline--fa fa-spotify fa-w-16 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 496 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="tripadvisor"--}}
                                            {{--                                                                 class="svg-inline--fa fa-tripadvisor fa-w-18 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 576 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M166.4 280.521c0 13.236-10.73 23.966-23.966 23.966s-23.966-10.73-23.966-23.966 10.73-23.966 23.966-23.966 23.966 10.729 23.966 23.966zm264.962-23.956c-13.23 0-23.956 10.725-23.956 23.956 0 13.23 10.725 23.956 23.956 23.956 13.23 0 23.956-10.725 23.956-23.956-.001-13.231-10.726-23.956-23.956-23.956zm89.388 139.49c-62.667 49.104-153.276 38.109-202.379-24.559l-30.979 46.325-30.683-45.939c-48.277 60.39-135.622 71.891-197.885 26.055-64.058-47.158-77.759-137.316-30.601-201.374A186.762 186.762 0 0 0 0 139.416l90.286-.05a358.48 358.48 0 0 1 197.065-54.03 350.382 350.382 0 0 1 192.181 53.349l96.218.074a185.713 185.713 0 0 0-28.352 57.649c46.793 62.747 34.964 151.37-26.648 199.647zM259.366 281.761c-.007-63.557-51.535-115.075-115.092-115.068C80.717 166.7 29.2 218.228 29.206 281.785c.007 63.557 51.535 115.075 115.092 115.068 63.513-.075 114.984-51.539 115.068-115.052v-.04zm28.591-10.455c5.433-73.44 65.51-130.884 139.12-133.022a339.146 339.146 0 0 0-139.727-27.812 356.31 356.31 0 0 0-140.164 27.253c74.344 1.582 135.299 59.424 140.771 133.581zm251.706-28.767c-21.992-59.634-88.162-90.148-147.795-68.157-59.634 21.992-90.148 88.162-68.157 147.795v.032c22.038 59.607 88.198 90.091 147.827 68.113 59.615-22.004 90.113-88.162 68.125-147.783zm-326.039 37.975v.115c-.057 39.328-31.986 71.163-71.314 71.106-39.328-.057-71.163-31.986-71.106-71.314.057-39.328 31.986-71.163 71.314-71.106 39.259.116 71.042 31.94 71.106 71.199zm-24.512 0v-.084c-.051-25.784-20.994-46.645-46.778-46.594-25.784.051-46.645 20.994-46.594 46.777.051 25.784 20.994 46.645 46.777 46.594 25.726-.113 46.537-20.968 46.595-46.693zm313.423 0v.048c-.02 39.328-31.918 71.194-71.247 71.173s-71.194-31.918-71.173-71.247c.02-39.328 31.918-71.194 71.247-71.173 39.29.066 71.121 31.909 71.173 71.199zm-24.504-.008c-.009-25.784-20.918-46.679-46.702-46.67-25.784.009-46.679 20.918-46.67 46.702.009 25.784 20.918 46.678 46.702 46.67 25.765-.046 46.636-20.928 46.67-46.693v-.009z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab" data-icon="twitch"--}}
                                            {{--                                                                 class="svg-inline--fa fa-twitch fa-w-14 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M40.1 32L10 108.9v314.3h107V480h60.2l56.8-56.8h87l117-117V32H40.1zm357.8 254.1L331 353H224l-56.8 56.8V353H76.9V72.1h321v214zM331 149v116.9h-40.1V149H331zm-107 0v116.9h-40.1V149H224z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab" data-icon="vimeo"--}}
                                            {{--                                                                 class="svg-inline--fa fa-vimeo fa-w-14 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M403.2 32H44.8C20.1 32 0 52.1 0 76.8v358.4C0 459.9 20.1 480 44.8 480h358.4c24.7 0 44.8-20.1 44.8-44.8V76.8c0-24.7-20.1-44.8-44.8-44.8zM377 180.8c-1.4 31.5-23.4 74.7-66 129.4-44 57.2-81.3 85.8-111.7 85.8-18.9 0-34.8-17.4-47.9-52.3-25.5-93.3-36.4-148-57.4-148-2.4 0-10.9 5.1-25.4 15.2l-15.2-19.6c37.3-32.8 72.9-69.2 95.2-71.2 25.2-2.4 40.7 14.8 46.5 51.7 20.7 131.2 29.9 151 67.6 91.6 13.5-21.4 20.8-37.7 21.8-48.9 3.5-33.2-25.9-30.9-45.8-22.4 15.9-52.1 46.3-77.4 91.2-76 33.3.9 49 22.5 47.1 64.7z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="vimeo-square"--}}
                                            {{--                                                                 class="svg-inline--fa fa-vimeo-square fa-w-14 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-16.2 149.6c-1.4 31.1-23.2 73.8-65.3 127.9-43.5 56.5-80.3 84.8-110.4 84.8-18.7 0-34.4-17.2-47.3-51.6-25.2-92.3-35.9-146.4-56.7-146.4-2.4 0-10.8 5-25.1 15.1L64 192c36.9-32.4 72.1-68.4 94.1-70.4 24.9-2.4 40.2 14.6 46 51.1 20.5 129.6 29.6 149.2 66.8 90.5 13.4-21.2 20.6-37.2 21.5-48.3 3.4-32.8-25.6-30.6-45.2-22.2 15.7-51.5 45.8-76.5 90.1-75.1 32.9 1 48.4 22.4 46.5 64z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="vimeo-v"--}}
                                            {{--                                                                 class="svg-inline--fa fa-vimeo-v fa-w-14 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M447.8 153.6c-2 43.6-32.4 103.3-91.4 179.1-60.9 79.2-112.4 118.8-154.6 118.8-26.1 0-48.2-24.1-66.3-72.3C100.3 250 85.3 174.3 56.2 174.3c-3.4 0-15.1 7.1-35.2 21.1L0 168.2c51.6-45.3 100.9-95.7 131.8-98.5 34.9-3.4 56.3 20.5 64.4 71.5 28.7 181.5 41.4 208.9 93.6 126.7 18.7-29.6 28.8-52.1 30.2-67.6 4.8-45.9-35.8-42.8-63.3-31 22-72.1 64.1-107.1 126.2-105.1 45.8 1.2 67.5 31.1 64.9 89.4z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="whatsapp"--}}
                                            {{--                                                                 class="svg-inline--fa fa-whatsapp fa-w-14 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab"--}}
                                            {{--                                                                 data-icon="whatsapp-square"--}}
                                            {{--                                                                 class="svg-inline--fa fa-whatsapp-square fa-w-14 "--}}
                                            {{--                                                                 role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 448 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                        <button type="button" tabindex="0" class="dropdown-item">--}}
                                            {{--                                                            <svg aria-hidden="true" data-prefix="fab" data-icon="yelp"--}}
                                            {{--                                                                 class="svg-inline--fa fa-yelp fa-w-12 " role="img"--}}
                                            {{--                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                            {{--                                                                 viewBox="0 0 384 512">--}}
                                            {{--                                                                <path fill="currentColor"--}}
                                            {{--                                                                      d="M136.9 328c-1 .3-109.2 35.7-115.8 35.7-15.2-.9-18.5-16.2-19.9-31.2-1.5-14.2-1.4-29.8.3-46.8 1.9-18.8 5.5-45.1 24.2-44 4.8 0 67.1 25.9 112.7 44.4 17.1 6.8 18.6 35.8-1.5 41.9zm57.9-113.9c1.8 38.2-25.5 48.5-47.2 14.3L41.3 60.4c-1.5-6.6.3-12.4 5.3-17.4C62.2 26.5 146 3.2 168.1 8.9c7.5 1.9 12.1 6.1 13.8 12.6 1.3 8.3 11.5 167.4 12.9 192.6zm-1.4 164.8c0 4.6.2 116.4-1.7 121.5-2.3 6-7 9.7-14.3 11.2-10.1 1.7-27.1-1.9-51-10.7-22-8.1-56.7-21.5-49.3-42.5 2.8-6.9 51.4-62.8 77.3-93.6 12-15.2 39.8-5.5 39 14.1zm180.2-117.8c-5.6 3.7-110.8 28.2-118.1 30.6l.3-.6c-18.1 4.7-35.4-18.5-23.3-34.6 3.7-3.7 65.9-92.4 72.8-97 5.2-3.6 11.3-3.8 18.3-.6 18.4 8.8 55.1 63.1 57.4 84.6-.1 2.9 1.2 11.7-7.4 17.6zm10.1 130.7c-2.7 20.6-44.5 73.4-63.8 81-6.9 2.6-12.9 2-17.7-2-5-3.5-61.8-97.1-64.9-102.3-10.9-16.2 6.8-39.8 25.6-33.2 0 0 110.5 35.7 114.7 39.4 5.2 4.1 7.2 9.8 6.1 17.1z"></path>--}}
                                            {{--                                                            </svg>--}}
                                            {{--                                                        </button>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </div>--}}
                                            <input name="settings.blocks[0].title" placeholder="متن" type="text"
                                                   class="form-control" value=""></div>
                                    </div>
                                    {{--                                    <div class="layout-selector">--}}
                                    {{--                                        --}}
                                    {{--                                        --}}
                                    {{--                                        --}}
                                    {{--                                        --}}
                                    {{--                                        --}}
                                    {{--                                        --}}
                                    {{--                                        --}}
                                    {{--                                        <span title="Text" class=""><svg aria-hidden="true"--}}
                                    {{--                                                                                                  data-prefix="fac"--}}
                                    {{--                                                                                                  data-icon="layout-text"--}}
                                    {{--                                                                                                  class="svg-inline--fa fa-layout-text fa-w-16 "--}}
                                    {{--                                                                                                  role="img"--}}
                                    {{--                                                                                                  xmlns="http://www.w3.org/2000/svg"--}}
                                    {{--                                                                                                  viewBox="0 0 512 512"><path--}}
                                    {{--                                                    fill="currentColor"--}}
                                    {{--                                                    d="M26.94 390.73c-14.88,0 -26.94,12.07 -26.94,26.96 0,14.87 12.06,26.94 26.94,26.94l458.12 0c14.88,0 26.94,-12.07 26.94,-26.94 0,-14.89 -12.06,-26.96 -26.94,-26.96l-458.12 0zm-26.94 -80.82c0,-14.91 12.06,-26.95 26.94,-26.95l458.12 0c14.88,0 26.94,12.04 26.94,26.95 0,14.88 -12.06,26.94 -26.94,26.94l-458.12 0c-14.88,0 -26.94,-12.06 -26.94,-26.94zm26.94 -134.75c-14.88,0 -26.94,12.07 -26.94,26.94 0,14.9 12.06,26.96 26.94,26.96l458.12 0c14.88,0 26.94,-12.06 26.94,-26.96 0,-14.87 -12.06,-26.94 -26.94,-26.94l-458.12 0zm0 -107.8c-14.88,0 -26.94,12.08 -26.94,26.95 0,14.88 12.06,26.95 26.94,26.95l458.12 0c14.88,0 26.94,-12.07 26.94,-26.95 0,-14.87 -12.06,-26.95 -26.94,-26.95l-458.12 0z"></path></svg></span><span--}}
                                    {{--                                            title="Button" class="selected"><svg aria-hidden="true" data-prefix="fac"--}}
                                    {{--                                                                                 data-icon="layout-button"--}}
                                    {{--                                                                                 class="svg-inline--fa fa-layout-button fa-w-16 "--}}
                                    {{--                                                                                 role="img"--}}
                                    {{--                                                                                 xmlns="http://www.w3.org/2000/svg"--}}
                                    {{--                                                                                 viewBox="0 0 512 512"><path--}}
                                    {{--                                                    fill="currentColor"--}}
                                    {{--                                                    d="M44.52 100.17c-24.59,0 -44.52,19.93 -44.52,44.52l0 222.61c0,24.59 19.93,44.53 44.52,44.53l422.96 0c24.59,0 44.52,-19.94 44.52,-44.53l0 -222.61c0,-24.59 -19.93,-44.52 -44.52,-44.52l-422.96 0 0 0zm22.26 44.52c-12.29,0 -22.26,9.97 -22.26,22.27l0 178.08c0,12.3 9.97,22.26 22.26,22.26l378.44 0c12.29,0 22.26,-9.96 22.26,-22.26l0 -178.08c0,-12.3 -9.97,-22.27 -22.26,-22.27l-378.44 0zm22.26 66.78c0,-12.29 9.97,-22.26 22.26,-22.26l289.4 0c12.29,0 22.26,9.97 22.26,22.26 0,12.3 -9.97,22.27 -22.26,22.27l-289.4 0c-12.29,0 -22.26,-9.97 -22.26,-22.27zm22.26 66.79c-12.29,0 -22.26,9.96 -22.26,22.26 0,12.29 9.97,22.26 22.26,22.26l289.4 0c12.29,0 22.26,-9.97 22.26,-22.26 0,-12.3 -9.97,-22.26 -22.26,-22.26l-289.4 0z"></path></svg></span><span--}}
                                    {{--                                            title="Thumbnail Button" class=""><svg aria-hidden="true" data-prefix="fac"--}}
                                    {{--                                                                                   data-icon="layout-thumbnail"--}}
                                    {{--                                                                                   class="svg-inline--fa fa-layout-thumbnail fa-w-16 "--}}
                                    {{--                                                                                   role="img"--}}
                                    {{--                                                                                   xmlns="http://www.w3.org/2000/svg"--}}
                                    {{--                                                                                   viewBox="0 0 512 512"><path--}}
                                    {{--                                                    fill="currentColor"--}}
                                    {{--                                                    d="M0 144.69c0,-24.59 19.93,-44.52 44.52,-44.52l422.96 0c24.59,0 44.52,19.93 44.52,44.52l0 222.61c0,24.59 -19.93,44.53 -44.52,44.53l-422.96 0c-24.59,0 -44.52,-19.94 -44.52,-44.53l0 -222.61 0 0zm44.52 22.27c0,-12.3 9.97,-22.27 22.26,-22.27l378.44 0c12.29,0 22.26,9.97 22.26,22.27l0 178.08c0,12.3 -9.97,22.26 -22.26,22.26l-378.44 0c-12.29,0 -22.26,-9.96 -22.26,-22.26l0 -178.08zm244.87 22.25c-12.3,0 -22.26,9.97 -22.26,22.26 0,12.3 9.96,22.27 22.26,22.27l111.31 0c12.29,0 22.26,-9.97 22.26,-22.27 0,-12.29 -9.97,-22.26 -22.26,-22.26l-111.31 0zm-22.26 111.31c0,-12.3 9.96,-22.26 22.26,-22.26l111.31 0c12.29,0 22.26,9.96 22.26,22.26 0,12.29 -9.97,22.26 -22.26,22.26l-111.31 0c-12.3,0 -22.26,-9.97 -22.26,-22.26zm-178.09 22.26l0 -133.57 133.57 0 0 133.57 -133.57 0z"></path></svg></span><span--}}
                                    {{--                                            title="Background Image" class=""><svg aria-hidden="true" data-prefix="fac"--}}
                                    {{--                                                                                   data-icon="layout-image-bg"--}}
                                    {{--                                                                                   class="svg-inline--fa fa-layout-image-bg fa-w-16 "--}}
                                    {{--                                                                                   role="img"--}}
                                    {{--                                                                                   xmlns="http://www.w3.org/2000/svg"--}}
                                    {{--                                                                                   viewBox="0 0 512 512"><path--}}
                                    {{--                                                    fill="currentColor"--}}
                                    {{--                                                    d="M0 144.69c0,-24.59 19.93,-44.52 44.52,-44.52l422.96 0c24.59,0 44.52,19.93 44.52,44.52l0 222.61c0,24.59 -19.93,44.53 -44.52,44.53l-422.96 0c-24.59,0 -44.52,-19.94 -44.52,-44.53l0 -222.61 0 0zm66.78 66.78c0,-12.29 9.97,-22.26 22.26,-22.26l333.92 0c12.29,0 22.26,9.97 22.26,22.26 0,12.3 -9.97,22.27 -22.26,22.27l-333.92 0c-12.29,0 -22.26,-9.97 -22.26,-22.27zm22.26 66.79c-12.29,0 -22.26,9.96 -22.26,22.26 0,12.29 9.97,22.26 22.26,22.26l333.92 0c12.29,0 22.26,-9.97 22.26,-22.26 0,-12.3 -9.97,-22.26 -22.26,-22.26l-333.92 0z"></path></svg></span><span--}}
                                    {{--                                            title="Card" class=""><svg aria-hidden="true" data-prefix="fac"--}}
                                    {{--                                                                       data-icon="layout-card"--}}
                                    {{--                                                                       class="svg-inline--fa fa-layout-card fa-w-16 "--}}
                                    {{--                                                                       role="img" xmlns="http://www.w3.org/2000/svg"--}}
                                    {{--                                                                       viewBox="0 0 512 512"><path fill="currentColor"--}}
                                    {{--                                                                                                   d="M44.52 44.52c-24.59,0 -44.52,19.93 -44.52,44.52l0 333.92c0,24.59 19.93,44.52 44.52,44.52l422.96 0c24.59,0 44.52,-19.93 44.52,-44.52l0 -333.92c0,-24.59 -19.93,-44.52 -44.52,-44.52l-422.96 0zm22.26 44.52c-12.29,0 -22.26,9.97 -22.26,22.26l0 289.39c0,12.3 9.97,22.27 22.26,22.27l378.44 0c12.29,0 22.26,-9.97 22.26,-22.27l0 -289.39c0,-12.29 -9.97,-22.26 -22.26,-22.26l-378.44 0zm22.26 267.14c0,-12.29 9.97,-22.26 22.26,-22.26l155.83 0c12.29,0 22.26,9.97 22.26,22.26 0,12.3 -9.97,22.26 -22.26,22.26l-155.83 0c-12.29,0 -22.26,-9.96 -22.26,-22.26zm0 -66.79l0 -155.83 333.92 0 0 155.83 -333.92 0z"></path></svg></span>--}}
                                    {{--                                    </div>--}}
                                    <div class="smartpage-container block-preview">
                                        <div class="links-block">
                                            <div class="block-item layout-button">
                                                <span><span>نام لینک</span></span></div>
                                        </div>

                                    </div>


                                    {{--                                    <div class="text-center block-controls form-group">--}}
                                    {{--                                        --}}
                                    {{--                                        --}}
                                    {{--                                        <span--}}
                                    {{--                                            class="block-control"><span><svg aria-hidden="true" data-prefix="fas"--}}
                                    {{--                                                                             data-icon="star"--}}
                                    {{--                                                                             class="svg-inline--fa fa-star fa-w-18 "--}}
                                    {{--                                                                             role="img"--}}
                                    {{--                                                                             xmlns="http://www.w3.org/2000/svg"--}}
                                    {{--                                                                             viewBox="0 0 576 512"><path--}}
                                    {{--                                                        fill="currentColor"--}}
                                    {{--                                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg></span>Pop</span><span--}}
                                    {{--                                            class="block-control"><span>--}}
                                    {{--                                                <svg aria-hidden="true" data-prefix="fal"--}}
                                    {{--                                                                             data-icon="eye-slash"--}}
                                    {{--                                                                             class="svg-inline--fa fa-eye-slash fa-w-18 "--}}
                                    {{--                                                                             role="img"--}}
                                    {{--                                                                             xmlns="http://www.w3.org/2000/svg"--}}
                                    {{--                                                                             viewBox="0 0 576 512"><path--}}
                                    {{--                                                        fill="currentColor"--}}
                                    {{--                                                        d="M321.496 406.121l21.718 29.272A331.764 331.764 0 0 1 288 440C168.14 440 63.003 376.006 6.646 280.369a47.999 47.999 0 0 1 0-48.739c25.834-43.84 61.913-81.01 104.943-108.427l19.125 25.777c-39.83 24.942-73.004 59.027-96.499 98.896a16.008 16.008 0 0 0 0 16.246C86.163 352.277 182.135 408 288 408c11.298 0 22.476-.64 33.496-1.879zM141.972 164.155C133.037 183.57 128 205.19 128 228c0 85.822 71.23 156 160 156 5.566 0 11.063-.277 16.479-.815l-23.266-31.359C213.676 348.408 160 294.277 160 228a120.48 120.48 0 0 1 4.664-33.26l-22.692-30.585zM569.354 280.37c-33.709 57.202-84.861 103.039-146.143 130.673l56.931 76.732c4 5.391 2.872 13.004-2.519 17.004l-6.507 4.828c-5.391 4-13.004 2.872-17.003-2.519L95.859 24.225c-4-5.391-2.872-13.004 2.519-17.004l6.507-4.828c5.391-4 13.004-2.872 17.003 2.519l62.189 83.82C216.741 77.883 251.696 72 288 72c119.86 0 224.996 63.994 281.354 159.63a48.005 48.005 0 0 1 0 48.74zM416 228c0-68.483-57.308-124-128-124-28.059 0-54.002 8.754-75.095 23.588l34.709 46.782c20.339-16.584 48.244-18.755 70.523-6.84h-.02c-14.554 0-26.353 11.799-26.353 26.353s11.799 26.353 26.353 26.353c14.554 0 26.353-11.799 26.353-26.353v-.02c15.223 28.465 6.889 64.554-20.679 83.18l38.514 51.911C394.803 306.465 416 269.638 416 228zm125.785 19.877c-29.072-49.333-73.341-90.435-127.66-115.887 55.405 69.029 41.701 170.413-32.734 222.688l22.238 29.973c57.564-24.305 106.246-66.38 138.155-120.527a16.008 16.008 0 0 0 .001-16.247z"></path></svg></span>Hide</span>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="action-sheet slidein-enter-social hide">
                <div class="table-align">
                    <div class="table-cell-bottom">
                        <div class="action-sheet-body">
                            <div class="action-sheet-header"><span class="clickable-icon right success" title="Done"><svg
                                        aria-hidden="true" data-prefix="far" data-icon="check"
                                        class="svg-inline--fa fa-check fa-w-16 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path
                                            fill="currentColor"
                                            d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z"></path></svg></span>
                                <div class="action-sheet-title">لینک شبکه های اجتماعی</div>
                            </div>
                            <div>
                                <div>
                                    <div>
                                        <div data-react-beautiful-dnd-draggable="1" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="1"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="facebook"
                                                                     class="svg-inline--fa fa-facebook fa-w-14 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 448 512" title="facebook">
                                                                    <path fill="currentColor"
                                                                          d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.social_links[0].handle"
                                                               placeholder="لینک فیسبوک" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="1" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="1"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="instagram"
                                                                     class="svg-inline--fa fa-instagram fa-w-14 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 448 512" title="instagram">
                                                                    <path fill="currentColor"
                                                                          d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.social_links[1].handle"
                                                               placeholder="لینک اینستاگرام" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="1" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="1"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="twitter"
                                                                     class="svg-inline--fa fa-twitter fa-w-16 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 512 512" title="twitter">
                                                                    <path fill="currentColor"
                                                                          d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.social_links[2].handle"
                                                               placeholder="لینک تویتر" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="1" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="1"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="youtube"
                                                                     class="svg-inline--fa fa-youtube fa-w-18 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 576 512" title="youtube">
                                                                    <path fill="currentColor"
                                                                          d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.social_links[3].handle"
                                                               placeholder="لینک یوتیوب" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="1" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="1"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="pinterest-p"
                                                                     class="svg-inline--fa fa-pinterest-p fa-w-12 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 384 512" title="pinterest">
                                                                    <path fill="currentColor"
                                                                          d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.social_links[4].handle"
                                                               placeholder="لینک پینترست" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="1" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="1"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="patreon"
                                                                     class="svg-inline--fa fa-patreon fa-w-16 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 512 512" title="patreon">
                                                                    <path fill="currentColor"
                                                                          d="M512 194.8c0 101.3-82.4 183.8-183.8 183.8-101.7 0-184.4-82.4-184.4-183.8 0-101.6 82.7-184.3 184.4-184.3C429.6 10.5 512 93.2 512 194.8zM0 501.5h90v-491H0v491z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.social_links[5].handle"
                                                               placeholder="لیتک پاترون" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="1" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="1"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="tumblr"
                                                                     class="svg-inline--fa fa-tumblr fa-w-10 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 320 512" title="tumblr">
                                                                    <path fill="currentColor"
                                                                          d="M309.8 480.3c-13.6 14.5-50 31.7-97.4 31.7-120.8 0-147-88.8-147-140.6v-144H17.9c-5.5 0-10-4.5-10-10v-68c0-7.2 4.5-13.6 11.3-16 62-21.8 81.5-76 84.3-117.1.8-11 6.5-16.3 16.1-16.3h70.9c5.5 0 10 4.5 10 10v115.2h83c5.5 0 10 4.4 10 9.9v81.7c0 5.5-4.5 10-10 10h-83.4V360c0 34.2 23.7 53.6 68 35.8 4.8-1.9 9-3.2 12.7-2.2 3.5.9 5.8 3.4 7.4 7.9l22 64.3c1.8 5 3.3 10.6-.4 14.5z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.social_links[6].handle"
                                                               placeholder="لینک تومبلر" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="1" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="1"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab" data-icon="vk"
                                                                     class="svg-inline--fa fa-vk fa-w-18 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 576 512" title="vk">
                                                                    <path fill="currentColor"
                                                                          d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.social_links[7].handle"
                                                               placeholder="لینک وی کا" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="1" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="1"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="linkedin-in"
                                                                     class="svg-inline--fa fa-linkedin-in fa-w-14 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 448 512" title="linkedin">
                                                                    <path fill="currentColor"
                                                                          d="M100.3 480H7.4V180.9h92.9V480zM53.8 140.1C24.1 140.1 0 115.5 0 85.8 0 56.1 24.1 32 53.8 32c29.7 0 53.8 24.1 53.8 53.8 0 29.7-24.1 54.3-53.8 54.3zM448 480h-92.7V334.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V480h-92.8V180.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V480z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.social_links[8].handle"
                                                               placeholder="لینکدین" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="1" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="1"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="snapchat-ghost"
                                                                     class="svg-inline--fa fa-snapchat-ghost fa-w-16 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 512 512" title="snapchat">
                                                                    <path fill="currentColor"
                                                                          d="M510.846 392.673c-5.211 12.157-27.239 21.089-67.36 27.318-2.064 2.786-3.775 14.686-6.507 23.956-1.625 5.566-5.623 8.869-12.128 8.869l-.297-.005c-9.395 0-19.203-4.323-38.852-4.323-26.521 0-35.662 6.043-56.254 20.588-21.832 15.438-42.771 28.764-74.027 27.399-31.646 2.334-58.025-16.908-72.871-27.404-20.714-14.643-29.828-20.582-56.241-20.582-18.864 0-30.736 4.72-38.852 4.72-8.073 0-11.213-4.922-12.422-9.04-2.703-9.189-4.404-21.263-6.523-24.13-20.679-3.209-67.31-11.344-68.498-32.15a10.627 10.627 0 0 1 8.877-11.069c69.583-11.455 100.924-82.901 102.227-85.934.074-.176.155-.344.237-.515 3.713-7.537 4.544-13.849 2.463-18.753-5.05-11.896-26.872-16.164-36.053-19.796-23.715-9.366-27.015-20.128-25.612-27.504 2.437-12.836 21.725-20.735 33.002-15.453 8.919 4.181 16.843 6.297 23.547 6.297 5.022 0 8.212-1.204 9.96-2.171-2.043-35.936-7.101-87.29 5.687-115.969C158.122 21.304 229.705 15.42 250.826 15.42c.944 0 9.141-.089 10.11-.089 52.148 0 102.254 26.78 126.723 81.643 12.777 28.65 7.749 79.792 5.695 116.009 1.582.872 4.357 1.942 8.599 2.139 6.397-.286 13.815-2.389 22.069-6.257 6.085-2.846 14.406-2.461 20.48.058l.029.01c9.476 3.385 15.439 10.215 15.589 17.87.184 9.747-8.522 18.165-25.878 25.018-2.118.835-4.694 1.655-7.434 2.525-9.797 3.106-24.6 7.805-28.616 17.271-2.079 4.904-1.256 11.211 2.46 18.748.087.168.166.342.239.515 1.301 3.03 32.615 74.46 102.23 85.934 6.427 1.058 11.163 7.877 7.725 15.859z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.social_links[9].handle"
                                                               placeholder="لینک اسنپ چت" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="action-sheet slidein-enter-done hide">
                <div class="table-align">
                    <div class="table-cell-bottom">
                        <div class="action-sheet-body">
                            <div class="action-sheet-header"><span class="clickable-icon right success" title="Done"><svg
                                        aria-hidden="true" data-prefix="far" data-icon="check"
                                        class="svg-inline--fa fa-check fa-w-16 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path
                                            fill="currentColor"
                                            d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z"></path></svg></span>
                                <div class="action-sheet-title">پیام رسان ها</div>
                            </div>
                            <div>
                                <div>
                                    <div>
                                        <div data-react-beautiful-dnd-draggable="2" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="2"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="whatsapp"
                                                                     class="svg-inline--fa fa-whatsapp fa-w-14 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 448 512" title="whatsapp">
                                                                    <path fill="currentColor"
                                                                          d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.messengers[0].handle"
                                                               placeholder="شماره واتساپ همراه با کد کشور (98+)"
                                                               type="text" class="form-control" value=""></div>
                                                    <textarea name="settings.messengers[0].text"
                                                              placeholder="پیامی که می خواهید بنویسید"
                                                              type="textarea"
                                                              class="input-stack-row form-control"></textarea></div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="2" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="2"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="facebook-messenger"
                                                                     class="svg-inline--fa fa-facebook-messenger fa-w-14 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 448 512" title="messenger">
                                                                    <path fill="currentColor"
                                                                          d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.messengers[1].handle"
                                                               placeholder="نام کاربری فیسبوک" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="2" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="2"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="telegram-plane"
                                                                     class="svg-inline--fa fa-telegram-plane fa-w-14 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 448 512" title="telegram">
                                                                    <path fill="currentColor"
                                                                          d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.messengers[2].handle"
                                                               placeholder="نام کاربری تلگرام" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="2" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="2"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="skype"
                                                                     class="svg-inline--fa fa-skype fa-w-14 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 448 512" title="skype">
                                                                    <path fill="currentColor"
                                                                          d="M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.messengers[3].handle"
                                                               placeholder="نام کاربری اسکایپ" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="2" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="2"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fab"
                                                                     data-icon="viber"
                                                                     class="svg-inline--fa fa-viber fa-w-16 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 512 512" title="viber">
                                                                    <path fill="currentColor"
                                                                          d="M444 49.9C431.3 38.2 379.9.9 265.3.4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9.4-85.7.4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9.4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9.6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4.7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5.9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9.1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7.5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1.8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.messengers[4].handle"
                                                               placeholder="نام کاربری وایبر" type="text"
                                                               class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="2" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="2"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="far"
                                                                     data-icon="envelope"
                                                                     class="svg-inline--fa fa-envelope fa-w-16 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 512 512" title="email">
                                                                    <path fill="currentColor"
                                                                          d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.messengers[5].handle"
                                                               placeholder="آدرس ایمیل" type="text"
                                                               class="form-control" value=""></div>
                                                    <input name="settings.messengers[5].subject" placeholder="موضوع:"
                                                           type="text" class="input-stack-row form-control"
                                                           value=""><textarea name="settings.messengers[5].body"
                                                                              placeholder="متن" type="textarea"
                                                                              class="input-stack-row form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-react-beautiful-dnd-draggable="2" style="user-select: none;">
                                            <div class="with-stack form-group">
                                                <div class="side-controls drag-handle" tabindex="0"
                                                     data-react-beautiful-dnd-drag-handle="2"
                                                     aria-roledescription="Draggable item. Press space bar to lift"
                                                     draggable="false">
                                                    <svg aria-hidden="true" data-prefix="fal" data-icon="bars"
                                                         class="svg-inline--fa fa-bars fa-w-14 " role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                              d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
                                                    </svg>
                                                </div>
                                                <div class="input-stack">
                                                    <div class="input-group input-stack-row">
                                                        <div class="input-group-prepend">
                                                            <button class="btn-outline-border btn btn-secondary">
                                                                <svg aria-hidden="true" data-prefix="fas"
                                                                     data-icon="phone"
                                                                     class="svg-inline--fa fa-phone fa-w-16 fa-network"
                                                                     role="img" xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 512 512" title="call">
                                                                    <path fill="currentColor"
                                                                          d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <input name="settings.messengers[6].handle"
                                                               placeholder="شماره تلفن همراه با کد شهر"
                                                               type="text" class="form-control" value=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="action-sheet slidein-enter-done-title hide">

                <div class="table-align">
                    <div class="table-cell-bottom">
                        <div class="action-sheet-body">
                            <div class="action-sheet-header"><span class="clickable-icon right success" title="Done"><svg
                                        aria-hidden="true" data-prefix="far" data-icon="check"
                                        class="svg-inline--fa fa-check fa-w-16 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path
                                            fill="currentColor"
                                            d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z"></path></svg></span>
                                <div class="action-sheet-title">عنوان و توضیحات</div>
                            </div>
                            <div>
                                <div>
                                    <div class="form-group"><input name="title" placeholder="عنوان" type="text"
                                                                   class="form-control" value="" autofocus="autofocus">
                                    </div>
                                    <div class="form-group"><textarea name="meta.description" placeholder="توضیحات"
                                                                      type="textarea" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="action-sheet slidein-enter-setting hide">
                <div class="table-align">
                    <div class="table-cell-bottom">
                        <div class="action-sheet-body">
                            <div class="action-sheet-header"><span class="clickable-icon right success" title="Done"><svg
                                        aria-hidden="true" data-prefix="far" data-icon="check"
                                        class="svg-inline--fa fa-check fa-w-16 " role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path
                                            fill="currentColor"
                                            d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z"></path></svg></span>
                                <div class="action-sheet-title">قالب</div>
                            </div>
                            <div>
                                <div>
                                    <div class="collapse-theme accordion-tab action-sheet-wrap">
                                        <div class="collapse-toggle" onclick="openTheme()">قالب
                                            <svg aria-hidden="true" data-prefix="fal" data-icon="chevron-right"
                                                 class="svg-inline--fa fa-chevron-right fa-w-8 " role="img"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                                <path fill="currentColor"
                                                      d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                            </svg>
                                        </div>
                                        <div class="action-sheet-wrap tab-content collapse">

                                            <span id="theme-1" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-2" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-3" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-4" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-5" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-1" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-6" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-7" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-8" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-9" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-1" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-10" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-11" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-12" class="theme-btn" onclick="change_style(this)"></span>
                                            <span id="theme-13" class="theme-btn" onclick="change_style(this)"></span>

                                        </div>
                                    </div>
                                    <div class="collapse">
                                        <div class="collapse-style accordion-tab action-sheet-wrap">
                                            <div class="collapse-toggle">Buttons Color
                                                <svg aria-hidden="true" data-prefix="fal" data-icon="chevron-right"
                                                     class="svg-inline--fa fa-chevron-right fa-w-8 " role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                                    <path fill="currentColor"
                                                          d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="action-sheet-wrap tab-content collapse">
                                                <div class="action-sheet-wrap nopadding">
                                                    <div class="colorpicker">
                                                        <ul style="transform: translateX(-9216px);">
                                                            <li class="" style="background-color: rgb(0, 0, 0);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(38, 38, 38);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(66, 66, 66);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(89, 89, 89);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(117, 112, 113);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(155, 155, 155);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(182, 182, 182);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(191, 189, 185);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(209, 209, 209);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(222, 222, 224);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(231, 231, 231);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 255, 255);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(30, 42, 120);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 46, 76);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 231, 32);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(73, 222, 178);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(111, 95, 94);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(254, 195, 151);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(210, 138, 124);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(109, 140, 142);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 71, 71);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(0, 188, 180);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(196, 232, 107);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 181, 71);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(182, 143, 162);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(88, 111, 119);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(172, 188, 177);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(51, 59, 62);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(139, 119, 109);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(70, 60, 82);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(157, 148, 186);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(209, 213, 232);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 206, 190);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(205, 44, 108);"></li>
                                                            <li class="" style="background-color: rgb(95, 2, 58);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(16, 130, 146);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(126, 195, 132);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(63, 135, 86);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(69, 98, 93);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(106, 165, 169);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(254, 243, 226);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(237, 207, 192);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(195, 211, 214);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(213, 219, 228);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(81, 73, 69);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(137, 66, 67);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(213, 92, 90);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(235, 212, 204);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(236, 235, 235);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(230, 229, 229);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(213, 208, 210);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(197, 190, 196);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 239, 56);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(247, 164, 26);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(39, 92, 122);"></li>
                                                            <li class="" style="background-color: rgb(0, 20, 70);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(153, 171, 185);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(179, 123, 86);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(61, 69, 92);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(96, 64, 43);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(171, 0, 104);"></li>
                                                            <li class="" style="background-color: rgb(224, 7, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 108, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(254, 193, 6);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(222, 164, 80);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(155, 70, 31);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(106, 29, 47);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(53, 76, 60);"></li>
                                                            <li class="" style="background-color: rgb(0, 27, 72);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(2, 69, 122);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(1, 138, 190);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(151, 202, 219);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(204, 171, 216);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(132, 116, 161);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(110, 198, 202);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(8, 151, 157);"></li>
                                                            <li class="" style="background-color: rgb(5, 91, 92);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(134, 227, 206);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(208, 230, 165);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 221, 148);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(250, 137, 123);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(217, 236, 242);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(245, 106, 121);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 65, 77);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(26, 166, 183);"></li>
                                                            <li class="" style="background-color: rgb(0, 45, 64);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(84, 192, 204);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(31, 79, 89);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(126, 160, 14);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(220, 217, 100);"></li>
                                                            <li class="" style="background-color: rgb(33, 53, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(226, 91, 69);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 131, 87);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(250, 193, 114);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(137, 213, 201);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(173, 200, 101);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(245, 206, 199);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(231, 151, 150);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 201, 139);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 178, 132);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(198, 192, 156);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(226, 71, 75);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(47, 58, 86);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(64, 109, 150);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(168, 208, 218);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(216, 232, 232);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(170, 201, 206);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(182, 180, 194);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(201, 187, 200);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(229, 193, 205);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(243, 219, 207);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(252, 245, 239);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(254, 167, 53);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(254, 114, 53);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(0, 195, 255);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(0, 119, 255);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(128, 190, 175);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(179, 221, 209);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(209, 220, 226);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(245, 185, 148);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(238, 156, 108);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(39, 37, 55);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(96, 105, 119);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(229, 216, 23);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(227, 191, 118);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(210, 169, 176);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(225, 192, 216);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(241, 207, 229);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(169, 165, 162);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(200, 198, 201);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(81, 52, 133);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(126, 90, 184);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(215, 156, 210);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(253, 213, 30);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(117, 139, 92);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(153, 153, 153);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(85, 85, 85);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(251, 102, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(246, 167, 5);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(175, 148, 143);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(35, 93, 58);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(57, 125, 84);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(115, 192, 136);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(168, 224, 183);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(200, 234, 209);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(71, 139, 162);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(222, 91, 109);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(233, 118, 91);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(242, 164, 144);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(185, 212, 219);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(117, 17, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(167, 47, 29);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(197, 82, 65);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(224, 116, 100);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(245, 158, 145);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(69, 80, 84);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(48, 134, 149);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(212, 87, 105);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(230, 157, 69);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(212, 207, 201);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(27, 39, 39);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(60, 81, 72);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(107, 142, 78);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(178, 197, 178);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(213, 221, 223);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(50, 30, 37);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(102, 56, 69);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(139, 78, 94);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(192, 99, 120);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(232, 148, 167);"></li>
                                                            <li class="" style="background-color: rgb(7, 88, 92);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(62, 144, 34);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(222, 7, 111);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(73, 21, 69);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(73, 21, 21);"></li>
                                                            <li class="" style="background-color: rgb(93, 13, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(166, 24, 4);"></li>
                                                            <li class="" style="background-color: rgb(252, 0, 0);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 70, 70);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 122, 122);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(93, 117, 153);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(171, 182, 200);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(218, 218, 218);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(247, 240, 198);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(194, 196, 182);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(126, 150, 128);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(121, 97, 111);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(174, 99, 120);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(216, 127, 129);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(234, 181, 149);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(234, 215, 186);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(159, 202, 163);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(231, 135, 100);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(225, 216, 57);"></li>
                                                            <li class="color-field"><input type="text"
                                                                                           placeholder="Hex Color"
                                                                                           value=""><span
                                                                    class="color-hex">#</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collapse-style accordion-tab action-sheet-wrap">
                                            <div class="collapse-toggle">Background
                                                <svg aria-hidden="true" data-prefix="fal" data-icon="chevron-right"
                                                     class="svg-inline--fa fa-chevron-right fa-w-8 " role="img"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                                    <path fill="currentColor"
                                                          d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="action-sheet-wrap tab-content collapse">
                                                <div class="action-sheet-wrap nopadding">
                                                    <div class="colorpicker">
                                                        <ul style="transform: translateX(-9216px);">
                                                            <li class="" style="background-color: rgb(0, 0, 0);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(38, 38, 38);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(66, 66, 66);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(89, 89, 89);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(117, 112, 113);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(155, 155, 155);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(182, 182, 182);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(191, 189, 185);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(209, 209, 209);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(222, 222, 224);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(231, 231, 231);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 255, 255);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(30, 42, 120);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 46, 76);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 231, 32);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(73, 222, 178);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(111, 95, 94);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(254, 195, 151);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(210, 138, 124);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(109, 140, 142);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 71, 71);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(0, 188, 180);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(196, 232, 107);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 181, 71);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(182, 143, 162);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(88, 111, 119);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(172, 188, 177);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(51, 59, 62);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(139, 119, 109);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(70, 60, 82);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(157, 148, 186);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(209, 213, 232);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 206, 190);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(205, 44, 108);"></li>
                                                            <li class="" style="background-color: rgb(95, 2, 58);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(16, 130, 146);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(126, 195, 132);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(63, 135, 86);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(69, 98, 93);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(106, 165, 169);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(254, 243, 226);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(237, 207, 192);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(195, 211, 214);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(213, 219, 228);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(81, 73, 69);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(137, 66, 67);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(213, 92, 90);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(235, 212, 204);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(236, 235, 235);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(230, 229, 229);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(213, 208, 210);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(197, 190, 196);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 239, 56);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(247, 164, 26);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(39, 92, 122);"></li>
                                                            <li class="" style="background-color: rgb(0, 20, 70);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(153, 171, 185);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(179, 123, 86);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(61, 69, 92);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(96, 64, 43);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(171, 0, 104);"></li>
                                                            <li class="" style="background-color: rgb(224, 7, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 108, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(254, 193, 6);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(222, 164, 80);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(155, 70, 31);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(106, 29, 47);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(53, 76, 60);"></li>
                                                            <li class="" style="background-color: rgb(0, 27, 72);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(2, 69, 122);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(1, 138, 190);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(151, 202, 219);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(204, 171, 216);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(132, 116, 161);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(110, 198, 202);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(8, 151, 157);"></li>
                                                            <li class="" style="background-color: rgb(5, 91, 92);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(134, 227, 206);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(208, 230, 165);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 221, 148);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(250, 137, 123);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(217, 236, 242);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(245, 106, 121);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 65, 77);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(26, 166, 183);"></li>
                                                            <li class="" style="background-color: rgb(0, 45, 64);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(84, 192, 204);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(31, 79, 89);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(126, 160, 14);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(220, 217, 100);"></li>
                                                            <li class="" style="background-color: rgb(33, 53, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(226, 91, 69);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 131, 87);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(250, 193, 114);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(137, 213, 201);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(173, 200, 101);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(245, 206, 199);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(231, 151, 150);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 201, 139);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 178, 132);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(198, 192, 156);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(226, 71, 75);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(47, 58, 86);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(64, 109, 150);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(168, 208, 218);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(216, 232, 232);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(170, 201, 206);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(182, 180, 194);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(201, 187, 200);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(229, 193, 205);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(243, 219, 207);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(252, 245, 239);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(254, 167, 53);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(254, 114, 53);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(0, 195, 255);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(0, 119, 255);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(128, 190, 175);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(179, 221, 209);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(209, 220, 226);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(245, 185, 148);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(238, 156, 108);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(39, 37, 55);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(96, 105, 119);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(229, 216, 23);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(227, 191, 118);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(210, 169, 176);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(225, 192, 216);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(241, 207, 229);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(169, 165, 162);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(200, 198, 201);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(81, 52, 133);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(126, 90, 184);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(215, 156, 210);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(253, 213, 30);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(117, 139, 92);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(153, 153, 153);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(85, 85, 85);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(251, 102, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(246, 167, 5);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(175, 148, 143);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(35, 93, 58);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(57, 125, 84);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(115, 192, 136);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(168, 224, 183);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(200, 234, 209);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(71, 139, 162);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(222, 91, 109);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(233, 118, 91);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(242, 164, 144);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(185, 212, 219);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(117, 17, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(167, 47, 29);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(197, 82, 65);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(224, 116, 100);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(245, 158, 145);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(69, 80, 84);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(48, 134, 149);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(212, 87, 105);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(230, 157, 69);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(212, 207, 201);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(27, 39, 39);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(60, 81, 72);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(107, 142, 78);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(178, 197, 178);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(213, 221, 223);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(50, 30, 37);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(102, 56, 69);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(139, 78, 94);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(192, 99, 120);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(232, 148, 167);"></li>
                                                            <li class="" style="background-color: rgb(7, 88, 92);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(62, 144, 34);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(222, 7, 111);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(73, 21, 69);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(73, 21, 21);"></li>
                                                            <li class="" style="background-color: rgb(93, 13, 2);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(166, 24, 4);"></li>
                                                            <li class="" style="background-color: rgb(252, 0, 0);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 70, 70);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(255, 122, 122);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(93, 117, 153);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(171, 182, 200);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(218, 218, 218);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(247, 240, 198);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(194, 196, 182);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(126, 150, 128);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(121, 97, 111);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(174, 99, 120);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(216, 127, 129);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(234, 181, 149);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(234, 215, 186);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(159, 202, 163);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(231, 135, 100);"></li>
                                                            <li class=""
                                                                style="background-color: rgb(225, 216, 57);"></li>
                                                            <li class="color-field"><input type="text"
                                                                                           placeholder="Hex Color"
                                                                                           value=""><span
                                                                    class="color-hex">#</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-link">Tap here for color
                                                        gradient
                                                    </button>
                                                </div>
                                                <div class="text-center"><span>- or -</span>
                                                    <div class="background-image-btn">
                                                        <span>Upload Background Image</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{--            <div class="powered-by-shorby">--}}
            {{--                <span><span class="shorby-logo">SHORBY</span></span>--}}
            {{--            </div>--}}

            <div class="action-bar-container">
                <div class="action-bar dirty">
                    <div class="s-logo"></div>
                    <div class="slug-input form-control"><span class="shorby-link"><a href="https://shor.by/aAAE"
                                                                                      data-shadow="shor.by/aAAE"
                                                                                      title="https://shor.by/aAAE"
                                                                                      target="_blank">shor.by/aAAE</a><span
                                class="show-on-hover clickable-icon link-copy-icon">&nbsp;&nbsp;<svg aria-hidden="true"
                                                                                                     focusable="false"
                                                                                                     data-prefix="fal"
                                                                                                     data-icon="clone"
                                                                                                     class="svg-inline--fa fa-clone fa-w-16 "
                                                                                                     role="img"
                                                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                                                     viewBox="0 0 512 512"><path
                                        fill="currentColor"
                                        d="M464 0H144c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h320c26.51 0 48-21.49 48-48v-48h48c26.51 0 48-21.49 48-48V48c0-26.51-21.49-48-48-48zm-80 464c0 8.82-7.18 16-16 16H48c-8.82 0-16-7.18-16-16V144c0-8.82 7.18-16 16-16h48v240c0 26.51 21.49 48 48 48h240v48zm96-96c0 8.82-7.18 16-16 16H144c-8.82 0-16-7.18-16-16V48c0-8.82 7.18-16 16-16h320c8.82 0 16 7.18 16 16v320z"></path></svg></span></span>
                    </div>
                    <button id="edit_page" data-id="{{$page->id}}"  type="button" class="btn btn-primary">
                        <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-right"
                             class="svg-inline--fa fa-arrow-right fa-w-14 " role="img"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor"
                                  d="M216.464 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L387.887 239H12c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h375.887L209.393 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L233.434 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                        </svg>
                        <span>ویرایش</span></button>
                </div>
            </div>

        </form>
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
<script src="//static.filestackapi.com/filestack-js/3.x.x/filestack.min.js"></script>
<script type="text/javascript" src="{{url('/smartpage/js/bootstrap-iconpicker.min.js')}}"></script>
<script type="text/javascript" src="{{url('/smartpage/js/redux.js')}}"></script>
<script type="text/javascript" src="{{url('/smartpage/js/app.js')}}"></script>
{{--<script type="text/javascript" src="{{url('/smartpage/js/main.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{url('/js/root.js')}}"></script>--}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $(document).ready(function () {

        let url = "http://" + window.location.host;
        jQuery.ajax({
            url: url + '/smartpage/ajax/edit/{{$page->id}}',
            method: 'get',
            data: {
                html: "html",
            },
            success: function (result) {
                update_data_state(result);



            }
        });


    });
</script>

</body>


</html>
