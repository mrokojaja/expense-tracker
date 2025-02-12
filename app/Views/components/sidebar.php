<div class="sticky">
	<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
	<div class="app-sidebar">
		<div class="side-header">
			<a class="header-brand1" href="index.html">
				<img src="<?= base_url('assets/theme/images/brand/logo-white.png') ?>" class="header-brand-img desktop-logo" alt="logo">
				<img src="<?= base_url('assets/theme/images/brand/icon-white.png') ?>" class="header-brand-img toggle-logo" alt="logo">
				<img src="<?= base_url('assets/theme/images/brand/icon-dark.png') ?>" class="header-brand-img light-logo" alt="logo">
				<img src="<?= base_url('assets/theme/images/brand/logo-dark.png') ?>" class="header-brand-img light-logo1" alt="logo">
			</a>
			<!-- LOGO -->
		</div>
		<div class="main-sidemenu">
			<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
					<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
				</svg></div>
			<ul class="side-menu">
				<li class="sub-category">
					<h3>Main</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link<?= \CodeIgniter\Config\Services::router()->getMatchedRouteOptions()['as']; ?>" data-bs-toggle="slide" href="<?= route_to('home') ?>"><i class="side-menu__icon mdi mdi-monitor-dashboard"></i><span class="side-menu__label">Dashboard</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i class="side-menu__icon mdi mdi-credit-card-multiple-outline"></i><span class=" side-menu__label">Expenses</span></a>
				</li>

				<li class="sub-category">
					<h3>General</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i class="side-menu__icon mdi mdi-cog-outline"></i><span class="side-menu__label">Settings</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i class="side-menu__icon mdi mdi-phone-outline"></i><span class="side-menu__label">Support</span></a>
				</li>
				<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
						<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
					</svg></div>
		</div>
	</div>
</div>