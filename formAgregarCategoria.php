<?php  

include 'controladores/controladorValidacion.php';
include_once 'partials/header.php';
include_once 'partials/nav.php';

$arrayDeErrores = "";

?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Crear Categoria</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="agregarCategoria.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre de Categoria</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= persistirDatos($arrayDeErrores, 'nombre') ?>" placeholder="Ingresá una nueva categoria">
                            <small><?= ( isset($arrayDeErrores['nombre']) ? $arrayDeErrores['nombre'] : "" ) ?></small>
                        </div>
                        <button type="submit" class="btn bg-dark text-white">Crear</button>
                    </form>
                </div>
            </div>
    </section>
</main>


<?php  include_once 'partials/footer.php';  ?>