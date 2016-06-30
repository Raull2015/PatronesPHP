<?php
include "Observador.php" ;

class ObservadorEsp implements Observador{
  private $num;
  private $op;
  private $objetoObservado;

  public function __construct($op,$oO){
    $this->op = $op;
    $this->objetoObservado = $oO;
    $this->objetoObservado->agregarObservador($this);
  }

  public function setNumero($num){
    $this->num = $num;
  }

  public function actualizar(){
    echo "Se ha agregado array B con resultado: ", $this->num , " de la operacion " , $this->op->getOperacion() .PHP_EOL;
  }

  public function getNumero(){
    return $this->num;
  }

  public function getOperacion(){
    return $this->op->getOperacion();
  }

}

?>
