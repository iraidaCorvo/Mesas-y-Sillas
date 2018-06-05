<?php
include_once 'mueble.php';
include_once 'silla.php';
include_once 'mesa.php';
include_once 'cajonera.php';

$miMaquinaria = new mueble('Verde', 'Cuero');
$miMaquinaria->toString();

$misilla = new silla('Blanco', 'Madera');
$misilla->Numpatas = 5; 
$misilla->Respaldo = 'Cuadrado'; 
$misilla->Cojin = 'Redondo'; 
$misilla->toString();
//echo $misilla->Numpatas; 


$mimesa = new mesa('Negro', 'Madera');
$mimesa->Numpatas = 4; 
$mimesa->Forma = 'Cuadrada'; 
$mimesa->Radio = 40; 
$mimesa->Alto = 140; 
$mimesa->Ancho = 40; 
echo $mimesa->Alto;
$mimesa->toString();


$micajonera = new cajonera('Marron', 'Madera', 4);
$micajonera->printCaracteristicas();
