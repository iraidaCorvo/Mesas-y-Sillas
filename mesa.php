<?php
    
    define( 'Redonda', 'Redonda');
    define( 'Cuadrada', 'Cuadrada');
    
class mesa extends mueble{
    private $numpatas='';
    private $forma='';
    private $radio='';
    private $alto='';
    private $ancho='';


    function __construct($color, $material){
        parent::__construct($color, $material);
        /*$this->numPatas=$numPatas;
        $this->forma=$forma;
        $this->$tiposforma = array ("Redonda", "Cuadrada");
        if($this->forma == 'Redonda'){
            $this->radio = $radio;
            $this->alto='';
            $this->ancho= '';
        }elseif($this->forma == 'Cuadrada'){
            $this->radio = '';
            $this->alto= $alto;
            $this->ancho= $ancho;
            }*/

    }
    function __get($name){
        switch($name):
            case 'Numpatas':
                return $this->numpatas;
            case 'Forma':
                return $this->forma;
            case 'Radio':
                return $this->radio;   
            case 'Alto':
                return $this->alto;  
            case 'Ancho':
                return $this->ancho;  
        endswitch;
    }

    function __set($name, $value){
        switch($name):
            case 'Numpatas':
                 $this->numpatas = $value; 
                break;
            case 'Forma':
                 $this->forma=$value;
                break;
            case 'Radio':
                $this->radio; 
                break;  
            case 'Alto':
                $this->alto;
                break;
            case 'Ancho':
                $this->ancho; 
                break;
                 
        endswitch;
    }
    public function generarMesaCuadrada($alto){
        
    }
    public function generarMesaRedonda($radio){

    }
    public function render(){
        echo '<br>';
        echo 'MESA:';
        echo '<br>';
        parent::render();
        echo 'Forma: '. $this->Forma;
        echo '<br>';
        echo 'Numero Patas: '. $this->Numpatas;
        echo '<br>';
        if($this->Forma == 'Redonda'){
            echo 'Radio: '. $this->Radio;
        }elseif($this->Forma == 'Cuadrada'){
            echo 'Alto: '. $this->Alto;
            echo '<br>';
            echo 'Alto: '. $this->Ancho;
        }
        echo '<br>';
    }
    public function toString(){
        return $this->render();
    }
}
