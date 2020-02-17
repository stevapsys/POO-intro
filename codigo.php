<?php

    require "Atendente.php";
    //inicando um objeto
    $obj = new Atendente ();

    $obj ->nome = "Gustavo Carlos II";
    $obj ->idade = 30;
    $obj -> conhecimento = true;  

    //Dá erro, a variável é privada
    //$obj -> cargo = "";
?> 