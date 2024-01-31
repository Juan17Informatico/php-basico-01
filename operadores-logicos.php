<?php 

$michis_son_felinos = true; 
$michis_4_patas = true; 
$michis_vuelan = false; 
$michis_prgraman_con_PHP = false; 

// var_dump($michis_4_patas && $michis_son_felinos);
//Not
// var_dump(!$michis_vuelan);

//Experimento: 

$resultado = $michis_4_patas and $michis_prgraman_con_PHP;

var_dump($resultado);

// RETO DE LA CLASE: 

//Suponiendo estas variables
$es_un_michi_grande = true; 
$le_gusta_comer = true; 
$sabe_volar = false; 
$tiene_2_patas = false; 

//¿Cuál es el resultado? 
$es_un_michi_grande && $le_gusta_comer; //True
$es_un_michi_grande || $sabe_volar; //True
$sabe_volar || $tiene_2_patas; //false
!$le_gusta_comer; //False
!$le_gusta_comer || $es_un_michi_grande;//True


