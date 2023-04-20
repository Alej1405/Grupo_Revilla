<?php
define ('TEMPLATES_URL', __DIR__ . '/templates');
define ('FUNCIONES_URL', __DIR__ . 'funciones.php');

function incluirTemplate ($nombre) {
    include TEMPLATES_URL . "/$nombre.php";
}

function estaAutenticado() : bool  {
    session_start();
    $auth = $_SESSION['login']; 
    if ($auth) {
        return true;
    }
        header('location: ../index.php');
        return false;
}

function debuguear ($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function s($html) : string{
    $s = htmlspecialchars($html);
    return $s;
}

function registroGuardado(){
    echo "<script>
        Swal.fire({
            title: 'Registro Guardado',
            text: 'Tu cuenta se creo correctamente, porfavor revisa tu correo ahí encontratras la dirección de tu casilla',
            icon: 'success',
            confirmButtonText: 'Continuar'
        })
    </script>";
}