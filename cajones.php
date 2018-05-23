<?php
class cajones extends cajonera{
    private $altoCajon='';
    
    function __construct($color, $material, $altoCajon){
        parent::__construct($color, $material);
        $this->altoCajon= $altoCajon;
    }
    
    public function printCaracteristicas(){
        echo '<br>';
        echo 'CAJON:';
        echo '<br>';
        parent::printCaracteristicas();
        echo 'Numero Cajones: '. $this->altoCajon;
        echo '<br>';
    }
}