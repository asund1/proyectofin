<?php
/* Smarty version 3.1.30, created on 2018-04-17 19:02:35
  from "C:\xampp\htdocs\ProyectoDAW\src\views\backend\templates\dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad628ab6fd1a1_14779964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee33e56646af4ba55b395ddc6f879cc1cf7d6e18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\backend\\templates\\dashboard.tpl',
      1 => 1523898392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad628ab6fd1a1_14779964 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<!-- CONTENT DASHBOARD INDEX -->
<div class="main-content">
    <div class="container-fluid">

        <!-- RESUMEN -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Resumen semanal</h3>
                <p class="panel-subtitle">De 12/12/12 a 13/13/13</p>
            </div>

            <div class="panel-body">
                <div class="row">

                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                            <p>
                                <span class="number"><?php echo $_smarty_tpl->tpl_vars['total_reservas']->value;?>
</span>
                                <span class="title">Reservas realizadas</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-euro"></i></span>
                            <p>
                                <span class="number"><?php echo $_smarty_tpl->tpl_vars['total_ingresos']->value;?>
 €</span>
                                <span class="title">Ingresos reservas</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-user-plus"></i></span>
                            <p>
                                <span class="number"><?php echo $_smarty_tpl->tpl_vars['total_usuarios']->value;?>
</span>
                                <span class="title">Nuevos usuarios registrados</span>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END RESUMEN -->

        <!-- RECENT PURCHASES-->
        <div class="row">
            <div class="col-md-6">
                <div class="panel">

                    <div class="panel-heading">
                        <h3 class="panel-title">Reservas recientes</h3>
                        <div class="right">
                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                        </div>
                    </div>

                    <div class="panel-body no-padding">
                        <?php if (isset($_smarty_tpl->tpl_vars['reservas_recientes']->value)) {?>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Cliente</th>
                                        <th>Vehículo</th>
                                        <th>Fecha inicio</th>
                                        <th>Fecha fin</th>
                                        <th>Importe</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservas_recientes']->value, 'reserva');
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
                                        <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value['precio_total'];?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['reserva']->value['estado'] == 'confirmado') {?>
                                                <span class="label label-primary">Confirmado</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['reserva']->value['estado'] == 'cancelado') {?>
                                                <span class="label label-default">Cancelado</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['reserva']->value['estado'] == 'activo') {?>
                                                <span class="label label-success">Activo</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['reserva']->value['estado'] == 'finalizado') {?>
                                                <span class='label label-info'>Finalizado</span>
                                            <?php }?>
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
                                <i class="fa fa-info-circle"></i> No han habido reservas en las últimas 24 horas
                            </div>
                        <?php }?>
                    </div>

                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i>Últimas 24 horas</span></div>
                            <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">Ver todas las reservas</a></div>
                        </div>
                    </div>


                </div>
            </div>

            <!-- END RECENT PURCHASES -->

            <!-- RESERVAS ACTIVAS -->

            <div class="col-md-6">
                <div class="panel">

                    <div class="panel-heading">
                        <h3 class="panel-title">Reservas activas</h3>
                        <div class="right">
                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                            <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                        </div>
                    </div>

                    <div class="panel-body no-padding">
                        
                        <?php if (isset($_smarty_tpl->tpl_vars['reservas_activas']->value)) {?>
                            <table class="table table-striped">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservas_activas']->value, 'activa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['activa']->value) {
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['activa']->value['id'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['activa']->value['usuario'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['activa']->value['matricula'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['activa']->value['fecha_inicio'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['activa']->value['fecha_fin'];?>
</td>
                                            <?php if ($_smarty_tpl->tpl_vars['activa']->value['fecha_fin'] < smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['config']->value['date'])) {?>
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
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-info-circle"></i> No hay reservas activas en este momento
                            </div>
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>
        <!-- END RESERVAS ACTIVAS -->

    </div><!-- end .container-fluid-->
</div>
<!-- END CONTENT DASHBOARD INDEX --><?php }
}
