<?php /*En la clase Prestamo:
1. Se registra la siguiente información: identificación, código del electrodoméstico, fecha otorgamiento,
monto, cantidad_de_cuotas, taza de interés, la colección de cuotas 
y la referencia a la persona que solicito el préstamo.
2. Método constructor que recibe como parámetros los siguientes valores: identificación, monto, cantidad
de cuotas, taza de interés y la referencia a la persona que solicito el préstamo.
 El constructor debe asignar los valores recibidos a las variables instancias que corresponda.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.*/
class Prestamo{
    private $identificacion;
    private $codigoElectrodomestico;
    private $fechaOtorgamiento;
    private $monto;
    private $cantidadCuotas;
    private $tazaInteres; 
    private $objCuotas; 
    private $objPersona;
    //la referencia a la persona que solicito el préstamo.

    public function __construct($identificacion,$codigoElectrodomestico,$fechaOtorgamiento,$monto,$cantidadCuotas,$tazaInteres,$objCuotas, $objPersona)
    {
        $this->identificacion= $identificacion;
        $this->codigoElectrodomestico= $codigoElectrodomestico;
        $this->fechaOtorgamiento=$fechaOtorgamiento;
        $this->monto=$monto;
        $this->cantidadCuotas=$cantidadCuotas;
        $this->tazaInteres=$tazaInteres;
        $this->objCuotas= $objCuotas;
        $this->objPersona= $objPersona;
    }

        public function getIdentificacion(){
            return $this->identificacion;
        }
        public function getCodigoElectrodomestico(){
            return $this->codigoElectrodomestico;
        }
        public function getFechaOtorgamiento(){
            return $this->fechaOtorgamiento;
        }
        public function getMonto(){
            return $this->monto;
        }
        public function getCantidadCuotas(){
            return $this->cantidadCuotas ;
        }
        public function getTazaInteres(){
            return $this->tazaInteres;
        }
        public function getObjCuotas(){
            return $this->objCuotas;
        }
        public function getObjPersona(){
            return $this->objPersona;
        }

        public function setIdentificacion($identificacion){
            $this->identificacion=$identificacion;
        }
        public function setCodigoElectrodomestico($codigoElectrodomestico){
            $this->codigoElectrodomestico=$codigoElectrodomestico;
        }
        public function setFechaOtorgamiento($fechaOtorgamiento){
            $this->fechaOtorgamiento=$fechaOtorgamiento;
        }
        public function setMonto($monto){
            $this->monto=$monto;
        }
        public function setCantidadCuotas($cantidadCuotas){
            $this->cantidadCuotas=$cantidadCuotas;
        }
        public function setTazaInteres($tazaInteres){
            $this->tazaInteres=$tazaInteres;
        }

        /* la colección de cuotas: número ,monto_cuota , monto_interes y cancelada
        , la referencia a la persona que solicito el préstamo */
        public function __toString()
        {$objCuotas=$this->getObjCuotas();
         $objPersona=$this->getObjPersona();
            return (" \n \n Prestamo: \n".
                   "\n Identificacion: ".$this->getIdentificacion().
                   "\n Código del electrodoméstico: ".$this->getCodigoElectrodomestico().
                   "\n Fecha otorgamiento: ".$this->getFechaOtorgamiento().
                   "\n Monto: ".$this->getMonto().
                   "\n Cantidad de cuotas: ".$this->getCantidadCuotas().
                   "\n Taza de interés: ".$this->getTazaInteres().
                   " \n \n Cuotas: \n".
                   //número ,monto_cuota , monto_interes y cancelada
                       "\n Numero Cuota: ".$objCuotas->getNumero().
                       "\n Monto de la Cuota: ".$objCuotas->getMontoCuota().
                       "\n Monto de Interes: ".$objCuotas->getMontoInteres().
                       "\n Cancelada: ".$objCuotas->getCancelada().
                    " \n \nPersona:  \n".
                    //nombre, apellido, dni, direccion, mail, telefono y neto
                        "\n Nombre: ".$objPersona->getNombre().
                        "\n Apellido: ".$objPersona->getApellido().
                        "\n Dni: ".$objPersona->getDNI().
                        "\n Direccion: ".$objPersona->getDireccion().
                        "\n Mail: ".$objPersona->getMail().
                        "\n Telefono: ".$objPersona->getTelefono().
                        "\n Neto: ".$objPersona->getNeto());
        }

    /*Implementar el método privado calcularInteresPrestamo(numCuota) que recibe por parámetro el numero de la cuota 
    y calcula el importe del interés sobre el saldo deudor.
    Por ejemplo si el préstamo tiene 5 cuotas, el monto total = 50000 y el interés 0.1% entonces el monto del
    interés sobre saldo deudor que debe calcularse para cada una de las cuotas deben ser los siguientes:
    interés cuota 1: 50 000 * 0.01 = 500
    interés cuota 2: ( 50 000- (50 000 /5) ) * 0.01 = 400
    interés cuota 3: ( 50 000 - ( (50 000 /5)*2) ) * 0.01 = 300
    interés cuota 4: (50 000 - ( (50 000 /5)*3 )) * 0.01 = 200
    interés cuota 5: (50 000 - ( (50 000 /5)*4 )) * 0.01 = 100
    $interesCuota=($monto-(($monto/$cantCuotas )*$numCuota-1))*$tazaInteres/0.01;
    */
    public  function calcularInteresPrestamo($numCuota){
        //interes cuota numCuota = ( monto - (( monto/ cantidad_de_cuotas) * (numCuota -1)) * taza_de_interés/0.01
        $i=1;
        $objCuotas=$this->getObjCuotas();
        $monto=$objCuotas->getMontoCuota();
        echo "monto: ".$monto."\n";
        //$cantCuotas=$this->getCantidadCuotas();
        //echo"cantidad de cuotas: ".$cantCuotas."\n";;
        $tazaInteres=$this->getTazaInteres();
        echo "taza de interes: ".$tazaInteres."\n";
        while($i< $numCuota){
            $interesCuota=($monto-($monto/$numCuota)*($i-1))*$tazaInteres;
            echo "interes cuota ".$i.":".$interesCuota."\n";
            $i++;
        }
    }
}




/* if($i==1){
                $interesCuota=$monto*$tazaInteres;
                echo "interes cuota ".$i.":".$interesCuota."\n";
                $i++;
            }elseif($i==2){
                $interesCuota=($monto-($monto/$cantCuotas ))*$tazaInteres;
                echo "interes cuota ".$i.":".$interesCuota."\n";
                $i++;
            }elseif($i==3){
                $interesCuota=($monto-(($monto/$cantCuotas )*$numCuota))*$tazaInteres;
                echo "interes cuota ".$i.":".$interesCuota."\n";
                $i++;
            }elseif($i==4){
                $interesCuota=($monto-(($monto/$cantCuotas )*$numCuota))*$tazaInteres;
                echo "interes cuota ".$i.":".$interesCuota."\n";
                $i++;
            }else{
                $interesCuota=($monto-(($monto/$cantCuotas )*$numCuota))*$tazaInteres;
            }*/
?>