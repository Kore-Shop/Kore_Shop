<!DOCTYPE html>
<html lang="en">

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
  <link href="<?= base_url() ?>assets1/css/estilo_login.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">C A T A L O G O</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index">INICIO
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Registro">REGISTRARSE</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">ENTRAR</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <!--<div class="list-group">
          <a href="#" class="list-group-item">MUJERES</a>
          <a href="#" class="list-group-item">HOMBRES</a>
          <a href="#" class="list-group-item">NIÑOS</a>
        </div>-->

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">



        <div class="row">

          <div class="col-xs-12 col-md-8">
            <h2 style="text-align:center; color: white;">Registro de usuario</h2><br><br><br><br>
              <img src="<?= base_url() ?>assets1/Kore.PNG" style="width: 50%; margin: 10%; margin-top: -15%; margin-bottom: 8%; margin-left: 28%">
            <form class="col-12" style="opacity: 80%">
              <div class="form-group">
                <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Nombre" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="Apellido_p" id="Apellido_p" placeholder="Apellido paterno" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="Apellido_m" id="Apellido_m" placeholder="Apellido materno">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo electrónico" required="required">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="contraseña" required="required">
              </div>
              <div class="form-group">
                <input type="date" class="form-control" name="f_nac" id="f_nac" placeholder="Fecha nacimiento" required="required">
              </div>
              <div style="text-align:center;">
                <button type="submit" class="btn btn-light" name="aceptar" id="aceptar" style="background-color: #2AE7F9; border-radius: 30px; margin:5%; width: 40% color:black;">Registrarse
              </button>
              </div>
          </div>

          
        </form>       


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark" style="height: 5%">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; KoreSHOP 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url() ?>assets1/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
