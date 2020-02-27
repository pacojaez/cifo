<?php
include 'Punto.php';

echo "<h2>CREANDO PUNTOS</h2>";

$punto1 = new Punto();
$punto2 = new Punto(5);           // sin constructor no funciona melonnnnn!!!!
$punto3 = new Punto(-5,-6);
$punto4 = new Punto(10,0);
$punto5 = new Punto(30,30,30);

echo ($punto1).'<br>';
echo ($punto2).'<br>';
echo ($punto3).'<br>';
echo ($punto4).'<br>';
echo ($punto5).'<br>';