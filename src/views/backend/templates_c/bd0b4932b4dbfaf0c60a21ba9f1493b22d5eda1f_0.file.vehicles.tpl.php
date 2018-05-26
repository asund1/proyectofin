<?php
/* Smarty version 3.1.30, created on 2018-04-16 19:22:27
  from "C:\xampp\htdocs\ProyectoDAW\src\views\backend\templates\vehicles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad4dbd3567cb4_59607300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd0b4932b4dbfaf0c60a21ba9f1493b22d5eda1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\backend\\templates\\vehicles.tpl',
      1 => 1523899343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad4dbd3567cb4_59607300 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-content">
    <div class="container-fluid">
        <!-- VEHICLES LIST -->
        <div class="panel panel-headline">
            
            <div class="panel-heading">
                <h3 class="panel-title">Listado de vehículos</h3>
            </div>
            
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-default"><i class="fa fa-plus-circle"></i> Añadir</button>
                        <button type="button" class="btn btn-default" disabled><i class="fa fa-trash-o"></i> Eliminar</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php if (isset($_smarty_tpl->tpl_vars['list']->value)) {?>
                             <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox"/><span></span>
                                            </label>
                                        </th>
                                        <th>Marca</th>
                                        <th>Modelo</th>
                                        <th>Matrícula</th>
                                        <th>Cilindrada</th>
                                        <th>Precio alquiler</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'vehicle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vehicle']->value) {
?>
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox"/><span></span>
                                                </label>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['marca'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['modelo'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['matricula'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['cilindrada'];?>
 cc</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['vehicle']->value['precio_dia'];?>
 €</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-small" data-idveh='<?php echo $_smarty_tpl->tpl_vars['vehicle']->value['id'];?>
'>
                                                    <i class="fa fa-pencil"></i> Editar
                                                </button>
                                            </td>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </tbody>
                             </table>
                        <?php } else { ?>
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-info-circle"></i> No hay vehículos añadidos
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div><?php }
}
