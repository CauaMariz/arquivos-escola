<?php
class Aluno{
    private $id;
    private $ra;
    private $name;
    private $curso;
    private $periodo;

    public $pdo;
    public function __construct(){
        $conct = "mysql:dbname=usuarioetimpwii;host=localhost";
        $user = "root";
        $pass = "";

        try{
            $this->pdo = new PDO($conct, $user, $pass);
            return true;
        }
        catch(\Throwable $th){
            return false;
        }
    }  
    
    public function getRa(){
        return $this->ra;
    }
    public function getNa(){
        return $this->name;
    }
    public function getCu(){
        return $this->curso;
    }
    public function getPe(){
        return $this->periodo;
    }
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setNa($name){
        $this->name = $name;
    }
    public function setRa($ra){
        $this->ra = $ra;
    }
    public function setPe($periodo){
        $this->periodo = $periodo;
    }
    public function setCu($curso){
        $this->curso = $curso;
    }
}