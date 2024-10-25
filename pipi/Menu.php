<?php
session_start();
?>
<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8" />

    <title>Menu</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
  

      
    <link rel="stylesheet" href="Menu.css" />
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
        <div class="menu">
        <img class="fotito" src="Imagenes/Menu.jpeg">
          
          </div>
         
          
     </main>
    <footer>

        <li><b href="#">Instagram</b></li>
        <li><b href="#">Facebook</b></li>
        <li><b href="#">Maps</b></li>
      <p>©Copyright 2024 de Cafeterías Frenchí. Todos los derechos reservados.</p>
    </footer>
  </body>
</html>






