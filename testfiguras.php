<?php
require_once 'Figura.php';
require_once 'Punto.php';

$f1=new Figura(new Punto(1,1), new Punto(3,2),new Punto(3,4),new Punto(5,6));
echo $f1.'<br>'; //Figura (1,1)(3,2),(3,4),(5,6)

$f1->mover(3,3);
echo $f1.'<br>'; //Figura (4,4),(6,5),(6,7),(8,9)

$f1->getPunto(1)->aOrigen();
echo $f1.'<br>'; //Figura (1,1)(0,0),(3,4),(5,6)

$f1->setPunto(new Punto(1,5),2);
echo $f1.'<br>'; //Figura (1,1)(0,0),(1,5),(5,6)

$f1->addPunto(new Punto(6,0));
echo $f1.'<br>'; //Figura (1,1)(0,0),(1,5),(5,6),(6,0)

$f1->removePunto(1); 
echo $f1.'<br>'; //Figura (1,1),(1,5),(5,6),(6,0)

$f1->mover(3,3);
echo $f1.'<br>'; //Figura (4,4),(4,8),(8,9),(9,3)

$f2 = new Figura(new Punto(0,0),new Punto(0,1),new Punto(1,1),new Punto(1,0));
$peri=$f2->perimetro();
echo $peri.'<br>'; //4


