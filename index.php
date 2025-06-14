<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroPet - Rações e Sementes</title>
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
            <a href="about.php" class="block px-6 py-3 hover:bg-green-700 rounded">Sobre Nós</a>
        </nav>
    </div>

    <div id="mainContent" class="transition-all duration-300">

        <header class="bg-green-700 text-white flex justify-between shadow-lg">
            <div class="flex items-center p-2">
                <button id="openSidebar" class="m-4 px-4 py-2 bg-green-700 text-white rounded shadow cursor-pointer">
                    ☰ Menu
                </button>
                <h1 class="text-2xl font-bold">AgroPet - Rações e Sementes</h1>
            </div>

            <div class="flex items-center ">
                <a href="login-cadaster/cadaster.php" class="block px-6 py-3 hover:bg-green-700 rounded">Cadastro</a>
                <a href="login-cadaster/login.php" class="block px-6 py-3 hover:bg-green-700 rounded">Sign-up</a>
            </div>
        </header>

        <div class="relative w-full overflow-hidden rounded-xl max-w-4xl mx-auto mt-10" id="carrossel-agropet">
            <div class="w-full flex transition-transform duration-700 ease-in-out" id="slides-wrapper">
                <div class="w-full flex-shrink-0 relative">
                    <img src="nova-imagem1.jpg" class="w-full h-64 object-cover" alt="Banho e Tosa">
                    <div class="absolute bottom-4 left-4 bg-black/50 text-white px-4 py-2 rounded-md">
                        Banho e Tosa Profissional
                    </div>
                </div>
                <div class="w-full flex-shrink-0 relative">
                    <img src="nova-imagem2.jpg" class="w-full h-64 object-cover" alt="Produtos Naturais">
                    <div class="absolute bottom-4 left-4 bg-black/50 text-white px-4 py-2 rounded-md">
                        Produtos Naturais para seu Pet
                    </div>
                </div>
                <div class="w-full flex-shrink-0 relative">
                    <img src="nova-imagem3.jpg" class="w-full h-64 object-cover" alt="Consultas">
                    <div class="absolute bottom-4 left-4 bg-black/50 text-white px-4 py-2 rounded-md">
                        Consultas Veterinárias com Desconto
                    </div>
                </div>
            </div>

            <!-- Botões -->
            <button id="btn-prev" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black/40 text-white p-2 rounded-full">
                &#10094;
            </button>
            <button id="btn-next" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black/40 text-white p-2 rounded-full">
                &#10095;
            </button>

            <!-- Indicadores -->
            <div class="absolute bottom-2 w-full flex justify-center gap-2">
                <span class="dot w-3 h-3 rounded-full bg-gray-300 cursor-pointer" data-slide="0"></span>
                <span class="dot w-3 h-3 rounded-full bg-gray-300 cursor-pointer" data-slide="1"></span>
                <span class="dot w-3 h-3 rounded-full bg-gray-300 cursor-pointer" data-slide="2"></span>
            </div>
        </div>

        <section class="py-16">
            <div class="px-8">
                <h2 class="text-3xl font-bold text-center text-green-800 mb-10">Produtos em Destaque</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Produto 1 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
                        <img src="nova-imagem-produto1.jpg" alt="Ração para Cachorro" class="rounded mb-4">
                        <h3 class="text-xl font-bold mb-2">Ração Premium para Cães</h3>
                        <p class="text-gray-600 mb-4">Nutrição completa para seu melhor amigo.</p>
                        <span class="text-green-700 font-bold text-lg">R$ 149,90</span>
                        <a href="product.php" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded shadow-md block text-center">Ver Mais</a>
                    </div>
                    <!-- Produto 2 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
                        <img src="nova-imagem-produto2.jpg" alt="Sementes" class="rounded mb-4">
                        <h3 class="text-xl font-bold mb-2">Sementes de Milho</h3>
                        <p class="text-gray-600 mb-4">Alta qualidade para sua plantação render mais.</p>
                        <span class="text-green-700 font-bold text-lg">R$ 39,90</span>
                        <a href="product.php" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded shadow-md block text-center">Ver Mais</a>
                    </div>
                    <!-- Produto 3 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
                        <img src="nova-imagem-produto3.jpg" alt="Ração para Gato" class="rounded mb-4">
                        <h3 class="text-xl font-bold mb-2">Ração para Gatos Adultos</h3>
                        <p class="text-gray-600 mb-4">Saúde e bem-estar para seu felino.</p>
                        <span class="text-green-700 font-bold text-lg">R$ 129,90</span>
                        <a href="product.php" class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded shadow-md block text-center">Ver Mais</a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-green-700 text-white py-6 mt-10">
            <div class="text-center">
                <p>&copy; 2025 AgroPet - Todos os direitos reservados.</p>
                <p>Contato: contato@agropet.com | Redes sociais: [ícones]</p>
            </div>
        </footer>

    </div>

    <script src="JS/sidebar.js"></script>
    <script src="JS/carrossel.js"></script>

</body>

</html>
