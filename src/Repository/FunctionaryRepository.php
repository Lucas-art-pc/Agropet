<?php

class FunctionaryRepository{
    private string $nome;
    private string $usuario;
    private string $senha;

    public function __construct($nome, $usuario, $senha){
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public function getNomeFunc(){
        return $this->nome;
    }

    public function getUserFunc(){
        return $this->usuario;
    }

    public function getSenhaFunc(){
        return $this->senha;
    }
}