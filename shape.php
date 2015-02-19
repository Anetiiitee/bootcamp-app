<?php

spl_autoload_register(function ($className) {
  require 'classes/'.$className.'.php';
});

$c = new Circle(6);
$r = new Rectangle(7,8);
//$cil = new Cilinder(7,4);
//$cil -> height = 10;
//$c->radius = 9;
//$r->width=7;
//$r->height=4;
//$cil->radius=10;
var_dump($c->getArea());
var_dump($r->getArea());
//var_dump($cil->getArea());
