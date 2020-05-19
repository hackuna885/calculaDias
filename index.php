<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');

$fechaTermino = '2020-12-31';
$anoTermino = substr($fechaTermino, 0, 4);
$mesTermino = substr($fechaTermino, 5, 2);
$diaTermino = substr($fechaTermino, 8, 2);

$fechaActual = date('Y-m-d');
$anoActual = date('Y');
$mesActual = date('m');
$diaActual = date('d');

echo 'Fecha de termino: '.$fechaTermino.'<br>';
echo 'Fecha de Actual: '.$fechaActual.'<br><br>';
// echo $anoTermino.'<br>';
// echo $mesTermino.'<br>';
// echo $diaTermino.'<br><br>';

// echo $anoActual.'<br>';
// echo $mesActual.'<br>';
// echo $diaActual.'<br><br>';

//Saber si  Año de Termino es bisiesto
if(ctype_digit($anoTermino/4)){
    // echo $anoTermino.' Soy Bisiesto';
    $varBisiestoT = 1;
}else{
    // echo $anoTermino.' No soy bisiesto';
    $varBisiestoT = 0;
}

echo'<br>';

//Saber si  Año Actual es bisiesto
if(ctype_digit($anoActual/4)){
    // echo $anoActual.' Soy Bisiesto';
    $varBisiestoA = 1;
}else{
    // echo $anoActual.' No soy bisiesto';
    $varBisiestoA = 0;
}

