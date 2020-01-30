<?php  

include_once 'clases/Conexion.php';
include_once 'clases/Producto.php';

include_once 'partials/header.php';
include_once 'partials/nav.php';

$objProducto = new Producto;
$Productos = $objProducto->listarProductos();

?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Listado de Productos</h1>
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
                <th>Nombre</th>
                <th>Precio</th>
                <th>descripcion</th>
                <th>Categoria</th>
                <th colspan="2">
                    <a href="formAgregarProducto.php" class="btn btn-dark">
                        agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
<?php
    if(count($Productos) > 0){

   
            foreach ( $Productos as $Producto  ){
?>
            <tr>
                <td><?= $Producto['idProducto']; ?></td>
                <td><?= $Producto['nombre']; ?></td>
                <td><?= $Producto['precio']; ?></td>
                <td><?= $Producto['descripcion']; ?></td>
                <td><?= $Producto['idCategoria']; ?></td>
                <td>
                    <a href="formModificarCategoriaProducto.php" class="btn btn-outline-secondary">
                        modificar
                    </a>
                </td>
                <td>
                    <a href="formEliminarProducto.php" class="btn btn-outline-secondary">
                        eliminar
                    </a>
                </td>
            </tr>
<?php
            }
        }else{
            ?>
            <tr>
                <td colspan=6>No hay productos en la base de datos</td>
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