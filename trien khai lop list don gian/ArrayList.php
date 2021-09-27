<?php

class ArrayList implements ArrayListInterface
{
    public $arrayList;
    public function __construct($arr = ""){
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }
public function add($item)
{
array_push($this->arrayList,$item);
}
public function get($index)
{
   if(key_exists($index,$this->arrayList)){
        return $this->arrayList[$index];
   }
}
public function remove($index)
{
    array_splice($this->arrayList, $index, 1);
}
}