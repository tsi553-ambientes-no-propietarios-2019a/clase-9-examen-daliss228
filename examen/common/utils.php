<?php

session_start();

$conn = new mysqli('localhost', 'root', '', 'examen1');

if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}else {
	//echo "Conexion correcta!";
}

function getRole($conn){
	$userid = $_SESSION['user']['id'];
	$sql = "SELECT role FROM user WHERE id = '$userid'";

	$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../home.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		if($res->num_rows > 0) {
			$role = $res->fetch_assoc();
		}

		return $role;
}

function getProducts($conn) {

	$userid = $_SESSION['user']['id'];
	$sql = "SELECT * FROM product WHERE iduser='$userid'";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../admin.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		$products = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$products[] = $row;
			}
		}

		return $products;
}

function getAllProducts($conn) {

	$userid = $_SESSION['user']['id'];
	$sql = "SELECT * FROM product";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../admin.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		$allproducts = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$allproducts[] = $row;
			}
		}

		return $allproducts;
}


$public_pages = [
	'/tiendas/index.php', 
	'/tiendas/php/process_login.php',
	'/tiendas/registro.php',
	'/tiendas/php/proceso_registro.php'
];

if ( !isset($_SESSION['user']) && !in_array( $_SERVER['SCRIPT_NAME'], $public_pages)) {
	redirect($_SERVER["HTTP_HOST"] . '/examen/index.php');
} 

?>