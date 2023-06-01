<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="DGTLFACE IT TEAM">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('assets/frontend/images/url-icon.webp') }}" sizes="192x192">
	<!-- Importing Styles -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/contact-section.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/miramare-beach-and-queen.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/heroWithBooking.css') }}">
	<!-- Bootstrap Styles -->
	<link rel='stylesheet' href='{{ asset('assets/admin/css/bootstrap.min.css') }}'>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Swiper.js Styles -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/swiper-bundle.min.css') }}">
	<!-- FlatPickr Styles-->
	<link rel="stylesheet" href="{{ asset('assets/frontend/libs/css/flatpickr.min.css') }}">
	<!-- Magnific Popup Styles-->
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/common.css') }}">


    @yield('css-imports')


    <!-- KVKK Cookies -->
    <script src="{{ asset('assets/frontend/js/glowCookies.min.js') }}"></script>
    <script>
        glowCookies.start('en', { 
            style: 1,
            analytics: 'G-FH87DE17XF', 
            facebookPixel: '990955817632355',
            hideAfterClick: true,
            position: 'right',
            policyLink: 'https://miramarehotels.com/data-policy'
        });
    </script>

</head>
<body>

    @include('frontend.en.layouts.header')

    @yield('content')

    @include('frontend.en.layouts.footer')


    <!--  JAVASCRIPTS  -->
    <script src="{{ asset('assets/frontend/js/common.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/miramare-beach-and-queen.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/js/bootstrap.bundle.min.js') }}"></script>
    
    <script src="{{ asset('assets/frontend/libs/js/jquery-magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/js/flatpickr.js') }}"></script>
    
    @yield('javascript-imports')
    
    <script src="{{ asset('assets/frontend/libs/js/jquery.min.js') }}"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/491b371f01.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/js/floating-menu.js') }}"></script>

    {{-- <script type='text/javascript'>
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
    </script> --}}

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