<?php  

include_once 'clases/Conexion.php';
include_once 'clases/Categoria.php';
include_once 'partials/header.php';
include_once 'partials/nav.php';
$objMarca = new Categoria;
$chequeo = $objMarca->agregarCategoria();


?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Alta de una Categoria</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <?php
    $mensaje = 'No se pudo agregar la Categoria';
    $class = 'danger';
    if( $chequeo ){
        $mensaje = 'Categoria '.$objMarca->getNombre();
        $mensaje .= ' agregada correctamente.';
        $class = 'success';
    }
?>
    <div class="alert alert-<?= $class; ?>">
        <?= $mensaje; ?>
    </div>
                </div>
            </div>
    </section>
</main>


<?php  include_once 'partials/footer.php';  ?>