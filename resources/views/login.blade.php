<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Livefly- Admin panel</title>
	<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/datatables/datatables.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/intlTelInput/css/intlTelInput.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-lite.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
	<div class="main-wrapper">

		<div class="main-wrapper login-body">
			<div class="login-wrapper">
				<div class="container">
					<img class="img-fluid logo-dark mb-2 logo-color" src="{{ asset('assets/img/logo2.png') }}" alt="Logo">
					<img class="img-fluid logo-light mb-2" src="{{ asset('assets/img/logo2-white.png') }}" alt="Logo">
					<div class="loginbox">
						<div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								<form method="POST" action="{{ route('login.check') }}">
									@csrf <!-- Laravel's CSRF token for security -->
									<div class="input-block mb-3">
										<label class="form-control-label">Email Address</label>
										<input type="email" name="username" class="form-control" required>
									</div>
									<div class="input-block mb-3">
										<label class="form-control-label">Password</label>
										<div class="pass-group">
											<input type="password" name="password" class="form-control pass-input" required>
											<span class="fas fa-eye toggle-password"></span>
										</div>
									</div>
									<div class="input-block mb-3">
										<div class="row">
											{{-- <div class="col-6">
												<div class="form-check custom-checkbox">
													<input type="checkbox" class="form-check-input" id="cb1" name="remember">
													<label class="custom-control-label" for="cb1">Remember me</label>
												</div>
											</div> --}}
										</div>
									</div>
									<button class="btn btn-lg btn-primary w-100" type="submit">Login</button>
								</form>
								<br>

								<div>
									@if (session('error'))
										<div class="alert alert-danger" id="error-alert">
											{{ session('error') }}
										</div>
									@endif
									@if (session('success'))
										<div class="alert alert-success" id="success-alert">
											{{ session('success') }}
										</div>
									@endif
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		setTimeout(function () {
			var errorAlert = document.getElementById('error-alert');
			var successAlert = document.getElementById('success-alert');
			
			if (errorAlert) {
				errorAlert.style.display = 'none';
			}
			
			if (successAlert) {
				successAlert.style.display = 'none';
			}
		}, 5000); // 5000 milliseconds = 5 seconds
	</script>

	<script src="{{ asset('assets/js/layout.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
	<script src="{{ asset('assets/js/feather.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>
	<script src="{{ asset('assets/js/theme-settings.js') }}"></script>
	<script src="{{ asset('assets/js/greedynav.js') }}"></script>
	<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/summernote/summernote-lite.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/intlTelInput/js/intlTelInput-jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>