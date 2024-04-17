<?php
class Empresa{
   // Representación de una Empresa

   // Se registra la siguiente información: denominación, dirección, la colección de clientes, colección de
    //motos y la colección de ventas realizadas.

    //Método constructor que recibe como parámetros los valores iniciales para los atributos.
   private  $denominacion ;
   private $direccion;
   private $colObjClientes = [];
   private $colObjMotos = [];
   private $colObjMotosVen = [];

  
   public function  __construct($denominacion, $direccion){
       // Metodo constructor de la clase Empresa
       $this->denominacion = $denominacion;
       $this->direccion = $direccion;
   }

   public function ingresarClientes($objCliente){
    $agredado = 1;
    $this->colObjClientes[]= $objCliente;
    return $agredado;
   }

   public function ingresarObjMotos($objMotos){
    $agredado = 0;
    if ($objMotos->getDisponibilidad()) {
        $this->colObjMotos[] = $objMotos;
        $agredado = 1;
    } else {
        $this->colObjMotosVen[] = $objMotos;
        $agredado = -1;
    } return $agredado;
   }

   

   // Métodos GETTER cuya principal responsabilidad es devolver el valor de una propiedad de la instancia de la clase
   public function getDenominacion(){
       return $this->denominacion;
   }
   public function getDireccion(){
       return $this->direccion;
   }
   public function getColObjClientes(){
       return $this->colObjClientes;
   }
   public function getObjClienteIndice($indice){
    return $this->colObjClientes[$indice];
   }
   public function getColObjMotos(){
    return $this->colObjMotos;
    }
    public function getColObjMotosInd($indice){
        return $this->colObjMotos[$indice];
    }
    public function getColObjMotosVen(){
        return $this->colObjMotosVen;
    }
     public function getColObjMotosVenInd($indice){
        return $this->colObjMotosVen[$indice];
    }
// FIN Métodos GETTER


   // Método SETTER se utiliza para modificar el valor de una propiedad privada de una clase.
   public function setDenominacion($nuevoDenominacion){
       $this->denominacion = $nuevoDenominacion ;
   }
   public function setDireccion($nuevoDireccion){
       $this->direccion = $nuevoDireccion;
   }
   public function setColObjClientes($nuevoColObjClientes){
       $this->colObjClientes = $nuevoColObjClientes;
   }
   public function setColObjMotos($nuevoColObjMotose){
    $this->colObjMotos = $nuevoColObjMotos;
    }
    public function setColObjMotosVen($nuevoColObjMotosVen){
        $this->colObjMotosVen = $nuevoColObjMotosVen;
        }

// FIN Método SETTER

public function imprimirColClientes() {
    $cantClientes = count($this->getColObjClientes());
    $clientes = " ";
    for ($i = 0; $i < $cantClientes; $i++) {
        $clientes .= $this->getObjClienteIndice($i) ."\n"; // Corregido para usar el método correcto
    }
    return $clientes;
}

public function imprimirMotos() {
    $cantMotos = count($this->getColObjMotos());
    $clientes = " ";
    $espacio = "\n";
    for ($i = 0; $i < $cantMotos; $i++) {
        $clientes .= $this->getColObjMotosInd($i) . $espacio; // Corregido para usar el método correcto
    }
    return $clientes;
}

public function imprimirMotosVendidas() {
    $cantMotosVen = count($this->getColObjMotosVen());
    $clientes = " ";
    $espacio = "\n";
    for ($i = 0; $i < $cantMotosVen; $i++) {
        $clientes .= $this->getColObjMotosVenInd($i) . $espacio; // Corregido para usar el método correcto
    }
    return $clientes;
}
  
   public function __toString(){
    return  $this->getDenominacion(). " ". $this->getDireccion() . "\n".
    "Clientes: ". $this->imprimirColClientes(). "\n".
    "Motos en venta: " . $this->imprimirMotos(). "\n".
    "Motos vendidas: ". $this->imprimirMotosVendidas() . "\n";
   }

   /**Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de la Empresa y
    * retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro
    * @param INT $codigoMoto
    * @retur ARRAY */
    public function retornarMoto($codigoMoto) {
        $i = 0;
        $motoEncontrada = null; 
        $cantMotos = count($this->getColObjMotos());
    
        while ($i < $cantMotos && $motoEncontrada == null) { 
            if ($this->getColObjMotosInd($i)->getCodigo() == $codigoMoto) {
                $motoEncontrada = $i; 
            }
            $i++;
        }
        return $motoEncontrada; 
    }
    /**Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
     * parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
     * se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
     * Venta que debe ser creada. Recordar que no todos los clientes ni todas las motos, están disponibles
     * para registrar una venta en un momento determinado.
     * @param ARRAY $colCodigosMoto
     * @param OBJ $objCliente */
    public function registrarVenta($colCodigosMoto, $objCliente){
        $colMotosVenta = [];
        if($objCliente->getEstadoAlta() == "Alta"){
            $cantMotos = count($this->getColObjMotos());
            for ($i=0; $i < $cantMotos; $i++) { 
                if ($colCodigosMoto[$i] == $this->getColObjMotosInd($i)->getCodigo()) {
                    $colMotosVenta = $this->getColObjMotosInd($i);
                }
            } $this->setColMotos($colMotosVenta);
        }
    }

    public function retornarVentasXCliente($tipo,$numDoc){
        $cantClientes = count($this->getObjCliente);
        for ($i=0; $i < $cantClientes; $i++) { 
         if($tipo == $this->getObjClienteIndice($i)->getTipo() && $numDoc == $this->getObjClienteIndice($i)->getDniCliente()){
            
         }
        }
    }


    public function __destruct(){
    }
}
?>