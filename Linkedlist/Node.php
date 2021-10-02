<?php

class Node


{
    public $name;
    public $next;

    function __construct($name)
    {
        $this->name = $name;
        $this->next = null;
    }

    function readNode()
    {
        echo $this->name;
    }

}