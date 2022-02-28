<?php

class DB
{
    private $servername;
    private $port;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    protected $connection;
    
    function __construct()
    {
        $this->servername = $_ENV['SERVERNAME'];
        $this->port = $_ENV['PORT'];
        $this->username = $_ENV['USERNAME'];
        $this->password = $_ENV['PASSWORD'];
        $this->dbname = $_ENV['DATABASE'];
        $this->charset = "utf8mb4";

        $this->connect();
    }

    private function connect()
    {
        $dsn = "mysql:host=". $this->servername .";port=". $this->port .";dbname=". $this->dbname .";charset=". $this->charset ."";
    
        try{

            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection = $pdo;

        } catch (PDOException $e) {

            throw $e;

        }
    }

    public function get_connection()
    {
        return $this->connection;
    }
}
