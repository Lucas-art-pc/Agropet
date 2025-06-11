

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente | AgroPet</title>
    <link href="/src/output.css" rel="stylesheet">
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
                    <li><a href="login.php" class="hover:underline">Sign-up</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Formulário -->
    <main class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold text-center text-green-700 mb-6">Cadastro de Cliente</h2>

            <form method="POST">

                <!-- Nome -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="nome_cli">Nome Completo</label>
                    <input type="text" id="nome_cli" name="nome_cli" placeholder="Digite seu nome completo..." required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <!-- CPF -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="cpf_cli">CPF</label>
                    <input type="text" id="cpf_cli" name="cpf_cli" required maxlength="14" placeholder="000.000.000-00"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                    <p id="cpfError" class="text-red-600 text-sm hidden">CPF inválido. Formato: 000.000.000-00</p>
                </div>

                <!-- Telefone -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="telefone_cli">Telefone</label>
                    <input type="text" id="telefone_cli" name="telefone_cli" placeholder="(00) 00000-0000"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                    <p id="telefoneError" class="text-red-600 text-sm hidden">Telefone inválido. Formato: (00) 00000-0000</p>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email_cli">E-mail</label>
                    <input type="email" id="email_cli" name="email_cli" placeholder="exemplo@domínio.com" required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                    <p id="emailError" class="text-red-600 text-sm hidden">E-mail inválido.</p>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 mb-2" for="senha_cli">Endereço</label>
                    <input type="text" id="endereco_cli" name="endereco_cli" placeholder="Digite seu endereco..." required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>

                <!-- Senha -->
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2" for="senha_cli">Senha</label>
                    <input type="password" id="senha_cli" name="senha_cli" placeholder="Digite sua senha..." required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
                    <p id="senhaError" class="text-red-600 text-sm hidden">Senha deve ter no mínimo 6 caracteres.</p>
                </div>

                <!-- Botão -->
                <button type="submit" name="cadastro"
                    class="w-full bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">
                    Cadastrar
                </button>
            </form>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="bg-green-700 text-white text-center p-4">
        <p>&copy; 2025 AgroPet - Todos os direitos reservados.</p>
    </footer>
    <script src="JS/form/validity-form.js"></script>
    <?php
require "src/db-conection.php";
require "src/Model/Clientes.php";
require "src/Repository/ClientsRepository.php";

if(isset($_POST['cadastro'])){

    $clientClass = new Clientes(null,
        $_POST['nome_cli'],
        $_POST['cpf_cli'],
        $_POST['telefone_cli'],
        $_POST['email_cli'],
            $_POST['endereco_cli'],
            $_POST['senha_cli']
        );
    $client = new ClientsRepository($pdo);
    $client->salvar($clientClass);
    header('Location:cadaster.php');
}
?>
</body>
</html>
