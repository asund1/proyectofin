
<!-- Contenido index -->
<!-- Skyline img - Título -->
<div class="row" id="skyline">
    <div class="col-md-8 col-md-offset-2">
        <h1>Alquiler de motocicletas en Sevilla</h1>
    </div>
</div>

<!-- Form ROW -->
<div class="row" id="form_rent_index">
    <!-- Form -->
    <div class="col-md-4 col-md-offset-2">

        <div id="form_rent_div">
            <form>
                <label for="from_date">Fecha alquiler:</label>
                <label for="from_hour" class="sr-only">Hora recogida:</label>
                <div class="input-group mb-10">
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                    <input type="text" class="datepicker form-control" name="from_date" id="from_date"/>
                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                    <input type="text" class="datepicker form-control" name="from_hour" id="from_hour"/>
                </div>
                <label for="to_date">Alquiler hasta:</label>
                <label for="to_hour" class="sr-only">Hora entrega:</label>
                <div class="input-group mb-15">
                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                    <input type="text" class="datepicker form-control" name="to_date" id="to_date"/>
                    <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                    <input type="text" class="datepicker form-control" name="to_hour" id="to_hour"/>
                </div>
                <button type="submit" class="btn btn-search-rent" name="rent_form_btn">Buscar</button>
            </form>
        </div>
        <!-- Logos -->
        <div class="text-center" id="logos_info">
            <img src="img/casco.png" alt="casco incluído"/>
            <img src="img/asistencia.png" alt="asistencia en carretera"/>
            <img src="img/seguro.png" alt="seguro a todo riesgo"/>
        </div>
    </div>

    <!-- Info -->
    <div class="col-md-4">
        <div class="margin_form_rent">
            <ul id="rent_info_form">
                <li><i class="fa fa-check-circle-o"></i> Cancelación gratuita</li>
                <li><i class="fa fa-check-circle-o"></i> Sin costes ocultos</li>
                <li><i class="fa fa-check-circle-o"></i> Casco incluído</li>
                <li><i class="fa fa-check-circle-o"></i> Kilometraje ilimitado</li>
            </ul>
        </div>
    </div>
</div>

<!-- Vehículos -->
<div class="row" id="thumbnail_img_div">
    <div class="col-md-8 col-md-offset-2">
        <h3>Algunos de nuestros vehículos</h3>
        <div class="col-md-3">
            <div>
                <img class="img-responsive" src="img/motos/img1.jpg" alt="Plaza de España">
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <img class="img-responsive" src="img/motos/img2.jpg" alt="Torre del Oro">
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <img class="img-responsive" src="img/motos/img3.jpg" alt="Real Alcázar">
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <img class="img-responsive" src="img/motos/img4.jpg" alt="Catedral">
            </div>
        </div>
    </div>
</div>


<!-- Tour Sevilla -->
<div class="row" id="thumbnail_img_div">
    <div class="col-md-8 col-md-offset-2">
        <h3>Conoce Sevilla</h3>
        <div class="col-md-3">
            <div>
                <img class="img-responsive" src="img/sevilla/plaza_espana.jpg" alt="Plaza de España">
            </div>
            <div class="caption_thumb">
                <h3>Plaza de España <i class="fa fa-map-marker map_button"  data-toggle="modal" data-target="#modal_maps" data-site="plaza"></i></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <img class="img-responsive" src="img/sevilla/torre_oro.jpg" alt="Torre del Oro">
            </div>
            <div class="caption_thumb">
                <h3>Torre del Oro <i class="fa fa-map-marker map_button" data-toggle="modal" data-target="#modal_maps" data-site="torre"></i></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <img class="img-responsive" src="img/sevilla/alcazar.jpg" alt="Real Alcázar">
            </div>
            <div class="caption_thumb">
                <h3>Real Alcázar de Sevilla <i class="fa fa-map-marker map_button" data-toggle="modal" data-target="#modal_maps" data-site="alcazar"></i></h3>
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <img class="img-responsive" src="img/sevilla/catedral.jpg" alt="Catedral">
            </div>
            <div class="caption_thumb">
                <h3>Catedral de Sevilla <i class="fa fa-map-marker map_button" data-toggle="modal" data-target="#modal_maps" data-site="catedral"></i></h3>
            </div>
        </div>
    </div>
    
    <!-- Modals -->
    <div id="modal_maps" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="modal_maps_title">Título</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 text-center"  id="modal_maps_content">
                            <i class="fa fa-spinner fa-spin"></i>
                        </div>
                        <div class="col-md-4" id="modal_maps_desc">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
