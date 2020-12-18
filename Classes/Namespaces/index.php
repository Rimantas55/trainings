<?php 
require_once "ClassesNamespaces/Email.php";
require_once "ClassesNamespaces/Person.php";

// use app\Email;

echo "Namespaces folder index.php" . "<br>";
// if you apply namespaces to class regular instance does not work
// $email = new Email(); 

// example 1 how to create instance: \namespacename\className();
// $email = new \app\Email(); 
// $person = new \app\Person(); 

// example 2 how to create instance if using use and declear it on top - use namespacename\Classname; 
// $email = new Email(); 

