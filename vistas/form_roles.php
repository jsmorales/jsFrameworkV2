<!-- Form roles -->
<div class="modal fade" id="frm_modal_rol" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="lbl_form_rol">-</h4>
      </div>
      <div class="modal-body">
        <!-- form modal contenido -->

                <form id="form_rol" method="POST">
                <br>
                    <div class="form-group" hidden>                     
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pkID" name="pkID">
                        </div>
                    </div>
                                      
                    <div class="form-group">
                        <label for="fkID_tipo_usuario" class="control-label">Tipo Usuario</label>
                        
                        <?php $rolesInst->getSelectTipoUsuario(); ?>
                        <button id="btn_nuevotUsuario" type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal_tUsuario"><span class="glyphicon glyphicon-plus"></span></button>
                    
                    </div>

                    <div class="form-group">
                        <label for="fkID_modulo" class="control-label">Modulo</label>
                        
                        <?php $rolesInst->getSelectModulos(); ?>
                        <button id="btn_nuevomodulo" type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal_modulo"><span class="glyphicon glyphicon-plus"></span></button>
                    </div>
                    
                    <hr>
                    <h4>Permisos</h4>
                    <div class="checkbox">
                      <label>Crear</label>
                      <select name="crear" id="crear">
                        <option value="0">No</option>
                        <option value="1">Sí</option>
                      </select>
                      &nbsp
                      <label>Editar</label>
                      <select name="editar" id="editar">
                        <option value="0">No</option>
                        <option value="1">Sí</option>
                      </select>
                      &nbsp
                      <label>Eliminar</label>
                      <select name="eliminar" id="eliminar">
                        <option value="0">No</option>
                        <option value="1">Sí</option>
                      </select>
                      &nbsp
                      <label>Consultar</label>
                      <select name="consultar" id="consultar">
                        <option value="0">No</option>
                        <option value="1">Sí</option>
                      </select>
                    </div>


                </form>

        <!-- /form modal contenido-->
      </div>
      <div class="modal-footer">        
        <button id="btn_actionrol" type="button" class="btn btn-primary" data-action="-">
            <span id="lbl_btn_actionrol"></span>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- /form modal -->