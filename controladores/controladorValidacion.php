<?php

function validarFormulario($unArray, $flag) {
    if ($unArray){
    
        
        $errores = [];
        
        // Validar Nombre
        if(isset($unArray['nombre'])){
            if(empty($unArray['nombre'])){
                $errores['nombre'] = "El campo nombre esta vacio";
            }elseif (strlen($unArray['nombre'])  < 2) {
                $errores['nombre'] = "Tu nombre debe tener al menos 2 caracteres";
                
            }
        }
    
        
        // Validar Email
        if(isset($unArray['email'])){
            // Guardo lo que me retorna la funcion traerUsuarios que es un array
            $usuariosArray = traerUsuarios();
            if(empty($unArray['email'])){
                $errores['email'] = "El campo email esta vacio";
            }elseif (!filter_var($unArray['email'], FILTER_VALIDATE_EMAIL)) {
                $errores['email'] = "Tu email debe tener un formato valido ejemplo@gmail.com";
                
            }elseif( $flag == 'registro'){
                if(count($usuariosArray) > 0){
                    // Recorro el array de usuarios 
                    foreach ($usuariosArray as $usuario) {
                        // Pregunto si ya existe un usuario con ese email Identificador unico
                        if($usuario['email'] == $unArray['email']){
                            $errores['email'] = "El email ya esta registrado";
                            break;
                        }
                    }
                }
            }elseif($flag == 'login'){
                if(count($usuariosArray) > 0){
                    // Recorro el array de usuarios
                    $contador = 0;
                    foreach ($usuariosArray as $usuario) {
                        // Pregunto si consigue el email mostrar error datos incorrectos
                        if($usuario['email'] != $unArray['email']){
                            $contador += 1;
                            
                                if($contador >= count($usuariosArray)){
                                $errores['email'] = "datos incorrectos";
                                break;
                            }
                            
                        }
                    }
                }
            }
        }
    
        
        // Validar Password
    
        if(isset($unArray['password'])){
            if(empty($unArray['password'])){
                $errores['password'] = "El campo password esta vacio";
            }elseif(strlen($unArray['password'])  < 6){
                $errores['password'] = "Tu contraseña debe tener minimo 6 caracateres";
                
            }
        }
    
        // Validar Confirmar Password
    
        if(isset($unArray['repassword'])){
            if(empty($unArray['repassword'])){
                $errores['repassword'] = "El campo confirmar password esta vacio";
            }elseif ($unArray['password'] != $unArray['repassword']) {
                $errores['repassword'] = "Tu contraseña no coinciden";
                
            }
        }
        
    
        
        // Validar Telefono
    
        if(isset($unArray['tel'])){
            if(empty($unArray['tel'])){
                $errores['tel'] = "El campo telefono esta vacio";
            }elseif (strlen($unArray['tel'])  == 13) {
                $errores['tel'] = "Tu telefono no tiene este formato 11 5663 7932";
                
        
            } 
        }
    
        
    // Validar Imagen
    if($_FILES){

        $ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);

        
        $ruta = dirname(__DIR__);
        $ruta = $ruta . "/img/";
        // $ruta = $ruta . "avatar_" . uniqid() . "." . $ext;
        $ruta = $ruta . $unArray['email'] . "." . $ext;
        
        if($_FILES['imagen']['error'] != 0){
            $errores['imagen'] = "error cargando imagen";
            
        }elseif($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
            $errores['imagen'] = "El archivo imagen no posee un extension permitida";  
            
        }else{
            //move_uploaded_file($_FILES['imagen']['tmp_name'], "img/". "avatar_" . uniqid() . "." . $ext);
            move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
        }
    }
        
        
        //Compuebo primero que en el array de usuarios que viene de usuarios.json sea mayor a 0 (con el if compruebo primero que haya usuarios en el json si no lanza error )
        
/* 
        if(count($usuariosArray) > 0){
            // Recorro el array de usuarios 
            foreach ($usuariosArray as $usuario) {
                // Pregunto si ya existe un usuario con ese email Identificador unico
                if($usuario['email'] == $unArray['email']){
                    $errores['email'] = "El email ya esta registrado";
                    break;
                }
            }
        }
*/
        
        
        return $errores;
    }
}




function persistirDatos($arrayE, $campo){
    if ( isset($arrayE[$campo]) ) {
        return "";
    }elseif ( isset($_POST[$campo]) ){
        return $_POST[$campo];
    }
}
