<?php
/* Smarty version 3.1.30, created on 2018-05-16 19:41:36
  from "C:\xampp\htdocs\ProyectoDAW\src\views\frontend\templates\condiciones.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5afc6d50e22706_33698811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b05bfe2468bc373f659148250b3430a3c586864' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\frontend\\templates\\condiciones.tpl',
      1 => 1526492495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5afc6d50e22706_33698811 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Contenido condiciones alquiler -->
<div class="row head_gradient">
    <div class="col-md-8 col-md-offset-2"> 
        <h1><i class="fa fa-arrow-circle-right"></i> 
            <?php if ($_smarty_tpl->tpl_vars['page']->value == 'condiciones') {?>Condiciones alquiler<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'privacidad') {?>Política de privacidad<?php }?>
            </h1>
    </div>
</div>

<div class="row white_div">
    <div class="col-md-8 col-md-offset-2 mt-15 mb-15">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condiciones']->value->article, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <h4 class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['article']->value->title;?>
</h4>
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value->resume;?>
</p>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->puntos->punto, 'punto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['punto']->value) {
?>
                <p><?php echo $_smarty_tpl->tpl_vars['punto']->value;?>
</p>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['punto']->value->subpuntos->subpunto, 'sub');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['sub']->value;?>
</li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>

</div><?php }
}
