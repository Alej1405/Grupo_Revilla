<?php 
require '../includes/app.php';
incluirTemplate("header_sis");
use App\Registro;

//Enviar datos dede formulario

if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    //INSTANCIAR LA CLASE
    $registro = new Registro($_POST);

    debuguear($registro);
}


?>
<body>
    <div class="login-card">
        <h2>Registro</h2>
        <h3>Registro de nuevo Usuario (requiere permiso de administrador)</h3>
        <form action="" method="POST" class="login-form">
            <input 
                type="number"
                placeholder="Número de Cédula"
                name="numeroCedula"
            />
            <input 
                type="text"
                placeholder="Primer nombre"
                name="nombre"
            />
            <input 
                type="text"
                placeholder="Segundo Nombre"
                name="nombre2"
            />
            <input 
                type="text"
                placeholder="Apellido Paterno"
                name="apellidoP"
            />
            <input 
                type="text"
                placeholder="Apellido Materno"
                name="apellidoM"
            />
            <input 
                type="date"
                placeholder="Fecha Nacimiento"
                name="fechaNacimiento"
            />
            <input 
                type="number"
                placeholder="Teléfono"
                name="telefono"
            />
            <input 
                type="number"
                placeholder="Número de celular"
                name="celular"
            />
            <input 
                type="number"
                placeholder="Clave"
                name="clave"
            />
            <button type="submit">
                INGRESAR
            </button>
        </form>
    </div>
</body>