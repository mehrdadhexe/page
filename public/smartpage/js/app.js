$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});
let icon = [
    {
        line: 'M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z',
        name: 'whatsapp'
    },
    {
        line: 'M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z',
        name: 'facebook'
    }
    ,
    {
        line: 'M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z',
        name: 'instagram'
    }
    ,
    {
        line: 'M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z',
        name: 'instagram'
    }
    ,
    {
        line: 'M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z',
        name: 'twitter'
    }
    ,
    {
        line: 'M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z',
        name: 'youtube'
    }
    ,
    {
        line: 'M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z',
        name: 'pinterest'
    }
    , {
        line: 'M512 194.8c0 101.3-82.4 183.8-183.8 183.8-101.7 0-184.4-82.4-184.4-183.8 0-101.6 82.7-184.3 184.4-184.3C429.6 10.5 512 93.2 512 194.8zM0 501.5h90v-491H0v491z',
        name: 'patreon'
    }
    , {
        line: 'M309.8 480.3c-13.6 14.5-50 31.7-97.4 31.7-120.8 0-147-88.8-147-140.6v-144H17.9c-5.5 0-10-4.5-10-10v-68c0-7.2 4.5-13.6 11.3-16 62-21.8 81.5-76 84.3-117.1.8-11 6.5-16.3 16.1-16.3h70.9c5.5 0 10 4.5 10 10v115.2h83c5.5 0 10 4.4 10 9.9v81.7c0 5.5-4.5 10-10 10h-83.4V360c0 34.2 23.7 53.6 68 35.8 4.8-1.9 9-3.2 12.7-2.2 3.5.9 5.8 3.4 7.4 7.9l22 64.3c1.8 5 3.3 10.6-.4 14.5z',
        name: 'tumblr'
    }
    , {
        line: 'M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z',
        name: 'vk'
    }
    , {
        line: 'M100.3 480H7.4V180.9h92.9V480zM53.8 140.1C24.1 140.1 0 115.5 0 85.8 0 56.1 24.1 32 53.8 32c29.7 0 53.8 24.1 53.8 53.8 0 29.7-24.1 54.3-53.8 54.3zM448 480h-92.7V334.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V480h-92.8V180.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V480z',
        name: 'linkedin'
    }
    , {
        line: 'M510.846 392.673c-5.211 12.157-27.239 21.089-67.36 27.318-2.064 2.786-3.775 14.686-6.507 23.956-1.625 5.566-5.623 8.869-12.128 8.869l-.297-.005c-9.395 0-19.203-4.323-38.852-4.323-26.521 0-35.662 6.043-56.254 20.588-21.832 15.438-42.771 28.764-74.027 27.399-31.646 2.334-58.025-16.908-72.871-27.404-20.714-14.643-29.828-20.582-56.241-20.582-18.864 0-30.736 4.72-38.852 4.72-8.073 0-11.213-4.922-12.422-9.04-2.703-9.189-4.404-21.263-6.523-24.13-20.679-3.209-67.31-11.344-68.498-32.15a10.627 10.627 0 0 1 8.877-11.069c69.583-11.455 100.924-82.901 102.227-85.934.074-.176.155-.344.237-.515 3.713-7.537 4.544-13.849 2.463-18.753-5.05-11.896-26.872-16.164-36.053-19.796-23.715-9.366-27.015-20.128-25.612-27.504 2.437-12.836 21.725-20.735 33.002-15.453 8.919 4.181 16.843 6.297 23.547 6.297 5.022 0 8.212-1.204 9.96-2.171-2.043-35.936-7.101-87.29 5.687-115.969C158.122 21.304 229.705 15.42 250.826 15.42c.944 0 9.141-.089 10.11-.089 52.148 0 102.254 26.78 126.723 81.643 12.777 28.65 7.749 79.792 5.695 116.009 1.582.872 4.357 1.942 8.599 2.139 6.397-.286 13.815-2.389 22.069-6.257 6.085-2.846 14.406-2.461 20.48.058l.029.01c9.476 3.385 15.439 10.215 15.589 17.87.184 9.747-8.522 18.165-25.878 25.018-2.118.835-4.694 1.655-7.434 2.525-9.797 3.106-24.6 7.805-28.616 17.271-2.079 4.904-1.256 11.211 2.46 18.748.087.168.166.342.239.515 1.301 3.03 32.615 74.46 102.23 85.934 6.427 1.058 11.163 7.877 7.725 15.859z',
        name: 'snapchat'
    }
    , {
        line: 'M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z',
        name: 'telegram'
    }
    , {
        line: 'M424.7 299.8c2.9-14 4.7-28.9 4.7-43.8 0-113.5-91.9-205.3-205.3-205.3-14.9 0-29.7 1.7-43.8 4.7C161.3 40.7 137.7 32 112 32 50.2 32 0 82.2 0 144c0 25.7 8.7 49.3 23.3 68.2-2.9 14-4.7 28.9-4.7 43.8 0 113.5 91.9 205.3 205.3 205.3 14.9 0 29.7-1.7 43.8-4.7 19 14.6 42.6 23.3 68.2 23.3 61.8 0 112-50.2 112-112 .1-25.6-8.6-49.2-23.2-68.1zm-194.6 91.5c-65.6 0-120.5-29.2-120.5-65 0-16 9-30.6 29.5-30.6 31.2 0 34.1 44.9 88.1 44.9 25.7 0 42.3-11.4 42.3-26.3 0-18.7-16-21.6-42-28-62.5-15.4-117.8-22-117.8-87.2 0-59.2 58.6-81.1 109.1-81.1 55.1 0 110.8 21.9 110.8 55.4 0 16.9-11.4 31.8-30.3 31.8-28.3 0-29.2-33.5-75-33.5-25.7 0-42 7-42 22.5 0 19.8 20.8 21.8 69.1 33 41.4 9.3 90.7 26.8 90.7 77.6 0 59.1-57.1 86.5-112 86.5z',
        name: 'skype'
    }
    , {
        line: 'M444 49.9C431.3 38.2 379.9.9 265.3.4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9.4-85.7.4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9.4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9.6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4.7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5.9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9.1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7.5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1.8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z',
        name: 'viber'
    }
    , {
        line: 'M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z',
        name: 'envelope'
    }
    ,
    {
        line: 'M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z',
        name: 'phone'
    }
]

