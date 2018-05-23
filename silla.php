<?php
class silla extends mueble{
    private $numPatas='';
    private $respaldo='';
    private $cojin='';

    function __construct($color, $material, $numPatas, $respaldo, $cojin){
        parent::__construct($color, $material);
        $this->numPatas=$numPatas;
        $this->respaldo=$respaldo;
        $this->cojin=$cojin;
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