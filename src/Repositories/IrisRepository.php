<?php 

namespace App\Repositories;

use OWM\EntityManager\BaseBigQueryEntityManager;
use OWM\Repositories\BaseRepository;

class IrisRepository extends BaseRepository{

  protected $em = null;

  public function __construct(BaseBigQueryEntityManager $em){

    $this->em = $em;
    
  }

  public function findOne($id):array{

    return [];

  }

  public function findAll():array{

    $sql = "SELECT * FROM `sample_dwh.iris`;";

    $result = $this->em->query($sql);

    $rows = $result->rows();

    print_r($rows);

    return [];

  }

}


