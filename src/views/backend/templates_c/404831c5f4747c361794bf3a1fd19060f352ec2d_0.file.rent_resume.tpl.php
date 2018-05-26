<?php
/* Smarty version 3.1.30, created on 2018-04-09 19:12:35
  from "C:\xampp\htdocs\proyectodaw\src\views\backend\templates\rent_resume.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acb9f035ea525_56718968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '404831c5f4747c361794bf3a1fd19060f352ec2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectodaw\\src\\views\\backend\\templates\\rent_resume.tpl',
      1 => 1523293933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acb9f035ea525_56718968 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h3 class="panel-title">Alquileres semana actual</h3>
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
