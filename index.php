<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use App\EntityManager\BigQueryEntityManager;

$em = BigQueryEntityManager::instanciate(['projectId'=>'inbound-density-293906']);

$irisRepository = $em->createRepository('iris');

$irisFlowers = $irisRepository->findAll();

print_r($irisFlowers);







