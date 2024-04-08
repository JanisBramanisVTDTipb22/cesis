<?php

class Database {
    //execute vai query

    private $pdo;

    public function __construct($config)
    {
        
        $connection_string = "mysql:" . http_build_query($config, "", ";");
        //$connection_string = "mysql:host=$config[host];dbname=$config[dbname];user=$config[user];password=$config[password];charset=$config[charset]";
        $this->pdo = new PDO($connection_string);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function execute($query_string, $params) {
        //Sagatavot SQL izpildei
        $query = $this->pdo->prepare($query_string);
        //Izpildit SQL
        $query->execute($params);
        //atgriezy rezultatus
        return $query;
    }
}