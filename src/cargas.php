<?php
require '../includes/app.php';
//proteger la pagina permitiendo solamente ingresar a usuarios registratados
$auth = estaAutenticado();
    if(!$auth){
        header('location: ../index.php');
    }

incluirTemplate('header_gcSys');
incluirTemplate('sidebar');
incluirTemplate('navBar');
use App\Cargas;

$errores = Cargas::getErrores();

//Asigrnar el id del usuario para poder guardar
$idUsuario = $_SESSION['id'];

$cargas = new Cargas;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    //INSTANCIAR CLASE
        $cargas = new Cargas($_POST);

    //validar
    $errores = $cargas -> validar();

    if(empty($errores)){
        //llamar la funcion guardar
        $resultado = $cargas -> guardar();

        if ($resultado){
            echo'<script>alert(hola)</script>';
        }

    }
}

?>

<div class="card">
    <h5 class="card-header">
        Registrar una compra nueva.
    </h5>
    <div class="card-body">
        <h5 class="card-title">
            Por favor completa la informacion
        </h5>
        <p>
            Es obligatorio llenar los campos, TRAKING, DETALLE. El trackin para poder ubicar tu carga y el detalle para poder saber que vamos a declarar
        </p>
        <!-- FORMULARIO DE REGISTRO DE CARGAS -->
            <!-- En el registro de la carga el cliente solo llena los datos generales, la actualización con el peso numero de factura con el que se declara y demas detalles los asignara el operador o en este caso la persona que opere el sistema como empleado. El formulario hace referencia a lo que se menciona. -->
        <form action="" method="POST">
        <?php foreach($errores as $error): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div> 
        <?php endforeach;?>
            <?php include '../includes/templates/form_cargasCliente.php'; ?>
            <div hidden>
                <input 
                    type="text" 
                    name="unidad" 
                    value="desdeformulario">
                <input 
                    type="text" 
                    name="largo" 
                    value="1">
                <input 
                    type="text" 
                    name="ancho" 
                    value="1">
                <input 
                    type="text" 
                    name="alto" 
                    value="1">
                <input 
                    type="text" 
                    name="tipo" 
                    value="desdeformulario">
                <input 
                    type="text" 
                    name="factura" 
                    value="desdeformulario">
                <input 
                    type="text" 
                    name="valorTotal"
                    value="1">
                <input 
                    type="text" 
                    name="impuestos" 
                    value="1">
                <input 
                    type="text" 
                    name="envio" 
                    value="1">
                <input 
                    type="text" 
                    name="id_cliente" 
                    value="<?php echo $idUsuario; ?>">
            </div>
            <button  class="btn btn-primary">
                Guardar
            </button>
        </form>
        <!-- FIN DEL FORMULARIO DE REGISTRO DE CARGAS -->
    </div>
</div>
<?php
    incluirTemplate('footer');
    incluirTemplate('menuScroll');
    incluirTemplate('scripts');
?>