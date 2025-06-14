<?php
require "../src/db-conection.php";
require_once __DIR__ . '/../vendor/autoload.php';

use Src\Repository\ProductsRepository;

$productsRepository = new ProductsRepository($pdo);
$product = $productsRepository->mostraAbaProduto($_GET['id_prod']);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto | AgroPet</title>
    <link href="../src/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

   <!-- Sidebar -->
    <div id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-green-800 text-white transform -translate-x-full transition-transform duration-300 z-50">
        <div class="flex items-center justify-between px-4 py-4 border-b border-green-700">
            <h2 class="text-2xl font-bold">AgroPet</h2>
            <button id="closeSidebar" class="text-3xl cursor-pointer">&times;</button>
        </div>
        <nav class="mt-6">
            <a href="index.php" class="block px-6 py-3 hover:bg-green-700 rounded">Início</a>
            <a href="products.php" class="block px-6 py-3 hover:bg-green-700 rounded">Produtos</a>
            
        </nav>
    </div>
    <!-- Conteúdo principal -->
    <div id="mainContent" class="transition-all duration-300">

        <header class="bg-green-700 text-white flex justify-between">
            
        <div class="flex items-center p-2">
            <button id="openSidebar" class="m-4 px-4 py-2 bg-green-700 text-white rounded shadow cursor-pointer">
            ☰ Menu
            </button>
                <h1 class="text-2xl font-bold">AgroPet - Rações e Sementes</h1>
            </div>

            <div class="flex items-center ">
                <a href="cadaster.php" class="block px-6 py-3 hover:bg-green-700 rounded">Cadastro</a>
                <a href="login.php" class="block px-6 py-3 hover:bg-green-700 rounded">Sign-up</a>
            </div>
        </header>

    <!-- Conteúdo do Produto -->
    <section class="py-16 mt-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-10">

            <!-- Imagem do Produto -->
            <div class="w-full md:w-1/2">
                <img src="https://img.freepik.com/fotos-gratis/comida-seca-para-cachorro-em-um-prato_123827-28491.jpg" alt="Ração Premium para Cães" class="rounded-lg shadow-lg">
            </div>

            <!-- Informações do Produto -->
            <div class="w-full md:w-1/2">
                <h2 class="text-4xl font-bold text-green-800 mb-4"><?= $product->getNome()?></h2>
                <p class="text-gray-700 mb-6">
                    <?=$product->getDescricao()?>
                </p>
                <p class="text-xl text-green-700 font-bold mb-6"><?=$product->getPrecoFormatado()?></p>
                <p class="text-gray-700 mb-6">
                   Produtos disponíveis: <?=$product->getQuantidade()?>
                </p>

                <div class="flex gap-4">
                    <button class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-lg shadow-md">Adicionar ao Carrinho</button>
                    <a href="products.php" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-3 rounded-lg shadow-md">Voltar</a>
                </div>
            </div>

        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-green-700 text-white py-6 mt-[9%]">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 AgroPet - Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="JS/sidebar.js"></script>

</body>
</html>
