<?php  

include_once 'clases/Conexion.php';
include_once 'clases/Categoria.php';

include_once 'controladores/controladorValidacion.php';

include_once 'partials/header.php';
include_once 'partials/nav.php';

$arrayDeErrores = "";

?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Crear Producto</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                            <a href="admin.php" class="btn btn-outline-secondary">Volver al panel principal</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="agregarProducto.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre del Producto</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= persistirDatos($arrayDeErrores, 'nombre') ?>" placeholder="Ingresá un nombre">
                            <small><?= ( isset($arrayDeErrores['nombre']) ? $arrayDeErrores['nombre'] : "" ) ?></small>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control" name="precio" id="precio" value="<?= persistirDatos($arrayDeErrores, 'precio') ?>" placeholder="Ingresá un precio">
                            <small><?= ( isset($arrayDeErrores['precio']) ? $arrayDeErrores['precio'] : "" ) ?></small>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= persistirDatos($arrayDeErrores, 'descripcion') ?>" placeholder="Ingresá una nueva descripcion">
                            <small><?= ( isset($arrayDeErrores['descripcion']) ? $arrayDeErrores['descripcion'] : "" ) ?></small>
                        </div>
                        <div class="form-group">
                        <select name="estado" class="custom-select">
                            
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                            
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
                                echo '<option value="'. $Categoria['idCategoria'] .'">'. $Categoria['nombre'] .'</option>';
                            }
                        }else{
                            echo '<option value="0">No Hay Categorias</option>';
                        }
                        ?>
                            
                        </select>
                        </div>
                        
                        <button type="submit" class="btn bg-dark text-white">Crear</button>
                    </form>
                </div>
            </div>
    </section>
</main>


<?php  include_once 'partials/footer.php';  ?>