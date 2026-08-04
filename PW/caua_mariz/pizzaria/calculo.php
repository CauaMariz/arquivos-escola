<?php
if($_POST){
    $sabor = $_POST["sabor"];
    $valor_sabor = 0.00;
    $pedido = "";

    if(isset($_POST["coca"])){
        $valor_coca = 8.00;
        $pedido .= "Coca-Cola";
    }
    else{
        $coca = null;
        $valor_coca = 0.00;
    }
    if(isset($_POST["guarana"])){
        $valor_guarana = 6.00;
        $pedido .= "Guarana";
    }
    else{
        $guarana = null;
        $valor_guarana = 0.00;
    }

    if(isset($_POST["adicional"])){
        $adicional = $_POST["adicional"];
    }
    else{
        $adicional = null;
    }
    if($adicional == "1"){
        $valor_adicional = 5.00;
        $pedido .= "Borda de Catupiry";
    }
    else if($adicional == "2"){
          $valor_adicional = 7.00;
        $pedido .= "Borda de Cheddar";
    }
    else{
        $valor_adicional = 0.00;
    }

    $valor_sabor += $valor_adicional + $valor_coca + $valor_guarana;

    switch($sabor){
        case "1":
            $sabor = "Frango com catupiry - R$ 30,00";
    }
}