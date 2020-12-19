<?php

class Person {
  public $name; // public string $name;
  public $age; // public int $age;
  // private parameters can be setted only though get and set methods
  private $salary; // public float $salary // private can be called from inside class
  public static $clothes = "Toxido";

  public function __construct($name, $age, $salary) // execute code instance after creating object
  {
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
  }

  //* static function
  public static function personsClothes()  
  {
    return self::$clothes;
  }

  public function getSalary() 
  {
    return $this->salary;
  }

  public function setSalary($salary) 
  {
    $this->salary = $salary;
  }

  //* magic methid __get()
  public function __get($property) {
    if(property_exists($this, $property)) {
      return $this->$property;
    }
  }

  //* magic methid set()
  public function __set($property, $value) {
    if(property_exists($this, $property)) {
      $this->$property = $value;
    }
    return $this;
  }
}

//* CALL MAGIC METHOD __get()
// $person = new Person('John',24, 1000);
// echo $person->__get('name');

//* USE MAGIC METHOD __set()
// $person->__set('name', 'Mike');
// echo $person->name;

//* USE STATIC METHOD
// echo Person::$clothes;
// echo Person::personsClothes();
