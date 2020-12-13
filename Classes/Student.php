<?php

class Student extends Person {
  public $studentId;
  public function __construct($name, $age, $salary, $studentId)
  {
    $this->studentId = $studentId;
    parent::__construct($name, $age, $salary);
  }
}