let theme = [
    {name: 'theme-0', color: '#FFF'},
    {name: 'theme-1', color: 'linear-gradient(225deg, #E1C0D8 0%, #F1CFE5 100%)'},
    {name: 'theme-2', color: 'linear-gradient(225deg, #FDB3CA 0%, #5C6898 100%)'},
    {name: 'theme-3', color: 'linear-gradient(225deg, #1F2F98 0%, #4ADEDE 100%)'},
    {name: 'theme-4', color: 'linear-gradient(225deg, #706695 0%, #4D446F 100%)'},
    {name: 'theme-5', color: 'linear-gradient(225deg, #93A8B0 0%, #C6D6B0 100%)'},
    {name: 'theme-6', color: 'linear-gradient(225deg, #43045F 0%, #C63264 100%)'},
    {name: 'theme-7', color: 'linear-gradient(225deg, #CAA679 0%, #AB7948 100%)'},
    {name: 'theme-8', color: 'linear-gradient(225deg, #F4841A 0%, #004C56 100%)'},
    {name: 'theme-9', color: 'linear-gradient(225deg, #3F8756 0%, #7EC384 100%)'},
    {name: 'theme-10', color: 'linear-gradient(225deg, #A8D0DA 0%, #E2474C 100%)'},
    {name: 'theme-11', color: 'linear-gradient(225deg, #F0F0E5 0%, #454544 100%)'},
    {name: 'theme-12', color: 'linear-gradient(225deg, #5886AF 0%, #EAC77D 100%)'},
    {name: 'theme-13', color: 'linear-gradient(225deg, #212730 0%, #01ACB4 100%)'},
]
let themeId ="theme-0";


$('#save_page').click(function () {
    let get_theme = theme.filter(themes => themes.name == themeId)
    $('body').css({
        background: get_theme[0].color
    });

    $('.layout-button').css({
        background: get_theme[0].color+'!important'
    });
    let url = "http://" + window.location.host;
    let html =$('.smartpage-container').html();
    jQuery.ajax({
        url: url+'/smartpage/save',
        method: 'post',
        data: {
            html: html,
            theme: get_theme[0].color,
        },
        success: function(result){
            window.location.href = url+'/smartpage/'+result;
        }});
});







function get_icon(icon_str) {
    return icon.filter(icon => icon.name == icon_str)[0];
}

