<?php
require "../../src/db-conection.php";
require "../../src/Model/Produtos.php";
require "../../src/Repository/ProductsRepository.php";

if(isset($_POST['cadastra'])){

    $product = new ProductsRepository($pdo);
    $productClass = new Produtos(null, $_POST['nome_prod'], $_POST['descricao_prod'], $_POST['preco_prod'], $_POST['quantidade_prod'], $_POST['categoria_prod'], $_FILES['imagem_prod']['name']);
    
    $product->adicionarProdutos($productClass);
    header('Location:admin-products.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos | AgroPet</title>
    <link href="../../src/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <header class="bg-green-700 text-white">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold">AgroPet</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="index.php" class="hover:underline">Início</a></li>
                    <li><a href="products.php" class="hover:underline">Produtos</a></li>
                    <li><a href="cadaster.php" class="hover:underline">Clientes</a></li>
                    <li><a href="#" class="hover:underline">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Formulário de Cadastro de Produto -->
    <main class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-lg">
            <h2 class="text-3xl font-bold text-center text-green-700 mb-6">Cadastrar Produto</h2>

            <form action="#" method="POST" enctype="multipart/form-data">

                <!-- Nome do Produto -->
                <div class="mb-4">
                    <label for="nome_prod" class="block text-gray-700 mb-2">Nome do Produto</label>
                    <input type="text" id="nome_prod" name="nome_prod" required placeholder="Digite o nome do produto"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <!-- Descrição -->
                <div class="mb-4">
                    <label for="descricao_prod" class="block text-gray-700 mb-2">Descrição</label>
                    <textarea id="descricao_prod" name="descricao_prod" rows="3" required placeholder="Descrição detalhada"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
                </div>

                <!-- Preço -->
                <div class="mb-4">
                    <label for="preco_prod" class="block text-gray-700 mb-2">Preço (R$)</label>
                    <input type="number" step="0.01" id="preco_prod" name="preco_prod" required placeholder="Ex: 149.90"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <!-- Quantidade -->
                <div class="mb-4">
                    <label for="quantidade_prod" class="block text-gray-700 mb-2">Quantidade em Estoque</label>
                    <input type="number" id="quantidade_prod" name="quantidade_prod" required placeholder="Ex: 50"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <!-- Categoria -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="categoria_prod">Categoria</label>
                    <select id="categoria_prod" name="categoria_prod" required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                        <option value="">Selecione a categoria</option>
                        <option value="Rações">Rações</option>
                        <option value="Acessórios">Acessórios</option>
                        <option value="Medicamentos">Medicamentos</option>
                        <option value="Higiene">Higiene</option>
                    </select>
                </div>

                <!-- Imagem -->
                <div class="mb-6">
                    <label for="imagem_prod" class="block text-gray-700 mb-2">Imagem do Produto</label>
                    <input type="file" id="imagem_prod" name="imagem_prod" class="w-full  text-gray-700">
                </div>

                <!-- Botão -->
                <button type="submit"
                    class="w-full bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded" name="cadastra">
                    Cadastrar Produto
                </button>
            </form>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="bg-green-700 text-white text-center p-4">
        <p>&copy; 2025 AgroPet - Todos os direitos reservados.</p>
    </footer>

</body>
</html>
