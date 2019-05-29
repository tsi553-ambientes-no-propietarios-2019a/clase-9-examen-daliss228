
<?php 
include('common/utils.php');
$allproducts = getAllProducts($conn);
//print_r($allproducts);
//echo $allproducts['product'];
?>



<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
</head>
<body>

	<h2>Pedidos</h2>
	<form action="php/proceso_pedido" method="POST">
		<div>
			<select name="product" required="required">
			<option value="product">Seleccione el producto</option>

			<?php/* foreach ($allproducts as $ap) { ?>

				<option value="<?php echo $ap['id'];?>"><?php echo $ap['product'];?></option>

			<?php}*/?>

			</select>
		</div>
		<div>
			<input type="text" name="price" placeholder="Cantidad del producto" required="required">
		</div>
		<div>
			<br><button>Registrar producto</button>
		</div>
	</form>
	<br><a href="php/logout.php">Cerrar</a>
</body>
</html>