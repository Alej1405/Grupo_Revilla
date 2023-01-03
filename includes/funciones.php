<?php
define ('TEMPLATES_URL', __DIR__ . '/templates');
define ('FUNCIONES_URL', __DIR__ . 'funciones.php');

function incluirTemplate ($nombre) {
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutenticado () {
    session_start();

    if (!$_SESSION['login']) {
        header('Location: /');
    }
}

function debuguear ($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}