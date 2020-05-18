<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');

$fechaTermino = '2024-05-19';
$anoTermino = substr($fechaTermino, 0, 4);
$mesTermino = substr($fechaTermino, 5, 2);
$diaTermino = substr($fechaTermino, 8, 2);

$fechaActual = date('Y-m-d');
$anoActual = date('Y');
$mesActual = date('m');
$diaActual = date('d');

echo 'Fecha de termino: '.$fechaTermino.'<br>';
echo 'Fecha de Actual: '.$fechaActual.'<br><br>';
echo $anoTermino.'<br>';
echo $mesTermino.'<br>';
echo $diaTermino.'<br><br>';

echo $anoActual.'<br>';
echo $mesActual.'<br>';
echo $diaActual.'<br><br>';

//Saber si  Año de Termino es bisiesto
if(ctype_digit($anoTermino/4)){
    echo $anoTermino.' Soy Bisiesto';
    $varBisiestoT = 1;
}else{
    echo $anoTermino.' No soy bisiesto';
    $varBisiestoT = 0;
}

echo'<br>';

//Saber si  Año Actual es bisiesto
if(ctype_digit($anoActual/4)){
    echo $anoActual.' Soy Bisiesto';
    $varBisiestoA = 1;
}else{
    echo $anoActual.' No soy bisiesto';
    $varBisiestoA = 0;
}

echo '<br><br>';
$varAno = $anoTermino - $anoActual;
$varMeses = $mesTermino - $mesActual;
$varDias = $diaTermino - $diaActual;

if($varAno < 0){
    echo 'Vencido';
}elseif ($varAno === 0) {
    if($varMeses < 0){
        echo 'Vencido';
    }elseif($varMeses === 0){
        if($varDias < 0){
            echo 'Vencido';
        }elseif ($varDias === 0) {
            echo 'hoy vence';
        }else{
            echo 'dias';
        }
    }else{
        echo 'meses y días';
    }
}else{
    if($varAno === 1){
        echo 'Solo días del año corriente + los dias del siguiente año';
    }else{
        $cantidadAnos = $varAno-1;
        $diasXAno = $cantidadAnos * 365;
        echo $diasXAno.' días mas + los días del año corriente + los dias del siguiente año'    ;
    }
}


?>