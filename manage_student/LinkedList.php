<?php

class LinkedList
{
    public $firstStudent;
    public $lastStudent;
    public $count;

    function __construct()
    {
        $this->firstStudent = null;
        $this->lastStudent = null;
        $this->count = 0;
    }

    function insertFirst($student)
    {
        if (is_null($this->firstStudent)) {
            $this->firstStudent = $student;
            $this->lastStudent = $student;
        } else {
            $this->firstStudent->next = $student;
            $student->next = null;
            $this->firstStudent = $student;
        }
    }

    function insertLast($student)
    {
        if (is_null($this->firstStudent)) {
            $this->firstStudent = $student;
            $this->lastStudent = $student;
        } else {
            $student->next = $this->lastStudent;
            $this->lastStudent = $student;
        }
    }

    function showList()
    {
        $current = $this->lastStudent;
        while ($current != null) {
            $current->readStudent();
            $current = $current->next;
        }
    }

    function totalStudentsFail()
    {
        $current = $this->lastStudent;
        while ($current != null) {
            if ($current->score <= 5) {
                $this->count++;
            }
            $current = $current->next;
        }
        return $this->count . "<br>";
    }

    function findByName($name)
    {
        $current = $this->lastStudent;

        while ($current != null) {
            if ($current->name === $name) {
                $current->readStudent();
                break;
            }
            $current = $current->next;
        }
    }
    function sortListByScore(){
        $preNode = null;
        $current = $this->lastStudent;
        $nextNode = $current->next;

        while (!is_null($nextNode)) {
            if ((int)$current->score < (int)$nextNode->score) {

                if (is_null($nextNode->next)) {
                    $current->next = null;
                    $this->firstStudent = $current;
                } else {
                    $current->next = $nextNode->next;
                }

                $nextNode->next = $current;

                if (is_null($preNode)) {
                    $this->lastStudent = $nextNode;
                } else {
                    $preNode->next = $nextNode;
                }

                $preNode = $nextNode;
                $nextNode = $current->next;
            } else {
                return;
            }
        }
    }
    function listStudentMaxScore(){
        if (!is_null($this->lastStudent)) {
            $removeStudent = $this->lastStudent;
        }
        return "StudentMaxScore: ". $removeStudent->readStudent();
    }
}