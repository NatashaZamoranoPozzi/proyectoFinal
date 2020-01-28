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