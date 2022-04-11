<?php
/*En la clase Cuota:
1. Se registra la siguiente información: número ,monto_cuota , monto_interes y cancelada (atributo que va a
contener un valor true, si la cuota esta paga y false en caso contrario)
2. Método constructor que recibe como parámetros los valores iniciales para los atributos: número,
monto_cuota y monto_interes definidos en la clase. Por defecto todas las cuotas deben ser generadas
como canceladas = false.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método darMontoFinalCuota() que retorna el importe total de la cuota mas los intereses
que deben ser aplicados.
*/

class Cuota{
    private $numero;
    private $montoCuota;
    private $montoInteres;
    private $cancelada;

    public function __construct($numero, $montoCuota, $montoInteres,$cancelada)
    {   
        $this->numero=$numero; 
        $this->montoCuota=$montoCuota; 
        $this->montoInteres=$montoInteres; 
        $this->cancelada= $cancelada; 
        
    }

    public function getNumero(){
        return $this-> numero;
    }
    public function getMontoCuota(){
        return $this-> montoCuota;
    }
    public function getMontoInteres(){
        return $this->montoInteres;
    }
    public function getCancelada(){
        return $this->cancelada;
    }

    public function setNumero($numero){
        $this->numero=$numero;
    }
    public function setMontoCuota($montoCuota){
        $this->montoCuota=$montoCuota;
    }
    public function setMontoInteres($montoInteres){
        $this->montoInteres=$montoInteres;
    }
    public function setCancelada($cancelada){
        $this->cancelada=$cancelada;
    }

    public function __toString()
    { 
      if ($this->getCancelada()==1){
          $cancelada= "Ha sido cancelada";
      }else
        $cancelada= "No ha sido cancelada";
      return "\n Numero: ".$this->getNumero().
             "\n Monto de la Cuota: ".$this->getMontoInteres().
             "\n Monto de Interes: ".$this->getMontoInteres().
             "\n Cancelada: ".$cancelada;
    } 

    public function darMontoFinalCuota(){
    /*5. Implementar el método darMontoFinalCuota() que retorna el importe total de la cuota mas los intereses
    que deben ser aplicados.Monto cuota + monto Interes =Monto final cuota*/
        $montoFinalCuota= $this->getMontoCuota()+$this->getMontoInteres();
        return $montoFinalCuota;}
}
?>