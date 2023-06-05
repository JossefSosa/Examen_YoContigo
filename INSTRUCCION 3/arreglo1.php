<?php

$MiArreglo = array(13,2,4,35,1,35);

$numMayor = max($MiArreglo);
foreach ($MiArreglo as $indice => $Valores){
    if($Valores > $numMayor){
        $numMayor = $Valores;
        
    }
}

echo "El número mayor es: $numMayor";

?>