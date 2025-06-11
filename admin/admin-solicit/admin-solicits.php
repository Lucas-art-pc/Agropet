<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Solicitações de Cadastro | AgroPet</title>
  <link href="/src/output.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

  <!-- Cabeçalho -->
  <header class="bg-green-700 text-white p-4">
    <div class="container mx-auto flex justify-between">
      <h1 class="text-2xl font-bold">Painel de Solicitações</h1>
      <nav>
        <ul class="flex gap-6">
          <li><a href="admin-dashboard.php" class="hover:underline">Dashboard</a></li>
          <li><a href="admin-clients.php" class="hover:underline">Sair</a></li>
          <li><a href="logout.php" class="hover:underline">Sair</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Conteúdo principal -->
  <main class="flex-grow container mx-auto py-8 px-4">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Solicitações Pendentes</h2>

    <!-- Tabela -->
    <div class="overflow-x-auto bg-white shadow rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">ID</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nome</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">CPF</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">E-mail</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Endereço</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Telefone</th>
            <th class="px-6 py-3 text-center text-sm font-medium text-gray-700">Ações</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">

          <!-- Exemplo de linha de solicitação -->
          <tr>
            <td class="px-6 py-4 text-sm text-gray-900">12</td>
            <td class="px-6 py-4 text-sm text-gray-900">João da Silva</td>
            <td class="px-6 py-4 text-sm text-gray-900">123.456.789-00</td>
            <td class="px-6 py-4 text-sm text-gray-900">joao@email.com</td>
            <td class="px-6 py-4 text-sm text-gray-900">Rua das Flores, 123</td>
            <td class="px-6 py-4 text-sm text-gray-900">(11) 99999-8888</td>
            <td class="px-6 py-4 text-sm text-center">
              <form action="responder-solicitacao.php" method="POST" class="flex justify-center gap-2">
                <input type="hidden" name="id_solicitacao" value="12">
                <a href="admin-the-solicit.php" type="submit" name="acao" value="aceitar"
                  class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Abrir</a>
                <button type="submit" name="acao" value="rejeitar"
                  class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Rejeitar</button>
              </form>
            </td>
          </tr>

          <!-- Outras linhas podem ser geradas dinamicamente com PHP -->

        </tbody>
      </table>
    </div>
  </main>

  <!-- Rodapé -->
  <footer class="bg-green-700 text-white text-center p-4">
    <p>&copy; 2025 AgroPet - Todos os direitos reservados.</p>
  </footer>

</body>
</html>
