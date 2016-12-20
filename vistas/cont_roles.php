<?php 

  include("../controller/RolesController.php");
  include('../conexion/datos.php');

  $rolesInst = new RolesController();

  $arrPermisos = $rolesInst->getPermisosModulo_Tipo($id_modulo,$_COOKIE[$NomCookiesApp."_IDtipo"]);

  $crea = $arrPermisos[0]["crear"];
 
  include('form_roles.php'); 
  include('form_tUsuario.php');
  include('form_modulo.php');
 ?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->


<div id="page-wrapper" style="margin: 0px;">

  <div class="row">

      <div class="col-lg-12">
          <h1 class="page-header">Roles</h1> 
      </div>        
      <!-- /.col-lg-12 -->
      
  </div>
  <!-- /.row -->

  <div class="row">    
      
      <div class="col-lg-12">
        
        <div class="panel panel-default">

          <div class="panel-heading">

            <div class="row">
              <div class="col-md-6">
                  Registro de Roles
              </div>
              <div class="col-md-6 text-right">
                 <button id="btn_nuevoRol" type="button" class="btn btn-primary" data-toggle="modal" data-target="#frm_modal_rol" <?php if ($crea != 1){echo 'disabled="disabled"';} ?> ><span class="glyphicon glyphicon-plus"></span> Nuevo Rol</button>
              </div>
            </div>

          </div>
          <!-- /.panel-heading -->
        
        <div class="panel-body">

          <div class="dataTable_wrapper">
              <table class="table table-striped table-bordered table-hover" id="tbl_rol">
                  <thead>
                      <tr>
                          <!--<th>ID rol</th>-->
                          <th>Tipo Usuario</th>
                          <th>Modulo</th>
                          <th>Crear</th>                                                            
                          <th>Editar</th>
                          <th>Eliminar</th>
                          <th>Consultar</th>
                          <th>Opciones</th>                                               
                      </tr>
                  </thead>

                  <tbody>
                      <?php
                          //print_r($_COOKIE); 
                          $rolesInst->getTablaRoles();                           
                       ?>
                  </tbody>
              </table>
          </div>
          <!-- /.table-responsive -->
        
        </div>
        <!-- /.panel-body -->

        </div>
        <!-- /.panel -->
      
      </div>
      <!-- /.col-lg-12 -->
    
    </div>
    <!-- /.row -->
                
</div>
<!-- /#page-wrapper -->