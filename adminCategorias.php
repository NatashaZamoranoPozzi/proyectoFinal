<?php  

include_once 'clases/Conexion.php';
include_once 'clases/Categoria.php';

include_once 'partials/header.php';
include_once 'partials/nav.php';

$objCategoria = new Categoria;
$Categorias = $objCategoria->listarCategorias();

?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Listado de Categorias</h1>
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
                <table class="table table-stripped table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Categoria</th>
                <th colspan="2">
                    <a href="formAgregarCategoria.php" class="btn btn-dark">
                        agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
<?php
    if(count($Categorias) > 0){
            foreach ( $Categorias as $Categoria  ){
?>
            <tr>
                <td><?= $Categoria['idCategoria']; ?></td>
                <td><?= $Categoria['nombre']; ?></td>
                <td>
                    <a href="formModificarCategoria.php" class="btn btn-outline-secondary">
                        modificar
                    </a>
                </td>
                <td>
                    <a href="formEliminarCategoria.php" class="btn btn-outline-secondary">
                        eliminar
                    </a>
                </td>
            </tr>
<?php
            }
        }else{
            ?>
            <tr>
                <td colspan=6>No hay Categorias en la base de datos</td>
            </tr>
<?php            
        }
?>
            </tbody>
        </table>
                </div>
            </div>
    </section>
</main>


<?php  include_once 'partials/footer.php';  ?>