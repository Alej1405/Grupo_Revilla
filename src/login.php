<?php
require '../includes/app.php';

incluirTemplate('header_sis');
?>
<body>
    <div class="login-card">
        <h2>Ingresar</h2>
        <h3>Ingresa tu usuario y clave</h3>
        <form action="" class="login-form">
            <input type="text"
            placeholder="Usuario">
            <input type="password"
            placeholder="Clave">
            <a href="">
                Registrar nuevo usuario.
            </a>
            <button type="submit">
                INGRESAR
            </button>
        </form>
    </div>
</body>