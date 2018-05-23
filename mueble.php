<?php
class mueble{
    private $material ='';
    private $color ='';
    
    function __construct($color, $material){
        $this->material=$material;
        $this->color=$color;
    }
    
    public function printCaracteristicas(){
        echo 'Color: '. $this->color;
        echo '<br>';
        echo 'Material:'. $this->material;
        echo '<br>';
    }
    
}