let initObject = {
    social: {},
    messengers: {},
    title: {title: "name", description: "description"},
    block: {id: 0},
    setting: {},
    form: "",
}
///////
const updateObjectReducer = (state = initObject, actions) => {

    let {social = {}, messengers = {}, title = {}, block = {}, setting = {}} = actions;
    switch (actions.type) {
        case 'UPDATE_SOCIAL':
            return {...state, form: "social", social: {...social}}
        case 'UPDATE_MESSENGERS':
            return {...state, form: "messengers", messengers: {...messengers}}
        case 'UPDATE_TITLE':
            return {...state, form: "title", title: {...title}}
        case 'UPDATE_BLOCK':
            return {...state, form: "block_update", block: {...block}}
        case 'ADD_BLOCK':
            return {form: "block", block: {id: parseInt(state.block.id) + 1, ...block}}
        case 'REMOVE_BLOCK':
            return {...state, form: "block_remove", block: {...block}}
        case 'UPDATE_SETTING':
            return {...state, form: "setting", block: {...setting}}
        default:
            return state;
    }

};
//////////////////////////// دیتابیس
const ObjectStore = Redux.createStore(updateObjectReducer);

///لیستنر////////////////////////////
ObjectStore.subscribe(() => {
    let {block, messengers, title, form, social} = ObjectStore.getState();
    if (form === "block")
        form_block(block)
    else if (form === "block_remove")
        block_remove(block)
    else if (form === "title")
        form_title(title)
    else if (form === "messengers")
        form_messengers(messengers)
    else if (form === "social")
        form_social(social)
    else if (form === "block_update")
        block_update(block)

});


//////////////////events
//عنوان
$('input[name ="title"]').on('input', e => {
    let description = $('textarea[name ="meta.description"]').val()
    ObjectStore.dispatch({type: 'UPDATE_TITLE', title: {title: e.target.value, description: description}});
});

$('textarea[name ="meta.description"]').on('input', e => {
    let title = $('input[name ="title"]').val()
    ObjectStore.dispatch({type: 'UPDATE_TITLE', title: {description: e.target.value, title: title}});

});
//پیام رسان ها

$('.slidein-enter-done textarea').on('input', e => {

    let watsapp_number = $('input[name ="settings.messengers[0].handle"]').val();
    let watsapp_text = $('textarea[name ="settings.messengers[0].text"]').val();

    let facebook_number = $('input[name ="settings.messengers[1].handle"]').val();
    let telegram_number = $('input[name ="settings.messengers[2].handle"]').val();
    let skype_id = $('input[name ="settings.messengers[3].handle"]').val();
    let viber_id = $('input[name ="settings.messengers[4].handle"]').val();
    let email = $('input[name ="settings.messengers[5].handle"]').val();
    let email_subject = $('input[name ="settings.messengers[5].subject"]').val();
    let email_body = $('textarea[name ="settings.messengers[5].body"]').val();
    let number = $('input[name ="settings.messengers[6].handle"]').val();
    let messengers = {
        watsapp_number: {name: 'whatsapp', watsapp_number: watsapp_number, watsapp_text: watsapp_text},
        facebook_number: {name: 'facebook', facebook_number: facebook_number},
        telegram_number: {name: 'telegram', telegram_number: telegram_number},
        skype_id: {name: 'skype', skype_id: skype_id},
        viber_id: {name: 'viber', viber_id: viber_id},
        email: {name: 'envelope', email: email, email_subject: email_subject, email_body: email_body},
        number: {name: 'phone', number: number},
    };
    ObjectStore.dispatch({type: 'UPDATE_MESSENGERS', messengers: messengers});
});
$('.slidein-enter-done input').on('input', e => {

    let watsapp_number = $('input[name ="settings.messengers[0].handle"]').val();
    let watsapp_text = $('textarea[name ="settings.messengers[0].text"]').val();

    let facebook_number = $('input[name ="settings.messengers[1].handle"]').val();
    let telegram_number = $('input[name ="settings.messengers[2].handle"]').val();
    let skype_id = $('input[name ="settings.messengers[3].handle"]').val();
    let viber_id = $('input[name ="settings.messengers[4].handle"]').val();
    let email = $('input[name ="settings.messengers[5].handle"]').val();
    let email_subject = $('input[name ="settings.messengers[5].subject"]').val();
    let email_body = $('textarea[name ="settings.messengers[5].body"]').val();
    let number = $('input[name ="settings.messengers[6].handle"]').val();
    let messengers = {
        watsapp_number: {name: 'whatsapp', watsapp_number: watsapp_number, watsapp_text: watsapp_text},
        facebook_number: {name: 'facebook', facebook_number: facebook_number},
        telegram_number: {name: 'telegram', telegram_number: telegram_number},
        skype_id: {name: 'skype', skype_id: skype_id},
        viber_id: {name: 'viber', viber_id: viber_id},
        email: {name: 'envelope', email: email, email_subject: email_subject, email_body: email_body},
        number: {name: 'phone', number: number},
    };
    ObjectStore.dispatch({type: 'UPDATE_MESSENGERS', messengers: messengers});
});
//شبکه های اجتماعی
$('.slidein-enter-social input').on('input', e => {

    let facebook_link = $('input[name ="settings.social_links[0].handle"]').val();
    let instagram_link = $('input[name ="settings.social_links[1].handle"]').val();
    let twitter_link = $('input[name ="settings.social_links[2].handle"]').val();
    let youtube_link = $('input[name ="settings.social_links[3].handle"]').val();
    let pinterest_link = $('input[name ="settings.social_links[4].handle"]').val();
    let patreon_link = $('input[name ="settings.social_links[5].handle"]').val();
    let tumblr_link = $('input[name ="settings.social_links[6].handle"]').val();
    let vk_link = $('input[name ="settings.social_links[7].handle"]').val();
    let linkedin_link = $('input[name ="settings.social_links[8].handle"]').val();
    let snapchat_link = $('input[name ="settings.social_links[9].handle"]').val();
    let social = {
        facebook: facebook_link,
        instagram: instagram_link,
        twitter: twitter_link,
        youtube: youtube_link,
        pinterest: pinterest_link,
        patreon: patreon_link,
        tumblr: tumblr_link,
        vk: vk_link,
        linkedin: linkedin_link,
        snapchat: snapchat_link
    }
    ObjectStore.dispatch({type: 'UPDATE_SOCIAL', social: social});

});
//انتخاب استایل
$('.layout-selector span').on('click', e => {
    let style_arr = $('.layout-selector').children();
    $.each(style_arr, function (key, value) {

        $(value).attr('class', '');

    });
    $(e.target).parents('span').attr('class', 'selected');
    event_block();
});
//شبکه های بلاک
$('.slidein-enter-block input').on('input', e => {
    event_block();
});

