<?php
/* Smarty version 3.1.30, created on 2018-04-28 16:53:02
  from "C:\xampp\htdocs\ProyectoDAW\src\views\backend\templates\navbar_sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae48ace2036b3_83003891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd14c15fed95fc57711fd65559e134e9025f66c25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\backend\\templates\\navbar_sidebar.tpl',
      1 => 1524927179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae48ace2036b3_83003891 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left">
            <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
            </div>
        </form>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="lnr lnr-user"></i> <span>Mis datos</span></a></li>
                        <li><a href="index.php?salir"><i class="lnr lnr-exit"></i> <span>Salir</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->

<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <a href="<?php if ($_smarty_tpl->tpl_vars['subpage']->value) {?>../<?php }?>dashboard.php" class="<?php if ($_smarty_tpl->tpl_vars['page']->value == 'dashboard') {?>active<?php }?>">
                        <i class="lnr lnr-home"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed <?php if ($_smarty_tpl->tpl_vars['page']->value == 'vehicles' || $_smarty_tpl->tpl_vars['page']->value == 'brands') {?>active<?php }?>">
                        <i class="lnr lnr-bicycle"></i> <span>Gestión vehículos</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                    </a>
                    <div id="subPages" class="<?php if ($_smarty_tpl->tpl_vars['page']->value != 'vehicles' && $_smarty_tpl->tpl_vars['page']->value != 'brands') {?>collapse<?php }?>">
                        <ul class="nav">
                            <li><a href="<?php if ($_smarty_tpl->tpl_vars['subpage']->value) {?>../<?php }?>vehicles/vehicles.php" class="">Listado de vehículos</a></li>
                            <li><a href="<?php if ($_smarty_tpl->tpl_vars['subpage']->value) {?>../<?php }?>vehicles/brands.php" class="">Marcas / Modelos</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#subPages1" data-toggle="collapse" class="collapsed <?php if ($_smarty_tpl->tpl_vars['page']->value == 'rent_resume' || $_smarty_tpl->tpl_vars['page']->value == 'rent_list' || $_smarty_tpl->tpl_vars['page']->value == 'rent_types') {?>active<?php }?>">
                        <i class="lnr lnr-bookmark"></i> <span>Gestión alquiler</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                    </a>
                    <div id="subPages1" class="<?php if ($_smarty_tpl->tpl_vars['page']->value != 'rent_resume' && $_smarty_tpl->tpl_vars['page']->value != 'rent_list' && $_smarty_tpl->tpl_vars['page']->value != 'rent_types') {?>collapse<?php }?>">
                        <ul class="nav">
                            <li><a href="<?php if ($_smarty_tpl->tpl_vars['subpage']->value) {?>../<?php }?>rent/resume.php" class="">Resumen</a></li>
                            <li><a href="<?php if ($_smarty_tpl->tpl_vars['subpage']->value) {?>../<?php }?>rent/rent_list.php" class="">Listado alquileres</a></li>
                            <li><a href="<?php if ($_smarty_tpl->tpl_vars['subpage']->value) {?>../<?php }?>rent/rent_types.php" class="">Tipos de alquiler</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#subPages2" data-toggle="collapse" class="collapsed <?php if ($_smarty_tpl->tpl_vars['page']->value == 'user_list' || $_smarty_tpl->tpl_vars['page']->value == 'user_types') {?> active<?php }?>">
                        <i class="lnr lnr-user"></i> <span>Gestión usuarios</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                    </a>
                    <div id="subPages2" class="<?php if ($_smarty_tpl->tpl_vars['page']->value != 'user_list' && $_smarty_tpl->tpl_vars['page']->value != 'user_types') {?>collapse<?php }?> ">
                        <ul class="nav">
                            <li><a href="<?php if ($_smarty_tpl->tpl_vars['subpage']->value) {?>../<?php }?>users/user_list.php" class="">Listado de usuarios</a></li>
                            <li><a href="<?php if ($_smarty_tpl->tpl_vars['subpage']->value) {?>../<?php }?>user/user_types.php" class="">Tipos de usuarios</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR --><?php }
}
