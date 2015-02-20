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
    public function addOption(Option $option)
    {
        array_push($this->options, $option);
    }
    public function __construct($title)
    {
        $this->title=$title;
        $this->options=[];
    }
    public function isMultiAnswer()
    {
        $count=0;
        foreach ($this->options as $option) {
            if ($option->isCorrect()===true) {
                $count++;
            }
            if ($count>1) {
                return true;
            }
        }
        return false;
    }
}
