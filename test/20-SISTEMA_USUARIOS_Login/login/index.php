<?php
	
	//Aqui va el código PHP del Vídeo
	
?>
<html>
  <head>
    <title>
      Login
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js">
        </script>
      </link>
    </link>
  </head>
  <body>
    <div class="container">
      <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" id="loginbox" style="margin-top:50px;">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-title">
              Iniciar Sesión
            </div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px">
              <a href="recupera.php">
                ¿Se te olvidó tu contraseña?
              </a>
            </div>
          </div>
          <div class="panel-body" style="padding-top:30px">
            <div class="alert alert-danger col-sm-12" id="login-alert" style="display:none">
            </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-horizontal" id="loginform" method="POST" role="form">
              <div class="input-group" style="margin-bottom: 25px">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-user">
                  </i>
                </span>
                <input class="form-control" id="usuario" name="usuario" placeholder="usuario o email" required="" type="text" value="">
                </input>
              </div>
              <div class="input-group" style="margin-bottom: 25px">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-lock">
                  </i>
                </span>
                <input class="form-control" id="password" name="password" placeholder="password" required="" type="password">
                </input>
              </div>
              <div class="form-group" style="margin-top:10px">
                <div class="col-sm-12 controls">
                  <button class="btn btn-success" id="btn-login" type="submit">
                    Iniciar Sesión
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<div class="form-group">
  <div class="col-md-12 control">
    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
      No tiene una cuenta!
      <a href="registro.php">
        Registrate aquí
      </a>
    </div>
  </div>
</div>
