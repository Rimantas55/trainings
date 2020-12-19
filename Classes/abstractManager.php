<?php

abstract class Manager {
  abstract protected function showProject($project);
}

class Employee extends Manager {
  public function showProject($project = "Apple") {
    return "I am working on : " . $project;
  }

  public function startProject($project) {
    return $this->showProject($project);
  }

}

// iniciate abstract class
// $employee = new Employee();
// echo $employee->showProject();