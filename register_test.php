<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="icon" type="image/x-icon" href="img/favicon-32x32.png">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js" integrity="sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" defer src="js/main.js"></script>
	<title>ChumPlay - Registro</title>
</head>

<body>
<div class="container">
		
		<div class="login-form">
			
			
			<div class="form-header">
				<i class="fa fa-user"></i>
			</div>
			<form method="post" action="control_users.php" class="form-register" id="register-form">
				<div>
					<input name="nombre" id="name" type="text" class="form-control" placeholder="Nombre"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="apellidos" id="apellidos" type="text" class="form-control" placeholder="Apellidos"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="email" id="email" type="email" class="form-control" placeholder="Correo electrónico" > 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="pass0" id="pass0" type="password" class="form-control" placeholder="Contraseña"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="pass1" id="pass1" type="password" class="form-control" placeholder="Confirmar Contraseña"> 
					<span class="help-block"></span>
				</div>
				<input type="hidden" name="accion" value="registro">
				<input type="submit" value="Registrar">
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Registrando....">Registrarse</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php"> Olvidó su contraseña? </a>
					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="index.php">  Iniciar sesión  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->
	<div>
		<h2>Formulario de registro</h2>
		<form method="post" action="control_users.php">

			<label for="fname">Nombre</label>
			<input type="text" id="fname" name="nombre" placeholder="Tu nombre..">
		 	<br>
			<label for="lname">Apellidos</label>
			<input type="text" id="lname" name="apellidos" placeholder="Tus apellidos..">
			<br>
			<label for="user">Email</label>
			<input type="text" id="user" name="email" placeholder="Tu usuario..">
			<br>
			<label for="pass0">Contraseña</label>
			<input type="password" id="pass0" name="pass0" placeholder="Contraseña..">
			<br>
			<label for="pass1">Repite Contraseña</label>
			<input type="password" id="pass1" name="pass1" placeholder="Contraseña..">
			<br>
			<input type="hidden" name="accion" value="registro">
			<input type="submit" value="Registrar">
		</form>
	</div>

	<script src="js/jquery.validate.min.js"></script>
	<script src="js/register.js"></script>
</body>

</html>