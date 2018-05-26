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
                                {if isset($brands)}
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
                                            {foreach $brands as $brand}
                                                <tr>
                                                    <td>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox"/><span></span>
                                                        </label>
                                                    </td>
                                                    <td><img src="{$brand['ruta_img']}" class="img-circle"/></td>
                                                    <td>{$brand['nombre']}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-small" data-id="{$brand['id']}">
                                                            <i class="fa fa-pencil"></i> Editar
                                                        </button>
                                                    </td>
                                                </tr>
                                            {/foreach}
                                            
                                        </tbody>
                                    </table>
                                    
                                {else}
                                    <div class="alert alert-info alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <i class="fa fa-info-circle"></i> No hay ninguna marca registrada
                                    </div>
                                {/if}
                                
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
                                
                                {if isset($models)}
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
                                            {foreach $models as $model}
                                                <tr>
                                                    <td>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox"/><span></span>
                                                        </label>
                                                    </td>
                                                    <td>{$model['nombre']}</td>
                                                    <td>{$model['marca']}</td>
                                                    <td>{$model['cilindrada']}</td>
                                                    <td>{$model['tipo_alquiler']}</td>
                                                    <td><img src="#" class="img-circle"/></td>
                                                    <td>{$model['total_vehiculos']}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-small" data-id="{$model['id']}">
                                                            <i class="fa fa-pencil"></i> Editar
                                                        </button>
                                                    </td>
                                                </tr>
                                            {/foreach}
                                        </tbody>
                                    </table>
                                {else}
                                    <div class="alert alert-info alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <i class="fa fa-info-circle"></i> No hay ningún modelo registrado
                                    </div>
                                {/if}
                            </div>
                            
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <!-- END MODELOS -->
    </div>
</div>