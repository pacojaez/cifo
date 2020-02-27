<?php
require_once 'Punto.php';
require_once 'Circulo.php';

$p = new Punto(2,2);
$c1 = new Circulo($p,5);
$c2 =new Circulo(new Punto(3,3), 4);

echo $c1.'<br>';

echo $c2.'<br>';

echo $c1->aOrigen()->mover(5,5).'<br>';

echo "El area es: ".$c1->area()."<br>";

echo "El perimetro es: ".$c1->perimetro()."<br>";