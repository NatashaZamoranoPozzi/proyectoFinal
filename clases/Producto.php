<?php

    class Producto
    {
        private $idProducto;
        private $nombre;
        private $precio;
        private $descripcion;
        private $estado;
        //private $imagen;
        private $idCategoria;

        public function listarProductos()
        {
            $link = Conexion::conectar();
            $sql = "SELECT idProducto, nombre
                        FROM Productos";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function verProductoPorID()
        {
            
        }

        public function agregarProducto()
        {
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $descripcion = $_POST['descripcion'];
            $estado = $_POST['estado'];

            $link = Conexion::conectar();
            $sql = "INSERT INTO Productos (idProducto, nombre, precio, descripcion, estado) 
                            VALUES (default, :nombre, :precio, :descrpcion, :estado)";
           $query = $link->prepare($sql);
                
           $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
           $stmt->bindParam(':precio', $precio, PDO::PARAM_STR);
           $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
           $stmt->bindParam(':estado', $estado, PDO::PARAM_STR);

            if( $stmt->execute() ){
                $this->setIdProducto($link->lastInsertId());
                $this->setNombre($nombre);
                $this->setPrecio($precio);
                $this->setDescripcion($descripcion);
                $this->setEstado($estado);
                return true;
            }
            return false;

        }

        public function modificarProducto()
        {
            
        }

        public function eliminarProducto()
        {
            $link = Conexion::conectar();
            $sql = "DELETE FROM Productos
                            WHERE [:nombre = 'nombre']";
            $query = $link->prepare($sql);
            $query->bindValue(":nombre", $_POST['nombre']);
           
           $query->execute();


        /**
         * Get the value of idProducto
         */ 
        public function getIdProducto()
        {
                return $this->idProducto;
        }

        /**
         * Set the value of idProducto
         *
         * @return  self
         */ 
        public function setIdProducto($idProducto)
        {
                $this->idProducto = $idProducto;

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
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }

        /**
         * Get the value of idCategoria
         */ 
        public function getIdCategoria()
        {
                return $this->idCategoria;
        }

        /**
         * Set the value of idCategoria
         *
         * @return  self
         */ 
        public function setIdCategoria($idCategoria)
        {
                $this->idCategoria = $idCategoria;

                return $this;
        }
        }