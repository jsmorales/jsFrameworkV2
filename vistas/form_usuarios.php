<!-- Form usuarios -->
<div class="modal fade bs-example-modal-lg" id="frm_modal_usuario" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="lbl_form_usuario">-</h4>
      </div>
      <div class="modal-body">
        <!-- form modal contenido -->

                <form id="form_usuario" class="form-horizontal" method="POST">
                <br>
                    <div class="form-group " hidden>                     
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pkID" name="pkID">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="alias" class="col-sm-2 control-label">Alias</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alias" name="alias" placeholder="Nombre de usuario en el sistema" required = "true">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass" class="col-sm-2 control-label">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña de usuario en el sistema" required = "true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del usuario" required = "true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos del usuario" >
                        </div>
                    </div>                

                    <div class="form-group">
                        <label for="fkID_tipo" class="col-sm-2 control-label">Tipo de Usuario</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="fkID_tipo" name="fkID_tipo" <?php if ($crea != 1){echo 'disabled="disabled"';} ?> required = "true">
                              <option></option>
                              <?php 
                                  $usuariosInst->getSelectTipoUsuarios();
                               ?>
                            </select>
                        </div>
                    </div>


                </form>

        <!-- /form modal contenido-->
      </div>
      <div class="modal-footer">        
        <button id="btn_actionusuario" type="button" class="btn btn-primary" data-action="-">
            <span id="lbl_btn_actionusuario"></span>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- /form modal -->