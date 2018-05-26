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
                        {if isset($reservas_activas)}
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
                                    {foreach $reservas_activas as $reserva}
                                        <tr>
                                            <td>{$reserva['id']}</td>
                                            <td>{$reserva['usuario']}</td>
                                            <td>{$reserva['matricula']}</td>
                                            <td>{$reserva['fecha_inicio']}</td>
                                            <td>{$reserva['fecha_fin']}</td>
                                            {if $reserva['fecha_fin'] < $smarty.now|date_format:$config.date}
                                                <td><span class='label label-danger'>Retrasado</span></td>
                                            {else}
                                                <td><span class='label label-succes'>En fecha</span></td>
                                            {/if}
                                        </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        {else}
                            <div class='alert alert-info' role="alert">No existen reservas activas en este momento</div>
                        {/if}
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
</div>