<?php
/* Smarty version 3.1.30, created on 2018-04-18 16:38:04
  from "C:\xampp\htdocs\ProyectoDAW\src\views\backend\templates\brands.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad7584cc97270_69100407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2d998e91ea19bcce47117f1819a5927dfeb6f9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoDAW\\src\\views\\backend\\templates\\brands.tpl',
      1 => 1524062276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad7584cc97270_69100407 (Smarty_Internal_Template $_smarty_tpl) {
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
                                <?php if (isset($_smarty_tpl->tpl_vars['brands']->value)) {?>
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
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
                                                <tr>
                                                    <td>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox"/><span></span>
                                                        </label>
                                                    </td>
                                                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['brand']->value['ruta_img'];?>
" class="img-circle"/></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['brand']->value['nombre'];?>
</td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-small" data-id="<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
">
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
                                        <i class="fa fa-info-circle"></i> No hay ninguna marca registrada
                                    </div>
                                <?php }?>
                                
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
                                
                                <?php if (isset($_smarty_tpl->tpl_vars['models']->value)) {?>
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
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['models']->value, 'model');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['model']->value) {
?>
                                                <tr>
                                                    <td>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox"/><span></span>
                                                        </label>
                                                    </td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['model']->value['nombre'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['model']->value['marca'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['model']->value['cilindrada'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['model']->value['tipo_alquiler'];?>
</td>
                                                    <td><img src="#" class="img-circle"/></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['model']->value['total_vehiculos'];?>
</td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-small" data-id="<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
">
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
                                        <i class="fa fa-info-circle"></i> No hay ningún modelo registrado
                                    </div>
                                <?php }?>
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
