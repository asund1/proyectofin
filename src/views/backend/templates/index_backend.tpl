<!DOCTYPE html>
<html>
    <head>
        {include file="assets.tpl"}
        <title>{$title}</title>
    </head>
    <body>
        <div id="wrapper">
            <div class="vertical-align-wrap">
                <div class="vertical-align-middle">
                    
                    <!-- Login div -->
                    <div class="auth-box">
                        <div class="left">
                            <div class="content">

                                <div class="header">
                                    <p class="lead">Iniciar sesión en el panel de control</p>
                                </div>
                                {if isset($loginInvalido)}
                                    <div class="alert alert-danger">
                                        Los datos no son válidos.
                                    </div>
                                {/if}
                                {if isset($exit)}
                                    <div class="alert alert-success">
                                        Has cerrado sesión correctamente.
                                    </div>
                                {/if}
                                <form class="form-auth-small" action="{$smarty.server.PHP_SELF}" method="POST">
                                    <div class="form-group">
                                        <label for="email" class="control-label sr-only">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="control-label sr-only">Contraseña</label>
                                        <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login_btn">Iniciar sesión</button>
                                    <div class="bottom">
                                        <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Recuperar contraseña</a></span>
                                    </div>
                                </form>

                            </div>
                        </div>
                        
                        <div class="right">
                            <div class="overlay"></div>
                            <div class="content text">
                                <h1 class="heading">Free Bootstrap dashboard template</h1>
                                <p>by The Develovers</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </body>
</html>
        
    