$('.action-sheet-header .clickable-icon').click(function () {

    var form = $(this).parents('.action-sheet');
    form.toggleClass('hide');
    var is_form_social = form.hasClass('slidein-enter-social');
    var is_form_messengers = form.hasClass('slidein-enter-done');
    var is_form_title = form.hasClass('slidein-enter-done-title');
    var is_form_setting = form.hasClass('slidein-enter-setting');
    var is_form_block = form.hasClass('slidein-enter-block');

    // if(is_form_social)
    //     form_social(form)
    // else if(is_form_messengers)
    //     form_messengers(form)
    // else if(is_form_title)
    //     form_title(form)
    // else if(is_form_setting)
    //     form_setting(form)
    // else if(is_form_block)
    //     form_block(form)

});
$('.add_title_bt').click(function () {

    $('.slidein-enter-done-title').toggleClass('hide');
});
$('.add_social_bt').click(function () {
    $('.slidein-enter-social').toggleClass('hide');
});
$('.add-block-block').click(function () {
    $('.slidein-enter-block').toggleClass('hide');
});

$('.add-block-block-item').click(function () {
    add_block_item()
});
$('.delete-button').click(function () {
    $('.avatar').html(' ' +
        '                                    <svg aria-hidden="true" data-prefix="fal" data-icon="camera"\n' +
        '                                         class="svg-inline--fa fa-camera fa-w-16 fa-camera" role="img"\n' +
        '                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">\n' +
        '                                        <path fill="currentColor"\n' +
        '                                              d="M324.3 64c3.3 0 6.3 2.1 7.5 5.2l22.1 58.8H464c8.8 0 16 7.2 16 16v288c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h110.2l20.1-53.6c2.3-6.2 8.3-10.4 15-10.4h131m0-32h-131c-20 0-37.9 12.4-44.9 31.1L136 96H48c-26.5 0-48 21.5-48 48v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48h-88l-14.3-38c-5.8-15.7-20.7-26-37.4-26zM256 408c-66.2 0-120-53.8-120-120s53.8-120 120-120 120 53.8 120 120-53.8 120-120 120zm0-208c-48.5 0-88 39.5-88 88s39.5 88 88 88 88-39.5 88-88-39.5-88-88-88z"></path>\n' +
        '                                    </svg>\n');

    $('.avatar').attr('style','')

});
$('.avatar').click(function () {
    const client = filestack.init("AgQ6nGarbRiahCl9BppTWz");
   // handle
    //https://cdn.filestackcontent.com/AFrHW1QRsWxmu5ZLU2qg"
    const options = {
        onUploadDone: file => {
            $('.avatar').attr('style','background-image: url("'+file.filesUploaded[0].url+'");')
            $('.avatar').html('');
        }
    };

    client.picker(options).open();
});

