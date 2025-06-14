<?php

require "../../src/db-conection.php";
require "../../vendor/autoload.php";
use Src\Repository\ClientsRepository;

$productsRepository = new ClientsRepository($pdo);
$productsRepository->removeClientes($_POST['id_cli']);
header('Location:../admin-clients.php');