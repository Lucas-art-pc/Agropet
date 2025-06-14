<?php

require_once "../src/db-conection.php";
require_once __DIR__ . '/../vendor/autoload.php';

use Src\Repository\ProductsRepository;

$productsRepository = new ProductsRepository($pdo);
$allProductsRepository = $productsRepository->mostrarTodos();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | AgroPet</title>
    <link href="/src/output.css" rel="stylesheet">
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

    <!-- Título -->
    <section class="py-10">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-green-800 mb-4">Nossos Produtos</h2>
            <p class="text-center text-gray-600 max-w-xl mx-auto">Confira nossa linha de rações e sementes selecionadas para garantir a saúde dos seus pets e o sucesso da sua plantação.</p>
        </div>
    </section>

    <!-- Grid de Produtos -->
    <section class="pb-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <?php
                 foreach($allProductsRepository as $products):
                 ?>
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
                    <img src="<?= $products->getImagemFormatada(); ?>" alt="Ração para Cachorro" class="rounded mb-4">
                    <h3 class="text-xl font-bold mb-2"><?= $products->getNome(); ?></h3>
                    <p class="text-gray-600 mb-4"><?= $products->getDescricao(); ?></p>
                    <span class="text-green-700 font-bold text-lg block mb-4"><?= $products->getPrecoFormatado();?></span>
                    <a href="product.php?id_prod=<?=$products->getId()?>" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded shadow-md block text-center">Ver Mais</a>
                </div>

                <?php endforeach; ?>
              

            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-green-700 text-white py-6 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 AgroPet - Todos os direitos reservados.</p>
        </div>
    </footer>
    <script src="JS/sidebar.js"></script>

</body>
</html>
