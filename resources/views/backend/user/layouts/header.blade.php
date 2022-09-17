<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Dashboard @yield('my_title') - BlogBus</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
        <link href="{{asset('logos/img/blogbus-logo-1.png')}}" rel="icon">
        <link href="{{asset('logos/img/blogbus-logo-1.png')}}" rel="apple-touch">
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{asset("template/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css")}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset("template/dist/assets/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css" />
		<link href="{{asset("template/dist/assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
        <link href="{{asset("template/dist/assets/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

        <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">

        {{-- @notifyCss --}}
    </head>
	<!--end::Head-->
    <style>
        body {
            background: linear-gradient(to right, #b9bfe6, #181C32);
        }
        .pace {
            -webkit-pointer-events: none;
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        .pace-inactive {
            display: none;
        }

        .pace .pace-progress {
            background: #f39c12;
            position: fixed;
            z-index: 2000;
            top: 0;
            right: 100%;
            width: 100%;
            height: 3px;
        }

        .pace .pace-progress-inner {
            display: block;
            position: absolute;
            right: 0px;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px #f39c12, 0 0 5px #f39c12;
            opacity: 1.0;
            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -moz-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            -o-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
        }

        .pace .pace-activity {
            display: block;
            position: fixed;
            z-index: 2000;
            top: 15px;
            right: 15px;
            width: 14px;
            height: 14px;
            border: solid 2px transparent;
            border-top-color: #f39c12;
            border-left-color: #f39c12;
            border-radius: 10px;
            -webkit-animation: pace-spinner 400ms linear infinite;
            -moz-animation: pace-spinner 400ms linear infinite;
            -ms-animation: pace-spinner 400ms linear infinite;
            -o-animation: pace-spinner 400ms linear infinite;
            animation: pace-spinner 400ms linear infinite;
        }

        @-webkit-keyframes pace-spinner {
            0% { -webkit-transform: rotate(0deg); transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); transform: rotate(360deg); }
        }
        @-moz-keyframes pace-spinner {
            0% { -moz-transform: rotate(0deg); transform: rotate(0deg); }
            100% { -moz-transform: rotate(360deg); transform: rotate(360deg); }
        }
        @-o-keyframes pace-spinner {
            0% { -o-transform: rotate(0deg); transform: rotate(0deg); }
            100% { -o-transform: rotate(360deg); transform: rotate(360deg); }
        }
        @-ms-keyframes pace-spinner {
            0% { -ms-transform: rotate(0deg); transform: rotate(0deg); }
            100% { -ms-transform: rotate(360deg); transform: rotate(360deg); }
        }
        @keyframes pace-spinner {
            0% { transform: rotate(0deg); transform: rotate(0deg); }
            100% { transform: rotate(360deg); transform: rotate(360deg); }
        }
    </style>

