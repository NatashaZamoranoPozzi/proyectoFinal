<?php  

include_once 'clases/Conexion.php';
include_once 'clases/Producto.php';

include_once 'controladores/controladorValidacion.php';

include_once 'partials/header.php';
include_once 'partials/nav.php';


//echo $_POST['idProducto'];
if($_POST){
        

    
        //echo "todo bien validado los campos del formulario";
        $objProducto= new Producto;
        $chequeo = $objProducto->eliminarProducto();
        
        if( $chequeo ){
            $mensaje = 'Producto '.$objProducto->getNombre();
            $mensaje .= ' Eliminado correctamente en la base de datos.';
            $class = 'success';
        }else{
            $mensaje = 'No se pudo Eliminar el Producto en la base de datos';
            $class = 'danger';
        }

}


?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Eliminación de un Producto</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                            <a href="adminProductos.php" class="btn btn-outline-secondary">Volver al panel Productos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-<?= (isset($class)) ? $class : "danger"; ?>">
                        <?= (isset($mensaje)) ? $mensaje : "Ups no has enviado el Producto desde el formulario de alta" ; ?>
                    </div>
                </div>
            </div>
    </section>
</main>


<?php  include_once 'partials/footer.php';  ?>