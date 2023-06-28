<?php 
 namespace App\Model;
 
 class Conexao
 {
    private $dbname = 'mysql:host=localhost;dbname=cadastro';
    private $user = 'root';
    private $password = '';

    public function banco()
    {
        try 
        {
            
            $conn = new \PDO($this->dbname, $this->user, $this->password);
            $conn->exec("set names utf8");
            return $conn;
        
        } 
        catch(\PDOException $erro) 
        {
           
            echo 'ERROR: ' . $erro->getMessage();

        }
    }
 }