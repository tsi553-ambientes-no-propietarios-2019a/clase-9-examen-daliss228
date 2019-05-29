<?php 
include('../common/utils.php');
$role = getRole($conn);

if($_POST) {
	if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT *
		FROM user
		WHERE username='$username'
		AND password=MD5('$password')";

		$res = $conn->query($sql);

		if ($conn->error) {
			header('Location: ../index.php?error_message=Ocurrió un error: ' . $conn->error);
			exit;
		}

		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['user'] = ['username' => $row['username'],'id' => $row['id']];

					if ($role['role'] == 'admin') {
						header('Location: ../admin.php');
						exit;
					}elseif($role['role'] == 'cliente'){
						header('Location: ../cliente.php');
						exit;
					}
				}
		} else {
			header('Location: ../index.php?error_message=Usuario o clave incorrectos!');
			exit;
		}


	} else {
		header('Location: ../index.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../index.php');
	exit;
}