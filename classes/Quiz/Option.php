<?php

namespace Bootcamp\Demo\Quiz;

class Option {
  /**
  * id of option
  * @param $id int
  */
  protected $id;
  /**
  * option name
  * @param $name string
  */
  protected $name;
  /**
  * Checks if this is correct answer
  * @param $isCorrect boolean
  */
  protected $isCorrect;
  /**
  * checks if option is ok
  * @return right or wrong
  */
  public function __construct($name,$isCorrect = false)
  {
    $this->name = $name;
    $this->isCorrect=$isCorrect;
  }
  public function isCorrect()
  {
    return $this->isCorrect;
  }
}
