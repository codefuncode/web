<!DOCTYPE html>
<html lang="en">
  <?php include_once "comp/head.php";?>
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
        <div class="w3-container w3-stretch">
        <header class="w3-container" style="padding-top:22px">
          <h1 class="w3-serif">
            <i>
              Introduccion a CSS
            </i>
          </h1>
          <p>
            Antes de comenzar con la definición de CSS cabe mencionar que es parte de la especificación HTML5 donde interactúan HTML, CSS y JavaScript. En este curso tal vez encontraras algunas instrucciones JavaScript en los ejemplos pero no será el enfoque. El enfoque será CSS y por lo tanto debemos tener presente que CSS da estilos visuales a las etiquetas en el navegador por lo que es recomendable saber de HTML para comprender este curso. Comencemos con el resumen de la definición de CSS lo cual esta basada en diferentes documentaciones.
          </p>
        </header>
        <div class="w3-container ">
          <h4 class="w3-serif">
            <i>
              ¿Qué es CSS?
            </i>
          </h4>
          <p>
            CSS es el lenguaje que usamos para diseñar una página web. CSS son las hojas de estilos en cascada o más bien, un fichero con instrucciones para dar estilos a los elementos HTML lo que da un aspecto atractivo a los usuarios y mejora la navegabilidad dentro de nuestro sitio web.
          </p>
          <p>
            Las hojas de estilo en cascada, a las que se hace referencia cariñosamente como CSS, es un lenguaje de diseño simple destinado a simplificar el proceso de hacer que las páginas web sean presentables. Ahora veremos varia definiciones algunas de las páginas más famosas en cuanto a tutoriales de desarrollo web.
          </p>
        </div>

          <?php include "comp/pie.php";?>

      </div>
    </div>
    <?php include "comp/slidebar.php";?>
  </body>
</html>