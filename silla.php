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
                 $this->numpatas = $value; 
                break;
            case 'Respaldo':
                 $this->respaldo=$value;
                break;
            case 'Cojin':
                 $this->cojin=$value;   
                break;
                 
        endswitch;
    }
    
    public function render(){
    
        echo '<br>';
        echo 'SILLA:';
        echo '<br>';
        parent::render();
        echo 'Respaldo: '. $this->Respaldo;
        echo '<br>';
        echo 'Numero Patas: '. $this->Numpatas;

        echo '<br>';
        echo 'Cojin: '. $this->Cojin;
        echo '<br>';
    }
    public function toString(){
        return $this->render();
    }
}