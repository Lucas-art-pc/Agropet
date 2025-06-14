<?php
require "../../src/db-conection.php";
require "../../vendor/autoload.php";


use Src\Model\Produtos;
use Src\Repository\ProductsRepository;



$repositoryEdit = new ProductsRepository($pdo);

if (isset($_POST['atualizar'])) {

    $nomeImagem = uniqid() . '_' . $_FILES['imagem_prod']['name'];
    $caminho = '../img/' . $nomeImagem;
    move_uploaded_file($_FILES['imagem_prod']['tmp_name'], $caminho);

    $products = new Produtos(
        $_POST['id_prod'],
        $_POST['nome_prod'], 
        $_POST['descricao_prod'], 
        $_POST['preco_prod'], 
        $_POST['quantidade_prod'],
        $_POST['categoria_prod'], 
        $nomeImagem
    );

    $repositoryEdit->editaProdutos($products);
    header('Location: admin-products.php');
    exit;

} else {
    $product = $repositoryEdit->mostraAbaProduto($_GET['id_prod']);
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto | AgroPet</title>
    <link href="../../src/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Cabeçalho -->
    <header class="bg-green-700 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-2xl font-bold">AgroPet</h1>
            <nav>
                <ul class="flex gap-6">
                    <li><a href="index.php" class="hover:underline">Início</a></li>
                    <li><a href="products.php" class="hover:underline">Produtos</a></li>
                    <li><a href="logout.php" class="hover:underline">Sair</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <main class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-xl">
            <h2 class="text-3xl font-bold text-center text-green-700 mb-6">Editar Produto</h2>

            <form method="POST" enctype="multipart/form-data">

            <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="id_prod">Nome do Produto</label>
                    <input type="text" id="id_prod" name="id_prod" value="<?=$product->getId()?>" readonly required
                        placeholder="Digite o nome do produto"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <!-- Nome do Produto -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="nome_prod">Nome do Produto</label>
                    <input type="text" id="nome_prod" name="nome_prod" value="<?=$product->getNome()?>" required
                        placeholder="Digite o nome do produto"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <!-- Descrição -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="descricao_prod">Descrição</label>
                    <textarea id="descricao_prod" name="descricao_prod" required
                        placeholder="Descreva o produto"
                        class="w-full border border-gray-300 rounded px-3 py-2 h-24 focus:outline-none focus:ring-2 focus:ring-green-600"><?=$product->getDescricao()?></textarea>
                </div>

                <!-- Preço -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="preco_prod">Preço (R$)</label>
                    <input type="number" id="preco_prod" name="preco_prod" value="<?=$product->getPreco()?>" step="0.01" min="0" required
                        placeholder="Ex: 49.90"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <!-- Estoque -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="quantidade_prod">Quantidade em Estoque</label>
                    <input type="number" id="quantidade_prod" name="quantidade_prod" value="<?=$product->getQuantidade()?>"  required
                        placeholder="Digite a quantidade"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <!-- Categoria -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="categoria_prod">Categoria</label>
                    <select id="categoria_prod" name="categoria_prod" <?= $product->getCategoria()?> required
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
                    <label class="block text-gray-700 mb-2" for="imagem_prod">Imagem do Produto</label>
                    <input type="file" id="imagem_prod" name="imagem_prod" value="<?=$product->getImagem()?>"
                        class="w-full text-sm text-gray-700
                        file:mr-4 file:py-2 file:px-4
                        file:rounded file:border-0
                        file:text-sm file:font-semibold
                        file:bg-green-700 file:text-white
                        hover:file:bg-green-800"/>
                </div>


                <div class="flex justify-between">
                    <button type="submit" name="atualizar" value="atualizar"
                        class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded w-full mr-2">
                        Atualizar Produto
                    </button>
                    <a href="products.php"
                        class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded w-full ml-2 text-center">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </main>
    <footer class="bg-green-700 text-white text-center p-4">
        <p>&copy; 2025 AgroPet - Todos os direitos reservados.</p>
    </footer>

</body>
</html>
