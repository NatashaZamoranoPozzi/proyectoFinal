<?php 

include_once 'clases/Conexion.php';
include_once 'clases/Producto.php';

include_once 'controladores/controladorValidacion.php';

include_once 'partials/header.php';
include_once 'partials/nav.php';

$arrayDeErrores = "";

?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Eliminar Producto</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                            <a href="admin.php" class="btn btn-outline-secondary">Volver al panel Principal</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <?php
                    $objProducto= new Producto;
                    $producto = $objProducto->verProductoPorID($_GET['id']);
                    
                ?>
                <div class="alert alert-warning">
                Estas seguro deseas borrar el producto - <?= $producto['nombre'] ?>
                </div>
                    <form action="eliminarProducto.php" method="post">
                        <div class="form-group">
                        <input type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>">
                        </div>
                        <a href="adminProductos.php" class="btn btn-outline-secondary">Cancelar</a>
                        <button type="submit" class="btn bg-danger text-white">Aceptar</button>
                    </form>
                </div>
            </div>
    </section>
</main>


<?php  include_once 'partials/footer.php';  ?>