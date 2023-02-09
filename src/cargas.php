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
        <form action="" method="post">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                    Tracking
                </span>
                <input  type="text" 
                        class="form-control" 
                        placeholder="Una serie de numeros y letras 90002111 / 1Z022145" 
                        aria-label="Tracking" 
                        aria-describedby="Tracking"
                        name="tracking"
                        require>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">
                    En que tienda compraste...?
                </span>
                <input  type="text" 
                        class="form-control" 
                        placeholder="Puede ser Amazon, Ebay, Aliexpress" 
                        aria-label="origen" 
                        aria-describedby="origen"
                        name="origen">
            </div>
            
            <label for="basic-url" class="form-label">Ahora cuentanos acerca de tu compra</label>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Que es lo que compraste...?</span>
                <input  type="text" 
                        class="form-control"
                        placeholder="ejemplo: 2 pares de zapatos, 5 camisetas, 5 perfumes"
                        id="detalle" 
                        aria-describedby="detalle"
                        name="detalle"
                        require>
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text">
                    Sabes cuanto pesa...?
                </span>
                <input  type="text"
                        placeholder="Sólo ingresa la cantidad, si no lo tienes no llenes"
                        class="form-control" 
                        aria-label="Amount (to the nearest dollar)"
                        name="peso">
            </div>
            <input 
                type="button" 
                class="btn btn-primary"
                value="Guardar">
        </form>
        <!-- FIN DEL FORMULARIO DE REGISTRO DE CARGAS -->
    </div>
</div>
<?php
    incluirTemplate('footer');
    incluirTemplate('menuScroll');
    incluirTemplate('scripts');
?>