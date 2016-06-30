<?php
include "Operacion.php";
include "ListaA.php";
include "ListaB.php";
include "ObservadorEsp.php";

$operacionS = new Suma();
$operacionR = new Resta();

//ListaA
$listaA = new ListaA($operacionS);

//observadores
$observadorDeSumas = new ObservadorEsp($operacionS,$listaA);
$observadorDeSumas->setNumero(6);
$observadorDeRestas = new ObservadorEsp($operacionR,$listaA);
$observadorDeRestas->setNumero(-6);

//listaB
$listaB = new ListaB();
$listaB->agregarNumero(1);
$listaB->agregarNumero(2);
$listaB->agregarNumero(3);

//probando observador de suma
$listaA->agregarArray($listaB);

//cambiando la operacion realizada
$listaA->setOp($operacionR);

//probando observador de resta
$listaA->agregarArray($listaB);

?>
