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
      <?php include 'comp/imagenes_lenguaje.php';?>
    </header>
    <div class="w3-container w3-padding-32">
      <div id="cuerpo">
        <!--   <div class="">
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
        </div> -->
        <script type="text/javascript">
          jQuery(document).ready(function($) {
             $("#cuerpo").load("html/intro.html #test");
          });
        </script>
      </div>
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
