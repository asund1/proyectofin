<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left">
            <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
            </div>
        </form>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="lnr lnr-user"></i> <span>Mis datos</span></a></li>
                        <li><a href="index.php?salir"><i class="lnr lnr-exit"></i> <span>Salir</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->

<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <a href="{if $subpage}../{/if}dashboard.php" class="{if $page == 'dashboard'}active{/if}">
                        <i class="lnr lnr-home"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed {if $page == 'vehicles' || $page == 'brands'}active{/if}">
                        <i class="lnr lnr-bicycle"></i> <span>Gestión vehículos</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                    </a>
                    <div id="subPages" class="{if $page != 'vehicles' && $page != 'brands'}collapse{/if}">
                        <ul class="nav">
                            <li><a href="{if $subpage}../{/if}vehicles/vehicles.php" class="">Listado de vehículos</a></li>
                            <li><a href="{if $subpage}../{/if}vehicles/brands.php" class="">Marcas / Modelos</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#subPages1" data-toggle="collapse" class="collapsed {if $page == 'rent_resume' || $page == 'rent_list' || $page == 'rent_types'}active{/if}">
                        <i class="lnr lnr-bookmark"></i> <span>Gestión alquiler</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                    </a>
                    <div id="subPages1" class="{if $page != 'rent_resume' && $page != 'rent_list' && $page != 'rent_types'}collapse{/if}">
                        <ul class="nav">
                            <li><a href="{if $subpage}../{/if}rent/resume.php" class="">Resumen</a></li>
                            <li><a href="{if $subpage}../{/if}rent/rent_list.php" class="">Listado alquileres</a></li>
                            <li><a href="{if $subpage}../{/if}rent/rent_types.php" class="">Tipos de alquiler</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#subPages2" data-toggle="collapse" class="collapsed {if $page == 'user_list' || $page == 'user_types'} active{/if}">
                        <i class="lnr lnr-user"></i> <span>Gestión usuarios</span> <i class="icon-submenu lnr lnr-chevron-left"></i>
                    </a>
                    <div id="subPages2" class="{if $page != 'user_list' && $page != 'user_types'}collapse{/if} ">
                        <ul class="nav">
                            <li><a href="{if $subpage}../{/if}users/user_list.php" class="">Listado de usuarios</a></li>
                            <li><a href="{if $subpage}../{/if}user/user_types.php" class="">Tipos de usuarios</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->