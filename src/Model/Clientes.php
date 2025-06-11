<?php

class Clientes{
    private ?int $id;
    private string $nome;
    private string $cpf;
    private string $telefone;
    private string $email;
    private string $endereco;
    private string $senha;

    public function __construct($id, $nome, $cpf, $telefone, $email, $endereco, $senha){
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->senha = $senha;
    } 

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getSenha(){
        return $this->senha;
    }
}