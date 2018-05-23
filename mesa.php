<?php
    
    define( 'Redonda', 'Redonda');
    define( 'Cuadrada', 'Cuadrada');
    
class mesa extends mueble{
    private $numPatas='';
    private $forma='';
    private $radio='';
    private $alto='';
    private $ancho='';


    function __construct($color, $material, $numPatas, $forma, $radio, $alto, $ancho){
        parent::__construct($color, $material);
        $this->numPatas=$numPatas;
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
            }

    }
    public function generarMesaCuadrada($alto){
        
    }
    public function generarMesaRedonda($radio){

    }
    public function printCaracteristicas(){
        echo '<br>';
        echo 'MESA:';
        echo '<br>';
        parent::printCaracteristicas();
        echo 'Forma: '. $this->forma;
        echo '<br>';
        echo 'Numero Patas: '. $this->numPatas;
        echo '<br>';
        if($this->forma == 'Redonda'){
            echo 'Radio: '. $this->radio;
        }elseif($this->forma == 'Cuadrada'){
            echo 'Alto: '. $this->alto;
            echo '<br>';
            echo 'Alto: '. $this->ancho;
        }
        echo '<br>';

    }
}
