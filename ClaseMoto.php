<?php
class Moto{
   // Representación de una Moto

   // Se registra la siguiente información: $código, $costo,$AñoFabricación año fabricación, $descripción, $incrementoAnual porcentaje
    //incremento anual, $disponibilidad activa (atributo que va a contener un valor true, si la moto está disponible para la
    //venta y false en caso contrario).

    //Método constructor que recibe como parámetros los valores iniciales para los atributos.
   private $codigo;
   private $costo;
   private $añoFabricación;
   private $descripción;
   private $incrementoAnual;
   private $disponibilidad;

  
   public function  __construct($codigo,$costo, $añoFabricación, $descripción, $incrementoAnual, $disponibilidad){
       // Metodo constructor de la clase Cliente
       $this->codigo = $codigo;
       $this->costo = $costo;
       $this->añoFabricación = $añoFabricación;
       $this->descripción = $descripción;
       $this->incrementoAnual = $incrementoAnual;
       $this->disponibilidad = $disponibilidad;
   }

   // Métodos GETTER cuya principal responsabilidad es devolver el valor de una propiedad de la instancia de la clase
   public function getCodigo(){
       return $this->codigo;
   }
   public function getCosto(){
    return $this->costo;
   }
   public function getAñoFabricación(){
       return $this->añoFabricación;
   }
   public function getDescripción(){
       return $this->descripción;
   }
   public function getIncrementoAnual(){
    return $this->incrementoAnual;
   }
   public function getDisponibilidad(){
    return $this->disponibilidad;
   }

// FIN Métodos GETTER


   // Método SETTER se utiliza para modificar el valor de una propiedad privada de una clase.
   public function setCodigo($nuevoCodigo){
       $this->nombreCodigo = $codigo ;
   }
   public function setCosto($nuevoCosto){
    $this->costo = $nuevoCosto ;
}
   public function setAñoFabricación($nuevoAñoFabricación){
       $this->añoFabricación = $nuevoAñoFabricación;
   }
   public function setDescripción($nuevoDescripción){
       $this->descripción = $nuevoDescripción;
   }
   public function setIncrementoAnual($nuevoIncrementoAnual){
    $this->incrementoAnual = $nuevoIncrementoAnual;
   }
   public function setDisponibilidad($nuevoDisponibilidad){
    $this->disponibilidad = $nuevoDisponibilidad;
   }
// FIN Método SETTER

  
   public function __toString(){
    return  $this->getCodigo(). " ". $this->getAñoFabricación() . " ( $" . $this->getCosto(). ")". $this->getDescripción() . " ". $this->getIncrementoAnual() . "% \n". 
    "Disponibilidad: " . $this->getDisponibilidad() . "\n";
   }

   /**método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una moto.
    *Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está disponible para
    *la venta, el método realiza el siguiente cálculo:
    *$_venta = $_compra + $_compra * (anio * por_inc_anual)
    *donde $_compra: es el costo de la moto.
    *anio: cantidad de años transcurridos desde que se fabricó la moto.
    *por_inc_anual: porcentaje de incremento anual de la moto. 
    *@param FLOAT $compra
    *@return INT */
    public function darPrecioVenta($compra){
        $venta = 0;
        $anio = date("Y") - $this->getAñoFabricación;
        $porcentajeIndAnual = $this->getIncrementoAnual;
        if($this->getDisponibilidad){
            $venta = $compra + $compra * ($anio * $porcentajeIndAnual);
        } return $venta;
    }
  
   public function __destruct(){
   }
}
?>