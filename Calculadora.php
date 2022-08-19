
<?php

    class Calculadora{

        private $result;
        private $num1, $num2;
        
        function __construct()
        {
            $this->result = 0;
            $this->num1 = 0;
            $this->num2 = 0;

        }

        // getters e setters

        public function setNum1($Pnum1){
            $this->num1 = $Pnum1;
        }

        public function setNum2($Pnum2){
            $this->num2 = $Pnum2;
        }

        # $this é usado para acessar o valor de uma variavel privada da classe.

        //operações
        public function somar(){
            $this->result = $this->num1 + $this->num2;
        }

        public function subtrair(){
            $this->result = $this->num1 - $this->num2;
        }

        public function dividir(){
            $this->result = $this->num1 / $this->num2;
        }

        public function multiplicar(){
            $this->result = $this->num1 * $this->num2;
        }

        public function expoente(){
            $this->result = $this->num1 ** $this->num2;
        }

        public function getResult(){
            return $this->result;
        }



    }


?>