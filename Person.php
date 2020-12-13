<?php

class Person {
  public $name; // public string $name;
  public $age; // public int $age;
  // private parameters can be setted only though get and set methods
  private $salary; // public float $salary // private can be called from inside class

  public function __construct($name, $age, $salary) // execute code instance after creating object
  {
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
  }

  public function getSalary() 
  {
    return $this->salary;
  }

  public function setSalary($salary) 
  {
    $this->salary = $salary;
  }
}

