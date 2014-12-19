<?php

namespace library;

use \PDO as PDO;

class Database {
    
    private $connection;
    
    public function __construct($host, $port, $schema, $username, $password) {
        $source_name = "mysql:host=$host;port=$port;dbname=$schema;charset=utf8";
        $this->connection = new PDO($source_name, $username, $password) or die('Database Connection Failed');
        $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    
    public function getPrepare($query, $pointers = null) {
        $prepare = $this->connection->prepare($query);
        $prepare->execute($pointers);
        return $prepare;
    }

}

?>