// echo '<br><br>';
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
            // echo 'dias';
            $dias = $diaTermino - $diaActual;
            if($dias === 1){
                echo 'Falta: '.$dias.' día';
            }else{
                echo 'Faltan: '.$dias.' días';
            }
        }
    }else{
        // echo 'meses y días';
        $sumarMeses = 0;
        $elMes = $mesActual+1;
        
        for ($i=$elMes; $i < $mesTermino; $i++) { 
            switch ($i) {
                case 1:
                    $diasMesTer = 31;
                    break;
                case 2:
                    if ($varBisiestoA === 1) {
                        $diasFeb = 29;
                    }else{
                        $diasFeb = 28;
                    }
                    $diasMesTer = $diasFeb;
                    break;
                case 3:
                    $diasMesTer = 31;
                    break;
                case 4:
                    $diasMesTer = 30;
                    break;
                case 5:
                    $diasMesTer = 31;
                    break;
                case 6:
                    $diasMesTer = 30;
                    break;
                case 7:
                    $diasMesTer = 31;
                    break;
                case 8:
                    $diasMesTer = 31;
                    break;
                case 9:
                    $diasMesTer = 30;
                    break;
                case 10:
                    $diasMesTer = 31;
                    break;
                case 11:
                    $diasMesTer = 30;
                    break;
                case 12:
                    $diasMesTer = 31;
                    break;
            }
            $sumarMeses = $sumarMeses+$diasMesTer;
            
        }
        

        switch ($mesActual) {
            case 01:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 02:
                if ($varBisiestoA === 1) {
                    $diasFeb = 29;
                }else{
                    $diasFeb = 28;
                }
                $dias = ($diasFeb - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 03:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 04:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 05:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 06:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 07:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 08:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 09:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 10:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 11:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
            case 12:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses;
                echo 'Faltan: '.$dias.' días';
                break;
        }
    }
}else{
    if($varAno === 1){
        // echo 'Solo días del año corriente + los dias del siguiente año';
        $sumarMeses = 0;
        $elMes = $mesActual+1;
        
        for ($i=$elMes; $i <= 12; $i++) { 
            switch ($i) {
                case 1:
                    $diasMesTer = 31;
                    break;
                case 2:
                    if ($varBisiestoA === 1) {
                        $diasFeb = 29;
                    }else{
                        $diasFeb = 28;
                    }
                    $diasMesTer = $diasFeb;
                    break;
                case 3:
                    $diasMesTer = 31;
                    break;
                case 4:
                    $diasMesTer = 30;
                    break;
                case 5:
                    $diasMesTer = 31;
                    break;
                case 6:
                    $diasMesTer = 30;
                    break;
                case 7:
                    $diasMesTer = 31;
                    break;
                case 8:
                    $diasMesTer = 31;
                    break;
                case 9:
                    $diasMesTer = 30;
                    break;
                case 10:
                    $diasMesTer = 31;
                    break;
                case 11:
                    $diasMesTer = 30;
                    break;
                case 12:
                    $diasMesTer = 31;
                    break;
            }
            $sumarMeses = $sumarMeses+$diasMesTer;
            
        }


        $sumarMesesSAno = 0;
        
        for ($i=1; $i < $mesTermino; $i++) { 
            switch ($i) {
                case 1:
                    $diasMesSAno = 31;
                    break;
                case 2:
                    if ($varBisiestoT === 1) {
                        $diasFeb = 29;
                    }else{
                        $diasFeb = 28;
                    }
                    $diasMesSAno = $diasFeb;
                    break;
                case 3:
                    $diasMesSAno = 31;
                    break;
                case 4:
                    $diasMesSAno = 30;
                    break;
                case 5:
                    $diasMesSAno = 31;
                    break;
                case 6:
                    $diasMesSAno = 30;
                    break;
                case 7:
                    $diasMesSAno = 31;
                    break;
                case 8:
                    $diasMesSAno = 31;
                    break;
                case 9:
                    $diasMesSAno = 30;
                    break;
                case 10:
                    $diasMesSAno = 31;
                    break;
                case 11:
                    $diasMesSAno = 30;
                    break;
                case 12:
                    $diasMesSAno = 31;
                    break;
            }
            $sumarMesesSAno = $sumarMesesSAno+$diasMesSAno;
            
        }

        switch ($mesActual) {
            case 01:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 02:
                if ($varBisiestoA === 1) {
                    $diasFeb = 29;
                }else{
                    $diasFeb = 28;
                }
                $dias = ($diasFeb - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 03:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 04:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 05:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 06:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 07:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 08:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 09:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 10:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 11:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 12:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno;
                echo 'Faltan: '.$dias.' días';
                break;
        }



    }else{
        $cantidadAnos = $varAno-1;
        $diasXAno = $cantidadAnos * 365;
        // echo $diasXAno.' días mas + los días del año corriente + los dias del siguiente año'    ;
        
        
        $sumarMeses = 0;
        $elMes = $mesActual+1;
        
        for ($i=$elMes; $i <= 12; $i++) { 
            switch ($i) {
                case 1:
                    $diasMesTer = 31;
                    break;
                case 2:
                    if ($varBisiestoA === 1) {
                        $diasFeb = 29;
                    }else{
                        $diasFeb = 28;
                    }
                    $diasMesTer = $diasFeb;
                    break;
                case 3:
                    $diasMesTer = 31;
                    break;
                case 4:
                    $diasMesTer = 30;
                    break;
                case 5:
                    $diasMesTer = 31;
                    break;
                case 6:
                    $diasMesTer = 30;
                    break;
                case 7:
                    $diasMesTer = 31;
                    break;
                case 8:
                    $diasMesTer = 31;
                    break;
                case 9:
                    $diasMesTer = 30;
                    break;
                case 10:
                    $diasMesTer = 31;
                    break;
                case 11:
                    $diasMesTer = 30;
                    break;
                case 12:
                    $diasMesTer = 31;
                    break;
            }
            $sumarMeses = $sumarMeses+$diasMesTer;
            
        }


        $sumarMesesSAno = 0;
        
        for ($i=1; $i < $mesTermino; $i++) { 
            switch ($i) {
                case 1:
                    $diasMesSAno = 31;
                    break;
                case 2:
                    if ($varBisiestoT === 1) {
                        $diasFeb = 29;
                    }else{
                        $diasFeb = 28;
                    }
                    $diasMesSAno = $diasFeb;
                    break;
                case 3:
                    $diasMesSAno = 31;
                    break;
                case 4:
                    $diasMesSAno = 30;
                    break;
                case 5:
                    $diasMesSAno = 31;
                    break;
                case 6:
                    $diasMesSAno = 30;
                    break;
                case 7:
                    $diasMesSAno = 31;
                    break;
                case 8:
                    $diasMesSAno = 31;
                    break;
                case 9:
                    $diasMesSAno = 30;
                    break;
                case 10:
                    $diasMesSAno = 31;
                    break;
                case 11:
                    $diasMesSAno = 30;
                    break;
                case 12:
                    $diasMesSAno = 31;
                    break;
            }
            $sumarMesesSAno = $sumarMesesSAno+$diasMesSAno;
            
        }

        switch ($mesActual) {
            case 01:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 02:
                if ($varBisiestoA === 1) {
                    $diasFeb = 29;
                }else{
                    $diasFeb = 28;
                }
                $dias = ($diasFeb - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 03:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 04:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 05:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 06:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 07:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 08:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 09:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 10:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 11:
                $dias = (30 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
            case 12:
                $dias = (31 - $diaActual) + $diaTermino + $sumarMeses + $sumarMesesSAno + $diasXAno;
                echo 'Faltan: '.$dias.' días';
                break;
        }
    }
}


?>