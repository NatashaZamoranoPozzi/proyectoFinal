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
            $sql = "SELECT p.*, c.nombre as categoria
                        FROM productos as p, categorias as c WHERE c.idCategoria = p.idCategoria";
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function verProductoPorID($id)
        {
                $link = Conexion::conectar();
                $sql = "SELECT *
                                FROM productos WHERE idProducto = ". $id;
                $stmt = $link->prepare($sql);
                $stmt->execute();
                $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                return $resultado;
        }

        public function agregarProducto()
        {
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $descripcion = $_POST['descripcion'];
            $estado = $_POST['estado'];
            $idCategoria = $_POST['idCategoria'];

            $link = Conexion::conectar();
            $sql = "INSERT INTO productos (nombre, precio, descripcion, estado, idCategoria) 
                            VALUES (:nombre, :precio, :descripcion, :estado, :Categoria)";
           $stmt = $link->prepare($sql);
                
           $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
           $stmt->bindParam(':precio', $precio, PDO::PARAM_INT);
           $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
           $stmt->bindParam(':estado', $estado, PDO::PARAM_INT);
           $stmt->bindParam(':Categoria', $idCategoria, PDO::PARAM_INT);
           
            if( $stmt->execute() ){
                $this->setIdProducto($link->lastInsertId());
                $this->setNombre($nombre);
                $this->setPrecio($precio);
                $this->setDescripcion($descripcion);
                $this->setEstado($estado);
                $this->setIdCategoria($idCategoria);
                return true;
            }
            return false;

        }

        public function modificarProducto($id)
        {
                $idProducto = $id;
                $nombre = $_POST['nombre'];
                $precio = $_POST['precio'];
                $descripcion = $_POST['descripcion'];
                $estado = $_POST['estado'];
                $idCategoria = $_POST['idCategoria'];

                $link = Conexion::conectar();
                //, idProducto = LAST_INSERT_ID(idProducto)
            $sql = "UPDATE productos SET nombre = :nombre, precio = :precio, descripcion = :descripcion, estado = :estado, idCategoria = :idCategoria  WHERE productos.idProducto = :idProducto ";
            // UPDATE `productos` SET `descripcion` = 'A tu medida' WHERE `productos`.`idProducto` = 2
           $stmt = $link->prepare($sql);
           //
           $stmt->bindParam(':idProducto', $idProducto, PDO::PARAM_INT);
           $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
           $stmt->bindParam(':precio', $precio, PDO::PARAM_INT);
           $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
           $stmt->bindParam(':estado', $estado, PDO::PARAM_INT);
           $stmt->bindParam(':idCategoria', $idCategoria, PDO::PARAM_INT);
           //var_dump($sql);
           //var_dump($stmt->execute());
            if( $stmt->execute() ){
                $this->setIdProducto($idProducto);
                $this->setNombre($nombre);
                $this->setPrecio($precio);
                $this->setDescripcion($descripcion);
                $this->setEstado($estado);
                $this->setIdCategoria($idCategoria);
                return true;
            }
            return false;
        }

        public function eliminarProducto()
        {
            $id = $_POST['idProducto'];
            $link = Conexion::conectar();
            $sql = "DELETE FROM productos
                            WHERE idProducto = :idProducto";
            $stmt = $link->prepare($sql);
            //var_dump($stmt);
            $stmt->bindParam(':idProducto', $id, PDO::PARAM_INT);
           
            $resultado = $stmt->execute();
            return $resultado;
        }
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