<?php
/* Smarty version 3.1.30, created on 2018-04-28 17:20:06
  from "C:\xampp\htdocs\ProyectoDAW\src\views\backend\templates\rent_resume.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae49126a86ca5_60412160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c4d7c8efb6ad2b3cab04327cc62b85bd2b6586c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\backend\\templates\\rent_resume.tpl',
      1 => 1524928803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae49126a86ca5_60412160 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
        
            <!-- Alquileres Activos -->
            <div class="col-md-6">
                <div class="panel">

                    <div class="panel-heading">
                        <h3 class="panel-title">Reservas activas</h3>
                        <div class="right">
                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                        </div>
                    </div>

                    <div class="panel-body">
                        <?php if (isset($_smarty_tpl->tpl_vars['reservas_activas']->value)) {?>
                            <table class="table table-striped datatable" data-page-length='10'>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Cliente</th>
                                        <th>Vehículo</th>
                                        <th>Fecha inicio</th>
                                        <th>Fecha fin</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservas_activas']->value, 'reserva');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reserva']->value) {
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['id'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['usuario'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['matricula'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['fecha_inicio'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['fecha_fin'];?>
</td>
                                            <?php if ($_smarty_tpl->tpl_vars['reserva']->value['fecha_fin'] < smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['config']->value['date'])) {?>
                                                <td><span class='label label-danger'>Retrasado</span></td>
                                            <?php } else { ?>
                                                <td><span class='label label-succes'>En fecha</span></td>
                                            <?php }?>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </tbody>
                            </table>
                        <?php } else { ?>
                            <div class='alert alert-info' role="alert">No existen reservas activas en este momento</div>
                        <?php }?>
                    </div>

                </div>
            </div>
            
            <!-- Nuevos alquileres -->
            <div class="col-md-6">
                <div class="panel">

                    <div class="panel-heading">
                        <h3 class="panel-title">Nuevas reservas</h3>
                        <div class="right">
                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped datatable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Cliente</th>
                                    <th>Vehículo</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha fin</th>
                                    <th>Importe total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pepe</td>
                                    <td>1765M</td>
                                    <td>12/12/12</td>
                                    <td>13/13/13</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Pepe</td>
                                    <td>1765M</td>
                                    <td>12/12/12</td>
                                    <td>13/13/13</td>
                                    <td>50</td>
                                </tr>
                            </tbody>


                        </table>
                    </div>

                </div>
            </div>
            
            <!-- Alquileres para toda al semana -->
            <div class="col-md-8">
                <div class="panel">

                    <div class="panel-heading">
                        <h3 class="panel-title">Reservas semana actual</h3>
                        <div class="right">
                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                        </div>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped datatable" data-page-length='10'>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Cliente</th>
                                    <th>Vehículo</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha fin</th>
                                    <th>Importe total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pepe</td>
                                    <td>1765M</td>
                                    <td>12/12/12</td>
                                    <td>13/13/13</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Pepe</td>
                                    <td>1765M</td>
                                    <td>12/12/12</td>
                                    <td>13/13/13</td>
                                    <td>50</td>
                                </tr>
                            </tbody>


                        </table>
                    </div>

                </div>
            </div>
            
        </div>
    </div>
</div><?php }
}
