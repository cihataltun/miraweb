<!DOCTYPE html>
<html lang="TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="DGTLFACE IT TEAM">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon  -->
    <!-- Analystic  -->
    <meta name="facebook-domain-verification" content="mvq6hdc13l7j698g2wjnddeqirfpjk" />
    <meta name="yandex-verification" content="592b184402c32d7d" />
    <!-- Analystic End -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
    <!-- Page Title -->
    <title>@yield('title', 'Miramare Hotels - Official Website')</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/swiper-bundle.min.css') }}"/>
    <!-- Montserrat, Lora Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.8.1/css/all.css' integrity='sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf' crossorigin='anonymous' >
     <!-- Poppins Font -->
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    @yield('css-imports')

    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/lc_lightbox.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/floating-menu.css') }}"/>
    {{-- Common CSS File --}}
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/common.css') }}"/>  
    
    <!-- Additional imports -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/blog.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/contact.css') }}"/>  


    <!-- KVKK Cookies -->
    <script src="{{ asset('assets/frontend/js/glowCookies.min.js') }}"></script>
    <script>
        glowCookies.start('tr', { 
            style: 1,
            analytics: 'G-FH87DE17XF', 
            facebookPixel: '990955817632355',
            hideAfterClick: true,
            position: 'right',
            policyLink: 'https://portnature.com.tr/kvkk'
        });
    </script>

    <!-- Google Analitcs -->

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-TZ53DS5');</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6EYM72GR61"></script>    
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-6EYM72GR61'); </script>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZ53DS5" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <amp-analytics type="gtag" data-credentials="include"> <script type="application/json"> { "vars": { "gtag_id": "AW-825307003", "config": { "AW-825307003": { "groups": "default" } } }, "triggers": { } } </script>
    </amp-analytics>
    
    <!-- Google Analitcs End-->
    <style>
        @media screen and (max-width: 1200px){
            .fixedBookNow{
                font-size: 14px!important
            }
        }
    </style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZ53DS5" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

    @include('frontend.tr.layouts.header')

    @yield('content')

    @include('frontend.tr.layouts.footer')


<!--  JAVASCRIPTS  -->
<script src="{{ asset('assets/frontend/libs/js/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/frontend/libs/js/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/common.js') }}"></script>

@yield('javascript-imports')

<script src="https://kit.fontawesome.com/b92afeff9d.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/frontend/js/floating-menu.js') }}"></script>


<script type='text/javascript'>
    

    // Form submission handler
    document.getElementById("contactForm2").addEventListener("submit", function(event) {
        // Check if all required fields are filled out
        var name = document.forms["contactForm"]["name"].value;
        var email = document.forms["contactForm"]["email"].value;
        var message = document.forms["contactForm"]["message"].value;
        if (name == "" || email == "" || message == "") {
            // Display alert message if any required fields are empty
            event.preventDefault(); // Prevent form from submitting
            document.getElementById("alert").classList.remove("d-none");
        }
    });

</script>

<!-- ChatBox Script  -->
<script>
    (function() {
        var APP_UUID = '6f018acb-a187-48be-a07e-a301d318af36';
        var BASE_COLOR = '#075695';
        var CONTAINER_ELEMENT = 'iframe';
    
        var process = void 0;
        var _typeofThat = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(o) {
            return typeof o
        } : function(o) {
            return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o
        };
    
        function insertLivechatJS() {
            var e = document.createElement("script");
            e.type = "text/javascript", e.async = "true", e.src = (process && process.env && process.env.DOMAIN || "https://livechat.connexease.com") + "/l/embed-js/livechat.js";
            var t = document.createElement("link");
            t.rel = "stylesheet", t.href = (process && process.env && process.env.DOMAIN || "https://portnature.com.tr") + "/assets/frontend/css/chatbox.css";
            var n = document.getElementsByTagName("script")[0];
            document.head.appendChild(t), n.parentNode.insertBefore(e, n)
        }
        window.attachEvent ? window.attachEvent("onload", insertLivechatJS) : window.addEventListener("load", insertLivechatJS, !1), window.initLivechat = function() {
            "object" === _typeofThat(window.LiveChat) && window.LiveChat.boot({
                uuid: APP_UUID,
                baseColor: BASE_COLOR,
                containerElement: CONTAINER_ELEMENT
            })
        };
    })();
</script>
<!-- ChatBox Script END -->


</body>
</html>