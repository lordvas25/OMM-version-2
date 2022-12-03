<?php
require_once("../../model/conexion.php");
require_once("../../model/ValidarSesion.php");
require_once("../../Controller/seguridadCliente.php");
require_once("../../Controller/verPerfilCliente.php");
require_once("../../Controller/mostrarPerfilCl.php");
require_once("../../Controller/mostrarproductosCliente.php");
require_once("../../model/ConsultasCliente.php");

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Perfil Usuario</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="../Client-site/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="../Client-site/css/owl.carousel.css">
	<link rel="stylesheet" href="../Client-site/css/owl.theme.css">
	<link rel="stylesheet" href="../Client-site/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Client-site/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Client-site/css/style.css">
	<link rel="stylesheet" href="../Client-site/css/responsive.css">

	<!-- jS -->
	<script src="../Client-site/js/jquery.min.js" type="text/javascript"></script>
	<script src="../Client-site/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/Client-site/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="../Client-site/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="../Client-site/js/jquery.nicescroll.js"></script>
	<script src="../Client-site/js/jquery.scrollUp.min.js"></script>
	<script src="../Client-site/js/main.js" type="text/javascript"></script>


</head>

<body>


	<!-- TOP HEADER Start
    ================================================== -->
	<section id="top">
		<?php
		mostrarPerfil();
		?>

		<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Introduce Yourself</h4>
					</div>
					<div class="modal-body clearfix">

						<form action="../Extra/Registro-user.html" method="post" id="create-account_form" class="std">
							<fieldset>
								<h3>Create your account</h3>
								<div class="form_content clearfix">
									<h4>Enter your e-mail address to create an account.</h4>
									<p class="text">
										<label for="email_create">E-mail address</label>
										<span>
											<input placeholder="E-mail address" type="text" id="email_create" name="email_create" value="" class="account_input">
										</span>
									</p>
									<p class="submit">
										<button class="btn btn-primary">Create Your Account</button>
									</p>
								</div>
							</fieldset>
						</form>
						<form action="" method="post" id="login_form" class="std">
							<fieldset>
								<h3>Already registered?</h3>
								<div class="form_content clearfix">
									<p class="text">
										<label for="email">E-mail address</label>
										<span><input placeholder="E-mail address" type="text" id="email" name="email" value="" class="account_input"></span>
									</p>
									<p class="text">
										<label for="passwd">Password</label>
										<span><input placeholder="Password" type="password" id="passwd" name="passwd" value="" class="account_input"></span>
									</p>
									<p class="lost_password">
										<a href="#popab-password-reset" class="popab-password-link">Forgot your password?</a>
									</p>
									<p class="submit">
										<button class="btn btn-success">Log in</button>
									</p>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- End of /Section -->



	<!-- LOGO Start
    ================================================== -->

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<img src="../Client-site/images/Logo3.png" alt="logo" width="140px" height="140px">
					</a>
				</div> <!-- End of /.col-md-12 -->
			</div> <!-- End of /.row -->
		</div> <!-- End of /.container -->
	</header> <!-- End of /Header -->




	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div> <!-- End of /.navbar-header -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav nav-main">
					<li class="active"><a href="HomeCliente.php">INICIO</a></li>
					<li><a href="productsCliente.php">PRODUCTOS</a></li>
					<li><a href="editarPerfil.php">ACTUALIZAR CONTRASEÑA</a></li>
					<li><a href="../blog-single.html">CONTACTANOS</a></li>
				</ul> <!-- End of /.nav-main -->
			</div> <!-- /.navbar-collapse -->
		</div> <!-- /.container-fluid -->
	</nav> <!-- End of /.nav -->


	<!-- SLIDER Start
    ================================================== -->


	<section id="slider-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

				</div> <!-- End of /.col-md-12 -->
			</div> <!-- End of /.row -->
		</div> <!-- End of /.container -->
	</section> <!-- End of Section -->



	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="container-fluid">

			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">


				<!-- Small boxes (Stat box) -->

				<div class="col-md-12">
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Modificar Contraseña</h3>
						</div>
						<form action="../../Controller/modificarClave.php" method="POST">
							<div class="card-body">
								<div class="row">
									<div class="form-group col-md-4">
										<label for="clave">Contraseña Atual </label>
										<input type="password" class="form-control" id="clave" required name="ClaveActual" placeholder="Ej: 1A2B3C4D">
									</div>
									<div class="form-group col-md-4">
										<label for="clave">Contraseña Nueva</label>
										<input type="password" class="form-control" id="clave" required name="ClaveNueva" placeholder="Ej: 1A2B3C4D">
									</div>
									<div class="form-group col-md-4">
										<label for="clave">Confirmar Contraseña</label>
										<input type="password" class="form-control" id="clave" required name="ClaveConf" placeholder="Ej: 1A2B3C4D">
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Cambiar</button>
							</div>
						</form>
					</div>
				</div>
			</div>




			<!-- /.row -->
			<!-- Main row -->
			<div class="row">
				<!-- Left col -->
				<section class="col-lg-12 connectedSortable">

				</section>

			</div>
			<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="block">
						<h4>CONTACTANOS</h4>
						<p><i class="fa  fa-map-marker"></i> <span>Online Market Management OMM,</span> Bogotá - Colombia</p>
						<p> <i class="fa  fa-phone"></i> <span>Telefono:</span> (+57) 312 4531234 </p>

						<p class="mail"><i class="fa  fa-envelope"></i>Correo: <span>omm@gmail.com</span></p>
					</div> <!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-4">
					<div class="block clearfix">
						<a href="#">
							<img class="w-100" src="images/Logo3.png" alt="" width="180px" height="180px">
						</a>
						<!-- End Of /.social-icon -->
					</div> <!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of Col-md-3 -->
		</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->



		<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright-text pull-right">Food Code @2013 Designed by <a href="http://www.themexpert.com">Themexpert</a> All Rights Reserved</p>
					</div> <!-- End Of /.col-md-12 -->
				</div> <!-- End Of /.row -->
			</div> <!-- End Of /.container -->
		</div> <!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->

	<a id="back-top" href="#"></a>
</body>

</html>