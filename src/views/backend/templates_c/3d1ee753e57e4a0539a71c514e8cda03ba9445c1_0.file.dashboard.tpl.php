<?php
/* Smarty version 3.1.30, created on 2018-04-08 16:25:58
  from "C:\xampp\htdocs\proyectodaw\src\views\backend\templates\dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aca2676ec21c6_16470544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d1ee753e57e4a0539a71c514e8cda03ba9445c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectodaw\\src\\views\\backend\\templates\\dashboard.tpl',
      1 => 1522775172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aca2676ec21c6_16470544 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <span class="number">111</span>
                                <span class="title">Reservas realizadas</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-euro"></i></span>
                            <p>
                                <span class="number">11 €</span>
                                <span class="title">Ingresos reservas</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-user-plus"></i></span>
                            <p>
                                <span class="number">11</span>
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
                                <tr>
                                    <td>1</td>
                                    <td>Pepe</td>
                                    <td>1765M</td>
                                    <td>12/12/12</td>
                                    <td>13/13/13</td>
                                    <td>33 €</td>
                                    <td><span class="label label-warning">Confirmado</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Pepe</td>
                                    <td>1765M</td>
                                    <td>12/12/12</td>
                                    <td>13/13/13</td>
                                    <td>33 €</td>
                                    <td><span class="label label-success">Activo</td>
                                </tr>
                            </tbody>


                        </table>
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
                                <tr>
                                    <td>1</td>
                                    <td>Pepe</td>
                                    <td>1765M</td>
                                    <td>12/12/12</td>
                                    <td>13/13/13</td>
                                    <td><span class="label label-success">En fecha</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Pepe</td>
                                    <td>1765M</td>
                                    <td>12/12/12</td>
                                    <td>13/13/13</td>
                                    <td><span class="label label-danger">Retrasado</td>
                                </tr>
                            </tbody>


                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- END RESERVAS ACTIVAS -->



    </div><!-- end .container-fluid-->
</div>
<!-- END CONTENT DASHBOARD INDEX --><?php }
}
