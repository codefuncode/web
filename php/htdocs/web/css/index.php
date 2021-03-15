<!DOCTYPE html>
<html lang="en">
  <?php include_once "comp/heder.php";?>
  <!--End of Tawk.to Script-->
  <?php include_once 'comp/menu.php';?>
  <!-- Sidebar/menu -->
  <?php include_once 'comp/nav.php'?>
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" id="myOverlay" onclick="w3_close()" style="cursor:pointer" title="close side menu">
  </div>
  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
      <div class="w3-container" style="padding-bottom: 1%">
        <h3>
          Bienvenido a mi web, donde comparto mis escritos en CSS
        </h3>
      </div>
      <div class="w3-container">
        Esta pagina esta dedicada a la escritura de CSS y se abarca desde la sintaxis básica hasta la implementación de algunos marcos de trabajo que utilizo para generar interfaces bonitas y atractivas para le usuario.
        <p>
          Podrás encontrar contenido que utilizo de referencias para mis trabajos aquí:
        </p>
        <ul class="w3-ul">
          <li class="w3-padding-large">
            <a class="w3-hover-text-green" href="  https://developer.mozilla.org/en-US/" target="_blank">
              developer.mozilla.org
            </a>
          </li>
          <li class="w3-padding-large">
            <a class="w3-hover-text-green" href="https://devdocs.io/" target="_blank">
              devdocs.io
            </a>
          </li>
          <li class="w3-padding-large">
            <a class="w3-hover-text-green" href="https://www.tutorialspoint.com/web_development_tutorials.htm" target="_blank">
              tutorialspoint.com
            </a>
          </li>
          <li class="w3-padding-large">
            <a class="w3-hover-text-green" href="https://www.w3schools.com/default.asp" target="_blank">
              w3schools.com
            </a>
          </li>
        </ul>
        <p>
          Además encontraras muchos fragmentos de  código para que los implementes en tus paginas web
        </p>
      </div>
    </header>
    <div class="w3-container w3-padding-32">
      <!--  <div id="cuerpo">
        <div class="w3-container w3-padding-32">
          Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Accusantium ducimus tempore culpa, dolores commodi doloribus. Ducimus delectus provident corporis doloremque dolore aut placeat architecto iusto. Aliquam quae, et error quis.
        </div>
          <div class="">
          <div class="w3-container ">
            <h1>
              Background Colors
            </h1>
            <p>
              The w3-color classes defines background colors for HTML elements:
            </p>
          </div>
          <div class="w3-container w3-red">
            <h2>
              London
            </h2>
            <p>
              London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.
            </p>
          </div>
          <div class="w3-container w3-teal">
            <h2>
              London
            </h2>
            <p>
              London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.
            </p>
          </div>
          <div class="w3-container w3-yellow">
            <h2>
              London
            </h2>
            <p>
              London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.
            </p>
          </div>
          <div class="w3-container w3-gray">
            <h2>
              London
            </h2>
            <p>
              London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.
            </p>
          </div>
          <div class="w3-container w3-grey">
            <h2>
              London
            </h2>
            <p>
              London is the most populous city in the United Kingdom, with a metropolitan area of over 9 million inhabitants.
            </p>
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($) {
             $("#cuerpo").load("html/intro.html #test");
          });
        </script>
      </div> -->
      <footer class="w3-container w3-dark-grey w3-padding-32">
        <div class="w3-row">
          <div class="w3-container w3-third">
            <h5 class="w3-bottombar w3-border-green">
              Maqueado y estilo para la web
            </h5>
            <p>
              HTML
            </p>
            <p>
              CSS
            </p>
          </div>
          <div class="w3-container w3-third">
            <h5 class="w3-bottombar w3-border-red">
              Inteligencia y comportamiento
            </h5>
            <p>
              JavaScript
            </p>
            <p>
              PHP
            </p>
          </div>
          <div class="w3-container w3-third">
            <h5 class="w3-bottombar w3-border-orange">
              Almacenamiento de datos
            </h5>
            <p>
              MySQL
            </p>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- End page content -->
  <?php include "comp/slidebar.php";?>
</html>
