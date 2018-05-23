<?php
include_once 'mueble.php';
include_once 'silla.php';
include_once 'mesa.php';
include_once 'cajonera.php';

$miMaquinaria = new mueble('Blanco', 'Cuero');
$miMaquinaria->printCaracteristicas();

$misilla = new silla('Blanco', 'Cuero', 3, 'Redondo', 'Cuadrado');
$misilla->printCaracteristicas();

$mimesa = new mesa('Negra', 'Madera', 4, 'Cuadrada', 40, 140, 40);
$mimesa->printCaracteristicas();


$micajonera = new cajonera('Marron', 'Madera', 4);
$micajonera->printCaracteristicas();