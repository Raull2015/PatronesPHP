<?php

	class ListaA implements Observado{
		$lista = array();
		$observadores = array();

		$op;

		public function agregarArray($lista1){
			array_push($lista, $lista1);
		}

		public ListaA($op1){
			$op = $op1;
		}

		public function sepOp($op2){
			$op  = $op2;
		}

		public function agregarObservador($b){
			array_push($observadores, $b)
		};
  		public function quitarObservador($b1){

  		};

  		public function notificar(){
  			foreach ($observadores as $interador => $pos) {
  				$pos -> 
  			}
  		};
	}
?>