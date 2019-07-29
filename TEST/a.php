<?php
  Class student{
	  public function name(){}
	  
  }
$stu1 = new Student;
$stu1 -> name = '张三';
$stu2 = $stu1;
$stu3 = clone $stu1;
var_dump($stu1 instanceof Student);
var_dump($stu1 === $stu2);
var_dump($stu1 === $stu3);