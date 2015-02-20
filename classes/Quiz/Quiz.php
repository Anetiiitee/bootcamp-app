<?php

namespace Bootcamp\Demo\Quiz;

class Quiz {
  /**
  * array of quiz questions
  * @param $questions array
  */
  protected $questions;
  /**
  * quiz name
  * @param $name string
  */
  protected $name;
  /**
  * quiz id
  * @param $id integer
  */
  protected $id;
  /**
  * adds questions
  * @return question
  */
  public function addQuestion(Question $question)
  {
    //$this->questions[] = $question;
    array_push($this->questions,$question);
  }
  public function __construct($name)
  {
    $this->name=$name;
    $this->questions=[];
  }
}
