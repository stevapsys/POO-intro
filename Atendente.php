<?php

require "Funcionarios.php";

    class Atendente extends Funcionario {
        public $conhecimento; 
        private $cargo = "Atendente"; 
        public function atender () {

        }

        //poliformismo = ele reescreve a outra função da classe abstato 
        //public function setSalario ($hora, $valor) {
        //    $this->salario = ($hora*$valor) - 50; 
        //}

        public function setSalario ($hora, $valor) {
            parent::setSalario($hora,$valor);
            // forma reduzida de: $this->salario= $this->salario - 50;
            $this->salario -= 50; 
        }

    }
 

?>