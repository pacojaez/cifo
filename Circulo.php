<?php
class Circulo{
    
    public $centro;
    public $radio;
    
//*****************CONSTRUCTOR***********************//
    public function __construct(Punto $p, float $radio){
        $this->centro=$p;
        $this->radio=$radio;       
    }
    
/*************************METODOS************/
    
//***METODO MOVER****desplaza el centro por lo tanto llama al metodo mover de la clase Punto//
//********recupera los metodos de la clase punto*******//
    public function mover(float $dx=0, float $dy=0):Circulo {
       $this->centro->mover($dx,$dy);
       return $this;
    }
    
//***METODO AREA****calcula el area del circulo*********//

    public function area():float {
       return pi()*$this->radio*$this->radio;
    }
//***METODO PERIMETRO****calcula el perimetro del circulo*********//
    public function perimetro():float {
        return pi()*$this->radio*2;
    }

//***METODO A ORIGEN****retorna al origen*********//
//********recupera los metodos de la clase punto*******//
    public function aOrigen():Circulo {
        $this->centro->aOrigen();
        return $this;
    }
//******//esto es el metodo toString*******//

    public function __toString():string{
        return $this->centro.' radio:'. $this->radio;
    }
    
}





