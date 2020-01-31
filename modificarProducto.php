<?php  

include_once 'clases/Conexion.php';
include_once 'clases/Producto.php';

include_once 'controladores/controladorValidacion.php';

include_once 'partials/header.php';
include_once 'partials/nav.php';

$arrayDeErrores = "";
echo $_POST['idProducto'];
if($_POST){
    $arrayDeErrores = validarFormulario($_POST, 'Producto');

    if(count($arrayDeErrores) == 0){
        //echo "todo bien validado los campos del formulario";
        $objProducto= new Producto;
        $chequeo = $objProducto->modificarProducto($_POST['idProducto']);
        
        if( $chequeo ){
            $mensaje = 'Producto '.$objProducto->getNombre();
            $mensaje .= ' modificado correctamente a la base de datos.';
            $class = 'success';
        }else{
            $mensaje = 'No se pudo modificar el Producto en la base de datos';
            $class = 'danger';
        }
    }else{
        $mensaje = "";
        foreach ($arrayDeErrores as $errores) {
            # code...
            $mensaje .= $errores . '<br>';
        }
        $class='warning';
        
    }
}


?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Alta de una Producto</h1>
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