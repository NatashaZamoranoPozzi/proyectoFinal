<?php

    class Usuario
    {
        private $idUsuario;
        private $nombre;
        private $email;
        private $telefono;
        private $contrasena;
        private $imagen;
        private $idTipoUsuario;

        public function listarUsuarios()
        {
            $link = Conexion::conectar();
            $sql = "SELECT *
                        FROM usuarios";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function verUsuarioPorID()
        {
            
        }

        public function agregarUsuario()
        {
            $link = Conexion::conectar();
            $sql = "INSERT INTO usuarios (nombre, email, telefono, contrasena, imagen) 
                            VALUES (:nombre, :email, :telefono, :contrasena, :imagen)";
           $stmt = $link->prepare($sql);
                $stmt->bindValue(":nombre", $usuario["nombre"], PDO::PARAM_STR);
                $stmt->bindValue(":email", $usuario["email"], PDO::PARAM_STR);
                $stmt->bindValue(":telefono", $usuario["telefono"], PDO::PARAM_STR);
                $stmt->bindValue(":contrasena", $usuario["password"], PDO::PARAM_STR);
                $stmt->bindValue(":imagen", $usuario["ruta_imagen"], PDO::PARAM_STR);

            if( $stmt->execute() ){
                $this->setIdUsuario($link->lastInsertId());
                $this->setNombre($usuario["nombre"]);
                $this->setEmail($usuario["email"]);
                $this->setTelefono($usuario["telefono"]);
                $this->setContrasena($usuario["password"]);
                $this->setImagen($usuario["ruta_imagen"]);

                return true;
            }
            return false;

        }

        public function modificarUsuario()
        {
            
        }

        public function eliminarUsuario()
        {
            $link = Conexion::conectar();
            $sql = "DELETE FROM Usuarios
                            WHERE [:email = 'email']";
            $query = $link->prepare($sql);
            $query->bindValue(":email", $usuario["email"]);
            $query->execute();
           

        }
        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of idUsuario
         */ 
        public function getIdUsuario()
        {
                return $this->idUsuario;
        }

        /**
         * Set the value of idUsuario
         *
         * @return  self
         */ 
        public function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of telefono
         */ 
        public function getTelefono()
        {
                return $this->telefono;
        }

        /**
         * Set the value of telefono
         *
         * @return  self
         */ 
        public function setTelefono($telefono)
        {
                $this->telefono = $telefono;

                return $this;
        }

        /**
         * Get the value of contrasena
         */ 
        public function getContrasena()
        {
                return $this->contrasena;
        }

        /**
         * Set the value of contrasena
         *
         * @return  self
         */ 
        public function setContrasena($contrasena)
        {
                $this->contrasena = $contrasena;

                return $this;
        }

        /**
         * Get the value of imagen
         */ 
        public function getImagen()
        {
                return $this->imagen;
        }

        /**
         * Set the value of imagen
         *
         * @return  self
         */ 
        public function setImagen($imagen)
        {
                $this->imagen = $imagen;

                return $this;
        }

        /**
         * Get the value of idTipoUsuario
         */ 
        public function getIdTipoUsuario()
        {
                return $this->idTipoUsuario;
        }

        /**
         * Set the value of idTipoUsuario
         *
         * @return  self
         */ 
        public function setIdTipoUsuario($idTipoUsuario)
        {
                $this->idTipoUsuario = $idTipoUsuario;

                return $this;
        }
        }