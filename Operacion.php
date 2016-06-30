<?php
interface Operacion{
  public function realizarOperacion($listaB);
  public function getOperacion();

}

Class Suma implements Operacion{
	public function realizarOperacion($listaB){
		$resultado = 0;
		Foreach ($listaB as $a){

			$resultado = $resultado + $a
		}

		return $resultado;
	}

	public function getOperacion(){
    return "+"
	}


}

Class Resta implements Operacion{

	public function realizarOperacion($listaB){
		$resultado = 0;
		Foreach ($listaB as $a){

			$resultado = $resultado - $a
		}

		return $resultado;
	}

	public function getOperacion(){
    return "-"
	}

}

?>
