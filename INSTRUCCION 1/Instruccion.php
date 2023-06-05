<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera</title>
</head>
<body>
    


<div class="container text-center">

    <h1>Parametros de Fechas</h1>


        <form action="Instruccion.php" method="POST">


            <div class="form-group">

                <label for="">Ingrese fecha inicio:</label>
                <input type="date" name="fecha_1" id="fecha_1">

            </div>

            <div class="form-group">

                <label for="">Ingrese fecha salida:</label>
                <input type="date" name="fecha_2" id="fecha_2">

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">Imprimir</button>


            </div>



        </form>



</div>



<?php

$Dia_Inicio = $_POST ['fecha_1'];
$Dia_Fin = $_POST ['fecha_2'];

$Inicio_Fechastart = new DateTime($Dia_Inicio);
$Inicio_Fechaend = new DateTime($Dia_Fin);


$Intervalo = new DateInterval('P1D');

$fecha_rango = new DatePeriod($Inicio_Fechastart, $Intervalo, $Inicio_Fechaend->modify('+1 day'));

$selec_days = [];
foreach ($fecha_rango as $date){
if ($date->format('N') < 6) {
    $selected_days[] = $date->format('D-m-y');
}
}

echo "Dias seleccionados: <br>";
foreach ($selected_days as $day) {
    $day = strtr($day, [
        'Mon' => 'Lun',
        'Tue' => 'Mar',
        'Wed' => 'Mie',
        'Thu' => 'Jue',
        'Fri' => 'Vie',
    ]);
    //Imprimimos los días
    echo $day . "<br>";  
}






?>









</body>
</html>