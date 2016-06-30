<?php
	include "Observado.php";
	class ListaA implements Observado{
		private $lista;
		private $observadores;
		private $op;
		private $res;

		public function agregarArray($lista1){
			array_push($this->lista, $lista1);

			$this->res = $this->op->realizarOperacion($lista1->getListaEnteros());
			$this->notificar();
		}

		public function __construct($op1){
			$this->op = $op1;
			$this->lista = array();
			$this->observadores = array();
		}

		public function setOp($op){
			$this->op  = $op;
		}

		public function agregarObservador($b){
			array_push($this->observadores, $b);
		}

  		public function quitarObservador($b1){

  		}

  		public function notificar(){
  			foreach ($this->observadores as $interador => $pos) {
					if(($this->res == $pos->getNumero()) && ($this->op->getOperacion() == $pos->getOperacion())){
  					$pos -> actualizar();
					}
  			}
  		}
	}
?>
