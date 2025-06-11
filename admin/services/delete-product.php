<?php

require "../../src/db-conection.php";
require "../../src/Model/Produtos.php";
require "../../src/Repository/ProductsRepository.php";

$productsRepository = new ProductsRepository($pdo);
$productsRepository->removeProdutos($_POST['id_prod']);
header('Location:../admin-products.php');