<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Imperial – Company ladies around the world, Images of exclusive women, 
        Exclusive Pornography, scorts celebrities onlyfans, scorts celebrities twitter">
		<meta name="author" content="Imperial S.A">
        <meta name="keywords" content="Scorts exclusives, porn exclusive, celebrities onlyfans, celebrities twitter, 
                                videos exclusives, photos scorts, damas de compañia, putas, scorts">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="/assets/images/brand/favicon.ico" />

		<!-- TITLE -->
		<title>{{ config('app.name') }}</title>

		<!-- BOOTSTRAP CSS -->
		<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="/assets/css/style.css" rel="stylesheet"/>
		<link href="/assets/css/skin-modes.css" rel="stylesheet"/>

		<!--HORIZONTAL CSS-->
		<link href="/assets/plugins/horizontal-menu/horizontal-menu.css" rel="stylesheet" />

		<!--C3.JS CHARTS PLUGIN -->
		<link href="/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="/assets/css/icons.css" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="/assets/colors/color1.css" />

		@stack('styles')

	</head>

	<body>
        @include('public.partials.loader')

        <!-- PAGE -->
		<div class="page">
                <div class="page-main">

					@include('public.partials.nav')
					@include('public.partials.mobile')
					@include('public.partials.horizontal')

                <!--app-content open-->
				<div class="container app-content">
                        <div class="">
                           {{--  @include('public.partials.page_header',[
                                'title' => 'Blog'
							]) --}}
							
							@yield('page_header')

                            @yield('content')
                            
                        </div>
                    </div>
                    <!-- CONTAINER END -->
                </div>

                @include('public.partials.footer')
        </div>
        

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="/assets/js/jquery-3.4.1.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="/assets/plugins/bootstrap/js/popper.min.js"></script>

		<!-- SPARKLINE JS-->
		<script src="/assets/js/jquery.sparkline.min.js"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="/assets/js/circle-progress.min.js"></script>

		<!-- RATING STARJS -->
		<script src="/assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- CHARTJS CHART JS-->
		<script src="/assets/plugins/chart/Chart.bundle.js"></script>
		<script src="/assets/plugins/chart/utils.js"></script>

		<!-- PIETY CHART JS-->
		<script src="/assets/plugins/peitychart/jquery.peity.min.js"></script>
		<script src="/assets/plugins/peitychart/peitychart.init.js"></script>

		<!-- ECHART JS-->
		<script src="/assets/plugins/echarts/echarts.js"></script>

		<!--HORIZONTAL JS-->
		<script src="/assets/plugins/horizontal-menu/horizontal-menu.js"></script>

		<!-- CUSTOM SCROLLBAR JS-->
		<script src="/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- APEXCHART JS -->
		<script src="/assets/js/apexcharts.js"></script>

		<!-- SIDEBAR JS -->
		<script src="/assets/plugins/sidebar/sidebar.js"></script>

		<!-- STICKY JS -->
		<script src="/assets/js/stiky.js"></script>

		<!-- CUSTOM JS-->
		<script src="/assets/js/custom.js"></script>

		@stack('scripts')

	</body>
</html>