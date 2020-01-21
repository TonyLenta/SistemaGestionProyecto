<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Imperial –  ">
		<meta name="author" content="Imperial S.A">
		<meta name="keywords" content="">
		

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="/assets/images/brand/favicon.ico" />

		<!-- TITLE -->
		<title>{{ config('app.name') }}</title>

		<!-- BOOTSTRAP CSS -->
		<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="/assets/css/style.css" rel="stylesheet"/>
		<link href="/assets/css/skin-modes.css" rel="stylesheet"/>

		<!-- SIDE-MENU CSS -->
		<link href="/assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">

		<!--C3 CHARTS CSS -->
		<link href="/assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!-- NOTIFICATION CSS -->
		{{-- <link href="../assets/plugins/notify/css/jquery.growl.css" rel="stylesheet"/> --}}

		<!--- FONT-ICONS CSS -->
		<link href="/assets/css/icons.css" rel="stylesheet"/>

		<!-- SIDEBAR CSS -->
		<link href="/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="/assets/colors/color1.css" />

		@stack('styles')

	</head>

	<body class="app sidebar-mini">
		@include('admin.partials.loader')

		<!-- PAGE -->
		<div class="page">
				<div class="page-main">
		
						@include('admin.partials.side')
						@include('admin.partials.mobile')

							<!--app-content open-->
							<div class="app-content">
									<div class="side-app">

										@include('admin.partials.nav')

											@include('admin.partials.status-messages')

										@yield('content')
				
									</div>
							</div>
						<!-- CONTAINER END -->
				</div>

				@include('admin.partials.footer')
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

		<!-- SIDE-MENU JS-->
		<script src="/assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- NOTIFICATIONS JS -->
		{{-- <script src="/assets/plugins/notify/js/rainbow.js"></script>
		<script src="/assets/plugins/notify/js/sample.js"></script>
		<script src="/assets/plugins/notify/js/jquery.growl.js"></script> --}}

		<!-- CUSTOM SCROLLBAR JS-->
		<script src="/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- SIDEBAR JS -->
		<script src="/assets/plugins/sidebar/sidebar.js"></script>

		<!-- APEXCHART JS -->
		<script src="/assets/js/apexcharts.js"></script>

		@stack('scripts')

		<!-- CUSTOM JS -->
		<script src="/assets/js/custom.js"></script>

		


	</body>
</html>

			