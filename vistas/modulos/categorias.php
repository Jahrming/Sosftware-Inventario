
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>categorias</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">categorias</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">



          <div class="box">
            <div class="box-header">

              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategorias">
              
              Agregar categorias

              </button>


           
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table  class="table table-bordered table-striped tablas">
                <thead>
                <tr>
                  <th>#</th>
                  <th>nombre</th>
                  <th>Fecha</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>


                  <?php

                    $item = null;
                    $valor = null;

                    $categorias = ControladorCategorias::ctrMostrarCategorias($item,$valor);


                    foreach($categorias as $key => $valores){

                      echo "

                      <tr>

                      <td>".($key+1)."</td>
                      <td>".$valores["nombre"]."</td>
                      <td>".$valores["fecha"]."</td>


                      <td>

                      <button class='btn btn-primary btnEditarCategorias' idCategoria=".$valores["id"]." data-toggle='modal' data-target='#modalEditarCategorias'>Editar</button>

                      <button class='btn btn-danger btnEliminarCategorias' idCategoria=".$valores["id"].">Eliminar</button>


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



  <div id="modalAgregarCategorias" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <form rool="form" method="post" action="">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Categorias</h4>
            
          </div>


          <div class="modal-body">

            <div class="box-body">

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="nombrecategoria" placeholder="Ingresar categoria">
                  
                </div>
                
              </div>



              
            </div>
            
          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar categoria</button>
            
          </div>
          

        </form>


        <?php

        $crearCategorias = new ControladorCategorias();
        $crearCategorias->ctrCrearCategorias();


        ?>
        
      </div>
      
    </div>
    
  </div>






  <div id="modalEditarCategorias" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <form rool="form" method="post" action="">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar Categorias</h4>
            
          </div>


          <div class="modal-body">

            <div class="box-body">


              <div class="form-group">

                <div class="input-group">


                  <input type="hidden" class="form-control input-lg" name="idcategoria" id="idcategoria">
                  
                </div>
                
              </div>




              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria">
                  
                </div>
                
              </div>





              
            </div>
            
          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Editar categorias</button>
            
          </div>
          

        </form>


        <?php

        $crearCategorias = new ControladorCategorias();
        $crearCategorias->ctrEditarCategorias();


        ?>
        
      </div>
      
    </div>
    
  </div>



        <?php

        $borrarCategorias = new ControladorCategorias();
        $borrarCategorias->ctrBorrarCategorias();


        ?>


     