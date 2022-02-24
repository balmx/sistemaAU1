<header class="main-header">

    <!--=====================================
	LOGOTIPO
	======================================-->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">

            <img src="img\logomini.png" alt="" class="center">

        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">

            <img src="img\logo.png" alt="" class="center" width="170" height="46">

        </span>
    </a>

    <!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
    <nav class="navbar navbar-static-top" role="navigation">

        <!-- Botón de navegación -->

        <a class="sidebar-toggle" data-toggle="push-menu" role="button">

        </a>

        <!-- perfil de usuario -->

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <?php

							if ($_SESSION["foto"] != "") {

								echo '<img src="' . $_SESSION["foto"] . '" class="user-image">';
							} else {


								echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';
							}


							?>

                        <span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>
                        &nbsp;

                        <i class="fas fa-caret-square-down"></i>

                    </a>

                    <!-- Dropdown-toggle -->

                    <ul class="dropdown-menu">

                        <li class="user-body">

                            <div class="pull-right">

                                <a href="salir" class="btn btn-default btn-flat">Cerrar Sesion</a>

                            </div>

                        </li>

                    </ul>

                </li>

            </ul>

        </div>

    </nav>

</header>