<?php
/* Smarty version 3.1.30, created on 2018-05-21 18:15:49
  from "C:\xampp\htdocs\ProyectoDAW\src\views\frontend\templates\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b02f0b5e1cbd4_16075567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c09552d912173eade523f259f43abaa690c3bd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\frontend\\templates\\template.tpl',
      1 => 1526919346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:assets.tpl' => 1,
    'file:index.tpl' => 1,
    'file:condiciones.tpl' => 1,
    'file:about_us.tpl' => 1,
    'file:contacto.tpl' => 1,
    'file:registro.tpl' => 2,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b02f0b5e1cbd4_16075567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <?php $_smarty_tpl->_subTemplateRender("file:assets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php echo '<script'; ?>
 type="text/javascript" src="src/js/frontend.js"><?php echo '</script'; ?>
>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    <body>
        <div class="container-fluid">
            <!-- header -->
            <header class="row">
                

                    <div class="col-md-2 col-md-offset-2">
                        <img src="<?php if (isset($_smarty_tpl->tpl_vars['subpage']->value)) {?>../<?php }?>img/logo.png" alt="los angeles moto rent" class="img-responsive"/>
                    </div>

                    <div class="col-md-6  col-xs-12 ">
                        <div class="navbar-default">
                            <ul class="nav navbar-nav">
                                <li class="normal"><a href="#"><i class="fa fa-info-circle"></i> Sobre nosotros</a></li>
                                <li class="normal"><a href="#"><i class="fa fa-file-o"></i> Condiciones alquiler</a></li>
                                <li class="normal"><a href="#" data-toggle="modal" data-target="#modal_registro"><i class="fa fa-users"></i>  Registrarse</a></li>
                                <li class="normal"><a href="#" data-toggle="modal" data-target="#modal_login"><i class="fa fa-user-circle-o"></i>  Iniciar sesión</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o"></i> Mi cuenta</a>
                                    <ul class="dropdown-menu" id="dropdown">
                                        <li>Mis datos</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
            </header>

            <!-- Container -->
            <?php if ($_smarty_tpl->tpl_vars['page']->value == 'index') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'condiciones' || $_smarty_tpl->tpl_vars['page']->value == 'privacidad') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:condiciones.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'about_us') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:about_us.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'contacto') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'registro') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:registro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php }?>
            
            <!-- Modal para registros -->
            <?php $_smarty_tpl->_subTemplateRender("file:registro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            
            <!-- footer -->
            <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
    </body>
</html>
<?php }
}
