<?php

    class Conexion
    {

        static function conectar()
        {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
            try {
                // Conexion a la base de datos utilizando PDO (clase predefinida en PHP) 
                $link = new PDO(
                    'mysql:host=localhost;dbname=cocolo',
                    'root',
                    ''
                );
                // Sentencia que indica si tenemos errores en sql
                $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            } catch (\Exception $e) {
                $e->getMessage();
            }
            
            
            
            return $link;
        }

    }