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
          <div class="w3-container" style="padding-bottom: 1%">
            <h1 class="w3-serif">
              <i>
                Bienvenido a la zona de JS
              </i>
            </h1>
          </div>
          <div class="w3-container">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex enim, perferendis minima, iusto labore quis nemo consequatur aperiam non, obcaecati maxime, velit provident soluta. Necessitatibus iste officia, corporis ipsum quaerat.
          </div>
        </header>
        <?php include "comp/pie.php";?>
      </div>
    </div>
    <?php include "comp/slidebar.php";?>
  </body>
</html>