<?php
/* Smarty version 3.1.30, created on 2018-04-08 16:33:41
  from "C:\xampp\htdocs\proyectodaw\src\views\backend\templates\vehicles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aca28454716d4_18944890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4cd5e1455f0af37646af2e57f0061206f72d43f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectodaw\\src\\views\\backend\\templates\\vehicles.tpl',
      1 => 1522859959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aca28454716d4_18944890 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <tr>
                                    <td>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox"/><span></span>
                                        </label>
                                    </td>
                                    <td>Honda</td>
                                    <td>CRV</td>
                                    <td>2154JFM</td>
                                    <td>150 cc</td>
                                    <td>15 €</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-small">
                                            <i class="fa fa-pencil"></i> Editar
                                        </button>
                                    </td>     
                                </tr>
                                <tr>
                                    <td>
                                        <label class="fancy-checkbox">
                                            <input type="checkbox"/><span></span>
                                        </label>
                                    </td>
                                    <td>Yamaha</td>
                                    <td>JKF</td>
                                    <td>2154JFM</td>
                                    <td>250 cc</td>
                                    <td>35 €</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-small">
                                            <i class="fa fa-pencil"></i> Editar
                                        </button>
                                    </td>
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
