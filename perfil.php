<?php
$title = 'Mi Perfil';
include_once 'partials/header.php';
include_once 'partials/nav.php'; 

?>

    <main class="pb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Mi Perfil - Usuario</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h2><?= (isset($_SESSION['nombreUsuario'])) ? $_SESSION['nombreUsuario'] : "" ?></h2>
                 </div> 
                 <!-- ESTO ES UN INTENTO DE HACER QUE SE VEA LA IMAGEN DEL USUARIO
                <//?if (isset($_SESSION['nombreUsuario'])) { ?>
                    <div class="col-md-6">
                    <img src="img/<//?echo $_SESSION['nombreUsuario']."jpg"?>" alt="imagen del usuario">
                </div>
                <//? } ?>-->
                
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <div class="card-header">
                          Tus Datos 
                        </div>
                        <div class="card-body">
                          <ul>
                              <li>Telefono: <?= (isset($_SESSION['telefonoUsuario'])) ? $_SESSION['telefonoUsuario'] : "" ?></li>
                              <li>Email: <?= (isset($_SESSION['emailUsuario'])) ? $_SESSION['emailUsuario'] : "" ?></li>
                              <li>Cambiar Clave</li>
                          </ul>
                          
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <div class="card-header">
                          Datos de Envio
                        </div>
                        <div class="card-body">
                          
                          <p class="card-text">Lima 1111, Piso 1 - Capital Federal. Argentina</p>
                          
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <div class="card-header">
                          Mis Compras
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Tus compras!</h5>
                          <ul>
                              <li>Modelo 01</li>
                              <li>Modelo 10</li>
                              <li>Modelo 01</li>
                          </ul>
                          <a href="#" class="btn bg-dark text-white">Ver Todas</a>
                        </div>
                      </div>
                </div>
                
            </div>
            <div class="row mt-3">
                <div class="col-md-4 mt-3">
                    <div class="card">
                        <div class="card-header">
                          Configuracion
                        </div>
                        <div class="card-body">
                          <ul>
                              <li>Ajustes y Privacidad</li>
                              <li>Centro de Ayuda</li>
                              <li>Idioma</li>
                              <li><a href="#">Cerrar Sesión</a></li>
                          </ul>
                          
                        </div>
                      </div>
                </div>
            </div>
        </section>
    </main>

    <?php  include 'partials/footer.php';  ?>