<?php
/* Smarty version 3.1.30, created on 2018-05-22 18:35:11
  from "C:\xampp\htdocs\ProyectoDAW\src\views\frontend\templates\registro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0446bf03fa42_39494849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a460be46b6999dd5f60783232212339f806ed0e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\frontend\\templates\\registro.tpl',
      1 => 1527006906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0446bf03fa42_39494849 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modal login -->
<div id="modal_login" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_maps_title">Inicio de sesión</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control input_normal" type="text" name="email" required="True"/>
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña:</label>
                        <input class="form-control input_normal" type="password" name="pass" required="True"/>
                    </div>
                    <div class="form-group">
                        <button role="button" class="btn btn-blue" type="submit">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal registro -->
<div id="modal_registro" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modal_maps_title">Registro de usuario</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form_registro" action="registro.php" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre: *</label>
                            <input class="form-control input_normal" type="text" name="nombre" required="True"/>
                        </div>
                        <div class="form-group">
                            <label for="apellidos">Apellidos: *</label>
                            <input class="form-control input_normal" type="text" name="apellidos" required="True"/>
                        </div>
                        <div class="form-group">
                        <label for="email">Email: *</label>
                        <input class="form-control input_normal" type="text" name="email" required="True"/>
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña: *</label>
                        <input class="form-control input_normal" type="password" name="pass" required="True"/>
                    </div>
                    <div class="form-group">
                        <label for="pass_conf">Confirmar contraseña: *</label>
                        <input class="form-control input_normal" type="password" name="pass_conf" required="True"/>
                    </div>
                    <div class="form-group">
                        <button role="button" class="btn btn-blue" type="submit" name="regbtn">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
