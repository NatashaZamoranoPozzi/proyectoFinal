<?php
$title = 'Carro de Compra';
include_once 'partials/header.php';
include_once 'partials/nav.php'; 

?>
    <main class="pb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Carrito de Compra</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive-sm table-hover">
                        
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio C/U</th>
                            <th scope="col">Sub Total</th>
                            <th class="text-center" scope="col">Eliminar</th>
                            <th class="text-center" scope="col">Modificar</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Modelo 02</td>
                            <td>2</td>
                            <td>100</td>
                            <td>200</td>
                            <td class="text-danger text-center"><ion-icon name="close"></ion-icon></td>
                            <td class="text-success text-center"><ion-icon name="create"></ion-icon></td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Modelo 05</td>
                            <td>5</td>
                            <td>100</td>
                            <td>500</td>
                            <td class="text-danger text-center"><ion-icon name="close"></ion-icon></td>
                            <td class="text-success text-center"><ion-icon name="create"></ion-icon></td>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Modelo 01</td>
                            <td>3</td>
                            <td>50</td>
                            <td>150</td>
                            <td class="text-danger text-center"><ion-icon name="close"></ion-icon></td>
                            <td class="text-success text-center"><ion-icon name="create"></ion-icon></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <p>Total: 850 $</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn bg-dark text-white text-uppercase">Comprar</button>
                </div>
            </div>




        </section>
    </main>

    <?php  include 'partials/footer.php';  ?>