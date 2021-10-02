<?php
include_once "Student.php";
include_once "LinkedList.php";

$linklist = new LinkedList();
$student1 = new Student("truong", 10);
$student2 = new Student("dua", 6);
$student3 = new Student("anh", 4);
$student4 = new Student("manh", 3);
$student5 = new Student("hung", 7);

$linklist->insertFirst($student1);
$linklist->insertFirst($student2);
$linklist->insertLast($student4);
$linklist->insertFirst($student3);
$linklist->sortListByScore();
$linklist->showList();
$linklist->listStudentMaxScore();
//echo $linklist->totalStudentsFail();
//$linklist->findByName("truong");


