<?php
namespace App\mvc\Models;



class Listar extends Database
{
    
    function __construct()
    {
        echo "Carregou a Listar<br>";
    }

    public function Mostrar($Query, $Parametros, $acao) {
        echo "carregou a função Mostrar com {$Query}<br>";

        return $acao->selectDB($Query, $Parametros, $acao);


    }
   
}



?>