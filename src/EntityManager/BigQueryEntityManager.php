<?php

namespace App\EntityManager;

use App\Repositories\IrisRepository;
use OWM\EntityManager\BaseBigQueryEntityManager;
use Google\Cloud\BigQuery\BigQueryClient;
use Iterator;

class BigQueryEntityManager{

  //single instance
  protected static $instance = null;
  //repo pool
  protected static $repositories = [];
  //nested BQ client
  protected $bigQueryClient;
   
  //protected constructor
  public function __construct(array $settings){

    $this->bigQueryClient = new BigQueryClient($settings);

  }

  //singleton function
  public static function instanciate(array $settings):self{

    if (!isset(self::$instance)) {
      self::$instance = new self($settings);
    }
    return self::$instance;

  }

  //consulta general
  public function query(string $sql):?object{

    $jobConfig = $this->bigQueryClient->query($sql);
    $job = $this->bigQueryClient->startQuery($jobConfig);

    $result = $job->queryResults();

    return $result;

  } 

  //table repo pool
  public function createRepository(string $table):?object{

    switch ($table) {
      case 'iris':
        if(!isset(self::$repositories['iris'])){
          self::$repositories['iris'] = new IrisRepository(self::$instance);
        }
        return self::$repositories['iris'];
        break;
      
      default:
        return null;
        break;
    }

  }

}