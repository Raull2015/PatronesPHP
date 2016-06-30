<?php

	class ListaB {
		private $listaEnteros;

		public function __construct(){
			$this->listaEnteros = array();
		}
		public function agregarNumero($num){
			array_push($this->listaEnteros, $num);
		}
		public function getListaEnteros(){
			return $this->listaEnteros;
		}
	}
?>
