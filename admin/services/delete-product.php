<?php

require "../../src/db-conection.php";
require "../../vendor/autoload.php";
use Src\Repository\ProductsRepository;

$productsRepository = new ProductsRepository($pdo);
$productsRepository->removeProdutos($_POST['id_prod']);
header('Location:../admin-products/admin-products.php');