<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | AgroPet</title>
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
                    <li><a href="cadaster.php" class="hover:underline">Cadastro</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Formulário de Login -->
    <main class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-md p-8 w-full max-w-md">
            <h2 class="text-3xl font-bold text-center text-green-700 mb-6">Login</h2>

            <form action="processa_login.php" method="POST">

                <!-- Email -->
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2" for="email">E-mail</label>
                    <input type="email" id="email" name="email" required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Digite seu email...">
                </div>

                <!-- Senha -->
                <div class="mb-6">
                    <label class="block text-gray-700 mb-2" for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600" placeholder="Digite sua senha...">
                </div>

                <!-- Botão -->
                <button type="submit"
                    class="w-full bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded">
                    Entrar
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
