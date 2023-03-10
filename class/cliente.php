<?php

namespace App;

class Cliente{

    // contectar base de datos 
        protected static $db;
    
    //iterar las columnas de la base de datos
        protected static $columnasDB = ['id', 'nombre', 'apellido', 'cedula', 'direccion', 'provincia', 'ciudad', 'referencia', 'celular', 'telefono', 'correo', 'pasword', 'promocion'];

    //validacion

        protected static $errores = [];

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

            //query para insertar
        $query = "INSERT INTO clientes_GR ( ";
        $query .= join(', ', array_keys($datos));
        $query .= " ) VALUES ('";
        $query .= join("', '", array_values($datos));
        $query .= "') ";

        //insertar en la base de datos

        $resultado = self::$db -> query($query);
        
        //condicion para confirmar
            if($resultado){
                // mensaje de exito
                registroGuardado();
                header('Location: login.php');
            }

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

    //validar datos
    public static function getErrores()
    {
        return self::$errores;
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "El nombre es obligatorio";
        }
        if(!$this->apellido){
            self::$errores[] = "El apellido es obligatorio";
        }
        if(!$this->cedula){
            self::$errores[] = "El n??mero de cedula es obligatorio";
        }
        if(!$this->correo){
            self::$errores[] = "El correo es obligatorio";
        }
        if(!$this->celular){
            self::$errores[] = "El n??mero de celular es obligatorio";
        }
        if(!$this->pasword){
            self::$errores[] = "Es necesario crear una contrase??a";
        }
        return self::$errores;
    }
}