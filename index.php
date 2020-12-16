<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type,application/json');

require_once 'vendor/autoload.php';

//usamos em de bigquery
use App\EntityManager\BigQueryEntityManager;

//instanciamos singleton de em
$em = BigQueryEntityManager::instanciate(['projectId'=>'inbound-density-293906']);
//mandamos llamar repositorio
$irisRepository = $em->createRepository('iris');
//pedimos todas los registros
$irisFlowers = $irisRepository->findAll();
//presentamos resultados como json
$jsonIris = json_encode($irisFlowers);
echo($jsonIris);