$('.add_messengers_bt').click(function () {
    $('.slidein-enter-done').toggleClass('hide');
});

$('.add_setting_bt').click(function () {
    $('.slidein-enter-setting').toggleClass('hide');
});

let add_block = e => {
    let id = $(e).attr('id-data');
    $('input[name ="settings.blocks[0].id"]').val(id);
    $('.slidein-enter-block').toggleClass('hide');
}
let change_style = e => {

    themeId = $(e).attr('id');
    let get_theme = theme.filter(themes => themes.name == themeId)
    $('body').css({
        background: get_theme[0].color
    });

    $('.layout-button').css({
        background: get_theme[0].color+'!important'
    });

}
let add_block_item = () => {
    ObjectStore.dispatch({type: 'ADD_BLOCK', block: {url: '#', name: 'نام بلوک'}});
}
let remove_block_item = e => {
    let id = $('input[name ="settings.blocks[0].id"]').val();
    event_block()

    let block = {
        id: id
    }
    ObjectStore.dispatch({type: 'REMOVE_BLOCK', block: block});

}
let show_messengers = () => {
    $('.slidein-enter-done').toggleClass('hide');
}

let show_social = () => {
    $('.slidein-enter-social').toggleClass('hide');
}

function open_f(event) {
    console.log(event.target)
    // $(class_name).toggleClass('hide');
}

//
function form_social(data) {
    let data_arr = [];


    Object.keys(data).map(function (key) {
        data_arr.push({key: key, value: data[key]})

    });


    let filter = data_arr.filter((item) => item.value != "")
    console.log(filter);
    $('.social-links').html("");
    filter.map(i => {

        let item = ' <div class="social-item">\n' +
            '                    <span data-link="'+i.value+'"  data-name="'+i.key+'"  onclick="show_social(this)">\n' +
            '\n' +
            '                        <svg aria-labelledby="svg-inline--fa-title-MmIEGOTHdXWU"\n' +
            '                                                    data-prefix="fab" data-icon="' + i.key + '"\n' +
            '                                                    class="svg-inline--fa fa-' + i.key + ' fa-w-14 fa-network" role="img"\n' +
            '                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">\n' +
            '\n' +
            '                            <title\n' +
            '                                id="svg-inline--fa-title-MmIEGOTHdXWU">' + i.key + '</title>\n' +
            '\n' +
            '                            <path fill="currentColor" d="' + get_icon(i.key).line + '"></path>\n' +
            '\n' +
            '                        </svg>\n' +
            '\n' +
            '                    </span>\n' +
            '                </div>';


        $('.social-links').append(item)
    });


}

function show_svg(line) {
    return '<svg aria-labelledby="svg-inline--fa-title-KoYZcqoCTJn0" data-prefix="fab" data-icon="whatsapp" class="svg-inline--fa fa-whatsapp fa-w-14 fa-network" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><title id="svg-inline--fa-title-KoYZcqoCTJn0">whatsapp</title><path fill="currentColor" d="' + line + '"></path></svg>';
}

