<?php

  //ini_set('error_reporting', E_ALL|E_STRICT);
  //ini_set('display_errors', 1);  

  include("../controller/UsuariosController.php");   
  include('../conexion/datos.php');

  $usuariosInst = new usuariosController();

  //$permisosInst = new permisosController();

  $arrPermisos = $usuariosInst->getPermisosModulo_Tipo($id_modulo,$_COOKIE[$NomCookiesApp."_IDtipo"]);

  $crea = $arrPermisos[0]["crear"];

 ?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->
<?php 
  include("form_usuarios.php");
 ?>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++  -->

<div id="page-wrapper" style="margin: 0px;">

  <div class="row">

      <div class="col-lg-12">
          <h1 class="page-header">Usuarios</h1> 
      </div>        
      <!-- /.col-lg-12 -->
      
  </div>
  <!-- /.row -->

  <div class="row">

    <?php //echo 'el perfil es '.$_COOKIE["log_lunelAdmin_tipo"];; ?>
      
      <div class="col-lg-12">
        
        <div class="panel panel-default">

          <div class="panel-heading">

            <div class="row">
              <div class="col-md-6">
                  Registro de Usuarios
              </div>
              <div class="col-md-6 text-right">
                 <button id="btn_nuevoUsuario" type="button" class="btn btn-primary" data-toggle="modal" data-target="#frm_modal_usuario" <?php if ($crea != 1){echo 'disabled="disabled"';} ?> ><span class="glyphicon glyphicon-plus"></span> Nuevo usuario</button>  
              </div>
            </div>

          </div>
          <!-- /.panel-heading -->
        
        <div class="panel-body">

          <div class="dataTable_wrapper">
              <table class="display table table-striped table-bordered table-hover" id="tbl_usuario">
                  <thead>
                      <tr>
                          <th>ID usuario</th>
                          <th>Alias</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>                                                            
                          <th>Tipo</th>
                          <th>Opciones</th>                                               
                      </tr>
                  </thead>

                  <tbody>
                      <?php
                          //print_r($_COOKIE); 
                          //echo "valor de cookie de tipo ".$_COOKIE[$NomCookiesApp."_tipo"];
                          $usuariosInst->getTablaUsuarios($_COOKIE[$NomCookiesApp."_tipo"]);                           
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