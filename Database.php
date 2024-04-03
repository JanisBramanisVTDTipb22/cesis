<?php

class Database {
    
    private $pdo;

    public function __construct($config)
    {
        
        //dd(http_build_query($config, "", ";"));
        $connection_string = "mysql:" . http_build_query($config, "", ";");
        $this->pdo = new PDO($connection_string);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    //saglabāt sql izpildei
    public function execute($query_string, $params){
        $query = $this->pdo->prepare($query_string);
    
    //izpildīt sql
    $query->execute($params);
    //atgriez rezultātus
    return $query;      
    }
}