function form_messengers(data) {
    let count = 0;
    let is_data = false;

    let html = "";
    $.each(data, function (index, value) {

        if (value.name == 'whatsapp') {
            if (value.watsapp_number != "") {
                is_data = true;
                count = count + 1;
                html = html + '<div class="links-block" data-watsapp_text="'+value.watsapp_text+'"  data-name="'+value.name+'" data-number="'+value.watsapp_number+'" onclick="show_messengers(this)"><div class="block-item layout-button"><span> ' + show_svg(get_icon(value.name).line) + ' <span></span></span></div></div>';
            }

        } else if (value.name == 'facebook') {
            if (value.facebook_number != "") {
                is_data = true;
                count = count + 1;
                html = html + '<div class="links-block" data-facebook_number="'+value.facebook_number+'" data-name="'+value.name+'" onclick="show_messengers(this)"><div class="block-item layout-button"><span data=".slidein-enter-done" onclick="open_f(event)">' + show_svg(get_icon(value.name).line) + '<span></span></span></div></div>';

            }

        } else if (value.name == 'telegram') {
            if (value.telegram_number != "") {
                is_data = true;
                count = count + 1;
                html = html + '<div class="links-block" data-telegram_number="'+value.telegram_number+'" data-name="'+value.name+'" onclick="show_messengers(this)"><div class="block-item layout-button"><span>' + show_svg(get_icon(value.name).line) + '<span></span></span></div></div>';

            }
        } else if (value.name == 'skype') {
            if (value.skype_id != "") {
                is_data = true;
                count = count + 1;
                html = html + '<div class="links-block" data-skype_id="'+value.skype_id+'" data-name="'+value.name+'"  onclick="show_messengers(this)"><div class="block-item layout-button"><span>' + show_svg(get_icon(value.name).line) + '<span></span></span></div></div>';

            }
        } else if (value.name == 'viber') {
            if (value.viber_id != "") {
                is_data = true;
                count = count + 1;
                html = html + '<div class="links-block" data-viber_id="'+value.viber_id+'"  data-name="'+value.name+'" onclick="show_messengers(this)"><div class="block-item layout-button"><span class="add_messengers_bt">' + show_svg(get_icon(value.name).line) + '<span></span></span></div></div>';
            }
        } else if (value.name == 'envelope') {
            if (value.email != "") {
                is_data = true;
                count = count + 1;
                html = html + '<div class="links-block" data-email_subject="'+value.email_subject+'" data-email_body="'+value.email_body+'" data-email="'+value.email+'" data-name="'+value.name+'" onclick="show_messengers(this)"><div class="block-item layout-button"><span>' + show_svg(get_icon(value.name).line) + '<span></span></span></div></div>';
            }
        } else if (value.name == 'phone') {
            if (value.number != "") {
                is_data = true;
                count = count + 1;
                html = html + '<div class="links-block" data-number="'+value.number+'" data-name="'+value.name+'" onclick="show_messengers(this)"><div class="block-item layout-button"><span>' + show_svg(get_icon(value.name).line) + '<span></span></span></div></div>';

            }
        }
    })

    $('.messengers_items').attr('class', 'blocks-num-' + count + ' messengers messengers_items');
    $('.messengers_items').html(html);
    if (is_data)
        $('.add_messengers_bt').parents('.add-block-button').hide();
    else
        $('.add_messengers_bt').parents('.add-block-button').show();

}

function openTheme() {
    $('.collapse-theme').toggleClass('opened');
    $('.action-sheet-wrap').toggleClass('show');
}

function event_block() {

    let style_arr = $('.layout-selector').children();
    let style = 'text';
    $.each(style_arr, function (key, value) {
        if ($(value).attr('class') == 'selected')
            style = $(value).attr('title');

    });


    let url = $('input[name ="settings.blocks[0].url"]').val();
    let title = $('input[name ="settings.blocks[0].title"]').val();
    let id = $('input[name ="settings.blocks[0].id"]').val();

    let block = {
        id: id,
        url: url,
        title: title,
        style: style
    }
    ObjectStore.dispatch({type: 'UPDATE_BLOCK', block: block});

}

function form_title() {
    let {title} = ObjectStore.getState();
    $('.bio-title').html('<h1 class="">' + title.title + '</h1><div class="bio-description"><p>' + title.description + '</p></div>');
}

function form_block(block) {
    let html = '<div id="block_' + block.id + '" data-url="'+block.url+'" data-title="'+block.title+'" class="block-item layout-button" id-data="' + block.id + '" onclick="add_block(this)"><span><span>' + block.name + '</span></span></div>';
    $('.block_warp').append(html);
}

let block_update = (block) => {

    let html = '<span><span>' + block.title + '</span></span>';

    $('#block_' + parseInt(block.id)).attr('data-title',block.title);
    $('#block_' + parseInt(block.id)).attr('data-url',block.url);

    $('#block_' + parseInt(block.id)).html(html);
    $('.block-preview span span').html(block.title);

}
let block_remove = (block) => {


    $('#block_' + parseInt(block.id)).remove();

}
// <h1 class="">klkl</h1><div class="bio-description"><p>p[[k;lk;lk;lk;lkllllk</p></div>

