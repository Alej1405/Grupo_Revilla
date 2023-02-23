<?php 

namespace App;

class Cargas{

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
        debuguear($args);
    }
    

}