<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cocolo-ve</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php include_once 'partials/header.php'; ?>

    <main>
        <section id="bienvenida" class="container-fluid">

            
            <div class="row">
                <div class="col-md-8 offset-md-2  py-5">
                    
                    
                    <div class= "row">
                            <div class="col-md-6 py-3 d-flex flex-md-column justify-content-right align-items-center">
                                <h1 class="ff_titulo text-white">hope you feel beautiful with #cocolo</h1>
                            </div>
                            <div class="col-md-6 text-center py-3">
                                    <img class="img-fluid logo" src="https://instagram.faep9-1.fna.fbcdn.net/vp/2ae8249ed6e76a4df5b5498871024f5b/5E5C3D6D/t51.2885-19/s150x150/62624376_2233291810094827_6461921087314722816_n.jpg?_nc_ht=instagram.faep9-1.fna.fbcdn.net" alt="Logo Principial">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 text-center mt-3">
                                <a class="btn bg-color1 text-white d-block" href="registro.php">Registro</a>
                                
                            </div>
                            <div class="col-md-6 text-center mt-3">
                                <a class="btn bg-color1 text-white d-block" href="login.php">Login</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        

        </section>

        <section class="container">
                <div class="row">
                        <div class="col-md-12 py-4">
                            <h2 class="text-uppercase ff_titulo">Comprá con nosotras!</h2>
                            <hr class="bg-color1">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <h3 class="my-4">ELEGÍ EL MODELO</h3>
                                   
                                    <p> <a href="productos.html"><ion-icon class="color1"  name="gift" size="large"></ion-icon></a></p>
                                    <p>Elegí el modelo que más te guste y agregalo al carrito. Podés elegir varios!!!</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <h3 class="my-4">REGISTRATE</h3>
                                    <p><a href="registro.html"><ion-icon class="color1"  name="log-in" size="large"></ion-icon></a></p>
                                    <p>Registrate para confirmar tu compra, el modo de envío y el pago</p>
                                </div>
                                <div class="col-md-4 text-center">
                                    <h3 class="my-4">DISFRUTÁ TU COCOLO</h3>
                                    <p><ion-icon class="color1" name="happy" size="large"></ion-icon></p>
                                    <p>Llevá tus Cocolo a todos lados!!!!</p>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>

        <section id="carrusel" class="container py-4">
            <div class="row">
                <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="img/prod6.jpeg" class="d-block w-100 img-fluid" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="img/prod5.jpeg" class="d-block w-100 img-fluid" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="img/prod7.jpeg" class="d-block w-100 img-fluid" alt="...">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
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