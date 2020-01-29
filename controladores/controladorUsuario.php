<?php

function traerUsuarios(){
    // Obtener del Archivo JSON los Usuarios
    $obtenerArchivo = file_get_contents('usuarios.json');

    // Decodificar el string del JSON a un array
    $usuariosArray = json_decode($obtenerArchivo, true);
    return $usuariosArray;
}

function armarArrayUsuario(){
        // Creo el usuario
        $usuario = [
            "nombre" => trim($_POST['nombre']),
            "email" => trim($_POST['email']),
            "password" => password_hash($_POST['password'], PASSWORD_DEFAULT),
            "telefono" => trim($_POST['tel']),
            "ruta_imagen" => $_POST['email']. "." .pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION)

        ];

        return $usuario;
}
// INICIO DE SESIOM
function iniciarSesion($usuario){
    session_start();
    $_SESSION['emailUsuario'] = $usuario['email'];
    $_SESSION['nombreUsuario'] = $usuario['full_name'];
    $_SESSION['telefonoUsuario'] = $usuario['telefono'];
    $_SESSION['imagenUsuario'] = $usuario['ruta_imagen'];
}