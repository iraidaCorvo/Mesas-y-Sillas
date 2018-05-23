<?php
class cajonera extends mueble{
    private $numCajones='';
    
    function __construct($color, $material, $numCajones){
        parent::__construct($color, $material);
        $this->numCajones= $numCajones;
    }
    
    public function printCaracteristicas(){
        echo '<br>';
        echo 'CAJONERA:';
        echo '<br>';
        parent::printCaracteristicas();
        echo 'Numero Cajones: '. $this->numCajones;
        echo '<br>';
    }
}