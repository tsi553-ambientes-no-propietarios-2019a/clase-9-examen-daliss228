<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['name']) && isset($_POST['role']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password1']) && !empty($_POST['name']) && !empty($_POST['role']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password1'])) {

		$name = $_POST['name'];
		$role = $_POST['role'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password1 = $_POST['password1'];

		if ($password == $password1) {
		
		$sqlinsert = "INSERT INTO user(name, role, username, password)VALUES ('$name','$role', '$username', md5('$password'))";

		$conn->query($sqlinsert);

		if ($conn->error) {
			header('Location: ../registro.php?error_message=Ocurrio un error'.$conn->error);
			exit;
		} else {
			//redirect('../home.php');
			header('Location: ../registro.php?error_message=Usuario registrado!');
			exit;
		}
		} else {
			header('Location: ../registro.php?error_message=Los passwords no coinciden!');
			exit;
		}

		
	} else {
		header('Location: ../registro.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../registro.php');
	exit;
}

