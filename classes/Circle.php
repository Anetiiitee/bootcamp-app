<?php

namespace Bootcamp\Demo;

/**
* Gets area of circle
*/

class Circle extends Shape
{
  /**
  * @param $radius float circle radius
  */
    public $radius;
    /** Returns area of circle
    * @param float $radius circle radius
    * @return float circle area
    */
    public function getArea()
    {
        return $this->radius*$this->radius*pi();
    }
  /**
  * @param float $radius circle radius
  * @return void
  */
        public function __construct($radius)
        {
        $this->radius=$radius;
        }
}
