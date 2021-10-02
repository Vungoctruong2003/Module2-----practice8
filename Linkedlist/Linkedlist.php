<?php

class LinkedList
{
    public $firstNode;
    public $lastNode;
    public $count;


    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    function insertFirst($node)
    {
        if (is_null($this->firstNode)) {
            $this->firstNode = $node;
            $this->lastNode = $node;
        } else {
            $this->firstNode->next = $node;
            $node->next = null;
            $this->firstNode = $node;
        }
        $this->count++;
    }

    function insertLastNode($node)
    {
        if (is_null($this->firstNode)) {
            $this->firstNode = $node;
            $this->lastNode = $node;
        } else {
            $node->next = $this->lastNode;
            $this->lastNode = $node;
        }
        $this->count++;
    }

    function printSize()
    {
        echo $this->count;
    }

    function printList()
    {
        $current = $this->lastNode;
        while (!is_null($current)) {
            $current->readNode();
            echo "<br>";
            $current = $current->next;
        }
    }

    function removeLastNode()
    {
        $removeNode = null;
        if (!is_null($this->lastNode)) {
            $this->lastNode = $this->lastNode->next;
            $removeNode = $this->lastNode;
            $this->count--;
        }
        return $removeNode;
    }

    function findNodeByName($name)
    {
        $searchNode = null;
        $current = $this->lastNode;
        while (!is_null($current)) {
            if ($current->name === $name) {
                $searchNode = $current;
                break;
            }
            $current = $current->next;
        }
        return $searchNode;
    }

    function findNodeByIndex($index)
    {
        $searchNode = null;
        $current = $this->lastNode;
        $position = 0;
        if ($index < $this->count) {
            while (!is_null($current)) {
                $position++;
                if ($position === $index) {
                    $searchNode = $current;
                    break;
                }
                $current = $current->next;
            }
        }

        return $searchNode->readNode();
    }


}