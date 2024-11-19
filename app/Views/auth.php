<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="<?= base_url('assets/theme/css/icons.css'); ?>">

	<link rel="stylesheet" href="<?= base_url('assets/theme/plugins/bootstrap/css/bootstrap.min.css'); ?>">

	<link rel="stylesheet" href="<?= base_url('assets/theme/css/style.css'); ?>">

	<link rel="stylesheet" href="<?= base_url('assets/app/plugins/fuxcel/css/fuxcel.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/app/css/auth.css'); ?>">
</head>

<body>

	<body class="app sidebar-mini ltr login-img">

		<!-- BACKGROUND-IMAGE -->
		<div class="">

			<!-- GLOABAL LOADER -->
			<?= $this->include('components/loader.php'); ?>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="auth-page">
				<div class="col-xl-5 col-lg-6 m-auto">
					<!-- Theme-Layout -->

					<!-- CONTAINER OPEN -->
					<!-- <div class="col col-login mx-auto mt-7">
						<h class="text-center">
							<a href="index.html"><img src="<?= 'assets/theme/images/brand/logo-white.png' ?>" class="header-brand-img" alt=""></a>
						</h>
					</div> -->

					<div class="card m-0">
						<div class="card-body">
							<form action="<?= route_to('auth') ?>" method="post" id="login-form">
								<h3>Login</h3>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" class="form-field">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" id="password" class="form-field">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary w-100">
										Continue
										<i class="far fa-spin fa-spinner-third btn-loader ms-2" style="display: none;"></i>
									</button>
									<div class="text-center mt-3">Don't have an account? <a href="javasrcipt:void()" class="toggle-form" data-target="#register-form">Register</a></div>
								</div>
							</form>

							<form action="<?= route_to('auth') ?>" method="post" id="register-form" style="display: none;">
								<input type="hidden" name="_method" value="PUT">
								<h3>Register</h3>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="first_name">First Name</label>
											<input type="first_name" name="first_name" id="first_name" class="form-field">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label for="last_name">Last Name</label>
											<input type="last_name" name="last_name" id="last_name" class="form-field">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" class="form-field">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" id="password" class="form-field">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary w-100">
										Continue
										<i class="far fa-spin fa-spinner-third btn-loader ms-2" style="display: none;"></i>
									</button>
									<div class="text-center mt-3">Have an account? <a href="javasrcipt:void()" class="toggle-form" data-target="#login-form">Login</a></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End PAGE -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY JS -->
		<script src="<?= 'assets/theme/js/jquery.min.js' ?>"></script>

		<!-- BOOTSTRAP JS -->
		<script src="<?= 'assets/theme/plugins/bootstrap/js/popper.min.js' ?>"></script>
		<script src="<?= 'assets/theme/plugins/bootstrap/js/bootstrap.min.js' ?>"></script>

		<!-- SHOW PASSWORD JS -->
		<script src="<?= 'assets/theme/js/show-password.min.js' ?>"></script>

		<!-- GENERATE OTP JS -->
		<script src="<?= 'assets/theme/js/generate-otp.js' ?>"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="<?= 'assets/theme/plugins/p-scroll/perfect-scrollbar.js' ?>"></script>

		<!-- Color Theme js -->
		<script src="<?= 'assets/theme/js/themeColors.js' ?>"></script>

		<!-- CUSTOM JS -->
		<script src="<?= 'assets/theme/js/custom.js' ?>"></script>

		<!-- Custom-switcher -->
		<script src="<?= 'assets/theme/js/custom-swicher.js' ?>"></script>

		<!-- Switcher js -->
		<script src="<?= 'assets/theme/switcher/js/switcher.js' ?>"></script>

		<!-- Fuxcel -->
		<script src="<?= 'assets/app/plugins/fuxcel/js/fuxcel.js' ?>"></script>

		<script src="<?= 'assets/app/js/auth.js' ?>"></script>
	</body>

</html>