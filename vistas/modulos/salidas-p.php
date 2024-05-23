
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>salidas de productos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">salidas de productos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">



          <div class="box">
            <div class="box-header">

           


           
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table  class="table table-bordered table-striped tablas">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Codigo</th>
                  <th>Descripcion</th>
                  <th>categoria</th>
                  <th>Salidas</th>
               
                </tr>
                </thead>
                <tbody>


                  <?php

                    $item = null;
                    $valor = null;

                    $salidas = ControladorEntradas::ctrMostrarSalidas($item,$valor);


                    foreach($salidas as $key => $valores){

                      $item = "id";
                      $valor = $valores["nombrecategoria"];

                      $cate = ControladorCategorias::ctrMostrarCategorias($item,$valor);

                      echo "

                      <tr>

                      <td>".($key+1)."</td>
                      <td>".$valores["codigo"]."</td>
                      <td>".$valores["descripcion"]."</td>
                      <td>".$cate["nombre"]."</td>
                      <td>".$valores["salida"]."</td>





                      </tr>

                      ";


                      
                    }


                  ?>


               
              


                </tbody>


               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

