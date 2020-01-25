<?php
$title = 'Login';
// Incluyo el archivo
include 'controladores/controladorUsuario.php';
include 'controladores/controladorValidacion.php';
include_once 'partials/header.php';
include_once 'partials/nav.php'; 

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
                    iniciarSesion($usuario);
                    //cookies recordarme
                    //if($_POST['recordarme'] == 'on'){
                    //    setcookie("emailUsuario", $usuario['email'], time() + 60 * 60 * 24 * 7);
                    //    setcookie("password", $usuario['password'], time() + 60 * 60 * 24 *7);
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

    <?php  include 'partials/footer.php';  ?>