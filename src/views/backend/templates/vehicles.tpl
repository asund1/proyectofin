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
                        {if isset($list)}
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
                                    {foreach $list as $vehicle}
                                        <tr>
                                            <td>
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox"/><span></span>
                                                </label>
                                            </td>
                                            <td>{$vehicle['marca']}</td>
                                            <td>{$vehicle['modelo']}</td>
                                            <td>{$vehicle['matricula']}</td>
                                            <td>{$vehicle['cilindrada']} cc</td>
                                            <td>{$vehicle['precio_dia']} €</td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-small" data-idveh='{$vehicle['id']}'>
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
                                <i class="fa fa-info-circle"></i> No hay vehículos añadidos
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>