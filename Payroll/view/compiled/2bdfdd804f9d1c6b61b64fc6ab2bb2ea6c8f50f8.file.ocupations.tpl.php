<?php /* Smarty version Smarty-3.1.16, created on 2015-05-01 16:39:17
         compiled from "../Payroll/view/ocupations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:535320355543e9b856e6a5-40438628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bdfdd804f9d1c6b61b64fc6ab2bb2ea6c8f50f8' => 
    array (
      0 => '../Payroll/view/ocupations.tpl',
      1 => 1430519448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '535320355543e9b856e6a5-40438628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5543e9b85a3299_07951716',
  'variables' => 
  array (
    'tBody' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5543e9b85a3299_07951716')) {function content_5543e9b85a3299_07951716($_smarty_tpl) {?><div class="box-header">
    <a  name= "Agregar" class="btn btn-success btn-md" data-toggle="modal" data-target="#compose-modal" style="margin-left: 12px;">Agregar</a>
</div><!-- /.box-header -->  
<div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Ocupaciones</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Nombre</th>
                                                <th>Activo</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tBody']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
                                                <tr>
                                                    <td id="<?php echo $_smarty_tpl->tpl_vars['tBody']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['idocupation'];?>
ID" width='250'><?php echo $_smarty_tpl->tpl_vars['tBody']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['idocupation'];?>
</td>
                                                    <td id="<?php echo $_smarty_tpl->tpl_vars['tBody']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['idocupation'];?>
Name" width='250'><?php echo $_smarty_tpl->tpl_vars['tBody']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['ocupationname'];?>
</td>
                                                    <td align="center">
                                                        <?php if ($_smarty_tpl->tpl_vars['tBody']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['ocupationactive']=="t") {?>
                                                            <i id="<?php echo $_smarty_tpl->tpl_vars['tBody']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['idocupation'];?>
Active" class="fa fa-check-square-o"></i>
                                                        <?php } else { ?>
                                                            <i id="<?php echo $_smarty_tpl->tpl_vars['tBody']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['idocupation'];?>
Active" class="fa fa-square-o"></i>
                                                        <?php }?>
                                                    </td>
                                                    <td width = "300" class="text-center">
                                                        <a id ="<?php echo $_smarty_tpl->tpl_vars['tBody']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['idocupation'];?>
" data-toggle="modal" data-target="#compose-modal" class="btn btn-primary btn-sm" name="Editar">Editar</a>  
                                                        <a id ="<?php echo $_smarty_tpl->tpl_vars['tBody']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['idocupation'];?>
" data-toggle="modal" data-target="#confirm-delete" name = "Eliminar" class="btn btn-danger btn-sm" >Eliminar</a>
                                                    </td>
                                                </tr>
                                            <?php endfor; endif; ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->





 <!-- MODALS -->
        <div class="modal fade" id="compose-modal" name="x" tabindex="-1" role="dialog" aria-hidden="true" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 id="modal-title" class="modal-title"></h4>
                    </div>
                    <form id="modal_form" method="POST" ENCTYPE="multipart/form-data">
                        <div class="modal-body">
                            
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Nombre:</span>
                                    <input id="modalName" name="name" type="text" class="form-control" value="" placeholder="Nombre de la Categoría" maxlength="40" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id ="modalDescription" name="description" class="form-control" placeholder="Descripción de la Categoría" style="height: 120px;" maxlength="100"></textarea>
                            </div>
                            <div class="form-group-group">
                                
                                <div id="divCheckbox" class="input-group" >
                                    <span class="input-group-addon" >Activo:</span>&nbsp;&nbsp;&nbsp;
                                    <input id="modalActive" name="active" type="checkbox" value="Y">
                                </div>
                                <br>
                                <div class="btn btn-primary btn-file">
                                    <i class="fa fa-paperclip"></i> Subir Imagen
                                    <input type="file" name="uploadedfile" maxlength="100"/>
                                </div>
                               
                                <div><p id="prueba1" class="help-block">Max. 32MB</p></div>
                            </div>
                        </div>
                        <div class="modal-footer clearfix">
                            <button id="modalBtnAction" type="submit" ></button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                         <button class="close" aria-hidden="true" data-dismiss="modal" type="button" style="margin-right: 16px; margin-top: 15px;">x</button>
                         <h4 class="modal-title" style="margin-top: 16px; margin-left: 18px;">Eliminar Categoría</h4>
                         
                    <div class="modal-footer">
                        <span class="pull-left">Realmente desea eliminar la ocupación&nbsp;</span><span id="dat" class="pull-left"></span><span class="pull-left">&nbsp;?</span>
                        <br></br>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <a id="deleteLink"href="#" class="btn btn-danger danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div> 
 <!-- MODALS END -->
        
        
<script type="text/javascript">
/*    
$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));
});
    
    
    
    
$("a").on("click", function() {
            
            var oID = $(this).attr("id");
           
            if($(this).attr("name") === "Agregar"){
          
            $("#modal-title").html("Agregar Categoría");
            
            $("#modalName").val("");
            
            $("#modalDescription").val("");
           
            $("#modalBtnAction").html("Crear");
            $("#modalBtnAction").attr("class", "btn btn-success"); 
            $("#modal_form").attr("action", "categoriesActions.php?action=addCategories");
            }
            
            
           
            if($(this).attr("name") === "Editar"){
                    
                $("#modal-title").html("Editar Categoría");
                var id = (oID+"Name");
                var bla= $("#"+id).html();
                $("#modalName").val(bla);

                id = (oID+"Description");
                var bla= $("#"+id).html();
                $("#modalDescription").val(bla);


                id = (oID+"Active");
                var bla = $("#"+id).attr("class");

                if(bla === "fa fa-check-square-o"){
                    $("#divCheckbox").find("div.icheckbox_minimal").attr("aria-checked", "true");
                    $("#divCheckbox").find("div.icheckbox_minimal").addClass("checked");
                    $("#modalActive").attr('checked', '');
                }else{
                     $("#modalActive").removeAttr("checked");
                     $("#divCheckbox").find("div.icheckbox_minimal").attr("aria-checked", "false");
                     $("#divCheckbox").find("div.icheckbox_minimal").removeClass("checked");
                }


                $("#modalBtnAction").html("Guardar");
                $("#modalBtnAction").attr("class", "btn btn-primary");  
                $("#modal_form").attr("action", "categoriesActions.php?action=editCategories&&id="+oID);

            }
            
            
            
            if($(this).attr("name") === "Eliminar"){
                var id = (oID+"Name");
                var bla= $("#"+id).html();
                $("#dat").html(bla);
                $("#deleteLink").attr("href", "categoriesActions.php?action=deleteCategories&&id="+oID);
                
            }
            

} );
         

$('#modal_form').validate({
           rules: {
           'name': 'required'
           },
       messages: {
           'name': '* Campo requerido'    
       },
      
       
});


$(document).ready(function() {

        var x = $("#inNot").attr("value");
            if(x == "ADD_SUCCESS"){
                var n = noty({ldelim}text: 'Categoría agregada correctamente', type: 'success', layout: 'topRight', timeout: 3000, closeWith: ['hover']{rdelim});
            }
            if(x == "DELETE_SUCCESS"){
                var n = noty({ldelim}text: 'Categoría eliminada', type: 'warning', layout: 'topRight', timeout: 3000, closeWith: ['hover']{rdelim});
            }
            if(x == "EDIT_SUCCESS"){
                var n = noty({ldelim}text: 'Edición realizada con exito', type: 'information', layout: 'topRight', timeout: 3000, closeWith: ['hover']{rdelim});
            }
            if(x == "DELETE_ERROR_DB"){
                var n = noty({ldelim}text: 'La categoría se encuentra asociada con algún elemento', type: 'error', layout: 'topRight', timeout: 3000, closeWith: ['hover']{rdelim});
            }  
});            
*/
</script>
















                            <?php }} ?>
