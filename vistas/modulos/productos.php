
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>Productos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Productos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">



          <div class="box">
            <div class="box-header">

              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuarios">
              
              Agregar Productos 

              </button>


           
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table  class="table table-bordered table-striped tablas">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Categoria</th>
                  <th>codigo</th>
                  <th>descripcion</th>
                  <th>stock</th>
                  <th>precio</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>


                  <?php

                    $item = null;
                    $valor = null;

                    $productos = ControladorProductos::ctrMostrarProductos($item,$valor);


                    foreach($productos as $key => $valores){

                      $item = "id";
                      $valor = $valores["idcategoria"];

                      $cate = ControladorCategorias::ctrMostrarCategorias($item,$valor);

                      echo "

                      <tr>

                      <td>".($key+1)."</td>
                      <td>".$cate["nombre"]."</td>
                      <td>".$valores["codigo"]."</td>
                      <td>".$valores["descripcion"]."</td>
                      <td>".$valores["stock"]."</td>
                      <td>$ ".$valores["precio"]."</td>


                      <td>

                      <button class='btn btn-primary btnEditarProductos' idProductos=".$valores["id"]." data-toggle='modal' data-target='#modalEditarUsuarios'>Editar</button>

                      <button class='btn btn-danger btnEliminarProductos' idProductos=".$valores["id"]."> Eliminar</button>


                         <button class='btn btn-primary btnEntrada' idProductos=".$valores["id"]." data-toggle='modal' data-target='#modalEntrada'><i class='fa fa-plus'></i></button>

                          <button class='btn btn-primary btnSalida' idProductos=".$valores["id"]." data-toggle='modal' data-target='#modalSalida'><i class='fa fa-minus'></i></button>

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

            <h4 class="modal-title">Agregar Producto</h4>
            
          </div>


          <div class="modal-body">

            <div class="box-body">

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                 <select class="form-control input-lg" name="categoria">

                  <option value="">Seleccionar Categoria</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorCategorias::ctrMostrarCategorias($item,$valor);

                  foreach($categorias as $key => $datos){

                    echo "<option value=".$datos["id"].">".$datos["nombre"]."</option>";


                  }


                  ?>
                   
                 </select>
                  
                </div>
                
              </div>



               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <input type="text" class="form-control input-lg" name="codigo" placeholder="Ingresar codigo">
                  
                </div>
                
              </div>


               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg" name="descripcion" placeholder="Ingresar descripcion">
                  
                </div>
                
              </div>



               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="text" class="form-control input-lg" name="stock" placeholder="Ingresar stock">
                  
                </div>
                
              </div>


               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="number" class="form-control input-lg" name="precio" placeholder="Ingresar precio">
                  
                </div>
                
              </div>



              
            </div>
            
          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Producto</button>
            
          </div>
          

        </form>


        <?php

        $crearUsuarios = new ControladorProductos();
        $crearUsuarios->ctrCrearProductos();


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

            <h4 class="modal-title">Editar Productos</h4>
            
          </div>


          <div class="modal-body">

            <div class="box-body">


              <div class="form-group">

                <div class="input-group">


                  <input type="hidden" class="form-control input-lg" name="idproductos" id="idproductos">
                  
                </div>
                
              </div>



                  <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                 <select class="form-control input-lg" name="editarCategoria">

                  <option id="editarCategoria"></option>

      
                 </select>
                  
                </div>
                
              </div>


               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-users"></i></span>

                  <input type="text" class="form-control input-lg" name="editarCodigo" id="editarCodigo">
                  
                </div>
                
              </div>


               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="text" class="form-control input-lg" name="editarDescripcion" id="editarDescripcion" >
                  
                </div>
                
              </div>



               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="text" class="form-control input-lg" name="editarStock" id="editarStock">
                  
                </div>
                
              </div>


                 <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="text" class="form-control input-lg" name="editarPrecio" id="editarPrecio">
                  
                </div>
                
              </div>







              
            </div>
            
          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Editar Producto</button>
            
          </div>
          

        </form>


        <?php

        $crearP = new ControladorProductos();
        $crearP->ctrEditarProductos();


        ?>
        
      </div>
      
    </div>
    
  </div>



        <?php

        $borrar = new ControladorProductos();
        $borrar->ctrBorrarProductos();


        ?>











  <div id="modalEntrada" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <form rool="form" method="post" action="">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Entrada Stock</h4>
            
          </div>


          <div class="modal-body">

            <div class="box-body">


               <div class="form-group">

                
                  <input type="hidden" class="form-control input-lg" name="entradaid" id="entradaid">
                  
              
                
              </div>


                <div class="form-group">

                
                  <input type="hidden" class="form-control input-lg" name="entradaCodigo" id="entradaCodigo">
                  
              
                
              </div>


               <div class="form-group">

                
                  <input type="hidden" class="form-control input-lg" name="entradaDescripcion" id="entradaDescripcion">
                  
              
                
              </div>



                 <div class="form-group">

                
                  <input type="hidden" class="form-control input-lg" name="entradaCategoria" id="entradaCategoria">
                  
              
                
              </div>




             

               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="number" class="form-control input-lg" name="entrada" placeholder="Ingresar entrada stock">
                  
                </div>
                
              </div>



              
            </div>
            
          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Stock</button>
            
          </div>
          

        </form>


        <?php

        $crearEntrada = new ControladorProductos();
        $crearEntrada->ctrCrearEntrada();


        ?>
        
      </div>
      
    </div>
    
  </div>










  <div id="modalSalida" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <div class="modal-content">

        <form rool="form" method="post" action="">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Salida Stock</h4>
            
          </div>


          <div class="modal-body">

            <div class="box-body">


               <div class="form-group">

                
                  <input type="hidden" class="form-control input-lg" name="salidaid" id="salidaid">
                  
              
                
              </div>


                <div class="form-group">

                
                  <input type="hidden" class="form-control input-lg" name="salidaCodigo" id="salidaCodigo">
                  
              
                
              </div>


               <div class="form-group">

                
                  <input type="hidden" class="form-control input-lg" name="salidaDescripcion" id="salidaDescripcion">
                  
              
                
              </div>



                 <div class="form-group">

                
                  <input type="hidden" class="form-control input-lg" name="salidaCategoria" id="salidaCategoria">
                  
              
                
              </div>




             

               <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-th"></i></span>

                  <input type="number" class="form-control input-lg" name="salida" placeholder="Ingresar salida stock">
                  
                </div>
                
              </div>



              
            </div>
            
          </div>



          <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar Salida</button>
            
          </div>
          

        </form>


        <?php

        $crearSalida = new ControladorProductos();
        $crearSalida->ctrCrearSalida();


        ?>
        
      </div>
      
    </div>
    
  </div>





     