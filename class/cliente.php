<?php

namespace App;

class Cliente{

    // contectar base de datos 
        protected static $db;
    
    //iterar las columnas de la base de datos
        protected static $columnasDB = ['id', 'nombre', 'apellido', 'cedula', 'direccion', 'provincia', 'ciudad', 'referencia', 'celular', 'telefono', 'correo', 'pasword', 'promocion'];

    // declarar los atributos de la clase
        public $id;
        public $nombre;
        public $apellido;
        public $cedula;
        public $direccion;
        public $provincia;
        public $ciudad;
        public $referencia;
        public $celular;
        public $telefono;
        public $correo;
        public $pasword;
        public $promocion;

    //conectar con la base de datos
        public static function setDB($database)
        {
            self::$db = $database;
        }
    // construcctor de clase
        public function __construct($args =[])
        {
            $this -> id = $args['id'] ?? '';
            $this -> nombre = $args['nombre'] ?? '';
            $this -> apellido = $args['apellido'] ?? '';
            $this -> cedula = $args['cedula'] ?? '';
            $this -> direccion = $args['direccion'] ?? '';
            $this -> provincia = $args['provincia'] ?? '';
            $this -> ciudad = $args['ciudad'] ?? '';
            $this -> referencia = $args['referencia'] ?? '';
            $this -> celular = $args['celular'] ?? '';
            $this -> telefono = $args['telefono'] ?? '';
            $this -> correo = $args['correo'] ?? '';
            $this -> pasword = $args['pasword'] ?? '';
            $this -> promocion = $args['promocion'] ?? '';
        }

        //funcion guardar 
        public function guardar()
        {
            //sanitizar los datos 
            $datos = $this -> sanitizarDatos();

            debuguear($datos);
        }

        //unir los datos llaves y valores
        public function datos()
        {
            $datos = [];
            foreach (self::$columnasDB as $columna){
                if($columna === 'id') continue;
                $datos[$columna] = $this -> $columna;
            }
            return $datos;
        }

        //sanitizar datos del fomulario
        public function sanitizarDatos()
        {
            //validar los datos
            $datos = $this -> datos();
            $sanitizado =[];

            foreach ($datos as $key => $value) {
                $sanitizado[$key] = self::$db -> escape_string($value);
            }
            return $sanitizado;
        }
}
