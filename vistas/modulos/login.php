
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Nando</b>Tìc</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Accede al panel de administracion</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="ingresoUsuario" class="form-control" placeholder="usuario">

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">

        <input type="password" name="password" class="form-control" placeholder="Password">

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
       
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block ">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <?php

      $login =  new ControladorUsuarios();
      $login->ctrIngresarUsuario();

    ?>

    


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

