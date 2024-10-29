<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Locales</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="f.png">
    <link rel="stylesheet" href="Locales_style.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-vector/20220723/ourmid/pngtree-fresh-croissant-icon-cartoon-style-with-shadow-free-vector-and-png-png-image_6034269.png">

</head>

<body>
 
        <header>
          <div class="logo">
            <img src="Imagenes/logo.png" style="width:135px;height: 80px;">
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
    <section class="locales"> 
        <h2 class="titulo">Nuestros Locales</h2>
        <button class="pre-btn"><img src="arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                   
                    <img src="https://i.pinimg.com/564x/5a/5b/bf/5a5bbf0aecce63e47df700ac2b7603e0.jpg" class="fotis" alt="">
                
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Olivos</h2>
                    <p class="product-short-description">Miguel de Azcuénaga 1200</p>
                    
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.pinimg.com/564x/ad/50/c0/ad50c09bda9dcc4d2223fbd1c6cfecd1.jpg" class="fotis" alt="">
                    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">San Isidro</h2>
                    <p class="product-short-description">Martin y Omar 202</p>
                    
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.pinimg.com/564x/6d/9d/b1/6d9db1316a68f83b13374b83b967df67.jpg" class="fotis" alt="">
                    
                    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Belgrano</h2>
                    <p class="product-short-description">Montañeses 2342</p>
                   
                </div>
            </div>
           
            <div class="product-card">
                <div class="product-image">
                   
                    <img src="https://i.pinimg.com/564x/6e/be/bd/6ebebd917a317089350f738e43d72f7e.jpg" class="fotis" alt="">
                   
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Palermo</h2>
                    <p class="product-short-description">Charcas 3601</p>
                    
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                   
                    <img src="Deco.jpg" class="fotis" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Recoleta</h2>
                    <p class="product-short-description">Riobamba 1173</p>
                   
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://i.pinimg.com/564x/e4/d9/af/e4d9af4353ac786e41931d8b97f34edd.jpg" class="fotis" alt="">
                    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">Nuñez</h2>
                    <p class="product-short-description">Grecia 3437</p>
                   
                </div>
            </div>
            
        </div>
    </section>
    </main>
    <footer>

    <li><b href="#">Instagram</b></li>
    <li><b href="#">Facebook</b></li>
    <li><b href="#">Maps</b></li>
    <p>©Copyright 2024 de Cafeterías Frenchí. Todos los derechos reservados.</p>
    </footer>
    <script src="Carrusel.js"></script>
</body>
</html>

