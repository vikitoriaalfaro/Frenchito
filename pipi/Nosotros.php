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
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-vector/20220723/ourmid/pngtree-fresh-croissant-icon-cartoon-style-with-shadow-free-vector-and-png-png-image_6034269.png">
  </head>
  <body>
    <div class="logo-contenedor">
      <img src="logo.png" alt="Logo" class="logoC">
    </div>
 
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
    </div>
    <main>
    <div class="title"> ¿Quiénes somos?</div>
    <div class="texto">En Frenchí, creemos en el poder de las pequeñas cosas y en el valor de cada instante compartido. En el corazón de nuestra comunidad, nos enorgullece ofrecerte 
      un rincón acogedor donde la tradición y el cariño se mezclan en cada taza de café. Nuestra cafetería clásica y familiar es el lugar perfecto para disfrutar de momentos especiales con tus seres queridos, rodeado de un ambiente cálido y amigable. </div>
      
      <div class="container">

        <div class="slide">
    
            
            <div class="item" style="background-image: url(https://www.hotforfoodblog.com/wp-content/uploads/2018/06/vegannutellacrepe_hotforfood_filtered3.jpg);">
                <div class="content">
                    <div class="name">Crepes Dulces</div>
                    <div class="des">Finas crepes rellenas de futas, chocolate o crema y dulce de leche.</div>
                    <button>Ir a la tienda</button>
                </div>
            </div>
            <div class="item" style="background-image: url(https://dwellbymichelle.com/wp-content/uploads/2021/08/DWELL_-_Starbucks_Caramel_Latte_Recipe.jpg);">
                <div class="content">
                    <div class="name">Frappé de Café</div>
                    <div class="des"></div>
                    <button>Ir a la tienda</button>
                </div>
            </div>
            <div class="item" style="background-image: url(https://www.budgetbytes.com/wp-content/uploads/2024/04/Avocado-Toast-Close.jpg);">
                <div class="content">
                    <div class="name">Avocado Toast</div>
                    <div class="des">Rodajas de pan rústico untadas con palta, cubiertas con queso desmenuzado y huevo revuelto.</div>
                    <button>Ir a la tienda</button>
                </div>
            </div>
            <div class="item" style="background-image: url(https://asset-prod.france.fr/Bild_header_petit_dej_a3892153f1.jpg);">
                <div class="content">
                    <div class="name">Desayunos, meriendas y brunch en Frenchí</div>
                    <div class="des">Sumate a nuestros combos!</div>
                    <button>Ir a la tienda</button>
                </div>
            </div>
            <div class="item" style="background-image: url(https://files.meilleurduchef.com/mdc/photo/recette/galette-sarrasin-farcie-oeuf-cheval/galette-sarrasin-farcie-oeuf-cheval-1200.jpg);">
                <div class="content">
                    <div class="name">Galette de Sarrasin</div>
                    <div class="des">Crepe de trigo sarraceno rellena de jamón, queso y huevo.</div>
                    <button>Ir a la tienda</button>
                </div>
            </div>
            <div class="item" style="background-image: url(https://e7852c3a.rocketcdn.me/wp-content/uploads/2022/07/ratatouille-vegetarian-meal-on-a-rustic-wooden-ta-2022-05-27-20-09-01-utc-1400x875.jpg);">
                <div class="content">
                    <div class="name">Ratatouille</div>
                    <div class="des">Estofado de verduras mediterráneas; berenjenas, calabacínes y pimientos, aromatizado con hierbas.</div>
                    <button>Ir a la tienda</button>
                </div>
            </div>
    
        </div>
    
        <div class="button">
            <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    
    </div>
    <script src="carrusel menu/script.js"></script>
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





