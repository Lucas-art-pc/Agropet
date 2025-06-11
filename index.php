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
            
        </nav>
    </div>

    <!-- Botão de abrir sidebar -->
    

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

        <section class="bg-green-100 py-16">
            <div class="flex flex-col md:flex-row items-center justify-between px-8">
                <div class="md:w-1/2 mb-8 md:mb-0 ml-24">
                    <h2 class="text-4xl font-bold text-green-800 mb-4">Alimente com Qualidade!</h2>
                    <p class="text-gray-700 mb-10">
                        Aqui você encontra as melhores rações e sementes para seus pets e sua plantação. <br>
                        Qualidade, preço justo e entrega rápida.
                    </p>
                    <a href="products.php" class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded shadow-md">
                        Ver Produtos
                    </a>
                </div>
                <div class="pr-10">
                    <img src="https://img.freepik.com/vetores-gratis/conceito-de-mercado-agricola-plano_23-2148527665.jpg"
                        alt="Produtos" class="rounded-lg shadow-md">
                </div>
            </div>
        </section>

        <section class="py-16">
            <div class="px-8">
                <h2 class="text-3xl font-bold text-center text-green-800 mb-10">Produtos em Destaque</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Produto 1 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
                        <img src="https://img.freepik.com/fotos-gratis/comida-seca-para-cachorro-em-um-prato_123827-28491.jpg"
                            alt="Ração para Cachorro" class="rounded mb-4">
                        <h3 class="text-xl font-bold mb-2">Ração Premium para Cães</h3>
                        <p class="text-gray-600 mb-4">Nutrição completa para seu melhor amigo.</p>
                        <span class="text-green-700 font-bold text-lg">R$ 149,90</span>
                        <a href="product.php"
                            class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded shadow-md block text-center">Ver
                            Mais</a>
                    </div>

                    <!-- Produto 2 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
                        <img src="https://img.freepik.com/fotos-premium/sacos-de-sementes-organicas_488220-14336.jpg"
                            alt="Sementes" class="rounded mb-4">
                        <h3 class="text-xl font-bold mb-2">Sementes de Milho</h3>
                        <p class="text-gray-600 mb-4">Alta qualidade para sua plantação render mais.</p>
                        <span class="text-green-700 font-bold text-lg">R$ 39,90</span>
                        <a href="product.php"
                            class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded shadow-md block text-center">Ver
                            Mais</a>
                    </div>

                    <!-- Produto 3 -->
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition">
                        <img src="https://img.freepik.com/fotos-gratis/gato-comendo-comida-seca_23-2148959870.jpg"
                            alt="Ração para Gato" class="rounded mb-4">
                        <h3 class="text-xl font-bold mb-2">Ração para Gatos Adultos</h3>
                        <p class="text-gray-600 mb-4">Saúde e bem-estar para seu felino.</p>
                        <span class="text-green-700 font-bold text-lg">R$ 129,90</span>
                        <a href="product.php"
                            class="bg-green-700 hover:bg-green-800 text-white px-4 py-2 rounded shadow-md block text-center">Ver
                            Mais</a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-green-700 text-white py-6">
            <div class="text-center">
                <p>&copy; 2025 AgroPet - Todos os direitos reservados.</p>
            </div>
        </footer>

    </div>

<script src="JS/sidebar.js"></script>

</body>
</html>
