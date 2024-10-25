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
        $query = "select nombre,precio,imagen, calificacion from Productos where calificacion=5 limit 6";
        $resultado1 = mysqli_query($conexion, $query);

 
    }
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        //insertamos el resultado del formulario
        $query = "select nombre,precio,imagen, calificacion from Productos where calificacion=5 limit 6";
        $resultado1 = mysqli_query($conexion, $query);
        $query2="select nombre, descripcion, precio, imagen, calificacion from Productos where tipo_comida='Bebida'";
        $resultado2=mysqli_query($conexion, $query2);
        $query3="select nombre, descripcion, precio, imagen, calificacion from Productos where tipo_comida='Comida' and tipo_ds='Dulce'";
        $resultado3=mysqli_query($conexion, $query3);    
        $query4="select nombre, descripcion, precio, imagen, calificacion from Productos where tipo_comida='Comida' and tipo_ds='Salado'";
        $resultado4=mysqli_query($conexion, $query4);    
    
    }
        ?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8" />
    <title>Tienda</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Tienda_style.css" />
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
                    echo "<a class='login'>".$_SESSION['usuario']."</a>";
                }
                else{
                    echo "<a class='login' href='Registro.html'>Crear cuenta</a>";
                } ?>         
                </li>
                
            </ul>
        </nav>
    </header>
    <div class="banner-area"></div>
    
    
    <main>
        <section class="container top-categories">
            <h2>Lo mejor de Frenchí cada vez más cerca tuyo...</h2>
            <div class="container-categories">
                
            <div class="card-category category-desayuno">
                    <p><a href="Desayunos.html">Desayunos y Meriendas</a></p>
                    
                </div>
                <div class="card-category category-brunch">777
                    <p><a href="Brunch.html">Brunch</a></p>
                </div>
                <div class="card-category category-almuerzo">
                    <p><a href="Desayunos.html">Desayunos y Meriendas</a></p>
                    
                </div>
                <div class="card-category category-desayunotexto">
                    <p><a href="Desayunos.html">Desayunos y Meriendas</a></p>
                    
                </div>
                
                <div class="card-category category-brunchtexto">
                    <p><a href="Brunch.html">Brunch</a></p>
                </div>

                
                <div class="card-category category-almuerzotexto">
                    <p><a href="Desayunos.html">Desayunos y Meriendas</a></p>
                    
                </div>
                
            

                </div>
            </div>
        </section>

        <section class="container top-products">
            <h1 class="heading-1">Nuestros favoritos</h1>


            <div class="container-products">
                <!-- Producto 1 -->
                <?php
                    while ($fila = mysqli_fetch_assoc($resultado1)){ ?>
                        <div class="card-product">
                        <div class="container-img">
                            <img src="<?php echo $fila['imagen']?>" alt="Cafe Irish" />
                           
                        
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
                            <h3><?php echo $fila["nombre"]?></h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </span>
                            <p class="price">$<?php echo $fila["precio"]?></p>
    
                        </div>
                    </div>
                    <?php } ?>
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

        <section class="container specials">
            <h1 class="heading-1">Bebidas</h1>
                    
            <div class="container-products">
            <?php
                    while ($fila = mysqli_fetch_assoc($resultado2)){ ?>
                        <div class="card-product">
                        <div class="container-img">
                            <img src="<?php echo $fila['imagen']?>" alt="Cafe Irish" />
                            
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
                            <h3><?php echo $fila["nombre"]?></h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </span>
                            <p class="price">$<?php echo $fila["precio"]?></p>
    
                        </div>
                    </div>
                    <?php } ?>
            </div>
        </section>
        <section class="container specials">
            <h1 class="heading-1">Patisserie</h1>
                    
            <div class="container-products">
            <?php
                    while ($fila = mysqli_fetch_assoc($resultado3)){ ?>
                        <div class="card-product">
                        <div class="container-img">
                            <img src="<?php echo $fila['imagen']?>" alt="Cafe Irish" />
                            
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
                            <h3><?php echo $fila["nombre"]?></h3>
                            <p class="descripcion"><?php echo $fila["descripcion"]?></p>
                            <span class="add-cart">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </span>
                            <p class="price">$<?php echo $fila["precio"]?></p>
    
                        </div>
                    </div>
                    <?php } ?>
            </div>
        </section>
        <section class="container specials">
            <h1 class="heading-1">Comidas</h1>
                    
            <div class="container-products">
            <?php
                    while ($fila = mysqli_fetch_assoc($resultado4)){ ?>
                        <div class="card-product">
                        <div class="container-img">
                            <img src="<?php echo $fila['imagen']?>" alt="Cafe Irish" />
                            
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
                            <h3><?php echo $fila["nombre"]?></h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </span>
                            <p class="price">$<?php echo $fila["precio"]?></p>
    
                        </div>
                    </div>
                    <?php } ?>
            </div>
        </section>
    </main>
    <footer>
        <li><b href="#">Instagram</b></li>
        <li><b href="#">Facebook</b></li>
        <li><b href="#">Maps</b></li>
    <p>©Copyright 2024 de Cafeterías Frenchí. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

