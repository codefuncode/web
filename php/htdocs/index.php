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
        <header class="w3-container" style="">
          <?php include_once "comp/header.php";?>
        </header>
        <div class="w3-row-padding w3-margin-bottom w3-hide-small">
          <div class="w3-five">
            <div class="w3-container ">
              <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fimg04.deviantart.net%2F7cad%2Fi%2F2011%2F018%2F5%2Fb%2Fpsd_of_html5_logo_by_tobrother-d37hlwk.png&f=1&nofb=1"/>
            </div>
          </div>
          <div class="w3-five">
            <div class="w3-container">
              <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn3.iconfinder.com%2Fdata%2Ficons%2Fsocial-media-logos-flat-colorful-1%2F2048%2F5351_-_CSS3-512.png&f=1&nofb=1"/>
            </div>
          </div>
          <div class="w3-five">
            <div class="w3-container ">
              <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpng.pngtree.com%2Fsvg%2F20170719%2Fjavascript_633988.png&f=1&nofb=1"/>
            </div>
          </div>
          <div class="w3-five">
            <div class="w3-container">
              <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpngimg.com%2Fuploads%2Fphp%2Fphp_PNG10.png&f=1&nofb=1"/>
            </div>
          </div>
          <div class="w3-five">
            <!-- w3-orange w3-text-white w3-padding-16 -->
            <div class="w3-container ">
              <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.iconhot.com%2Ficon%2Fpng%2Fcoded%2F512%2Fpage-mysql.png&f=1&nofb=1"/>
            </div>
          </div>
        </div>
        <div class="w3-container">
          <div class="">
          </div>
        </div>
        <?php include_once "comp/pie.php";?>
      </div>
    </div>
    <!-- End page content -->
    <?php include "comp/slidebar.php";?>
  </body>
</html>