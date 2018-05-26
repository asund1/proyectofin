<!DOCTYPE html>
<html>
    <head>
        {include file="assets.tpl"}
         
        {*<script type="text/javascript" src="../src/vendor/chartist/js/chartist.min.js"></script>
        <script type="text/javascript" src="../src/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>*}
        
       
        <title>{$title}</title>
    </head>
    <body>
        <div id="wrapper">
            {include file="navbar_sidebar.tpl"}{* Navbar y menú lateral *}
            

            <!-- MAIN -->
            <div class="main">
                {* Se llama a la plantilla correspondiente según la variable pasada *}
                {if $page eq "dashboard"}
                    {include file="dashboard.tpl"}
                {elseif $page eq "vehicles"}
                    {include file="vehicles.tpl"}
                {else if $page eq "brands"}
                    {include file="brands.tpl"}
                {else if $page eq "rent_resume"}
                    {include file="rent_resume.tpl"}
                {/if}
            </div>
            
        </div>
        
    </body>
</html>
        
    