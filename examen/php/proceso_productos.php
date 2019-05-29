<?php 
include('../common/utils.php');

if($_POST) {
	
	if (isset($_POST['product']) && isset($_POST['price']) && !empty($_POST['product']) && !empty($_POST['price'])) {

		$product = $_POST['product'];
		$price = $_POST['price'];
		$user = $_SESSION['user']['id'];

		$sqlinsert = "INSERT INTO product
		(product, price, iduser)
		VALUES ('$product','$price', '$user')";
		$conn->query($sqlinsert);

		if ($conn->error) {
			header('Location: ../admin.php?error_message=Ocurrio un error'.$conn->error);
			exit;
		} else {
			header('Location: ../admin.php?message=Producto registrado');
			exit;
		}
	} else {
		header('Location: ../admin.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../admin.php');
	exit;
}