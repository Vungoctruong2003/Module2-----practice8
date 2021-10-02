<?php

class Student
{
public $name;
public $score;
public $next;
function __construct($name,$score){
    $this->name = $name;
    $this->score = $score;
    $this->next = null;
}
public function readStudent(){
    echo "Name: ".$this->name." Score: ".$this->score ."<br>";
}

}