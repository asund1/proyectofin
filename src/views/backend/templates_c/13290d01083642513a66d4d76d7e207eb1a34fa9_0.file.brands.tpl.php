<?php
/* Smarty version 3.1.30, created on 2018-04-08 16:33:45
  from "C:\xampp\htdocs\proyectodaw\src\views\backend\templates\brands.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aca28495be9b2_26540834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13290d01083642513a66d4d76d7e207eb1a34fa9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectodaw\\src\\views\\backend\\templates\\brands.tpl',
      1 => 1522946555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aca28495be9b2_26540834 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
        <!-- MARCAS -->
        
            <div class="col-md-6">
                <div class="panel ">

                    <div class="panel-heading">
                        <h3 class="panel-title">Listado de marcas</h3>
                        <div class="right">
                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        </div>
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
                                <table class="table table-striped">
                                    <thead>
                                    <th>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox"/><span></span>
                                        </label>
                                    </th>
                                    <th>Logo</th>
                                    <th>Nombre</th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                    <td>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox"/><span></span>
                                        </label>
                                    </td>
                                    <td><img src="#" class="img-circle"/></td>
                                    <td>Honda</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-small">
                                            <i class="fa fa-pencil"></i> Editar
                                        </button>
                                    </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        
            <!-- END MARCAS -->
            <div class="col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">TOP 5</h3>
                        <p class="panel-subtitle">Modelos más alquilados</p>
                        <div class="right">
                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CHART MODELOS -->
        </div>
        
        <!-- END CHART MODELOS -->
        
        <!-- MODELOS -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-headline">

                    <div class="panel-heading">
                        <h3 class="panel-title">Listado de modelos</h3>
                        <div class="right">
                            <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                        </div>
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
                                <table class="table table-striped">
                                    <thead>
                                    <th>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox"/><span></span>
                                        </label>
                                    </th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Cilindrada</th>
                                    <th>Tipo de alquiler</th>
                                    <th>Imagen</th>
                                    <th>Total de vehículos</th>
                                    <th></th>
                                    </thead>
                                    <tbody>
                                    <td>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox"/><span></span>
                                        </label>
                                    </td>
                                    <td>CRV</td>
                                    <td>Honda</td>
                                    <td>250</td>
                                    <td>Estándar</td>
                                    <td><img src="#" class="img-circle"/></td>
                                    <td>12</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-small">
                                            <i class="fa fa-pencil"></i> Editar
                                        </button>
                                    </td>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <!-- END MODELOS -->
    </div>
</div><?php }
}
