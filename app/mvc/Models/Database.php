<?php
namespace App\mvc\Models;

/**
 * Classe Database responsible for controlling access to the database.
 *
 * @version 1.0
 *
 * @author Gregory Monteiro, Antonio Carlos Doná
 *
 * @access protected
 *
*/
abstract class Database extends Config
{
    /* Database builder method */
    private function __construct() {
        
        $config = new Config();
        $config->config();
        var_dump($config);

    }

    /* Prevents the class from being cloned */
    private function __clone() {}

    /* Method that destroys the database connection and renews all set variables from memory */
    public function __destruct()
    {
        foreach ($this as $key => $value) {
            unset($this->key);
        }
    }
    /* Variables that will be replaced by data from the config file. */
    private static $dbtype  = DBTYPE;
    private static $host    = HOST;
    private static $port    = PORT;
	private static $dbname  = DBNAME;
	private static $user    = USER;
    private static $pass    = PASS;
    
    /* Methods that bring the content of the desired variable
       @return $xxx = content of the requested variable */
    private function getDBType()    {return self::$dbtype;}
    private function getHost()      {return self::$host;}
    private function getPort()      {return self::$port;}
    private function getUser()      {return self::$user;}
    private function getPass()      {return self::$pass;}
    private function getDbName()    {return self::$dbname;} 

    private function connect(){
        try
        {
            $this->connection = new PDO($this->getDBType().":host=".$this->getHost().";port=".$this->getPort().";dbname=".$this->getDbName() . ";charset=utf8" , $this->getUser(),$this->getPass(), array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
        catch (PDOException $i)
        {
            /* If there is an error, display which. */
            die("Erro: <code>". $i->getMessage(). "</code>");
        }
        return ($this->conexao);
    }

    private function disconnect(){
        $this->conexao = null;
    }

     /* Select method that returns a VO or an array of objects 
        VO = Value Object */
     public function selectDB($sql,$params=null,$class=null){
        $query=$this->connect()->prepare($sql);
        $query->execute($params);
        $rs =null;
        if(isset($class)){
            $rs = $query->fetchAll(PDO::FETCH_CLASS,$class) or die(print_r($query->errorInfo(), true));
        }else{
            $rs = $query->fetchAll(PDO::FETCH_OBJ) or die(print_r($query->errorInfo(), true));
        }
        self::__destruct();
        return $rs;
    }

     /* Insert method that inserts values into the database and returns the last inserted id */
     public function insertDB($sql,$params=null){
        $conexao=$this->connect();
        $query=$conexao->prepare($sql);
        $query->execute($params);
        $rs = $conexao->lastInsertId() or die(print_r($query->errorInfo(), true));
        self::__destruct();
        return $rs;
    }
     
    /* Update method that changes database values and return the numbem of rows affected */
    public function updateDB($sql,$params=null){
        $query=$this->connect()->prepare($sql);
        $query->execute($params);
        $rs = $query->rowCount() or die(print_r($query->errorInfo(), true));
        self::__destruct();
        return $rs;
    }
     
    /*Delete method that deleting values from the database and returns the number of rows affected */
    public function deleteDB($sql,$params=null){
        $query=$this->connect()->prepare($sql);
        $query->execute($params);
        $rs = $query->rowCount() or die(print_r($query->errorInfo(), true));
        self::__destruct();
        return $rs;
    }



}

?>