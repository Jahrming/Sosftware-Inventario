
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>usuarios</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">



          <div class="box">
            <div class="box-header">

              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuarios">
              
              Agregar Usuarios  

              </button>


           
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table  class="table table-bordered table-striped tablas">
                <thead>
                <tr>
                  <th>#</th>
                  <th>nombre</th>
                  <th>usuario</th>
                  <th>perfil</th>
                  <th>Fecha</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>


                  <?php

                    $item = null;
                    $valor = null;

                    $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);


                    foreach($usuarios as $key => $valores){

                      echo "

                      <tr>

                      <td>".($key+1)."</td>
                      <td>".$valores["nombre"]."</td>
                      <td>".$valores["usuario"]."</td>
                      <td>".$valores["perfil"]."</td>
                      <td>".$valores["fecha"]."</td>


                      <td>

                      <button class='btn btn-primary btnEditarUsuario' idUsuario=".$valores["id"]." data-toggle='modal' data-target='#modalEditarUsuarios'>Editar</button>

                      <button class='btn btn-danger btnEliminarUsuario' idUsuario=".$valores["id"].">Eliminar</button>


                      </td>



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



  <div id="modalAgregarUsuarios" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <form rool="form" method="post" action="">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Usuarios</h4>
            
          </div>


          <div class="modal-body">

            <div class="box-body">

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="nombre" placeholder="Ingresar Nombre">
                  
                </div>
                
              </div>



               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <input type="text" class="form-control input-lg" name="usuario" placeholder="Ingresar Usuario">
                  
                </div>
                
              </div>


               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="password" class="form-control input-lg" name="password" placeholder="Ingresar Contraseña">
                  
                </div>
                
              </div>



               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="text" class="form-control input-lg" name="perfil" placeholder="Ingresar Perfil">
                  
                </div>
                
              </div>



              
            </div>
            
          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Usuario</button>
            
          </div>
          

        </form>


        <?php

        $crearUsuarios = new ControladorUsuarios();
        $crearUsuarios->ctrCrearUsuarios();


        ?>
        
      </div>
      
    </div>
    
  </div>






  <div id="modalEditarUsuarios" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <form rool="form" method="post" action="">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Usuarios</h4>
            
          </div>


          <div class="modal-body">

            <div class="box-body">


              <div class="form-group">

                <div class="input-group">


                  <input type="hidden" class="form-control input-lg" name="id" id="id">
                  
                </div>
                
              </div>




              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre">
                  
                </div>
                
              </div>



               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <input type="text" class="form-control input-lg" name="editarUsuario" id="editarUsuario">
                  
                </div>
                
              </div>


               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="password" class="form-control input-lg" name="editarPassword" >
                  
                </div>
                
              </div>



               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="text" class="form-control input-lg" name="editarPerfil" id="editarPerfil">
                  
                </div>
                
              </div>



              
            </div>
            
          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Editar Usuario</button>
            
          </div>
          

        </form>


        <?php

        $crearUsuarios = new ControladorUsuarios();
        $crearUsuarios->ctrEditarUsuarios();


        ?>
        
      </div>
      
    </div>
    
  </div>



        <?php

        $crearUsuarios = new ControladorUsuarios();
        $crearUsuarios->ctrBorrarUsuarios();


        ?>


     