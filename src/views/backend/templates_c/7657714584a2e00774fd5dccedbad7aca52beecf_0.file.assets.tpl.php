<?php
/* Smarty version 3.1.30, created on 2018-04-09 22:22:26
  from "C:\xampp\htdocs\ProyectoDAW\src\views\backend\templates\assets.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acbcb8249f4a4_13037483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7657714584a2e00774fd5dccedbad7aca52beecf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\backend\\templates\\assets.tpl',
      1 => 1523200453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acbcb8249f4a4_13037483 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Meta -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">  
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.5/css/select.bootstrap.min.css">  
<?php echo '<script'; ?>
 type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.2.5/js/dataTables.select.min.js"><?php echo '</script'; ?>
>


<?php if (!$_smarty_tpl->tpl_vars['subpage']->value) {?>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../src/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../src/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../src/vendor/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../src/vendor/linearicons/style.css"/>

    <!-- JS -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../src/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../src/js/klorofil-common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../src/js/backend.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../src/js/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../src/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../src/vendor/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<?php } else { ?>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../../src/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../src/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="../../src/vendor/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../src/vendor/linearicons/style.css"/>

    <!-- JS -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../../src/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../src/js/klorofil-common.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../src/js/backend.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../src/js/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../src/vendor/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../src/vendor/jquery-slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
<?php }
}
}
