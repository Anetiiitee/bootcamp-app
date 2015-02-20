<?php

namespace Bootcamp\Demo;

class Rectangle extends Shape
{
 /**
  * @param $width float width
  * @param $height float height
  */
    public $width;
    public $height;
  /**
  * Creates an rectangle instance
  * @param $width float width
  * @param $height float height
  * @return rectangular area
  */
    public function getArea()
    {
        return $this->width*$this->height;
    }
  /**
  * @param $width float Rectangular width
  * @param $height float Rectangular height
  * @return void
  */
    public function __construct($width, $heigth)
    {
        $this->width = $width;
        $this->height=$heigth;
    }
}
