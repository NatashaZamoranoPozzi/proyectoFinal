<?php


// Incluyo el archivo
include 'controladores/controladorUsuario.php';
include 'controladores/controladorValidacion.php';



$arrayDeErrores = "";

if($_POST){
    $arrayDeErrores = validarFormulario($_POST, 'registro');
    
    if(count($arrayDeErrores) == 0){
        
        // invoco la funcion traerUsuarios que retorna los usuarios en el JSON usuarios.json
        $usuariosArray = traerUsuarios();

        // Creo el usuario con la funcion armarArrayUsuario
        $creacionUsuario = armarArrayUsuario($_POST);

        // Le inserto el nuevo usuario al array el ultima posicion de usuarios array
        $usuariosArray[] = $creacionUsuario;

        // Codifico el array de usuarios nuevo en un string en formato json
        $formatoJson = json_encode($usuariosArray);

        // Envio 
        // file_put_contents('usuarios.json', $formatoJson, PHP_EOL, FILE_APPEND);
        file_put_contents('usuarios.json', $formatoJson);
        
        // redireccionar al usuario si todo el registro estuvo OK
        header('location: login.php');
        exit;
    }
}



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/6db3fd2ced.js" crossorigin="anonymous"></script>

</head>

<body>
    
    <?php include_once 'partials/header.php'; ?>

    <main class="pb-5">
        <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Registrate</h1>
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
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= persistirDatos($arrayDeErrores, 'nombre') ?>" placeholder="Ingresá tu nombre completo">
                                    <small><?= ( isset($arrayDeErrores['nombre']) ? $arrayDeErrores['nombre'] : "" ) ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?= persistirDatos($arrayDeErrores, 'email') ?>" placeholder="Ingresá tu Email">
                                    <small><?= ( isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ) ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="" placeholder="Ingresá tu contraseña">
                                    <small><?= ( isset($arrayDeErrores['password']) ? $arrayDeErrores['password'] : "" ) ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="reexampleInputPassword1">Repetir Contraseña</label>
                                    <input type="password" class="form-control" name="repassword" id="reexampleInputPassword1" value="" placeholder="Repita la contraseña">
                                    <small><?= ( isset($arrayDeErrores['repassword']) ? $arrayDeErrores['repassword'] : "" ) ?></small>
                                </div>
                                <div class="form-group">
                                        <label for="tel">Telefono</label>
                                        <input type="tel" class="form-control" name="tel" id="tel" value="<?= persistirDatos($arrayDeErrores, 'tel') ?>" placeholder="Ingresá tu número">
                                        <small><?= ( isset($arrayDeErrores['tel']) ? $arrayDeErrores['tel'] : "" ) ?></small>
                                </div>
                                <div class="mb-3">
                                    <input type="file" name="imagen" id="imagen">
                                    <small><?= ( isset($arrayDeErrores['imagen']) ? $arrayDeErrores['imagen'] : "" ) ?></small>
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="recordar" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Recordar</label>
                                    
                                </div>
                                
                                <button type="submit" class="btn bg-dark text-white">CREAR CUENTA</button>
                            </form>
                        </article>
                        <aside class="col-md-6 d-none d-md-block">
                            <h2>Unite !!</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi molestias, eos temporibus libero dignissimos iure. Voluptas dignissimos, unde sunt itaque laudantium obcaecati adipisci nesciunt quos maxime provident dolor deleniti quam. Omnis, est aliquid explicabo atque magnam voluptatum quasi sunt nesciunt earum magni placeat ab nulla illum nostrum labore quod accusantium, cum, ipsum perferendis excepturi quam! Et cupiditate exercitationem sapiente expedita, magni quas eligendi possimus vitae? Inventore quisquam pariatur aperiam tempora quos, voluptate nulla necessitatibus non beatae voluptates ratione consectetur excepturi dolore doloremque totam quasi ipsum accusamus optio id vel quas. Odio soluta sequi quam, quidem ab at veritatis ex fugiat.</p>
                        </aside>
                    </section>
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