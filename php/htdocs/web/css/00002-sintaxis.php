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
      <div class="w3-container w3-padding-large">
        <header class="w3-container" style="padding-top:22px">
          <h1 class="w3-serif">
            <i>
              Sintaxis de CSS
            </i>
          </h1>
        </header>
        <div class="w3-container w3-padding">
          <h4 class=" w3-serif">
            <i>
              Como escribir CSS
            </i>
          </h4>
          <p>
            CSS tiene su propia sintaxis  y en este tutorial veremos la manera correcta de escribirlo.  Usaremos referencias a la documentación de MDN  ya  que esta es la mas completa de la Internet. En algunos casos, por experiencia no esta la sección que explica alguna que ora propiedad, concepto u otro termino. En ese caso haré una investigación  y colocare en esta pagina todas las investigaciones referentes a el tema
          </p>
          <h4 class="w3-serif">
            <i>
              Lo que aprenderás sobre la sintaxis de CSS
            </i>
          </h4>
          <ul class="w3-ul">
            <li>
              Sintaxis CSS
            </li>
            <li>
              Regla CSS
            </li>
            <li>
              Especificidad CSS
            </li>
            <li>
              Herencia CSS
            </li>
            <li>
              Modelo de caja básica CSS
            </li>
            <li>
              Modo de diseño
            </li>
            <li>
              Modelo de formato visual
            </li>
            <li>
              Dominar el colapso de márgenes
            </li>
            <li>
              Valor calculado
            </li>
            <li>
              Valor específico
            </li>
            <li>
              Valor usado
            </li>
            <li>
              Valor actual
            </li>
            <li>
              Sintaxis de definición de valor
            </li>
            <li>
              Propiedades de taquigrafía
            </li>
            <li>
              Elementos reemplazados
            </li>
          </ul>
        </div>
        <div class="w3-container">
          <?php include "comp/pie.php";?>
        </div>
      </div>
    </div>
    <?php include "comp/slidebar.php";?>
  </body>
</html>