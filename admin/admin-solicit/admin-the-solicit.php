<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Aprovar Solicitação | AgroPet</title>
  <link href="/src/output.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- Cabeçalho -->
  <header class="bg-green-700 text-white p-4">
    <div class="container mx-auto flex justify-between">
      <h1 class="text-2xl font-bold">Aprovar Solicitação</h1>
      <nav>
        <ul class="flex gap-6">
          <li><a href="admin-dashboard.php" class="hover:underline">Dashboard</a></li>
          <li><a href="admin-solicitacoes.php" class="hover:underline">Voltar</a></li>
          <li><a href="logout.php" class="hover:underline">Sair</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Conteúdo -->
  <main class="flex-grow container mx-auto py-8 px-4">
    <div class="bg-white shadow rounded-lg p-8 max-w-2xl mx-auto">
      <h2 class="text-3xl font-semibold text-green-700 mb-6 text-center">Revisar e Aprovar Cliente</h2>

      <form action="aprovar-solicitacao.php" method="POST">

        <input type="hidden" name="id_solicitacao" value="12"> <!-- ID vindo via GET ou backend -->

        <!-- Nome -->
        <div class="mb-4">
          <label for="nome" class="block text-gray-700 mb-2">Nome Completo</label>
          <input type="text" id="nome" name="nome" value="João da Silva" required
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"/>
        </div>

        <!-- CPF -->
        <div class="mb-4">
          <label for="cpf" class="block text-gray-700 mb-2">CPF</label>
          <input type="text" id="cpf" name="cpf" value="123.456.789-00" required maxlength="14"
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"/>
        </div>

        <!-- E-mail -->
        <div class="mb-4">
          <label for="email" class="block text-gray-700 mb-2">E-mail</label>
          <input type="email" id="email" name="email" value="joao@email.com" required
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"/>
        </div>

        <!-- Endereço -->
        <div class="mb-4">
          <label for="endereco" class="block text-gray-700 mb-2">Endereço</label>
          <input type="text" id="endereco" name="endereco" value="Rua das Flores, 123" required
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"/>
        </div>

        <!-- Telefone -->
        <div class="mb-4">
          <label for="telefone" class="block text-gray-700 mb-2">Telefone</label>
          <input type="text" id="telefone" name="telefone" value="(11) 99999-8888" required
            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"/>
        </div>

        <!-- Botões -->
        <div class="flex justify-between">
          <a href="admin-solicitacoes.php"
            class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">Cancelar</a>

          <button type="submit"
            class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded font-bold">
            Aprovar Cadastro
          </button>
        </div>

      </form>
    </div>
  </main>

  <!-- Rodapé -->
  <footer class="bg-green-700 text-white text-center p-4">
    <p>&copy; 2025 AgroPet - Todos os direitos reservados.</p>
  </footer>

</body>
</html>
