<?php

namespace App;

class Registro {

    //coneccion a la base de datos
    protected static $db;
    //iterar las columnas delas base de datos
    protected static $columnasDB = ['id', 'cedula', 'nombre', 'nombre2', 'apellidoP', 'apellidoM', 'fechaNacimiento', 'telefono', 'celular', 'clave'];

    //declarar variables para Active Record
        public $id;
        public $cedula;
        public $nombre;
        public $nombre2;
        public $apellidoP;
        public $apellidoM;
        public $fechaNacimiento;
        public $telefono;
        public $celular;
        public $clave;

    //funcion para conectar a la base de datos
    public static function setDB($database)
    {
        self::$db = $database;
    }

    //constructor de clase
    public function __construct($args = [])
    {
        $this -> id = $args['id'] ?? '';
        $this -> cedula = $args['cedula'] ?? '';
        $this -> nombre = $args['nombre'] ?? '';
        $this -> nombre2 = $args['nombre2'] ?? '';
        $this -> apellidoP = $args['apellidoP'] ?? '';
        $this -> apellidoM = $args['apellidoM'] ?? '';
        $this -> fechaNacimiento = $args['fechaNacimiento'] ?? '';
        $this -> telefono = $args['telefono'] ?? '';
        $this -> celular = $args['celular'] ?? '';
        $this -> clave = $args['clave'] ?? '';
    }

    //funcion guardar
    public function guardar()
    {

        //sanitizar los datos
        $datos = $this -> sanitizarDatos();

        //query para insertar
        $query = "INSERT INTO usuarios ( ";
        $query .= join(', ', array_keys($datos));
        $query .= " ) VALUES (' ";
        $query .= join("', '", array_values($datos));
        $query .= " ') ";
        
        
        $resultado = self::$db -> query($query);
        
        debuguear($resultado);
    }

    //unir las comunsas de la base de datos o identificar 
    public function datos()
    {
        $datos = [];
        foreach (self::$columnasDB as $columna) {
            if ($columna === 'id') continue;
            $datos[$columna] = $this -> $columna;
        }
        return $datos;
    }

    //sanitizar los datos
    public function sanitizarDatos()
    {
        //validar los datos
        $datos = $this -> datos();
        $sanitizado = [];

        foreach ($datos as $key => $value) {
            $sanitizado[$key] = self::$db -> escape_string($value);
        }
        return $sanitizado;
    }
}