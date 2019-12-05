<?php

session_start();
// Incluyo el archivo
include 'controladores/controladorUsuario.php';
include 'controladores/controladorValidacion.php';

$arrayDeErrores = "";
        
if($_POST){
    $arrayDeErrores = validarFormulario($_POST, 'login');
    //var_dump($arrayDeErrores);
    //exit;
    if(count($arrayDeErrores) == 0){

    
    // Guardo lo que me retorna la funcion traerUsuarios que es un array
    $usuariosArray = traerUsuarios();
    
    // Validar email en base de datos json array
    
    if(count($usuariosArray) > 0){
        // Recorro el array de usuarios 
        foreach ($usuariosArray as $usuario) {
            // Pregunto si ya existe un usuario con ese email Identificador unico
            if ($usuario['email'] == $_POST['email']) {
                if( password_verify($_POST['password'], $usuario['password']) ){
                    session_start();
                    $_SESSION['emailUsuario'] = $usuario['email'];
                    $_SESSION['nombreUsuario'] = $usuario['full_name'];
                    $_SESSION['telefonoUsuario'] = $usuario['telefono'];
                    $_SESSION['imagenUsuario'] = $usuario['ruta_imagen'];
                    //if($_POST['recordarme'] == 'on'){
                    //    setcookie("emailUsuario", $usuario['email'], time() + 60 * 60 * 24);
                    //    setcookie("password", $usuario['password'], time() + 60 * 60 * 24);
                    //}
                    
                    header('location: perfil.php');
                    exit;
                }
            }
        }
    }

    }


}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
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
                    <h1 class="ff_titulo color1">Login</h1>
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
                        <div class="col-md-12">
                            
                            <?= ( isset($arrayDeErrores['email']) ? '<div class="alert alert-danger" role="alert">' . $arrayDeErrores['email'] . '</div>': "" ) ?>
                            
                        </div>
                    </section>
                    <section class="row">
                        <article class="col-md-6">
                            <form action="" method="POST">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Ingresa tu email">
                            
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Ingresa tu contraseña">
                                </div>

                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="recordarme" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Recordar</label>
                                </div>
                                <button type="submit" class="btn bg-dark text-white">INICIAR SESION</button>
                            </form>
                        </article>

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