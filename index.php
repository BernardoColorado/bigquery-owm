<?php

require_once 'vendor/autoload.php';

use App\EntityManager\BigQueryEntityManager;

$em = BigQueryEntityManager::instanciate(['projectId'=>'inbound-density-293906']);

$irisRepository = $em->createRepository('iris');







