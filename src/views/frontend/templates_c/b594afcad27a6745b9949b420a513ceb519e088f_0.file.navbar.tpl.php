<?php
/* Smarty version 3.1.30, created on 2018-05-05 16:40:02
  from "C:\xampp\htdocs\ProyectoDAW\src\views\frontend\templates\navbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aedc242a37558_68328947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b594afcad27a6745b9949b420a513ceb519e088f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\frontend\\templates\\navbar.tpl',
      1 => 1525531201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aedc242a37558_68328947 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Nav bar -->
<div class="row">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_menu_h" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Inicio</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="nav_menu_h">
                <ul class="nav navbar-nav">
                    <li><a href="#">Sobre Nosotros <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Condiciones alquiler <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
                <!-- Menú mi cuenta -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Registro</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi cuenta <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mis datos</a></li>
                            <li><a href="#">Mis reservas</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div><?php }
}
