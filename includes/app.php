<?php

require 'funciones.php';
require '../vendor/autoload.php';
require 'config/database.php';

use App\Registro;
//conectar a la base de datos
$db = conectarDB();
Registro::setDB($db);