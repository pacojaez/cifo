<?php
include 'Punto.php';

echo "<h2>CREANDO PUNTOS</h2>";

//probando el constructor 
$punto1 = new Punto();

echo "El punto está ahora en ($punto1)<br>";

$punto1->x = 100;
$punto1->y += 50;

echo "La coordenada X es: $punto1->x <br>";
echo "La coordenada Y es: $punto1->y <br>";
echo ($punto1).'<br>';

//probando metodos creados en la clase: (son métodos de objeto no de clase)

$punto1->mover(-100,500)->aOrigen()->mover(1000,-5000); //concatenando métodos
echo $punto1;

//probando a simplificar código
echo $punto1->mover(-100,500)->aOrigen()->mover(1000,-5000).' Probando en una linea <br>'; //concatenando métodos

//probando el método estatico distanciaEntre
$punto3 = new Punto(10, 20);
$punto4 = new Punto(20,10);
$p6= Punto::distanciaEntre($punto3, $punto4);

echo "<p> Distancia entre puntos con metodo de clase: $p6 </p>";

//probando el metodo sumarPuntos
$punto3 = new Punto(10, 20);
$punto4 = new Punto(20,10);
$p5=Punto::sumarPuntos($punto3, $punto4);
echo "<p>SUMANDO PUNTOS El nuevo punto es: $p5</p>";







