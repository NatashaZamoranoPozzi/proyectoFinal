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
                <form action="formModificarCategoria.php" method="post">
                <?php if($Categoria['nombre']) : $nameCategoria = $Categoria['nombre'];
                    $idCategoria = $Categoria['idCategoria'];
                ?>

                    <input type="text" value="" name="<?=$idCategoria?>" class="form-control" style="display:none">
                    <input type="submit" value="modificar" name="<?=$nameCategoria?>" class="btn btn-outline-secondary">
                
                <?php endif; ?>
                </form>
                </td>
                <td>
                <form action="formEliminarCategoria.php" method="post">
                <?php if($Categoria['nombre']) : $nameCategoria = $Categoria['nombre'];
                    $idCategoria = $Categoria['idCategoria'];
                ?>

                    <input type="text" value="" name="<?=$idCategoria?>" class="form-control" style="display:none">
                    <input type="submit" value="eliminar" name="<?=$nameCategoria?>" class="btn btn-outline-secondary">
                
                <?php endif; ?>
                </form>
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