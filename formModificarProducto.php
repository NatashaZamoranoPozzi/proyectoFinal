<?php  

include_once 'clases/Conexion.php';
include_once 'clases/Categoria.php';
include_once 'clases/Producto.php';

include_once 'controladores/controladorValidacion.php';

include_once 'partials/header.php';
include_once 'partials/nav.php';

$arrayDeErrores = "";
$objProducto= new Producto;
$Producto = $objProducto->verProductoPorID($_GET['id']);
//var_dump($Producto);
?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Modificar Producto</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="modificarProducto.php" method="post">
                    <input type="hidden" name="idProducto" value="<?= $Producto['idProducto'] ?>">
                        <div class="form-group">
                            <label for="nombre">Nombre del Producto</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $Producto['nombre'] ?>" placeholder="Ingresá un nombre">
                            <small><?= ( isset($arrayDeErrores['nombre']) ? $arrayDeErrores['nombre'] : "" ) ?></small>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control" name="precio" id="precio" value="<?= $Producto['precio'] ?>" placeholder="Ingresá un precio">
                            <small><?= ( isset($arrayDeErrores['precio']) ? $arrayDeErrores['precio'] : "" ) ?></small>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= $Producto['descripcion'] ?>" placeholder="Ingresá una nueva descripcion">
                            <small><?= ( isset($arrayDeErrores['descripcion']) ? $arrayDeErrores['descripcion'] : "" ) ?></small>
                        </div>
                        <div class="form-group">
                        <select name="estado" class="custom-select">
                            
                            <option value="1" <?php ($Producto['estado'] == 1) ? "selected" : "" ?>>Activo</option>
                            <option value="2" <?php ($Producto['estado'] == 2) ? "selected" : "" ?>>Inactivo</option>
                            
                        </select>
                        </div>
                        <div class="form-group">
                        <select name="idCategoria" class="custom-select">
                        <?php
                        $objCategoria = new Categoria;
                        $Categorias = $objCategoria->listarCategorias();
                        if (count($Categorias) > 0) {
                            # code...
                            
                            foreach ($Categorias as $Categoria) {
                                # code...
                                if ($Producto['idCategoria'] == $Categoria['idCategoria']) { echo $selected = "selected"; }
                                echo '<option '. $selected .' value="'. $Categoria['idCategoria'] .'">'. $Categoria['nombre'] .'</option>';
                            }
                        }else{
                            echo '<option value="0">No Hay Categorias</option>';
                        }
                        ?>
                            
                        </select>
                        </div>
                        
                        <button type="submit" class="btn bg-dark text-white">Actualizar</button>
                    </form>
                </div>
            </div>
    </section>
</main>


<?php  include_once 'partials/footer.php';  ?>