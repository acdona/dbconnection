<?php 
namespace App\mvc\Models\helper;

class Crud extends \App\mvc\Models\Database {

    function __construct(){}

    function create($query, $parameters, $action){      
        return $action->insertDB($query,$parameters);        
    }

    function read($query, $parameters, $action){
        return $action->selectDB($query,$parameters);      
    }

    function update($query, $parameters, $action){
        return $action->updateDB($query,$parameters);
    }

    function delete($query, $parameters, $action){
        return $action->deleteDB($query,$parameters);
    }

}
?>