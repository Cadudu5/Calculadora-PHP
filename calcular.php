<?php

    require_once "Calculadora.php";

    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];
    $operation = $_POST['operation'];

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