<?php
class silla extends mueble{
    private $numpatas='';
    private $respaldo='';
    private $cojin='';

    function __construct($color, $material){
        parent::__construct($color, $material);
    }

    function __get($name){
        switch($name){
            case 'Numpatas':
                return $this->numpatas;
            
        }
    
    }
    function __set($name, $value){
        switch($name){
            case 'Numpatas':
                return $this->numpatas=$value;   
        }
    }
    public function printCaracteristicas(){
        echo '<br>';
        echo 'SILLA:';
        echo '<br>';
        parent::printCaracteristicas();
        echo 'Respaldo: '. $this->respaldo;
        echo '<br>';
        echo 'Numero Patas: '. $this->numPatas;
        echo '<br>';
        echo 'Cojin: '. $this->cojin;
        echo '<br>';
    }
}