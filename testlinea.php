<?php
require_once 'Punto.php';
require_once 'Linea.php';
require_once 'Circulo.php';

$l1 = new Linea(new Punto(1,1), new Punto(4,5));

echo $l1.'<br>';

echo $l1->mover(2,1).'<br>';// (3,2)(6,6)
echo $l1->aOrigen().'<br>'; // (0,0)(3,4)
echo $l1->longitud().'<br>';// (5)


echo $l1->aOrigen()->mover(10,10).'<br>';

echo $c3 = new Circulo(new Punto(10,10), 10).'<br>';

echo $p1 = clone $c3->centro.'<br>';
