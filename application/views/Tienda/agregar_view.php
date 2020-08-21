<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>K O R E S H O P</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url() ?>assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>assets1/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">KoreSHOP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index">CATÁLOGO
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="registro">REGISTRARSE
              <span class="sr-only">(current)</span>
            </a>
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

        <h1 class="my-4">KoreSHOP</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">AGREGAR NUEVO</a>
          <a href="#" class="list-group-item">CATALOGO GENERAL</a>
          <a href="#" class="list-group-item">SALIR</a>
        </div>
  

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">



          <div class="col-xs-12 col-md-8" >
            <h3>Resgistro para un nuevo producto</h3>
            <form>
              <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
              </div>
              <div class="form-group">
                <label>Categoria</label>
                <select name="categoria" id="categoria" class="form-control">
                  <option>Hombres</option>
                  <option>Mujeres</option>
                  <option>Niños</option>
                </select>
              </div>
              <div class="form-group">
                <label>Marca</label>
                <select name="marca" id="marca" class="form-control">
                  <option>ZARA</option>
                  <option>MANGO</option>
                  <option>BOSS</option>
                  <option>H&M</option>
                  <OPTGROUP>GOCCO</OPTGROUP>
                </select>
              </div>
              <div class="form-group">
                <label>Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" value="00.0" step="0.5" min="0">
              </div>

              <div class="form-group">
                <label>Descripción</label>
                <textarea name="description" id="description" class="form-control" placeholder="Escribir description"></textarea>
              </div>
              <div class="form-group">
                <label>Imagen</label>
                <input type="file" name="file" class="form-control">
              </div>
              <div>
                <button class="btn btn-primary" name="aceptar" id="aceptar">ACEPTAR</button>
              </div>
            </form>
            
          </div>




        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
  </div>
  

  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
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
