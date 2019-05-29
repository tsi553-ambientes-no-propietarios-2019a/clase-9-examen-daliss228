<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h2>REGISTRO</h2>
	<form action="php/proceso_registro.php" method="POST">
		<div>
			<input type="text" name="name" placeholder="Ingrese el nombre" required="required">
		</div>
		<div>
			<select name="role" required="required">
				<option value="">Seleccione el rol</option>
				<option value="admin">Administrador</option>
				<option value="cliente">Cliente</option>
			</select>
		</div>
		<div>
			<input type="text" name="username" placeholder="Ingrese el nombre de usuario" required="required">
		</div>
		<div>
			<input type="password" name="password" placeholder="Ingrese el password" required="required">
		</div>
		<div>
			<input type="password" name="password1" placeholder="Repetir password" required="required">
		</div>
		<div>
			<button>Registarse!</button>
		</div>
	</form>
</body>
</html>