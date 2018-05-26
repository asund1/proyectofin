<?php
/* Smarty version 3.1.30, created on 2018-04-08 16:58:47
  from "C:\xampp\htdocs\proyectodaw\src\views\backend\templates\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aca2e272acef5_78908681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f298ad4ac0a02ac28a4fc9467630b67c4709f52f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectodaw\\src\\views\\backend\\templates\\template.tpl',
      1 => 1523199518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:assets.tpl' => 1,
    'file:navbar_sidebar.tpl' => 1,
    'file:dashboard.tpl' => 1,
    'file:vehicles.tpl' => 1,
    'file:brands.tpl' => 1,
    'file:rent_resume.tpl' => 1,
  ),
),false)) {
function content_5aca2e272acef5_78908681 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php $_smarty_tpl->_subTemplateRender("file:navbar_sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            

            <!-- MAIN -->
            <div class="main">
                
                <?php if ($_smarty_tpl->tpl_vars['page']->value == "dashboard") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:dashboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "vehicles") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:vehicles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "brands") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:brands.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "rent_resume") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:rent_resume.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>
            </div>
            
        </div>
        
    </body>
</html>
        
    <?php }
}
