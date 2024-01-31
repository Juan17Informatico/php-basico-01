<?php
/**
 * Definición: {El casting es cuando queremos especificar el tipo de variable del que se trata,
 * o convertir de un tipo a otro de una variable ya existente, empleamos lo que se llama type casting. 
 * Esto es simplemente especificar el tipo de variable que se quiere obtener.}
 */


// $numerito = "5";

// var_dump($numerito);

// $numerito = (float) $numerito;

// var_dump($numerito);

//
// $dias = 5.9;

// var_dump($dias);

// $dias = (int) $dias;

// var_dump($dias);

// $banderita = 0;

// var_dump($banderita);

// $banderita = (bool) $banderita = true;

// var_dump($banderita);

//Fácil

/**
 * RETO DE LA CLASE 13 
 */

$nombre = "Carlos"; //String
$apellido = "Gómez"; //String
$edad = 18; // Integer
$aprobado = true; //Boolean 

//Medio

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; //Float 
$nombre_completo = $nombre . " " . $apellido; //String
$presento_examen = (bool) 1; //Boolean: true

//Avanzado

$numero_preguntas = 5 + "5"; //Integer
$numero_respuestas = "5" + 5; //Integer
$promedio_maximo = $numero_respuestas / 1.0; //float
$michis = 3 + "5 michis"; //Integer

