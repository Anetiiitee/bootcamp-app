<?php

class Comment
{
    private $author;
    private $text;

    public function __construct($name,$comment)
    {
      $this->author = $name;
      $this->text = $comment;
    }
    public function ReturnName()
    {
      return $this->author;
    }
}



$comment = new Comment('John','Comment1');
$comment2 = new Comment('Jane','Comment2');
$author = $comment->ReturnName();
var_dump($author);

//$var->author = 'John';
//$var2->author='Jane';
// $var3 = Comment::__construct();
//var_dump($obj3 instanceof Test);


var_dump($comment, $comment2);
