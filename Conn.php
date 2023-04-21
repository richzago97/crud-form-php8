<?php

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

abstract class Conn
{
    public string $db;
    public string $host;
    public string $user;
    public string $pass;
    public string $dbname;
    public int $port;
    public object $connect;

    public function __construct()
    {
        $this->db = $_ENV['DB_CONNECTION'];
        $this->host = $_ENV['DB_HOST'];
        $this->user = $_ENV['DB_USERNAME'];
        $this->pass = $_ENV['DB_PASSWORD'];
        $this->dbname = $_ENV['DB_DATABASE'];
        $this->port = $_ENV['DB_PORT'];
    }

    public function connectDb()
    {
        try{
            //Conexao com a porta
            //$this->connect = new PDO($this->db . ':host=' . $this->host . ';port=' . $this->port . ';dbname='. $this->dbname, $this->user, $this->pass);
            
            //Conexao sem a porta
            $this->connect = new PDO($this->db . ':host=' . $this->host . ';dbname='. $this->dbname, $this->user, $this->pass);
            
            //echo "Conexão com banco de dados realizado com sucesso!<br>";
            return $this->connect;
        }catch (Exception $err){
            //die('Erro: Por favor tente novamente. Caso o problema persista, entre em contato o administrador adm@empresa.com');
            echo "Erro: Conexão com banco de dados não realizado com sucesso! Erro gerado: " . $err->getMessage();
        }
    }
}