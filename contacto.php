<?php
$title = 'Contacto';
include_once 'partials/header.php';
include_once 'partials/nav.php'; 

?>

    <main class="pb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Contactanos</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-12">
                    
                    <section class="row">
                        <article class="col-md-6">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresá tu nombre completo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Ingresá tu email">
                                
                                </div>
                                
                                <div class="form-group">
                                    <label for="tel">Telefono</label>
                                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="Ingresá tu número de telefono">
                                </div>
                                <div class="form-group">
                                    <label for="mensaje">Mensaje</label>
                                    <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                                </div>
                                
                                <button type="submit" class="btn bg-dark text-white">CONTACTAR</button>
                            </form>
                        </article>

                    </section>
                </div>
            </div>
        </section>
    </main>

    <?php  include 'partials/footer.php';  ?>