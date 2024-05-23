
<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventario | Nandotíc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="vistas/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">


  <!-- librerias javascrit -->


  <!-- jQuery 3 -->
<script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="vistas/bower_components/jquery-ui/jquery-ui.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>




<!-- Morris.js charts -->
<script src="vistas/bower_components/raphael/raphael.min.js"></script>
<script src="vistas/bower_components/morris.js/morris.min.js"></script>

<!-- Sparkline -->
<script src="vistas/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="vistas/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>


<script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->

<script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->

<script src="vistas/dist/js/adminlte.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="vistas/dist/js/pages/dashboard.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="vistas/dist/js/demo.js"></script>




<!-- DataTables -->
<script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>







<!-- DataTables -->
<script src="vistas/bower_components/sweetalert2/sweetalert2.all.js"></script>





<!-- daterangepicker -->
<script src="vistas/bower_components/moment/min/moment.min.js"></script>
<script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- datepicker -->
<script src="vistas/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>




  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini login-page">

  
 

  <?php


  if (isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == "ok") {

    echo '<div class="wrapper">';


    include 'modulos/header.php';

    include 'modulos/menu.php';



  if (isset($_GET["ruta"])) {


    if ($_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "categorias" ||

     $_GET["ruta"] == "productos" ||
     $_GET["ruta"] == "salidas-p" || 
     $_GET["ruta"] == "entradas-p" ||
     $_GET["ruta"] == "ingreso"  ||
     $_GET["ruta"] == "salir"


     ) {


      include "modulos/".$_GET["ruta"].".php";

    }


   
  }else{

      include 'modulos/inicio/cajas.php';


  }






   include 'modulos/footer.php';


   echo '</div>';

   



    }else{

    


      include 'modulos/login.php';



    }




  ?>





 







<script src="vistas/js/plantilla.js"></script>

<script src="vistas/js/usuarios.js"></script>

<script src="vistas/js/categorias.js"></script>

<script src="vistas/js/productos.js"></script>

<script src="vistas/js/stock.js"></script>






</body>
</html>
