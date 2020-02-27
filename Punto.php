<?php
//esta es la clase Punto
class Punto{ 
    
    //PROPIEDADES
    public $x=0, $y=0;
    
    //CONSTRUCTOR
    public function __construct (float $x=0, float $y=0){   //esto es el constructor
        $this->x=$x;
        $this->y=$y;
    }  
    //METODOS:
    
    //metodo mover creado por nosotros para desplazar el punto
    public function mover(float $dx=0, float $dy=0):Punto {
        $this->x+=$dx;
        $this->y+=$dy;
        return $this;
    }
   
    //metodo aOrigen
    public function aOrigen():Punto {
        $this->x=0;
        $this->y=0;
        return $this;
    }
   
    //metodo estático para distancia entre puntos
    public static function distanciaEntre (Punto $p1, Punto $p2):float{
        return hypot($p1->x-$p2->x, $p1->y-$p2->y);
    }
    //metodo de objeto para distancia entre puntos
    public function distanciaHasta (Punto $p): float{
        return hypot($this->x-$p->x, $this->y-$p->y);
    }
    
   //metodo estatico (de clase) para sumar puntos
    public static function sumarPuntos (Punto $p1, Punto $p2):Punto{
        return "($p1->x+$p2->x, $p1->y+$p2->y)";  
    }
    //esto es el metodo toString a modo de texto
    public function __toString():string{ 
        return "($this->x, $this->y)";
    }
    
}   //FIN DE LA CLASE

