<?php
include_once "Node.php";
include_once "Linkedlist.php";


$linkList = new LinkedList();

$node1 = new Node("truong");
$node3 = new Node("Manh");
$node2 = new Node("dua");

$linkList->insertFirst($node1);
$linkList->insertFirst($node2);
$linkList->insertLastNode($node3);
$linkList->printList();
$linkList->removeLastNode();
$linkList->printSize();
echo "<br>";


$name = "Truong";
// $linkList->findIndexByName($name);

$result = $linkList->findNodeByName($name);

if(!is_null($result)){
    $result->readNode();
    echo "<br>";
}else{
    echo "It's not in my list";
    echo "<br>";

}
  $linkList->findNodeByIndex(1);




