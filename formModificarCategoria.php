<?php  

include_once 'clases/Conexion.php';
include_once 'clases/Categoria.php';
include_once 'clases/Producto.php';

include_once 'controladores/controladorValidacion.php';

include_once 'partials/header.php';
include_once 'partials/nav.php';

$array = [];
    if ($_POST) {
        foreach ($_POST as $key => $value) {
            $array[]=$key;  
        }
    }

?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Modificar Categoria</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="modificarCategoria.php" method="post">
                    <input type="hidden" name="idProducto" value="<?= $Producto['idProducto'] ?>">
                        <div class="form-group">
                            <label for="nombre">Nombre del Producto</label>
                            <input type="text" name="idCategoria" value="<?=$array[0]?>" class="form-control" style="display:none">
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$array[1]?>">
                        </div>                       
                        <button type="submit" class="btn bg-dark text-white">Actualizar</button>
                    </form>
                </div>
            </div>
    </section>
</main>


<?php  include_once 'partials/footer.php';  ?>