<?php  

include_once 'clases/Conexion.php';
include_once 'clases/Categoria.php';
$objCategoria = new Categoria;
$chequeo = $objCategoria->eliminarCategoria($_POST);
include_once 'controladores/controladorValidacion.php';

include_once 'partials/header.php';
include_once 'partials/nav.php';


//echo $_POST['idProducto'];
if($_POST){
        

    
        //echo "todo bien validado los campos del formulario";
        $objCategoria= new Categoria;
        $chequeo = $objCategoria->eliminarCategoria();
        
        if( $chequeo ){
            $mensaje = 'Categoria '.$objCategoria->getNombre();
            $mensaje .= ' Eliminada correctamente en la base de datos.';
            $class = 'success';
        }else{
            $mensaje = 'No se pudo Eliminar la Categoria en la base de datos';
            $class = 'danger';
        }

}


?>

<main class="pb-5">
    <section class="container">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h1 class="ff_titulo color1">Eliminación de una Categoria</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                            <a href="adminCategorias.php" class="btn btn-outline-secondary">Volver al panel Categoria</a>
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