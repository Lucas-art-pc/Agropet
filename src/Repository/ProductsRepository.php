<?php

namespace Src\Repository;

use Src\Model\Produtos;
use PDO;
class ProductsRepository{
    private PDO $pdo;

    public function  __construct( PDO $pdo){
        $this->pdo = $pdo;
    }

    public function mostrarTodos(){
        $sql = "SELECT * FROM produtos;";
        $statement = $this->pdo->query($sql);
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);

        $allProducts = array_map(function($products) {
        return new Produtos($products['id_prod'],
            $products['nome_prod'],
        $products['descricao_prod'],
        $products['preco_prod'],
        $products['quantidade_prod'],
        $products['categoria_prod'],
        $products['imagem_prod']
        );
        }, $products
    );
    return $allProducts;
    }

    public function formaObjeto($dado){
        return new Produtos(
            $dado['id_prod'],
            $dado['nome_prod'],
            $dado['descricao_prod'],
            $dado['preco_prod'],
            $dado['quantidade_prod'],
            $dado['categoria_prod'],
            $dado['imagem_prod'] ?? ''
        );
    }

    public function mostraAbaProduto(int $id){
        $sql = "SELECT * FROM produtos WHERE id_prod = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        return $this->formaObjeto($data);
    }

    public function adicionarProdutos(Produtos $produtos){
    $sql = "INSERT INTO produtos (nome_prod, descricao_prod, preco_prod, quantidade_prod, categoria_prod, imagem_prod) 
        VALUES (?, ?, ?, ?, ?, ?)";
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $produtos->getNome());
    $statement->bindValue(2, $produtos->getDescricao());
    $statement->bindValue(3, $produtos->getPreco());
    $statement->bindValue(4, $produtos->getQuantidade());
    $statement->bindValue(5, $produtos->getCategoria());
    $statement->bindValue(6, $produtos->getImagem());
    $statement->execute();
    }

    public function removeProdutos($id){
        $sql = "DELETE FROM produtos WHERE id_prod = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();
    }

    public function editaProdutos(Produtos $product){
        $sql = "UPDATE produtos SET nome_prod = ?, descricao_prod = ?, preco_prod = ?, quantidade_prod = ?, categoria_prod = ?, imagem_prod = ? WHERE id_prod = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $product->getNome());
        $statement->bindValue(2, $product->getDescricao());
        $statement->bindValue(3, $product->getPreco());
        $statement->bindValue(4,$product->getQuantidade());
        $statement->bindValue(5, $product->getCategoria());
        $statement->bindValue(6, $product->getImagem());
        $statement->bindValue(7, $product->getId());
        $statement->execute();
    }

    public function maisCaros(){
        $sql = "SELECT * FROM produtos ORDER BY preco DESC;";
        $statement = $this->pdo->prepare($sql);
        $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->execute();
    }
}