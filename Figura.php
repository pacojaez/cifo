<?php
class Figura{
    //***********propiedades********//
    private $puntos;
    
    //********CONSTRUCTOR**************//
    public function __construct(Punto ...$puntos){
        if (count($puntos)>=3)
            $this->puntos=$puntos;
        else 
            throw new Exception('Al menos tres puntos');        
    }

    //*******METODO GET*********//
    public function getPunto(int $i=0):Punto {
        return $this->puntos[$i];
    }
    //*******METODO SET*********//
    public function setPunto(Punto $p, int $i=0){
        return $this->puntos[$i]=$p;
    }
    //*******METODO ADD*********//
    public function addPunto(Punto $p): int{
        $this->puntos[]=$p;
        return count($this->puntos);
    }
    //*******METODO REMOVE*********//
    public function removePunto(int $i=0):int{
        if(count($this->puntos)>3)
            array_splice($this->puntos, $i, 1);
        return count($this->puntos);
    }
    //*******METODO PERIMETRO*********//
    public function perimetro(Punto ...$puntos): float{
           $total = 0;
           //recogemos el punto
           for($i=0; $i<sizeof($this->puntos) ;$i++)     
                //distancia hasta el siguiente punto en bucle
  $total+=$this->puntos[$i]->distanciaHasta($this->puntos[($i+1)%sizeof($this->puntos)]);
         //devuelve la suma total
            return $total;
    }
    //*******METODO MOVER*********//
    public function mover(int $x=0, int $y=0):Figura{
        foreach ($this->puntos as $p)
            $p->mover($x,$y);
            return $this;
    }
    //*********METODO TO STRING*********////
    public function __toString():string{
        $texto="Figura: ";
        foreach ($this->puntos as $punto)
            $texto.=$punto;
        return $texto;    
    } 
}