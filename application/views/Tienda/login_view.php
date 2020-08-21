<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">

  		<title>K O R E S H O P</title>

       <link rel="icon" type="image/png" href="<?= base_url() ?>assets1/icono.png" /> <!-- icono de la pagina -->

  	<!-- Bootstrap core CSS -->
  	<link href="<?= base_url() ?>assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  	<!-- Custom styles for this template -->
  	<link href="<?= base_url() ?>assets1/css/estilos_login.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Iniciar sesión</h5>
            <form class="form-signin">
              <label>Correo electrónico</label>
              <div class="form-label-group">

                <input type="email" id="correo" name="correo" class="form-control" placeholder="Correo electrónico" required="required">
                
              </div>
              <label for="inputPassword">Contraseña</label>
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required="required">
              
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Recordar contraseña</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>