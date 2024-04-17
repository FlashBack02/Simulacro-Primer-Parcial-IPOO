<?php
class Cliente{
   // Representación de un Cliente

   // $nombreCliente, $apellidoCliente, $estadoAlta si está o no dado de baja, el tipo y $dniCliente el número de
   //documento. Si un cliente está dado de baja, no puede registrar compras desde el momento de su baja.

    //Método constructor que recibe como parámetros los valores iniciales para los atributos.
   private  $nombreCliente ;
   private $apellidoCliente;
   private $estadoAlta;
   private $tipo;
   private $dniCliente;

  
   public function  __construct($nombreCliente, $apellidoCliente, $estadoAlta, $tipo, $dniCliente){
       // Metodo constructor de la clase Cliente
       $this->nombreCliente = $nombreCliente;
       $this->apellidoCliente = $apellidoCliente;
       $this->estadoAlta = $estadoAlta;
       $this->tipo = $tipo;
       $this->dniCliente = $dniCliente;
   }

   // Métodos GETTER cuya principal responsabilidad es devolver el valor de una propiedad de la instancia de la clase
   public function getNombreCliente(){
       return $this->nombreCliente;
   }
   public function getApellidoCliente(){
       return $this->apellidoCliente;
   }
   public function getEstadoAlta(){
       return $this->estadoAlta;
   }
   public function getTipo(){
    return $this->tipo;
    }
   public function getDniCliente(){
    return $this->dniCliente;
}
// FIN Métodos GETTER


   // Método SETTER se utiliza para modificar el valor de una propiedad privada de una clase.
   public function setNombreCliente($nuevoNombreCliente){
       $this->nombreCliente = $nuevoNombreCliente ;
   }
   public function setApellidoCliente($nuevoApellidoCliente){
       $this->apellidoCliente = $nuevoApellidoCliente;
   }
   public function setEstadoAlta($nuevoEstadoAlta){
       $this->estadoAlta = $nuevoEstadoAlta;
   }
   public function setTipo($nuevoTipo){
    $this->Tipo = $nuevoTipo;
    }
   public function setDniCliente($nuevoDniCliente){
    $this->dniCliente = $nuevoDniCliente;
}

// FIN Método SETTER
  
   public function __toString(){
    return  $this->getNombreCliente(). " ". $this->getApellidoCliente() . " (DNI ". $this->getDniCliente() . ") (Estado: ". $this->getEstadoAlta() . ")\n";
   }
  
   public function __destruct(){
   }
}
?>