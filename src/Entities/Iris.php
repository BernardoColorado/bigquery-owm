<?php

namespace App\Entities;

class Iris{

  protected $id;
  protected $petalLength;
  protected $petalWidth;
  protected $sepalLenth;
  protected $sepalWidth;
  protected $flowerName;

  public function setId(int $id):void{

    $this->id = $id;

  }

  public function getId():int{
    return $this->id;
  }

  public function setPetalLentgh(float $petalLength):void{
    $this->petalLength=$petalLength;
  }

  public function getPetalLentgh():float{
    return $this->petalLenth;
  }

  public function setPetalWidth(float $petalWidth):void{
    $this->petalWidth = $petalWidth;
  }

  public function getPetalWidth():float{
    return $this->petalWidth;
  }

  public function setSepalLentgh(float $sepalLenth):void{
    $this->sepalLenth = $sepalLenth;
  }

  public function getSepalLentgh():float{
    return $this->sepalLenth;
  }

  public function setSepalWidth(float $sepalWidth):void{
    $this->sepalWidth = $sepalWidth;
  }

  public function getSepalWidth():float{
    return $this->sepalWidth;
  }


}