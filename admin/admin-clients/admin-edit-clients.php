<?php

require "../../src/db-conection.php";
require "../../vendor/autoload.php";


use Src\Repository\ClientsRepository;

$clienteRepository = new ClientsRepository($pdo);

if(isset($_POST['editar'])){
  $cliente = $clienteRepository->formaObjeto($_POST);
    $clienteRepository->editaClientes($cliente);
    header ('Location: admin-clients.php');
}else{
    $clientes = $clienteRepository->mostraCliente($_GET['id_cli']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente - AgroPet</title>
    <link href="/src/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-green-800 mb-6">Editar Cadastro do Cliente</h2>

        <form method="post">
            <input type="hidden" name="id_cli" value="<?=$clientes->getId()?>">
            
            <div class="mb-4">
                <label for="nome" class="block text-gray-700">Nome:</label>
                <input type="text" id="nome_cli" name="nome_cli" value="<?=$clientes->getNome()?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-200">
            </div>

            <div class="mb-4">
                <label for="cpf" class="block text-gray-700">CPF:</label>
                <input type="text" id="cpf_cli" name="cpf_cli" value="<?=$clientes->getCpf()?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-200">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">E-mail:</label>
                <input type="email" id="email_cli" name="email_cli" value="<?=$clientes->getEmail()?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-200">
            </div>

            <div class="mb-4">
                <label for="telefone" class="block text-gray-700">Telefone:</label>
                <input type="text" id="telefone_cli" name="telefone_cli" value="<?=$clientes->getTelefone()?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-200">
            </div>

            <div class="mb-4">
                <label for="endereco" class="block text-gray-700">Endereço:</label>
                <input type="text" id="endereco_cli" name="endereco_cli" value="<?=$clientes->getEndereco()?>" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-200">
            </div>

            <div class="mb-4">
                <label for="senha" class="block text-gray-700">Senha:</label>
                <input type="password" id="senha_cli" name="senha_cli" value="<?=$clientes->getSenha()?>" readonly class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-200">
            </div>


            <div class="flex justify-center">
                <button type="submit" name="editar" value="editar" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded shadow-md">Atualizar</button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <a href="admin-clients.php" class="text-blue-500 hover:underline">Voltar para a lista de clientes</a>
        </div>
    </div>

</body>

</html>
