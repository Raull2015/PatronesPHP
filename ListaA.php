<?php

	class ListaA {
		$lista = array();
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
	}
?>