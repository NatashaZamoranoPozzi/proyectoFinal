<?php  

include_once 'clases/Conexion.php';
include_once 'clases/Categoria.php';
$objCategoria = new Categoria;
$chequeo = $objCategoria->modificarCategoria($_POST);
include_once 'controladores/controladorValidacion.php';
include_once 'partials/header.php';
include_once 'partials/nav.php';



$arrayDeErrores = "";
//echo $_POST['idProducto'];
if($_POST){
    $arrayDeErrores = validarFormulario($_POST, 'categoria');

    if(count($arrayDeErrores) == 0){
        //echo "todo bien validado los campos del formulario";
        $objProducto= new Categoria;
        $chequeo = $objCategoria->modificarCategoria($_POST['idCategoria']);
        
        if( $chequeo ){
            $mensaje = 'Categoria '.$objCategoria->getnombre();
            $mensaje .= ' modificado correctamente a la base de datos.';
            $class = 'success';
        }else{
            $mensaje = 'No se pudo modificar el categoria en la base de datos';
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
                    <h1 class="ff_titulo color1">Modificacion de una categoria</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <hr class="bg-color1">
                            <a href="adminCategorias.php" class="btn btn-outline-secondary">Volver al panel Categorias</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-<?= (isset($class)) ? $class : "danger"; ?>">
                        <?= (isset($mensaje)) ? $mensaje : "Ups no has modificado la categoria desde el formulario" ; ?>
                    </div>
                </div>
            </div>
    </section>
</main>


<?php  include_once 'partials/footer.php';  ?>