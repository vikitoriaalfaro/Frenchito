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
        //insertamos el resultado del formulario
        $query = "select codigo,nombre,precio,imagen, calificacion from Productos where calificacion=5 limit 6";
        $resultado1 = mysqli_query($conexion, $query);
        $query2="select codigo, nombre, descripcion, precio, imagen, calificacion from Productos where tipo_comida='Bebida'";
        $resultado2=mysqli_query($conexion, $query2);
        $query3="select codigo,nombre, descripcion, precio, imagen, calificacion from Productos where tipo_comida='Comida' and tipo_ds='Dulce'";
        $resultado3=mysqli_query($conexion, $query3);    
        $query4="select codigo,nombre, descripcion, precio, imagen, calificacion from Productos where tipo_comida='Comida' and tipo_ds='Salado'";
        $resultado4=mysqli_query($conexion, $query4);    
		$query5="select codigo,nombre, descripcion, precio, imagen from Productos where tipo_comida='Combo'";
        $resultado5=mysqli_query($conexion, $query5);    
    }
         
	if (isset($_POST["carrito"])) {
		if (isset($_SESSION["shopping_cart"])) {
			$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
			if (!in_array($_GET["id"], $item_array_id)) {
				$count = count($_SESSION["shopping_cart"]);
				$item_array = array(
					'item_id'			=>	$_GET["id"],
					'item_name'			=>	$_POST["nombre"],
					'item_price'		=>	$_POST["precio"],
					'item_quantity'		=>	$_POST["cantidad"]
				);
				$_SESSION["shopping_cart"][$count] = $item_array;
			} 
			else {
				echo '<script>alert("Producto ya fue agregado")</script>';
		}
	} 
	else {
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["nombre"],
			'item_price'		=>	$_POST["precio"],
			'item_quantity'		=>	$_POST["cantidad"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
			if ($values["item_id"] == $_GET["id"]) {
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Producto retirado")</script>';
				echo '<script>window.location="Tienda.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8" />
    <title>Tienda</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap" rel="stylesheet">
	<link href="Tienda_style.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-vector/20220723/ourmid/pngtree-fresh-croissant-icon-cartoon-style-with-shadow-free-vector-and-png-png-image_6034269.png">
</head>

<body>
    <header>
        <div class="logo">
            <img src="Imagenes/logo.png" href="Frenchi.html" style="width:135px;height: 80px;">
        </div>
        <nav>
            <ul>
                <li><a href="Nosotros.php">Nosotros</a></li>
                <li><a href="Menu.php">Menú</a></li>
                <li><a href="Locales.php">Locales</a></li>
                <li><a href="Tienda.php">Tienda</a></li>
                <li>
              <?php
              if(isset($_SESSION["usuario"])){
                    echo "<a class='login' href='logout.php'>".$_SESSION['usuario']."</a>";
                }
                else{
                    echo "<a class='login' href='Registro.html'>Crear cuenta</a>";
                } ?>         
                </li>
                
            </ul>
        </nav>
    </header>
    <div class="banner-area"></div>
    
    
</head>
<main>
        
<section class="container top-products">
           
		   <h1 class="heading-1">Lo mejor de Frenchi cada vez más cerca tuyo</h1>
   
		   <div class="container">
	   
		   <?php
		   if (mysqli_num_rows($resultado5) > 0) {
			   while ($row = mysqli_fetch_assoc($resultado5)){ 
			   ?>
				   <div class="col-md-4">
					   <form method="post" action="Tienda.php?action=add&id=<?php echo $row["codigo"]; ?>">
						   <div class="productos">
							   <img src="<?php echo $row["imagen"]; ?>" class="img-responsive" /><br />
   
							   <h3><?php echo $row["nombre"]?></h3>
							   <h4 class="desc"> <?php echo $row["descripcion"]; ?></h4>
							   <h4 class="text-danger">$ <?php echo $row["precio"]; ?></h4>
							   
							   <input type="text" name="cantidad" value="1" class="form-control" />
   
							   <input type="hidden" name="nombre" value="<?php echo $row["nombre"]; ?>" />
   
							   <input type="hidden" name="precio" value="<?php echo $row["precio"]; ?>" />
   
							   <input type="submit" name="carrito" style="margin-top:5px;" class="btn btn-warning" value="Agregar Producto" />
   
						   </div>
					   </form>
				   </div>
		   <?php
			   }
		   }
		   ?>
	 </div>
	   </section>

        <section class="container top-products">
           
		<h1 class="heading-1">Nuestros favoritos</h1>

		<div class="container">
	
		<?php
		if (mysqli_num_rows($resultado1) > 0) {
			while ($row = mysqli_fetch_assoc($resultado1)){ 
			?>
				<div class="col-md-4">
					<form method="post" action="Tienda.php?action=add&id=<?php echo $row["codigo"]; ?>">
						<div class="productos">
							<img src="<?php echo $row["imagen"]; ?>" class="img-responsive" /><br />

							<h3><?php echo $row["nombre"]?></h3>
						
							<h4 class="text-danger">$ <?php echo $row["precio"]; ?></h4>
							
							<input type="text" name="cantidad" value="1" class="form-control" />

							<input type="hidden" name="nombre" value="<?php echo $row["nombre"]; ?>" />

							<input type="hidden" name="precio" value="<?php echo $row["precio"]; ?>" />

							<input type="submit" name="carrito" style="margin-top:5px;" class="btn btn-warning" value="Agregar Producto" />

						</div>
					</form>
				</div>
		<?php
			}
		}
		?>
  </div>
	</section>
	

			<section class="gallery">
            <img
                src="https://i.pinimg.com/736x/de/4e/ba/de4eba837959e139d0273e450cdbb8bb.jpg"
                alt="Gallery Img1"
                class="gallery-img-1"
            />
            <img
                src="https://i.pinimg.com/564x/d4/17/d7/d417d7fcfc8df95961b5be8abfb7349f.jpg"
                alt="Gallery Img2"
                class="gallery-img-2"
            />
            <img
            src="https://i.pinimg.com/736x/2a/e5/5c/2ae55c154dfd85acf2dd9502d384520e.jpg"
                alt="Gallery Img3"
                class="gallery-img-3"
            />
            <img
                src="https://i.pinimg.com/564x/e8/1c/21/e81c21fefbdf7b081cd8da3195aab829.jpg"
                alt="Gallery Img4"
                class="gallery-img-4"
            />
            <img
                src="https://i.pinimg.com/564x/c1/ee/a9/c1eea91dad4e5432d9a6008535970dff.jpg"
                alt="Gallery Img5"
                class="gallery-img-5"
            />
        </section>

		<section class="container top-products">
           
		   <h1 class="heading-1">Bebidas</h1>
   
	   <div class="container">
	   
		   <?php
		   if (mysqli_num_rows($resultado2) > 0) {
			   while ($row = mysqli_fetch_assoc($resultado2)){ 
			   ?>
				   <div class="col-md-4">
					   <form method="post" action="Tienda.php?action=add&id=<?php echo $row["codigo"]; ?>">
						   <div class="productos">
							   <img src="<?php echo $row["imagen"]; ?>" class="img-responsive" /><br />
   
							   <h3><?php echo $row["nombre"]?></h3>
							  
							   <h4 class="text-danger">$ <?php echo $row["precio"]; ?></h4>
							   
							   <input type="text" name="cantidad" value="1" class="form-control" />
   
							   <input type="hidden" name="nombre" value="<?php echo $row["nombre"]; ?>" />
   
							   <input type="submit" name="carrito" style="margin-top:5px;" class="btn btn-warning" value="Agregar Producto" />
   
						   </div>
					   </form>
				   </div>
		   <?php
			   }
		   }
		   ?>
	 </div>
		</section>

		<section class="container top-products">
           
		   <h1 class="heading-1">Patisserie</h1>
   
	   <div class="container">
	   
		   <?php
		   if (mysqli_num_rows($resultado3) > 0) {
			   while ($row = mysqli_fetch_assoc($resultado3)){ 
			   ?>
				   <div class="col-md-4">
					   <form method="post" action="Tienda.php?action=add&id=<?php echo $row["codigo"]; ?>">
						   <div class="productos">
							   <img src="<?php echo $row["imagen"]; ?>" class="img-responsive" /><br />
   
							   <h3><?php echo $row["nombre"]?></h3>
							   <h4 class="desc"> <?php echo $row["descripcion"]; ?></h4>
							   <h4 class="text-danger">$ <?php echo $row["precio"]; ?></h4>
							   
							   <input type="text" name="cantidad" value="1" class="form-control" />
   
							   <input type="hidden" name="nombre" value="<?php echo $row["nombre"]; ?>" />
   
							   <input type="submit" name="carrito" style="margin-top:5px;" class="btn btn-warning" value="Agregar Producto" />
   
						   </div>
					   </form>
				   </div>
		   <?php
			   }
		   }
		   ?>
	 </div>
		</section>

		<section class="container top-products">
           
		   <h1 class="heading-1">Comidas</h1>
   
	   <div class="container">
	   
		   <?php
		   if (mysqli_num_rows($resultado4) > 0) {
			   while ($row = mysqli_fetch_assoc($resultado4)){ 
			   ?>
				   <div class="col-md-4">
					   <form method="post" action="Tienda.php?action=add&id=<?php echo $row["codigo"]; ?>">
						   <div class="productos">
							   <img src="<?php echo $row["imagen"]; ?>" class="img-responsive" /><br />
   
							   <h3 class="nombre"><?php echo $row["nombre"]?></h3>
							   <h4 class="desc"> <?php echo $row["descripcion"]; ?></h4>
							   <h4 class="text-danger">$ <?php echo $row["precio"]; ?></h4>
							   <input type="text" name="cantidad" value="1" class="form-control" />
   
							   <input type="hidden" name="nombre" value="<?php echo $row["nombre"]; ?>" />
   
							   <input type="submit" name="carrito" style="margin-top:5px;" class="btn btn-warning" value="Agregar Producto" />
   
						   </div>
					   </form>
				   </div>
		   <?php
			   }
		   }
		   ?>
	 </div>
		</section>

		<div class="carro"style="clear:both"></div>
		<h3 >Información de la Orden</h3>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th width="40%" style="color:black;background-color: #4b989680;">Nombre del Producto</th>
					<th width="10%" style="color:black;background-color: #4b989680;">Cantidad</th>
					<th width="20%" style="color:black;background-color: #4b989680;">Precio</th>
					<th width="15%" style="color:black;background-color: #4b989680;">Total</th>
					<th width="5%" style="color:black;background-color: #4b989680;">Acción</th>
				</tr>
				<?php
				if (!empty($_SESSION["shopping_cart"])) {
					$total = 0;
					foreach ($_SESSION["shopping_cart"] as $keys => $values) {
				?>
						<tr>
							<td style="color:black;background-color: #5ebfbc80;"><?php echo $values["item_name"]; ?></td>
							<td style="color:black;background-color: #5ebfbc80;"><?php echo $values["item_quantity"]; ?></td>
							<td style="color:black;background-color: #5ebfbc80;">$ <?php echo $values["item_price"]; ?></td>
							<td style="color:black;background-color: #5ebfbc80;">$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
							<td style="color:black;background-color: #5ebfbc80;"><a href="Tienda.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Quitar Producto</span></a></td>
						</tr>
					<?php
						$total = $total + ($values["item_quantity"] * $values["item_price"]);
					}
					?>
					<tr>
						<td colspan="3" align="right" style="color:black;">Total</td>
						<td align="right" style="color:black;">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
				<?php
				}
				?>

			</table>
		</div>
	</div>
	</div>
</body>
</html>

<?php
//Si ha utilizado una versión anterior de PHP, descomente esta función para eliminar el error.

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>
