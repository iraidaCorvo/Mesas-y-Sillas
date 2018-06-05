<?php
class mueble{
    private $material ='';
    private $color =[
        'Rojo'     => '#ff0000',
        'Verde'    => '#6ccf61',
        'Azul'     => '#0072ff',
        'Blanco'   => '#ffffff',
        'Negro'    => '#020202',
        'Gris'     => '#8c8a8a',
        'Rosa'     => '#fc94d3',
        'Lila'     => '#7f00ff',
        'Marron'   => '#8b6f38',
    ];
    
    function __construct($color, $material){
        if(array_key_exists($color, $this->color)){
            $this->color=$color;
        }else{
            $this->color='blanco';
        }
        $this->material=$material;
    }
    
    public function render(){
        echo 'Color: '. $this->color;
        echo '<br>';
        echo 'Material:'. $this->material;
        echo '<br>';
    }
    public function toString(){
        return $this->render();
    }
    
}