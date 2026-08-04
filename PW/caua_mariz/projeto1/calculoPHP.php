<?php
if($_POST){
    $vlr1 = $_POST["vlr1"];
    $vlr2 = $_POST["vlr2"];
    $operacao = $_POST["operacao"];

    $result;
    
switch($operacao){
    case 'soma':
        $result = $vlr1 + $vlr2;
        echo "Resultado: $vlr1 + $vlr2 = " . number_format($result, 2,',','.');
        break;
    case 'subtracao':
        $result = $vlr1 - $vlr2;
         echo "Resultado: $vlr1 - $vlr2 = " . number_format($result, 2,',','.');
        break;
     case 'multiplicacao':
        $result = $vlr1 * $vlr2;
         echo "Resultado: $vlr1 x $vlr2 = " . number_format($result, 2,',','.');
        break;
     case 'divisao':
        if($vlr2 != 0){
        $result = $vlr1 / $vlr2;
         echo "Resultado: $vlr1 / $vlr2 = " . number_format($result, 2,',','.');
        }
        else{
            echo "O valor 2 precisa ser maior que 0";
        }
        break;
    default:
        echo "Valor incorreto";
        break;
}
}