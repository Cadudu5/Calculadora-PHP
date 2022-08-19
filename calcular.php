<?php

    require_once "Calculadora.php";

    $number1 = $_GET['num1'];
    $number2 = $_GET['num2'];
    $operation = $_GET['operation'];

    $Calculadora = new Calculadora();

    $Calculadora->setNum1($number1);
    $Calculadora->setNum2($number2);


    if(isset($operation)){

        switch ($operation) {
            case '1':
                $Calculadora-> somar();
                break;
            case '2':
                $Calculadora-> subtrair();
                break;
            case '3':
                $Calculadora-> dividir();
                break;
            case '4':
                $Calculadora-> multiplicar();
                break;
            case '5': 
                $Calculadora-> expoente();
                break;
            default:
                
                break;
        }
    }
    echo $Calculadora->getResult();

?>