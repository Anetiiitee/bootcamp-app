<?php

use Bootcamp\Demo\Rectangle;

class RectangleTest extends PHPUnit_Framework_TestCase
{
    public function testGetArea()
    {
        // instantiate your object
        //
        $rectangle = new Rectangle(6,6);
        $this->assertEquals(36,$rectangle->getArea());
    }
}
