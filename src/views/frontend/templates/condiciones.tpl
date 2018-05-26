<!-- Contenido condiciones alquiler -->
<div class="row head_gradient">
    <div class="col-md-8 col-md-offset-2"> 
        <h1><i class="fa fa-arrow-circle-right"></i> 
            {if $page=='condiciones'}Condiciones alquiler{else if $page=='privacidad'}Política de privacidad{/if}
            </h1>
    </div>
</div>

<div class="row white_div">
    <div class="col-md-8 col-md-offset-2 mt-15 mb-15">
        {foreach $condiciones->article as $article}
            <h4 class="text-uppercase">{$article->title}</h4>
            <p>{$article->resume}</p>
            {foreach $article->puntos->punto as $punto}
                <p>{$punto}</p>
                <ul>
                    {foreach $punto->subpuntos->subpunto as $sub}
                        <li>{$sub}</li>
                    {/foreach}
                </ul>
            {/foreach}
        {/foreach}
    </div>

</div>