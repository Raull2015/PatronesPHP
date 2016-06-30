<?php include("Observador.php")

class ObservadorEsp implements Observador{
  private int $num;
  private Operacion $op;

  public function __construct($op){
    $this->op = $op;
  }

  public function actualizar(){
    echo "Se ha agregado array B con resultado: " + $this->num + " de la operacion" + $this->op->getOperacion();
  }

  public function getNumero(){
    return $this->num;
  }

  public function getOperacion(){
    return $this->op->getOperacion();
  }

}

?>
