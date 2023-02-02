<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="author" content="Jennifer López Montero">
    <meta name="description" content="Un poco sobre mi trayectoria profesional, habilidades y proyectos realizados">
    <link rel="stylesheet" href="assets/css/estilos.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Jennifer López | Desarrolladora Web</title>
  </head>
<body>
  <header>
    <div class="topnav" id="myTopnav">
      <a href="#inicio" class="active">Inicio</a>
      <a href="#sobreMi">Sobre mi</a>
      <a href="#habilidades">Habilidades</a>
      <a href="#proyectos">Proyectos</a>
      <a href="#contacto">Contacto</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </header>
  <main>
    <div class="container">
      <h1>Jennifer López<span>Web Developer</span> </h1>
      <!-- Sección hero -->
      <section class="hero">
        <figure></figure>
      </section>
      <!-- Seccion sobre mi -->
      <section id="sobreMi">
        <h2>Sobre mi</h2>
        <article>
          <p>Comenzando en el desarrollo web en 2022, he cursado la formacion de Creación y publicación de paginas web enfocado en el desarrollo FrontEnd en grupo Aspasia</p>
          <p>Actualmente cursando la formacion en ReactJs en ItAcademy</p>
        </article>
      </section>
      <!-- Seccion de habilidades -->
      <section id="habilidades">
        <h2>Conocimientos técnicos y habilidades</h2>
        <div class="logos">
          <img class=" item item-1" src="assets/images/html5.png" alt="Logo de html5 que consta de un pentágono naranja con un número cinco de color blanco">
          <img class="item item-2" src="assets/images/css3.png" alt="Logo de css3 que consta de un pentágono celeste con un número tres de color blanco">
          <img class="item item-3" src="assets/images/js.png" alt="Logo de javascript que consta de un cuadrado amarillo con la letra j y la letra s en color negro">
          <img class="item item-4" src="assets/images/bootstrap.png" alt="Logo de bootstrap que consta de un cuadrado morado con los bordes redondeados con una letra b en">
          <img class="item item-5" src="assets/images/wordpress.png" alt="Logo de wordpress que consta de una 'w' mayúscula dentro de un circulo azul">
          <img class="item item-6" src="assets/images/visual-studio.png" alt="Logo de visual studio code que consta de un lazo azul tumbado horizontalmente con un fondo blanco">
        </div>
        <ul>
          <li>Responsive Web Design</li>
          <li>Flexbox, Grid</li>
          <li>Accesibilidad y Usabilidad</li>
          <li>Desarrollo web basado en los estándares de W3C</li>
          <li>JQuery</li>
          <li>Git</li>
        </ul>
      </section>
      <section id="proyectos">
        <h2>Proyectos realizados</h2>
        <div class="slideshow-container">
          
          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img class="img-carrusel" src="assets/images/screenshots/club-lector.jpg" style="width:100%">
            <img class="movil ntc-even" src="assets/images/screenshots/clublector-movil.jpg" alt="Captura de pantalla de la versión móvil de la pagina web">
            <div class="text">Club Lector</div>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="assets/images/screenshots/escoladefotografia.jpg" style="width:100%">
            <img class="movil" src="assets/images/screenshots/escoladefotografia-movil.jpg" alt="Captura de pantalla de la versión móvil de la pagina web">
            <div class="text">Escola de fotografia</div>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="assets/images/screenshots/anima-animalis.jpg" style="width:100%">
            <img class="movil ntc-even" src="assets/images/screenshots/animaanimalis-movil.jpg" alt="Captura de pantalla de la versión móvil de la pagina web">
            <div class="text">Ànima animalis</div>
          </div>
        
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        
        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        </div>
        
      </section>
      <section id="contacto">
        <figure><img src="assets/images/correo.png" alt="sobre de los bordes de color azul"></figure>
        <div>
      
          <form action="assets/php/send.php" method="post" id="formulario">
            <h2>Contacto</h2>
            <div>
              <label for="name">Nombre</label>
              <input type="text" id="name" name="name" placeholder="Nombre">
            </div>
            <div>
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Email">
            </div>
            <div>
              <label for="message">Escriba su mensaje</label>
              <textarea name="message" id="message" placeholder="Escriba su mensaje"></textarea>
            </div>
            <div><button type="submit">Enviar</button></div>
          </form>
        </div>
      </section>
      <div class="confirmacion"><p>Su mensaje se ha enviado correctamente, gracias por contactar</p></div>
    </div>
  </main>
  <footer><p>©copy 2023 Developez</p></footer>
</body>
</html>