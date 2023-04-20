<?php

use App\Cargas;

require '../includes/app.php';
//proteger la pagina permitiendo solamente ingresar a usuarios registratados
$auth = estaAutenticado();

incluirTemplate('header_gcSys');
incluirTemplate('sidebar');
incluirTemplate('navBar');

//recibir el id de la carga a actualizar
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

//llamar a la consulta de los datos para visualizar y actualizar
$cargas = Cargas::findCarga($id);



if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    debuguear($cargas);

    //INSTANCIAR CLASE
    //$cargas = new Cargas($_POST);

    //validar
    //$errores = $cargas -> validar();

}
?>
    <form action="" method="POST">
        
        <?php include '../includes/templates/form_cargasCliente.php'; ?>
        <button  class="btn btn-primary">
            Acrualizar
        </button>
    </form>

<?php
    incluirTemplate('footer');
    incluirTemplate('menuScroll');
    incluirTemplate('scripts');
?>