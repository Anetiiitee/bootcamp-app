<?php

include 'vendor/autoload.php';
use \Bootcamp\Demo\Storage\FileStorage;
use \Bootcamp\Demo\Storage\Controller;


$s=new FileStorage();
$c=new Controller($s);
$c->doSomething();

var_dump($c);
