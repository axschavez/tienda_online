<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Panel administrativo de la tienda online</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href={{ asset('Admin_assest/plugins/fontawesome-free/css/all.min.css')}}>
		<!-- Theme style -->
		<link rel="stylesheet" href={{ asset('Admin_assest/css/adminlte.min.css')}}>
		<link rel="stylesheet" href={{ asset('Admin_assest/css/custom.css')}}>
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<!-- /.login-logo -->
			<div class="card card-outline card-primary">
			  	<div class="card-header text-center">
					<a href="#" class="h3">Panel Administrativo</a>
			  	</div>
			  	<div class="card-body">
					<p class="login-box-msg">Iniciar sesión</p>
					<form action="dashboard.html" method="post">
				  		<div class="input-group mb-3">
							<input type="email" class="form-control" placeholder="Email">
							<div class="input-group-append">
					  			<div class="input-group-text">
									<span class="fas fa-envelope"></span>
					  			</div>
							</div>
				  		</div>
				  		<div class="input-group mb-3">
							<input type="password" class="form-control" placeholder="Contraseña">
							<div class="input-group-append">
					  			<div class="input-group-text">
									<span class="fas fa-lock"></span>
					  			</div>
							</div>
				  		</div>
				  		<div class="row">
							<!-- <div class="col-8">
					  			<div class="icheck-primary">
									<input type="checkbox" id="remember">
									<label for="remember">
						  				Remember Me
									</label>
					  			</div>
							</div> -->
							<!-- /.col -->
							<div class="col-4">
					  			<button type="submit" class="btn btn-primary btn-block">Acceder</button>
							</div>
							<!-- /.col -->
				  		</div>
					</form>
		  			<p class="mb-1 mt-3">
				  		<a href="forgot-password.html">¿Olvidaste tu contraseña?</a>
					</p>					
			  	</div>
			  	<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src={{('Admin_assest/plugins/jquery/jquery.min.js')}}></script>
		<!-- Bootstrap 4 -->
		<script src={{('Admin_assest/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
		<!-- AdminLTE App -->
		<script src={{('Admin_assest/js/adminlte.min.js')}}></script>
		<!-- AdminLTE for demo purposes -->
		<script src={{('Admin_assest/js/demo.js')}}></script>
	</body>
</html>