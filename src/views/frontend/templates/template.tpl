<!DOCTYPE html>
<html>
    <head>
        {include file="assets.tpl"}
        <script type="text/javascript" src="src/js/frontend.js"></script>
        <title>{$title}</title>
    </head>
    <body>
        <div class="container-fluid">
            <!-- header -->
            <header class="row">
                

                    <div class="col-md-2 col-md-offset-2">
                        <img src="{if isset($subpage)}../{/if}img/logo.png" alt="los angeles moto rent" class="img-responsive"/>
                    </div>

                    <div class="col-md-6  col-xs-12 ">
                        <div class="navbar-default">
                            <ul class="nav navbar-nav">
                                <li class="normal"><a href="#"><i class="fa fa-info-circle"></i> Sobre nosotros</a></li>
                                <li class="normal"><a href="#"><i class="fa fa-file-o"></i> Condiciones alquiler</a></li>
                                <li class="normal"><a href="#" data-toggle="modal" data-target="#modal_registro"><i class="fa fa-users"></i>  Registrarse</a></li>
                                <li class="normal"><a href="#" data-toggle="modal" data-target="#modal_login"><i class="fa fa-user-circle-o"></i>  Iniciar sesión</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o"></i> Mi cuenta</a>
                                    <ul class="dropdown-menu" id="dropdown">
                                        <li>Mis datos</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
            </header>

            <!-- Container -->
            {if $page=='index'}
                {include file='index.tpl'}
            {else if $page=='condiciones' || $page=='privacidad'}
                {include file='condiciones.tpl'}
            {else if $page=='about_us'}
                {include file='about_us.tpl'}
            {else if $page=='contacto'}
                {include file='contacto.tpl'}
            {else if $page=='registro'}
                {include file='registro.tpl'}
            {/if}
            
            <!-- Modal para registros -->
            {include file='registro.tpl'}
            
            <!-- footer -->
            {include file="footer.tpl"}
        </div>
    </body>
</html>
