<?php

include __DIR__.'/vendor/autoload.php';

use Bootcamp\Demo\Quiz\Option;
use Bootcamp\Demo\Quiz\Question;
use Bootcamp\Demo\Quiz\Quiz;

$question = new Question('Nosaukums');

$quiz = new Quiz('Tests');


$options=[];
$options[]=new Option('80');
$options[]=new Option('80',true);
$options[]=new Option('54');
$options[]=new Option('6323');


foreach ($options as $option)
{
  $question->addOption($option);
}


  $quiz->addQuestion($question);


//var_dump($question);
//var_dump($question->isMultiAnswer());
var_dump($quiz);
