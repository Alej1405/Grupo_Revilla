<?php

namespace App;

class Registro {

    //declarar variables para Active Record
        public $id;
        public $numeroCedula;
        public $nombre;
        public $nombre2;
        public $apellidoP;
        public $apellidoM;
        public $fechaNacimiento;
        public $telefono;
        public $celular;
        public $clave;

    //constructor de clase
    public function __construct($args = [])
    {
        $this -> id = $args['id'] ?? '';
        $this -> numeroCedula = $args['numeroCedula'] ?? '';
        $this -> nombre = $args['nombre'] ?? '';
        $this -> nombre2 = $args['nombre2'] ?? '';
        $this -> apellidoP = $args['apellidoP'] ?? '';
        $this -> apellidoM = $args['apellidoM'] ?? '';
        $this -> fechaNacimiento = $args['fechaNacimiento'] ?? '';
        $this -> telefono = $args['telefono'] ?? '';
        $this -> celular = $args['celular'] ?? '';
        $this -> clave = $args['clave'] ?? '';
    }
}