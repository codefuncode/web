<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=`, initial-scale=1.0" name="viewport"/>
    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet"/>
    <link href="css/test.css" rel="stylesheet" type="text/css"/>
    <title>
      Document
    </title>
  </head>
  <body>
    <script src="https://www.w3schools.com/lib/w3codecolor.js">
    </script>
    <script type="text/javascript">
      w3CodeColor();
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=`, initial-scale=1.0" name="viewport"/>
    <title>
      Document
    </title>
  </head>
  <body>
    <div class="w3-content secion_imagen" style="max-width:800px">
      <img class="w3-image w3-card w3-leftbar" src="img/00002/especificidad/00001.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
    </div>
    <div class="w3-content secion_imagen" style="max-width:800px">
      <img class="w3-image w3-card w3-leftbar" src="img/00002/especificidad/00001.png" style="width: 100%; height: 50%; border-color: #9CDB35 !important ;"/>
      <div class="w3-panel w3-card w3-pale-yellow w3-leftbar w3-border-blue w3-section" style=" border-color: #9CDB35 !important ;">
        <p>
          Muchos marcos y bibliotecas de JavaScript agregan estilos en línea. Usar! Important con un selector muy específico es una forma de anular estos estilos en línea.
        </p>
      </div>
    </div>
    <!--  Inpottant -->
    <span class="w3-tag w3-green" style="font-size: 0.8em; font-weight: bold;">
      ! important
    </span>
    <!--  Inpottant -->
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <style type="text/css">
      table td    { height: 50px !important; }
      .myTable td { height: 50px !important; }
      #myTable td { height: 50px !important; }

      /*=======================================*/
      td { height: 50px !important; }
      /*=======================================*/
    </style>
    <title>
      Document
    </title>
  </head>
  <body>
    <table class="myTable" id="myTable">
      <tr>
        <th>
          xxxxxxxxxxx
        </th>
        <th>
          xxxxxxxxxxx
        </th>
        <th>
          xxxxxxxxxxx
        </th>
      </tr>
      <tr>
        <td>
          xxxxxxxxxxx
        </td>
        <td>
          xxxxxxxxxxx
        </td>
        <td>
          xxxxxxxxxxx
        </td>
      </tr>
      <tr>
        <td>
          xxxxxxxxxxx
        </td>
        <td>
          xxxxxxxxxxx
        </td>
        <td>
          xxxxxxxxxxx
        </td>
      </tr>
    </table>
  </body>
</html>
