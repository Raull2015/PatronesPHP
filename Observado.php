<?php
interface Observado{
  public function agregarObservador($b);
  public function quitarObservador($b);
  public function notificar();

}
?>
