<?php
$title = 'Detalle del Producto';
include_once 'partials/header.php';
include_once 'partials/nav.php'; 

?>

    <main>
        <section class="container">

            
            <div class="row">
                <div class="col-md-8 offset-md-2  py-5">
                    
                    
                    <div class="row">
                            <div class="col-md-6 py-3 d-flex flex-md-column justify-content-center align-items-center">
                                <h1 class="ff_titulo color1">MODELO 01</h1>
                            </div>
                            <div class="col-md-6 text-center py-3">
                                    <img class="imagen_detalle img-fluid" src="img/cocolo_2.png" alt="Modelo 01">
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-md-12 text-center mt-3">
                            <p class="font-weight-bold">Detalle del Producto</p>
                            <hr class="bg-color1">
                        </div>
                        <div class="col-md-12 text-justify">
                            <strong>Descripción</strong>
                            <p>Las pulseras se han convertido no sólo en un accesorio de belleza. Las pulseras son mucho más que eso; son un recuerdo de alguien del que sin duda te acordarás cada vez que te la pongas, una sensación de afecto, de ternura o de sensibilidad y estabilidad. Si eres amante de las pulseras y estás pensando en comprar alguna para hacer o hacerte un regalo, este es tu sitio!</p>
                            <strong>Caracteristicas</strong>
                            <ul>
                                <li>Dimensiones</li>
                                <li>Color</li>
                                <li>Material</li>
                                <li>Precio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                                <a href="#" class="btn bg-dark text-white d-block">AGREGAR AL CARRITO</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        

        </section>


    </main>

    <?php  include 'partials/footer.php';  ?>