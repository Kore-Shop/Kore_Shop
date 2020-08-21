<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $titulo ?> <small><?=$subtitulo ?></small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <?
      if ($cities!=false){
        ?>
        <table class="table table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th>No.</th>
              <th>Ciudad</th>
              <th>Población</th>
            </tr>
          </thead>
        <tbody>
        <?
        $contador = 0;
        //echo "Si hay ciudades";
        foreach ($cities->result() as $city) {
          echo "<tr><td>".++$contador."</td><td>$city->Name</td><td>$city->Population</td></tr>";
          if ($contador>20) {
            break;
          }
        }
          
        ?>
          </tbody>
        </table>
        <?
      }
      else
        echo "No hay información";
      ?>
    
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->