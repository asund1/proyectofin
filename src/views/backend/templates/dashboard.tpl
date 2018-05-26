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
                                <span class="number">{$total_reservas}</span>
                                <span class="title">Reservas realizadas</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-euro"></i></span>
                            <p>
                                <span class="number">{$total_ingresos} €</span>
                                <span class="title">Ingresos reservas</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-user-plus"></i></span>
                            <p>
                                <span class="number">{$total_usuarios}</span>
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
                        {if isset($reservas_recientes)}
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
                                    {foreach $reservas_recientes as $reserva}
                                    <tr>
                                        <td>{$reserva['id']}</td>
                                        <td>{$reserva['usuario']}</td>
                                        <td>{$reserva['matricula']}</td>
                                        <td>{$reserva['fecha_inicio']}</td>
                                        <td>{$reserva['fecha_fin']}</td>
                                        <td>{$reserva['precio_total']}</td>
                                        <td>
                                            {if $reserva['estado'] == 'confirmado'}
                                                <span class="label label-primary">Confirmado</span>
                                            {else if $reserva['estado'] == 'cancelado'}
                                                <span class="label label-default">Cancelado</span>
                                            {else if $reserva['estado'] == 'activo'}
                                                <span class="label label-success">Activo</span>
                                            {else if $reserva['estado'] == 'finalizado'}
                                                <span class='label label-info'>Finalizado</span>
                                            {/if}
                                        </td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        {else}
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-info-circle"></i> No han habido reservas en las últimas 24 horas
                            </div>
                        {/if}
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
                        
                        {if isset($reservas_activas)}
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
                                    {foreach $reservas_activas as $activa}
                                        <tr>
                                            <td>{$activa['id']}</td>
                                            <td>{$activa['usuario']}</td>
                                            <td>{$activa['matricula']}</td>
                                            <td>{$activa['fecha_inicio']}</td>
                                            <td>{$activa['fecha_fin']}</td>
                                            {if $activa['fecha_fin'] < $smarty.now|date_format:$config.date}
                                                <td><span class='label label-danger'>Retrasado</span></td>
                                            {else}
                                                <td><span class='label label-succes'>En fecha</span></td>
                                            {/if}
                                            
                                        </tr>
                                    {/foreach}

                                </tbody>
                            </table>                            
                        {else}
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <i class="fa fa-info-circle"></i> No hay reservas activas en este momento
                            </div>
                        {/if}
                    </div>

                </div>
            </div>
        </div>
        <!-- END RESERVAS ACTIVAS -->

    </div><!-- end .container-fluid-->
</div>
<!-- END CONTENT DASHBOARD INDEX -->