<?php

//conectar a la base de datos
function conectarDB() : mysqli{
    $db = new mysqli('localhost', 'root', '', 'grupo_revilla');

    if (!$db) {
        echo "ERROR, NO SE PUEDE CONECTAR CON LA BASE DE DATOS";
        exit;
    }

    return $db;
} 