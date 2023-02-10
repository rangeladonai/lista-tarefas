<?php
class DatabaseControl{

    public $pdo;
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $dbname = 'lista_tarefas';

    public function connect(){
        try{
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function listarTarefas(){
        
    }

    public function listarTarefasPendentes(){

    }

}