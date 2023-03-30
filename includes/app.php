<?php

require 'funciones.php';
require '../vendor/autoload.php';
require 'config/database.php';

use App\Registro;
//conectar a la base de datos
$db = conectarDB();
Registro::setDB($db);

use App\Cliente;
//conectar a la base de datos
$db = conectarDB();
Cliente::setDB($db);

use App\Cargas;
//conectar a la base de datos
$db = conectarDB();
Cargas::setDB($db);