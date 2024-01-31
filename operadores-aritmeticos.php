<?php 

// $resultado = 5 ** 3; 
// echo $resultado;

// echo (5 * 6) . " " . (80 / 4);

// echo 5 % 2;

$secs = 7201;
$horas = $secs / 3600;
$secsResiduo = $secs % 3600; 

echo "$secs segundos convertidos a horas son $horas \n";
echo "Nos sobran $secsResiduo segundos";