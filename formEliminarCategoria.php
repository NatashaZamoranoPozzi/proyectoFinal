<?php 

include_once 'clases/Conexion.php';
include_once 'clases/Categoria.php';

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
                    <h1 class="ff_titulo color1">Eliminar Categoria</h1>
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
               
                <div class="alert alert-warning">
                Estas seguro deseas borrar la categoria - <?= $array[1]; ?>
                </div>
                    <form action="eliminarCategoria.php" method="post">
                        <div class="form-group">
                        <input type="text" name="idCategoria" value="<?=$array[0]?>" class="form-control" style="display:none">
                        <input type="text" name="nombre" value="<?=$array[1]?>" class="form-control" style="display:none">
                        </div>
                        <a href="adminCategorias.php" class="btn btn-outline-secondary">Cancelar</a>

                        <button type="submit" class="btn bg-danger text-white">Aceptar</button>
                    </form>
                </div>
            </div>
    </section>
</main>


<?php  include_once 'partials/footer.php';  ?>