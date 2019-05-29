<?php
include('common/utils.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>LOGIN</h2>
	<form action="php/proceso_login.php" method="POST">
		<div>
			<input type="text" name="username" placeholder="Ingrese el usuario" required="required">
		</div>
		<div>
			<input type="password" name="password" placeholder="Ingrese el password" required="required">
		</div>
		<div>
			<button>Iniciar Sesion</button>
		</div>
	</form>
	<a href="registro.php">Registrar</a>
</body>
</html>