<?php

class Categoria {

    private $idCategoria;
    private $nombre;

    public function agregarCategoria()
    {
        $nombre = $_POST['nombre'];
        $link = Conexion::conectar();
        $sql = "INSERT INTO categorias
                    VALUES
                        ( default, :nombre )";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);

        if( $stmt->execute() ){
            $this->setIdCategoria($link->lastInsertId());
            $this->setNombre($nombre);
            return true;
        }
        return false;



    }

    public function listarCategorias() {
        $link = Conexion::conectar();
        $sql = "SELECT *
                    FROM categorias";
        $stmt = $link->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function verCategoriaId($id){
        $link = Conexion::conectar();
        $sql = "SELECT *
                    FROM categorias WHERE idCategoria  = ". $id;
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':idCategoria', $idCategoria, PDO::PARAM_INT);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public function modificarCategoria()
    {
        $idCategoria = $_POST["idCategoria"];
        $nombre = $_POST['nombre'];
        $link = Conexion::conectar();
        $sql = "UPDATE categorias
                        SET nombre = :nombre
                        WHERE idCategoria = :idCategoria";
        $stmt = $link->prepare($sql);
        $stmt->bindParam(':idCategoria', $idCategoria, PDO::PARAM_STR);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);

        if( $stmt->execute() ){
            $this->setidCategoria($idCategoria);
                $this->setNombre($nombre);
            return true;
        }
        return false;
    }

    public function eliminarCategoria()
        {
            
            $nombre = $_POST['nombre'];
            $link = Conexion::conectar();
            $sql = "DELETE FROM categorias
                        WHERE nombre = :nombre";
            $stmt = $link->prepare($sql);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);

            if( $stmt->execute() ){
                $this->setNombre($nombre);
                return true;
            }
            return false;
   
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

?>