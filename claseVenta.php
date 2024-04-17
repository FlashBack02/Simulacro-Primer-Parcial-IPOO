<?php
class Venta{
    // Representación de una venta
 
    //Se registra la siguiente información: número, fecha, referencia al cliente, 
    //referencia a una colección de
    //motos y el precio final.
 
     //Método constructor que recibe como parámetros los valores iniciales para los atributos.
    private $numero ;
    private $fecha;
    private $refCliente;
    private $colMotos = [];
    private $precioFinal;
 
   
    public function  __construct($numero, $fecha, $refCliente, $precioFinal){
        // Metodo constructor de la clase Cliente
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->refCliente = $refCliente;
        $this->precioFinal = $precioFinal;
    }
 
    // Métodos GETTER cuya principal responsabilidad es devolver el valor de una propiedad de la instancia de la clase
    public function getNumero(){
        return $this->numero;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getRefCliente(){
        return $this->refCliente;
    }
    public function getMotos(){
     return $this->motos;
    }
    public function getMotosIndice($indice){
        return $this->motos[$indice];
    }
     public function getPrecioFinal(){
        return $this->precioFinal;
    }
 // FIN Métodos GETTER
 
 
    // Método SETTER se utiliza para modificar el valor de una propiedad privada de una clase.
    public function setNumero($nuevoNumero){
        $this->numero = $nuevoNumero ;
    }
    public function setFecha($nuevoFecha){
        $this->fecha = $nuevoFecha;
    }
    public function setRefCliente($nuevoRefCliente){
        $this->refCliente = $nuevoRefCliente;
    }
    public function setMotos($nuevoMotos){
     $this->motos = $nuevoMotos;
    }
    public function setPrecioFinal($nuevoPrecioFinal){
        $this->precioFinal = $nuevoPrecioFinal;
    }
 
 // FIN Método SETTER

    /**Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
    *incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
    *vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
    *Utilizar el método que calcula el precio de venta de la moto donde crea necesario. 
    *@param ARRAY $objMoto
    *@retur INT*/
    public function incorporarMoto($objMoto){
        $precioMoto = 0;
        $precioFinal = $this->getPrecioFinal;
        $compra = $this->getCosto();
        if ($objMotos->getDisponibilidad()) {
            $this->motos[] = $objMotos;
            $precioMoto = darPrecioVenta($compra);
            $precioTotal = $precioMoto + $precioFinal;
            $this->setPrecioFinal($precioTotal);
        } return $precioMoto;
   }

   
    public function __toString(){
     return  "Venta: ".$this->getNumero(). " (Fecha: ". $this->getFecha() . " )\n 
     Referencia al cliente: ". $this->getRefCliente() . " (Motos: ". $this->getMotos() . ")\n
     Precio: ". $this->getPrecioFinal() . "\n";
    }
   
    public function __destruct(){
    }
 }
 ?>