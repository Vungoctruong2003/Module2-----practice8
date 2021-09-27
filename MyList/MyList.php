<?php

class MyList
{
    public $size;
    public $elements;

    function __construct($size, $arr = "")
    {
        $this->size = $size;
        if (is_array($arr)) {
            $this->elements = $arr;
        } else {
            $this->elements = [];
        }
    }

    function insert($index, $item)
    {
        return array_splice($this->elements, $index, 0, $item);
    }

    public function add($item)
    {
        return array_push($this->elements, $item);
    }

    public function remove($index)
    {
        return array_splice($this->elements, $index, 1);
    }

    public function getInfo($index)
    {
        return $this->elements[$index];
    }

    public function size()
    {
        return count($this->elements);
    }

    public function isEmpty()
    {
        if (empty($this->elements)) {
            return "Your array is empty";
        }
    }

    public function sort()
    {
        return sort($this->elements);
    }


}