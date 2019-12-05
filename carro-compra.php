<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Carro de compra</title>
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