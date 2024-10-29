<?php 
session_start();

    $servername = "127.0.0.1";
    $database = "Frenchi";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion
 
 
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
	if (isset($_POST["carrito"])) {
	if (isset($_SESSION["shopping_cart"])) {
		$item_array_id = array_column($_SESSION["shopping_cart"], "codigo");
		if (!in_array($_GET["codigo"], $item_array_id)) {
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["codigo"],
				'item_name'			=>	$_POST["nombre"],
				'item_price'		=>	$_POST["precio"],
		
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		} else {
			echo '<script>alert("Producto ya fue agregado")</script>';
		}
	} else {
		$item_array = array(
			'item_id'			=>	$_GET["codigo"],
			'item_name'			=>	$_POST["nombre"],
			'item_price'		=>	$_POST["precio"],
		
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
			if ($values["item_id"] == $_GET["codigo"]) {
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Producto retirado")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}
	}
?>
<!DOCTYPE html>
<html>

<head>
	<title>ConfiguroWeb</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Tienda_style.css" />
</head>

<body style="background:black;">
	<br />
	<div class="container">
		<br />
		<br />
		<br />
		<br /><br />
		<?php
		$query = "SELECT * FROM Productos";
		$result = mysqli_query($conexion, $query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
		?>
				<div class="col-md-4">
					<form method="post" action="index.php?action=add&id=<?php echo $row["codigo"]; ?>">
                        <div class="card-product">
                        <div class="container-img">
                            <img src="<?php echo $row['imagen']?>" alt="Cafe Irish" />
                           
                        
                            <div class="button-group">
                              
                                <span>
                                    <i class="fa-solid fa-heart"></i>
                                </span>
                                
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3><?php echo $row["nombre"]?></h3>
                            <input type="submit" name="carrito" style="margin-top:5px;" class="btn btn-warning" value="Agregar Producto" />
                            <p class="price">$<?php echo $row["precio"]?></p>
    
                        </div>
                    </div>
					</form>
				</div>
		<?php
			}
		}
		?>
		<div style="clear:both"></div>
		<br />
		<h3 style="color:white">Información de la Orden</h3>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th width="40%" style="color:white">Nombre del Producto</th>
					<th width="20%" style="color:white">Precio</th>
					<th width="25%" style="color:white">Total</th>
					<th width="15%" style="color:white">Acción</th>
				</tr>
				<?php
				if (!empty($_SESSION["shopping_cart"])) {
					$total = 0;
					foreach ($_SESSION["shopping_cart"] as $keys => $values) {
				?>
						<tr>
							<td style="color:white">$<?php echo $values["item_name"]; ?></td>
		
							<td style="color:white">$ <?php echo $values["item_price"]; ?></td>
							<td style="color:white">$ <?php echo number_format($values["item_price"], 2); ?></td>
							<td style="color:white"><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Quitar Producto</span></a></td>
						</tr>
					<?php
						$total = $total +  $values["item_price"];
					}
					?>
					<tr>
						<td colspan="3" align="right" style="color:white;">Total</td>
						<td align="right" style="color:white;">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
				<?php
				}
				?>

			</table>
		</div>
	</div>
	</div>
	<br />
</body>

</html>

<?php
?>