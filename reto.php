<?php 

$hora = readline("Ingresa horas: ");
$minuto = readline("Ingresa minutos: ");
$segundos = readline("ingresa segundos: ");

$horas_a_minutos = (int)($hora * 60);
$horas_a_minutos_segundos = (int) ($horas_a_minutos * 60);
$minutos_a_segundos = (int) ($minuto * 60);

$segundos += $horas_a_minutos_segundos + $minutos_a_segundos;

var_dump($segundos);
print_r($segundos);

echo "Resultado: $segundos";