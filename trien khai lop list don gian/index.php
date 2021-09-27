<?php
include_once "ArrayListInterface.php";
include_once "ArrayList.php";
$simpleList = new ArrayList();
$simpleList->add("truong");
$simpleList->add(1);
$simpleList->add("truong handsome");
$simpleList->remove(1);
var_dump($simpleList);
