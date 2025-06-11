<?php

require "../../src/db-conection.php";
require "../../src/Model/Clientes.php";
require "../../src/Repository/ClientsRepository.php";

$productsRepository = new ClientsRepository($pdo);
$productsRepository->removeClientes($_POST['id_cli']);
header('Location:../admin-clients.php');