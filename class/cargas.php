<?php 

namespace App;

class Cargas{

    //conectar base de datos
        protected static $db;

    //iterar las columnas de la base de datos
        protected static $columnasDB = ['id', 'tracking', 'origen', 'detalle', 'peso', 'unidad', 'largo ancho', 'alto', 'tipo', 'factura', 'valorTotal', 'impuestos', 'envio', 'id_cliente'];

    //validacion 
        protected static $errores =[];

    //atribustos de la clase
    public $id;
    public $tracking;
    public $origen;
    public $detalle;
    public $peso;
    public $unidad;
    public $largo;
    public $ancho;
    public $alto;
    public $tipo;
    public $factura;
    public $valorTotal;
    public $impuestos;
    public $envio;
    public $id_cliente;

    //conectar con la base de datos
        public static function setDB($database)
        {
            self::$db = $database;
        }

    //constructor de la clase
    public function __construct($args =[])
    {
        $this -> id = $args ['id'] ?? '';
        $this -> tracking = $args ['tracking'] ?? '';
        $this -> origen = $args ['origen'] ?? 'actualizar';
        $this -> detalle = $args ['detalle'] ?? '';
        $this -> peso = $args ['peso'] ?? 'actualizar';
        $this -> unidad = $args ['unidad'] ?? 'actualizar';
        $this -> largo = $args ['largo'] ?? 'actualizar';
        $this -> ancho = $args ['ancho'] ?? 'actualizar';
        $this -> alto = $args ['alto'] ?? 'actualizar';
        $this -> tipo = $args ['tipo'] ?? 'actualizar';
        $this -> factura = $args ['factura'] ?? 'actualizar';
        $this -> valorTotal = $args ['valorTotal'] ?? 'actualizar';
        $this -> impuestos = $args ['impuestos'] ?? 'actualizar';
        $this -> envio = $args ['envio'] ?? 'actualizar';
        $this -> id_cliente = $args ['id_cliente'] ?? 'actualizar';
    }
    
    //funcion guardar
    public function guardar()
    {
        //sanitizar datos
            $datos = $this -> sanitizarDatos();

        //query para insertar bases datos
        $query = "INSERT INTO clientes_GR ( ";
        $query .= join(', ', array_keys($datos));
        $query .= " ) VALUES ('";
        $query .= join("', '", array_values($datos));
        $query .= "') ";
        
        //insertar en la base de datos
        $resultado = self::$db -> query($query);

        //condicion para confirmar 
            if($resultado){
                //mensaje de extio
                echo    "<script>
                            alert('se guardo'); 
                        </script>";
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

    //sanitizar datos del formulario
    public function sanitizarDatos(){
        //validar los datos
        $datos = $this -> datos();
        $sanitizado = [];

        foreach ($datos as $key => $value){
            $sanitizado[$key] = self::$db -> escape_string($value);
        }
        return $sanitizado;
    }

    //validar los datos
    public static function getErrores()
    {
        return self::$errores;
    }

    public function validar(){
        if(!$this->tracking){
            self::$errores[] = "El nú,ero de rastreo o tracking es obligatoio.";
        }
        if(!$this->detalle){
            self::$errores[] = "Es necesario saber que es lo que compraste. ";
        }
        return self::$errores;
    }

}