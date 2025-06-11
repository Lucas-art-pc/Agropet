<?php

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

}