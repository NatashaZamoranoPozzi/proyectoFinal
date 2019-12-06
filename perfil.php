<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    

</head>

<body>
    <?php include_once 'partials/header.php'; ?>

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

    <footer class="container-fluid bg-dark py-4 text-white">
            <section class="container">
                    <strong class="ff_titulo display-4">Cocolo-ve</strong>
                <div class="row">
                    <div class="col-md-6">
                    
                        <p>Hand Made Accessories <br> Hope you feel beautiful with #cocolo</p>
                        
                    </div>
                    <div class="col-md-6">
                        <p>Ciudad Autonoma de Buenos Aires, Argentina.</p>
                        <ul>
                            <li>Puntos de entrega en Caballito</li>
                            <li>Envios a todo el país</li>
                        </ul>
                        <p>Seguinos en redes y WhatsApp!</p>
                        <a href="https://instagram.com/cocolo_ve?igshid=67qwjzxr7sks"><ion-icon class="color1" name="logo-instagram" size="large"></ion-icon></i></a>
                        <a href=""><ion-icon class="color1" name="logo-pinterest" size="large"></ion-icon></a>
                        <a class="color1" href="tel:+5491123898777"><ion-icon class="color1" name="logo-whatsapp" size="large"></ion-icon></a> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 py-2">
                        <p>Derechos Reservados - &copy; 2019</p>
                    </div>
                </div>
            </section>
        </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>