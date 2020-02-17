<?php 

abstract class Funcionarios {
    public $nome;
    public $idade;
    private $salario;
    private $cargo; 

    public function setSalario ($hora, $valor) {

        //atribuir o salario a ele mesmo
        $this->salario = $hora * $valor; 
    }
}


?>