<?php

require "../../src/db-conection.php";
require_once __DIR__ . '/../../vendor/autoload.php';

use Src\Repository\ProductsRepository;


$productsRepository = new ProductsRepository($pdo);
$allProductsRepository = $productsRepository->mostrarTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Produtos | AgroPet</title>
    <link href="../../src/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="fixed top-0 left-0 h-full w-64 bg-green-800 text-white flex flex-col">
        <div class="p-6 border-b border-green-700">
            <h2 class="text-2xl font-bold">Admin AgroPet</h2>
        </div>
        <nav class="flex-1 p-4">
            <a href="#" class="block px-4 py-2 rounded hover:bg-green-700">Dashboard</a>
            <a href="../admin-products/admin-products.php" class="block px-4 py-2 rounded hover:bg-green-700 font-semibold bg-green-700">Produtos</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-green-700">Pedidos</a>
            <a href="../admin-clients/admin-clients.php" class="block px-4 py-2 rounded hover:bg-green-700">Clientes</a>
            <a href="../admin-solicit/admin-solicits.php" class="block px-4 py-2 rounded hover:bg-green-700">Solicitações</a>
        </nav>
        <div class="p-4 border-t border-green-700">
            <button class="w-full bg-red-600 hover:bg-red-700 px-4 py-2 rounded">Sair</button>
        </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="ml-64 p-8">
        <h1 class="text-3xl font-bold mb-6 text-green-800">Gerenciamento de Produtos</h1>

        <div class="bg-white p-6 rounded shadow-md">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">Lista de Produtos</h2>
                <a href="admin-add-products.php" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded cursor-pointer">
                    + Adicionar Produto
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-green-700 text-white">
                            <th class="px-6 py-3 text-left">Nome</th>
                            <th class="px-6 py-3 text-left">Categoria</th>
                            <th class="px-6 py-3 text-left">Descrição</th>
                            <th class="px-6 py-3 text-left">Preço</th>
                            <th class="px-10 py-3 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <?php foreach($allProductsRepository as $product): ?>
                        <tr class="hover:bg-green-50">
                            <td class="px-6 py-4"><?=$product->getNome()?></td>
                            <td class="px-6 py-4"><?=$product->getCategoria()?></td>
                            <td class="px-6 py-4"><?=$product->getDescricao()?></td>
                            <td class="px-6 py-4 "><?=$product->getPrecoFormatado()?></td>
                            <td class="px-6 py-4 text-center space-x-2 flex">
                                <a href="admin-edit-products.php?id_prod=<?=$product->getId()?>" class="bg-yellow-500 hover:bg-yellow-600 text-white px-2 py-1 rounded">Editar</a>
                                <form action="../services/delete-product.php" method="POST">
                                    <input type="hidden" name="id_prod" value="<?= $product->getId()?>">
                                    <button class="bg-red-600 hover:bg-red-700 text-white px-2 py-1  rounded" >Excluir</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach ?>
                        
                        <!-- Adicione mais linhas conforme necessário -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
