<?php session_start(); ?>

<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-color1">
            <div class="container">
            <a class="navbar-brand ff_titulo" href="index.php">Cocolo-ve</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="faq.php">F.A.Q.</a>
                    </li>
                    <?php if (isset($_SESSION["nombreUsuario"])) { ?>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="perfil.php">Perfil</a>
                    <?php } ?>
                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contacto.php">Contacto</a>
                    </li>
                    <?php if(!isset($_SESSION["nombreUsuario"])){ ?>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="registro.php">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="admin.php">Admin</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item">
                    <?php if(isset($_SESSION["nombreUsuario"])){ ?>
                        <a class="nav-link text-white" href="partials/cerrar.php">Cerrar Sesión</a>
                    </li>
                    <?php } ?>
                    
                </ul>

                <ul class="navbar-nav ml-auto">
                <li><?php // echo $_SESSION["nombreUsuario"] ?></li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="carro-compra.php"><ion-icon name="cart" size=""></ion-icon></a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>