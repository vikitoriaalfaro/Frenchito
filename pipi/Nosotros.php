<?php
session_start();
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />

    <title>Frenchí Cafetería</title>
    <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sevillana&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet">
      
    <link rel="stylesheet" href="Nosotros_style.css" />
    <link rel="icon" type="image/png" href="f.png">
  </head>
  <body>
    <div class="logo-contenedor">
      <img src="logo.png" alt="Logo" class="logoC">
    </div>
 
      <header>
        <div class="logo">
          <img src="../logo.png" style="width:135px;height: 80px;">
        </div>
        <nav>
          <ul>
         
            <li><a href="Nosotros.php">Nosotros</a></li>
            <li><a href="../Menu.html">Menú</a></li>
            <li><a href="../locales/Locales2.html">Locales</a></li>
            <li><a href="Tienda.html">Tienda</a></li>
            <li>
              <?php
              if(isset($_SESSION["usuario"])){
                    echo "<a>".$_SESSION['usuario']."</a>";
                }
                else{
                    echo "<a class='login' href='../Login.html'>Crear cuenta</a>";
                } ?>         
                </li>

          </ul>
        </nav>
      </header>
      <div class="banner-area"></div>
    </div>
    <main>
    <div class="title"> ¿Quiénes somos?</div>
    <div class="texto">En Frenchí, creemos en el poder de las pequeñas cosas y en el valor de cada instante compartido. En el corazón de nuestra comunidad, nos enorgullece ofrecerte 
      un rincón acogedor donde la tradición y el cariño se mezclan en cada taza de café. Nuestra cafetería clásica y familiar es el lugar perfecto para disfrutar de momentos especiales con tus seres queridos, rodeado de un ambiente cálido y amigable. </div>
      <div id="div_centrar">
        <div id="div_grid">
          <div class="container">
            <img class="o" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgfIrJGA4C97TmFKikJITFZKPVjvRYQB4routjwPLAvsLrH-FG-Rc0KzSU7EdrrUCV-ZUtCS6ACxC79oirNVKWc3jEbtMA6jJBtBiA38V3pg9qI1QtSPoVnVYqQVji9qB3KoXwvprpC_Nvq/s1600/IMG_9563.JPG">
            <img class="o" src="Deco.jpg">
            <img class="o" src="cafetera.jpeg">
            <img class="o" src="https://i.pinimg.com/564x/c5/30/d0/c530d0b5fca3a5f6da7792aa1822bd42.jpg">
            <img class="o" src="https://plus.unsplash.com/premium_photo-1674327105076-36c4419864cf?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YWVzdGhldGljJTIwY29mZmVlfGVufDB8fDB8fHww">
             
            <img class="o" src="descargaaa.jpeg">
           
            <img class="o" src="muffins.jpeg">
            <img class="o" src="https://i.pinimg.com/736x/d9/de/5e/d9de5eec954ba707941e62f3c97572d5.jpg">
         
      </div>


      </div>
         
        </div>
        <script>     document.addEventListener('DOMContentLoaded', function() {         const logoContainer = document.querySelector('.logo-contenedor');         logoContainer.addEventListener('animationend', function() { logoContainer.classList.add('fade-out-complete');  }); }); </script>
    </main>
    <footer>

        <li><b href="#">Instagram</b></li>
        <li><b href="#">Facebook</b></li>
        <li><b href="#">Maps</b></li>
      <p>©Copyright 2024 de Cafeterías Frenchí. Todos los derechos reservados.</p>
    </footer>
  </body>
</html>


</html>


