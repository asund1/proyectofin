<?php
/* Smarty version 3.1.30, created on 2018-04-09 22:22:26
  from "C:\xampp\htdocs\ProyectoDAW\src\views\backend\templates\index_backend.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acbcb8248faa5_65188962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a41fd76f422acb38b047ad4e243d021d00ccb8e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\backend\\templates\\index_backend.tpl',
      1 => 1523299739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:assets.tpl' => 1,
  ),
),false)) {
function content_5acbcb8248faa5_65188962 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <?php $_smarty_tpl->_subTemplateRender("file:assets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    <body>
        <div id="wrapper">
            <div class="vertical-align-wrap">
                <div class="vertical-align-middle">
                    
                    <!-- Login div -->
                    <div class="auth-box">
                        <div class="left">
                            <div class="content">

                                <div class="header">
                                    <p class="lead">Iniciar sesión en el panel de control</p>
                                </div>
                                <?php if (isset($_smarty_tpl->tpl_vars['loginInvalido']->value)) {?>
                                    <div class="alert alert-danger">
                                        Los datos no son válidos.
                                    </div>
                                <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['exit']->value)) {?>
                                    <div class="alert alert-success">
                                        Has cerrado sesión correctamente.
                                    </div>
                                <?php }?>
                                <form class="form-auth-small" action="<?php echo $_SERVER['PHP_SELF'];?>
" method="POST">
                                    <div class="form-group">
                                        <label for="email" class="control-label sr-only">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="control-label sr-only">Contraseña</label>
                                        <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login_btn">Iniciar sesión</button>
                                    <div class="bottom">
                                        <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Recuperar contraseña</a></span>
                                    </div>
                                </form>

                            </div>
                        </div>
                        
                        <div class="right">
                            <div class="overlay"></div>
                            <div class="content text">
                                <h1 class="heading">Free Bootstrap dashboard template</h1>
                                <p>by The Develovers</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </body>
</html>
        
    <?php }
}
