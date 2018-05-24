<?php
class silla extends mueble{
    
    private $numpatas='';
    private $respaldo='';
    private $cojin='';

    function __construct($color, $material){
        parent::__construct($color, $material);
        
    }
    function __get($name){
        switch($name):
            case 'Numpatas':
                return $this->numpatas;
            case 'Respaldo':
                return $this->respaldo;
            case 'Cojin':
                return $this->cojin;   
        endswitch;
    }

    function __set($name, $value){
        switch($name):
            case 'Numpatas':
                return $this->numpatas = $value; 
                break;
            case 'Respaldo':
                return $this->respaldo=$value;
                break;
            case 'Cojin':
                return $this->cojin=$value;   
                break;
                 
        endswitch;
    }
    
    public function printCaracteristicas(){
    
        echo '<br>';
        echo 'SILLA:';
        echo '<br>';
        parent::printCaracteristicas();
        echo 'Respaldo: '. $this->respaldo;
        echo '<br>';
        echo 'Numero Patas: '. $this->NumPatas;
        echo '<br>';
        echo 'Cojin: '. $this->cojin;
        echo '<br>';
    }
}