<?php
class Aluno{
    private $id;
    private $rm;
    private $nome;
    private $email;
    private $cpf;

    public function getRm(){
        return $this->rm;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCpf(){
        return $this->cpf;
    }
    0public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setRm($rm){
        $this->rm = $rm;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    
}