<?php

require 'funciones.php';
require '../vendor/autoload.php';
require 'config/database.php';

use App\Registro;

$db = conectarDB();
//Registro::setDB($db);