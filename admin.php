<?php  

include_once 'partials/header.php';
include_once 'partials/nav.php';


?>

<main class="pb-5">

    <section class="container">
        <div class="row">
            <div class="col-md-12 py-5">
                <h1 class="ff_titulo color1">Panel de Administración</h1>
                <div class="row">
                    <div class="col-md-6">
                        <hr class="bg-color1">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-6">
            <h2></h2>

            <div class="list-group">
            
            <a class="list-group-item list-group-item-action" href="adminCategorias.php">
                Panel de administración de Categorías
            </a>
            <a class="list-group-item list-group-item-action" href="adminProductos.php">
                Panel de administración de Productos
            </a>
            
            
            </div>
        </div>
    </section>


</main>

<?php  include 'partials/footer.php';  ?>