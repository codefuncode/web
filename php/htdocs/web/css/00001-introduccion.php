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
          <h2>
            Introduccion a CSS
          </h2>
        </header>
        <div class="w3-container w3-padding-large">
          <h3>
            CSS es el lenguaje que usamos para diseñar una página web.
          </h3>
          <h4>
            ¿Qué es CSS?
          </h4>
          <ul class="w3-ul">
            <li class="w3-padding-small">
              CSS son las siglas de Cascading Style Sheets
            </li>
            <li class="w3-padding-small">
              CSS describe cómo se mostrarán los elementos HTML en la pantalla, el papel o en otros medios.
            </li>
            <li class="w3-padding-small">
              CSS describe cómo se mostrarán los elementos HTML en la pantalla, el papel o en otros medios.
            </li>
            <li class="w3-padding-small">
              CSS ahorra mucho trabajo. Puede controlar el diseño de varias páginas web a la vez
            </li>
            <li class="w3-padding-small">
              CSS ahorra mucho trabajo. Puede controlar el diseño de varias páginas web a la vez
            </li>
            <li class="w3-padding-small">
              Las hojas de estilo externas se almacenan en archivos CSS
            </li>
          </ul>
        </div>
        <!--       <div class="w3-container">
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
        </div> -->
      </div>
    </div>
    <!-- End page content -->
    <?php include "comp/slidebar.php";?>
  </body>
</html>
