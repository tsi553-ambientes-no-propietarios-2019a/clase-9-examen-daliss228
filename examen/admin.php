<?php 
include('common/utils.php');
$products = getProducts($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
</head>
<body>
	<h2>Registrar productos</h2>
	<form action="php/proceso_productos.php" method="POST">
		<div>
			<input type="text" name="product" placeholder="Nombre del producto" required="required">
		</div>
		<div>
			<input type="text" name="price" placeholder="Precio del producto" required="required">
		</div>
		<div>
			<br><button>Registrar producto</button>
		</div>
	</form>

	<h2>Productos registrados</h2>

	<table border="1">
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($products as $p) { ?>
				<tr>
					<td><?php echo $p['product'] ?></td>
					<td><?php echo $p['price'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<br><a href="php/logout.php">Cerrar</a>
</body>
</html>