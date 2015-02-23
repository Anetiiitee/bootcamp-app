<?php

namespace Bootcamp\Demo\Quiz;

class Question
{
  /**
  * array of answers
  * @param $options array
  */
    protected $options;
  /**
  * id of question
  * @param $id int
  */
    protected $id;
  /**
  * title of question
  * @param $title string
  */
    protected $title;
  /**
  * question type
  * @param $type int
  */
    protected $type;
  /**
  * add option
  * @return option
  */
   protected $correctAnswerCount;
    public function addOption(Option $option)
    {
        if (true===$option->isCorrect())
          $this->correctAnswerCount++;
        array_push($this->options, $option);
    }
    public function __construct($title)
    {
        $this->title=$title;
        $this->options=[];
    }
    public function isMultiAnswer()
    {
        return $this->correctAnswerCount>1;
    }
}
