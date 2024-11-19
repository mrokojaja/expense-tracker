<!doctype html>
<html lang="en" dir="ltr">

<head>

	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
	<meta name="author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/theme/images/brand/favicon.ico') ?>">

	<!-- TITLE -->
	<title>Sash – Bootstrap 5 Admin & Dashboard Template </title>

	<!-- BOOTSTRAP CSS -->
	<link id="style" href="<?= base_url('assets/theme/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- STYLE CSS -->
	<link href="<?= base_url('assets/theme/css/style.css') ?>" rel="stylesheet">

	<!-- Plugins CSS -->
	<link href="<?= base_url('assets/theme/css/plugins.css') ?>" rel="stylesheet">

	<!--- FONT-ICONS CSS -->
	<link href="<?= base_url('assets/theme/css/icons.css') ?>" rel="stylesheet">

	<!-- INTERNAL Switcher css -->
	<link href="<?= base_url('assets/theme/switcher/css/switcher.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/theme/switcher/demo.css') ?>" rel="stylesheet">

</head>

<body class="app sidebar-mini ltr light-mode">
	<!-- GLOBAL-LOADER -->
	<?= $this->include('components/loader.php'); ?>
	<!-- /GLOBAL-LOADER -->

	<!-- PAGE -->
	<div class="page">
		<div class="page-main">

			<!-- app-Header -->
			<div class="app-header header sticky">
				<div class="container-fluid main-container">
					<div class="d-flex">
						<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
						<!-- sidebar-toggle-->
						<a class="logo-horizontal " href="index.html">
							<img src="<?= base_url('assets/theme/images/brand/logo-white.png') ?>" class="header-brand-img desktop-logo" alt="logo">
							<img src="<?= base_url('assets/theme/images/brand/logo-dark.png') ?>" class="header-brand-img light-logo1" alt="logo">
						</a>
						<!-- LOGO -->
						<div class="main-header-center ms-3 d-none d-lg-block">
							<input type="text" class="form-control" id="typehead" placeholder="Search for results...">
							<button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
						</div>
						<div class="d-flex order-lg-2 ms-auto header-right-icons">
							<!-- SEARCH -->
							<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical"></span>
							</button>
							<div class="navbar navbar-collapse responsive-navbar p-0">
								<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
									<div class="d-flex order-lg-2">
										<div class="dropdown d-lg-none d-flex">
											<a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
												<i class="fe fe-search"></i>
											</a>
											<div class="dropdown-menu header-search dropdown-menu-start">
												<div class="input-group w-100 p-2">
													<input type="text" class="form-control" placeholder="Search....">
													<div class="input-group-text btn btn-primary">
														<i class="fa fa-search" aria-hidden="true"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="d-flex">
											<a class="nav-link icon theme-layout nav-link-bg layout-setting">
												<span class="dark-layout"><i class="fe fe-moon"></i></span>
												<span class="light-layout"><i class="fe fe-sun"></i></span>
											</a>
										</div>
										<!-- Theme-Layout -->
										<div class="dropdown d-flex">
											<a class="nav-link icon full-screen-link nav-link-bg">
												<i class="fe fe-minimize fullscreen-button"></i>
											</a>
										</div>
										<!-- FULL-SCREEN -->
										<div class="dropdown d-flex profile-1">
											<a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
												<img src="<?= base_url('assets/theme/images/users/21.jpg') ?>" alt="profile-user" class="avatar  profile-user brround cover-image">
											</a>
											<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
												<div class="drop-heading">
													<div class="text-center">
														<h5 class="text-dark mb-0 fs-14 fw-semibold">Percy Kewshun</h5>
														<small class="text-muted">Senior Admin</small>
													</div>
												</div>
												<div class="dropdown-divider m-0"></div>
												<a class="dropdown-item" href="profile.html">
													<i class="dropdown-icon fe fe-user"></i> Profile
												</a>
												<a class="dropdown-item" href="email-inbox.html">
													<i class="dropdown-icon fe fe-mail"></i> Inbox
													<span class="badge bg-danger rounded-pill float-end">5</span>
												</a>
												<a class="dropdown-item" href="lockscreen.html">
													<i class="dropdown-icon fe fe-lock"></i> Lockscreen
												</a>
												<a class="dropdown-item" href="login.html">
													<i class="dropdown-icon fe fe-alert-circle"></i> Sign out
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /app-Header -->

			<!--APP-SIDEBAR-->
			<?= $this->include('components/sidebar') ?>
			<!--/APP-SIDEBAR-->

			<!--app-content open-->
			<div class="main-content app-content mt-0">
				<div class="side-app">

					<!-- CONTAINER -->
					<div class="main-container container-fluid">
						<?= $this->renderSection('body') ?>
					</div>
					<!-- CONTAINER END -->
				</div>
			</div>
			<!--app-content close-->
		</div>

		<!-- FOOTER -->
		<footer class="footer">
			<div class="container">
				<div class="row align-items-center flex-row-reverse">
					<div class="col-md-12 col-sm-12 text-center">
						Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
					</div>
				</div>
			</div>
		</footer>
		<!-- FOOTER END -->

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="<?= base_url('assets/theme/js/jquery.min.js') ?>"></script>

		<!-- BOOTSTRAP JS -->
		<script src="<?= base_url('assets/theme/plugins/bootstrap/js/popper.min.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>

		<!-- SPARKLINE JS-->
		<script src="<?= base_url('assets/theme/js/jquery.sparkline.min.js') ?>"></script>

		<!-- Sticky js -->
		<script src="<?= base_url('assets/theme/js/sticky.js') ?>"></script>

		<!-- CHART-CIRCLE JS-->
		<script src="<?= base_url('assets/theme/js/circle-progress.min.js') ?>"></script>

		<!-- PIETY CHART JS-->
		<script src="<?= base_url('assets/theme/plugins/peitychart/jquery.peity.min.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/peitychart/peitychart.init.js') ?>"></script>

		<!-- SIDEBAR JS -->
		<script src="<?= base_url('assets/theme/plugins/sidebar/sidebar.js') ?>"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="<?= base_url('assets/theme/plugins/p-scroll/perfect-scrollbar.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/p-scroll/pscroll.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/p-scroll/pscroll-1.js') ?>"></script>

		<!-- INTERNAL CHARTJS CHART JS-->
		<script src="<?= base_url('assets/theme/plugins/chart/Chart.bundle.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/chart/utils.js') ?>"></script>

		<!-- INTERNAL SELECT2 JS -->
		<script src="<?= base_url('assets/theme/plugins/select2/select2.full.min.js') ?>"></script>

		<!-- INTERNAL Data tables js-->
		<script src="<?= base_url('assets/theme/plugins/datatable/js/jquery.dataTables.min.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/datatable/js/dataTables.bootstrap5.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/datatable/dataTables.responsive.min.js') ?>"></script>

		<!-- INTERNAL APEXCHART JS -->
		<script src="<?= base_url('assets/theme/js/apexcharts.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/apexchart/irregular-data-series.js') ?>"></script>

		<!-- INTERNAL Flot JS -->
		<script src="<?= base_url('assets/theme/plugins/flot/jquery.flot.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/flot/jquery.flot.fillbetween.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/flot/chart.flot.sampledata.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/flot/dashboard.sampledata.js') ?>"></script>

		<!-- INTERNAL Vector js -->
		<script src="<?= base_url('assets/theme/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') ?>"></script>
		<script src="<?= base_url('assets/theme/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>

		<!-- SIDE-MENU JS-->
		<script src="<?= base_url('assets/theme/plugins/sidemenu/sidemenu.js') ?>"></script>

		<!-- TypeHead js -->
		<script src="<?= base_url('assets/theme/plugins/bootstrap5-typehead/autocomplete.js') ?>"></script>
		<script src="<?= base_url('assets/theme/js/typehead.js') ?>"></script>

		<!-- INTERNAL INDEX JS -->
		<script src="<?= base_url('assets/theme/js/index1.js') ?>"></script>

		<!-- Color Theme js -->
		<script src="<?= base_url('assets/theme/js/themeColors.js') ?>"></script>

		<!-- CUSTOM JS -->
		<script src="<?= base_url('assets/theme/js/custom.js') ?>"></script>

		<!-- Custom-switcher -->
		<script src="<?= base_url('assets/theme/js/custom-swicher.js') ?>"></script>

		<!-- Switcher js -->
		<script src="<?= base_url('assets/theme/switcher/js/switcher.js') ?>"></script>
</body>

</html>