<!DOCTYPE html>
<html lang="en">
  <?php include_once "comp/heder.php";?>
  <!--End of Tawk.to Script-->
  <body>
    <?php include_once 'comp/menu.php';?>
    <!-- Sidebar/menu -->
    <?php include_once 'comp/nav.php'?>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" id="myOverlay" onclick="w3_close()" style="cursor:pointer" title="close side menu">
    </div>
    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
      <!-- Header -->
      <div class="w3-container">
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
              <li class="w3-padding-large">
                <a class="w3-hover-text-green" href="https://www.w3.org/" target="_blank">
                  www.w3.org
                </a>
              </li>
              <li class="w3-padding-large">
                <a class="w3-hover-text-green" href="https://spec.whatwg.org/" target="_blank">
                  whatwg.org
                </a>
              </li>
            </ul>
            <p>
              Además encontraras muchos fragmentos de  código para que los implementes en tus paginas web
            </p>
          </div>
        </header>
        <div class="w3-container">
          <footer class="w3-container w3-dark-grey">
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
    </div>
    <!-- End page content -->
    <?php include "comp/slidebar.php";?>
  </body>
</html>
