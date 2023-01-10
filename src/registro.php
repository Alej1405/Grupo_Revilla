<?php 
require '../includes/app.php';
incluirTemplate("header_sis");



?>
<body>
    <div class="login-card">
        <h2>Registro</h2>
        <h3>Registro de nuevo Usuario (requiere permiso de administrador)</h3>
        <form action="" method="POST" class="login-form">
            <input 
                type="number"
                placeholder="Número de Cédula"
            />
            <input 
                type="text"
                placeholder="Primer nombre"
            />
            <input 
                type="text"
                placeholder="Segundo Nombre"
            />
            <input 
                type="text"
                placeholder="Apellido Paterno"
            />
            <input 
                type="text"
                placeholder="Apellido Materno"
            />
            <input 
                type="date"
                placeholder="Fecha Nacimiento"
            />
            <input 
                type="number"
                placeholder="Teléfono"
            />
            <input 
                type="number"
                placeholder="Número de celular"
            />
            <input 
                type="number"
                placeholder="Clave"
            />
            <button type="submit">
                INGRESAR
            </button>
        </form>
    </div>
</body>