<?php

namespace Src\Repository;

use PDO;
use Src\Model\Clientes;


class ClientsRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function salvar(Clientes $cliente){
    $sql = "INSERT INTO clientes (nome_cli, cpf_cli, telefone_cli, email_cli, endereco_cli, senha_cli) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $cliente->getNome());
    $statement->bindValue(2, $cliente->getCpf());
    $statement->bindValue(3, $cliente->getTelefone());
    $statement->bindValue(4, $cliente->getEmail());
    $statement->bindValue(5, $cliente->getEndereco());
    $statement->bindValue(6, $cliente->getSenha());
    $statement->execute();
}

public function mostrarTodos(){
        $sql = "SELECT * FROM clientes;";
        $statement = $this->pdo->query($sql);
        $client = $statement->fetchAll(PDO::FETCH_ASSOC);

        $allClients = array_map(function($client) {
        return new Clientes($client['id_cli'],
            $client['nome_cli'],
        $client['cpf_cli'],
        $client['telefone_cli'],
        $client['email_cli'],
        $client['endereco_cli'],
        $client['senha_cli']
        );
        }, $client
    );
    return $allClients;
    }

    public function removeClientes($id){
        $sql = "DELETE FROM clientes WHERE id_cli = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
    }

    public function formaObjeto($dado){
        return new Clientes(
            $dado['id_cli'],
            $dado['nome_cli'],
            $dado['cpf_cli'],
            $dado['telefone_cli'],
            $dado['email_cli'],
            $dado['endereco_cli'],
            $dado['senha_cli']
        );
    }

    public function editaClientes(Clientes $cliente){
    $sql = "UPDATE clientes SET nome_cli = ?, cpf_cli = ?, telefone_cli = ?, email_cli = ?, endereco_cli = ?, senha_cli = ? WHERE id_cli = ?";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $cliente->getNome());
    $statement->bindValue(2, $cliente->getCpf());
    $statement->bindValue(3, $cliente->getTelefone());
    $statement->bindValue(4, $cliente->getEmail());
    $statement->bindValue(5, $cliente->getEndereco());
    $statement->bindValue(6, $cliente->getSenha());
    $statement->bindValue(7, $cliente->getId());
    $statement->execute();
    }

    public function mostraCliente(int $id){
        $sql = "SELECT * FROM clientes WHERE id_cli= ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        return $this->formaObjeto($data);
    }
}