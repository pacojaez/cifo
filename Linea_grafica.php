<?php
class Linea_grafica{
    //PROPIEDADES
    public $p1, $p2, $color, $grosor;
    
    //***********CONSTRUCTOR***********//
    public function __construct(Punto $p1, Punto $p2){
        $this->p1 = $p1;
        $this->p2 = $p2;
        $this->color='';
        $this->grosor='';
    }
    //***METODO MOVER****desplaza el centro por lo tanto llama al metodo mover de la clase Punto//
    public function mover(int $dx=0, int $dy=0):Linea {
        $this->p1->mover($dx,$dy);
        $this->p2->mover($dx,$dy);
        return $this;
    }
    //***********metodo aOrigen*********//
    public function aOrigen():Linea {
        $this->mover(-$this->p1->x, -$this->p1->y);
        return $this;
    }
    //***********metodo de objeto para distancia entre puntos***********//
    public function longitud (): float{
        return $this->p1->distanciaHasta($this->p2);
    }
    //***********metodo de objeto para cambiar color por formulario***********//
    public function cambiarcolor (): float{
        $this->color = $_POST['color'];
        return $this;
    }
    //***********metodo de objeto para cambiar grosor por formulario***********//
    public function cambiargrosor(): float{
        $this->grosor = $_POST['grosor'];
        return $this;
    }
    //*****************el metodo toString*************//
    public function __toString():string{
        return 'linea('.$this->p1.','.$this->p2.')';
    }
}
