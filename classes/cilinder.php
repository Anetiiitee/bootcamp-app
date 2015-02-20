<?php

namespace Bootcamp\Demo;

class Cilinder extends Circle {
   /**
    * @param $height float height
    */
    public $height;
    /**
    * Creates an cilinder instance
    * @param $height float height
    * @return void
    */
    public function getArea() {
      return 2*pi()*$this->radius*($this->radius+$this->height);
    }
    /**
    * @param float $height Rectangular height
    * @return void
    */
    public function __constructor($height,$radius) {
      $this->height=$height;
      $this->radius=$radius;
    }
}
