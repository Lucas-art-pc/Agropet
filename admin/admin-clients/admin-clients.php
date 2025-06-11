<?php
require "../src/db-conection.php";
require "../src/Model/Clientes.php";
require "../src/Repository/ClientsRepository.php";

$clientRepository = new ClientsRepository($pdo);
$allClient = $clientRepository->mostrarTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Clientes | AgroPet</title>
    <link href="../src/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="fixed top-0 left-0 h-full w-64 bg-green-800 text-white flex flex-col">
        <div class="p-6 border-b border-green-700">
            <h2 class="text-2xl font-bold">Admin AgroPet</h2>
        </div>
        <nav class="flex-1 p-4">
            <a href="#" class="block px-4 py-2 rounded hover:bg-green-700">Dashboard</a>
            <a href="admin-products.php" class="block px-4 py-2 rounded hover:bg-green-700">Produtos</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-green-700">Pedidos</a>
            <a href="admin-clients.php" class="block px-4 py-2 rounded hover:bg-green-700 font-semibold bg-green-700">Clientes</a>
            <a href="admin-solicits.php" class="block px-4 py-2 rounded hover:bg-green-700">Solicitações</a>
        </nav>
        <div class="p-4 border-t border-green-700">
            <button class="w-full bg-red-600 hover:bg-red-700 px-4 py-2 rounded">Sair</button>
        </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="ml-64 p-8">
        <h1 class="text-3xl font-bold mb-6 text-green-800">Gerenciamento de Clientes</h1>

        <div class="bg-white p-6 rounded shadow-md">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-semibold">Lista de Clientes</h2>
                
            </div>

            <div class="overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-green-700 text-white">
                            <th class="px-6 py-3 text-left">Nome</th>
                            <th class="px-6 py-3 text-left">CPF</th>
                            <th class="px-6 py-3 text-left">Email</th>
                            <th class="px-6 py-3 text-left">Telefone</th>
                            <th class="px-6 py-3 text-left">Endereço</th>
                            <th class="px-6 py-3 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">

                    <?php foreach($allClient as $cliente):?>
                        <tr class="hover:bg-green-50">
                            <td class="px-6 py-4"><?=$cliente->getNome()?></td>
                            <td class="px-6 py-4"><?=$cliente->getCpf()?></td>
                            <td class="px-6 py-4"><?=$cliente->getEmail()?></td>
                            <td class="px-6 py-4"><?=$cliente->getTelefone()?></td>
                            <td class="px-6 py-4"><?=$cliente->getEndereco()?></td>
                            <td class="px-6 py-4 text-center space-x-2 flex">
                                <a class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Editar</a>
                                <form method="post" action="services/delete-client.php" >
                                    <input type="hidden" name="id_cli" value="<?=$cliente->getId()?>" >
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded" >Excluir</button>
                                </form>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                        <!-- Adicione mais linhas conforme necessário -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
