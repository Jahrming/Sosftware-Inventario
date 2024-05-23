<?php

$item = null;
$valor = null;

$categorias = ControladorCategorias::ctrMostrarCategorias($item,$valor);

foreach ($categorias as $key => $value) {

  $datos[] = $value["id"];
}

$totalcategorias = count($datos);



$productos = ControladorProductos::ctrMostrarProductos($item,$valor);

foreach ($productos as $key => $valueP) {

  $datosP[] = $valueP["id"];
}

$totalproductos = count($datosP);





$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);

foreach ($usuarios as $key => $valueU) {

  $datosU[] = $valueU["id"];
}

$totalusuarios = count($datosU);






$entrada = ControladorEntradas::ctrMostrarEntradas($item,$valor);

foreach ($entrada as $key => $valueE) {

  $datosE[] = $valueE["id"];
}

$totalentradas = count($datosE);


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $totalcategorias;?></h3>

              <p>Categorias</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="categorias" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $totalcategorias;?><sup style="font-size: 20px"></sup></h3>

              <p>Productos</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="productos" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $totalusuarios;?></h3>

              <p>Usuarios</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="usuarios" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $totalentradas;?></h3>

              <p>Entradas Productos</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="entradas-p" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>