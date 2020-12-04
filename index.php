<?php 

session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="script.js"></script>
  <title>PHP Form</title>
</head>
<body>

<a href="index.php">Index</a>
<a href="form.php">Form</a>
<a href="about.php">About</a><br><br>

<?php


  $_SESSION['username'] = "rimas1987";
  //echo $_SESSION['username'];

  // if (!isset($_SESSION['username'])) {
  //   echo "you are not logged in";
  // } else {
  //   echo "Hello Rimantas";
  // }





?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



</body>
</html>



<?php

// COUNT HOW MANY ELEMENTS ARE IN ARRAY AND SUM ARRAYS ELEMENTS

// $expenses = [40, 70, 20];
// $sum = 0;
// $amountOFExpences = 0;
// foreach($expenses as $expense) {
//   $sum = $expense + $sum;
//   $amountOFExpences = $amountOFExpences + 1;
//   echo $sum  . "<br>";
// }
// echo $sum  . "<br>";
// echo $amountOFExpences;


// Numbers
// $x = 4;
// $y = 9;
// $z = 4;

// $sum = $x+$y+$z;
// $average = ($x + $y + $z) / 3;
// echo $sum . "<br>" . $average . "<br>";
// echo number_format($average, 2, ',', '');


// echo "<pre>";
// echo var_dump();
// echo "</pre>";


//STRING
$string = "Bananas, Apple, Morka";
$vegetables = ["Bulve", "Kopustas", "Burokas"];
$fruits = ["Bananas", "Apple", "Morka"];

// STRINGA PAVERCIA I ARRAY KURIS SAUGOMAS KINTAMAJME
$makeArray = explode(",", $string); // galima saugoti variable, gaunasi tipas ARRAY

// IS ARRAY GALIMA PAVERSTI I STRINGA IR SAUGOTI KINTAMAJAME
//$makeFromArrayToString = implode(" && ", $fruits); // galima saugoti variable, gaunasi STRINGAS




// ARRAYS 
// $vegetables = ["Bulve", "Kopustas", "Burokas"];
// $fruits = ["Bananas", "Apple", "Morka"];

// STRINGA PAVERCIA I ARRAY KURIS SAUGOMAS KINTAMAJME
$makeArray = explode(",", $string); // galima saugoti variable, gaunasi tipas ARRAY

// IS ARRAY GALIMA PAVERSTI I STRINGA IR SAUGOTI KINTAMAJAME
$makeFromArrayToString = implode(" && ", $fruits); // galima saugoti variable, gaunasi STRINGAS

// ASOCIATIVE ARRAY
$person = [
    'name' => 'Brand',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
    'friends' => ['Mike', 'Steve', 'Peter'],
    'job' => "programer",
];



//echo in_array("Apple", $fruits); // 0 arba 1 / false arba True pasako ar toks elementas yra ar nera
// echo isset($fruits['2']); // reikalingas array key - parodo 1 arba 0 (nieko)
//echo array_search("Morka", $fruits); // bus possition in array 2, pasako ieskoto elemento vieta array
// echo var_dump(array_keys($person)); // parodo asociative arrays keys arrejuje
// echo var_dump(array_values($person)); // parodo asociative arrays values arrejuje

//* CONCAT ARRAY IN JS OR MERGE ARRAY IN PHP
// $vegetables = ["Bulve", "Kopustas", "Burokas"];
// $fruits = ["Bananas", "Apple", "Morka"];

// $mergedArray = array_merge($vegetables, $fruits);
// foreach($mergedArray as $key => $value) { // gaunam ir indexa ir verte
//    echo $key . " -- " . $value . "<br>";
// }

//* ARRAY FILTER - creates a new array with all elements that pass the test implemented by the provided function
// $array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
// $array2 = [6, 7, 8, 9, 10, 11, 12];

// function odd($var)
// {
//     // returns whether the input integer is odd
//     return $var & 1;
// }

// function even($var)
// {
//     // returns whether the input integer is even
//     return !($var & 1);
// }

// echo '<pre>'; echo print_r($array1); echo '</pre>';
// echo '<pre>'; echo print_r($array2); echo '</pre>';

// echo "Odd :\n";
// echo "<pre>";
// print_r(array_filter($array1, "odd"));
// echo "</pre>";

// echo "Even:\n";
// echo "<pre>";
// print_r(array_filter($array2, "even"));
// echo "/<pre>";

// Ternary if one linde condition
// $age = 25;
//echo $age >= 25 ? "age is $age" : "Person ir younger than $age";



//array map? reduce of array? arrow function in php?
/*
echo "<pre>";
echo var_dump($makeFromArrayToString);
echo "</pre>" . "</;>-----------------------</br>";
echo $makeFromArrayToString;
*/

//? STRINGS
// $string = "Bananas, Apple, Morka";


//? ARRAY
//* $fruits = ['Banana', 'Apple', 'Orange'];
//* $friends = ["Mike", "Steve", "Peter"];

//* SHOW/GET ALL ARRAYS ELEMENTS IN CONSOLE
// $friends = ["Mike", "Steve", "Peter"];
// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";


//* SHOW/GET ARRAYS ELEMENT VALUE OF SELECTED INDEX
// $friends = ["Mike", "Steve", "Peter"];
// echo "<pre>";
// echo var_dump($friends[1]); 
// echo "</pre>";

//* SHOW/GET ARRAYS LENGTH / TOTAL NUMBER OF ELEMENTS
// $friends = ["Mike", "Steve", "Peter"];
// echo count($friends);

//* SHOW/GET ARRAYS LAST ELEMENT VALUE
// $friends = ["Mike", "Steve", "Peter"];
// echo end($friends);

//* SET/REPLACE ARRAYS OLD VALUE BY NEW VALUE BY SELECTED INDEX
// $friends = ["Mike", "Steve", "Peter"];
// $friends[3] = "jack";
// $friends[0] = "FRANK";

// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

// $friends[6] = "Tom";
// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

//* ADD ELEMENT TO THE END OF ARRAY ARRAY
// $friends = ["Mike", "Steve", "Peter"];

// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

// array_push($friends, 'Jay'); // add element to the end of array

// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";


//* ADD ELEMENT TO THE START OF ARRAY ARRAY
// $friends = ["Mike", "Steve", "Peter"];

// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

// array_unshift($friends, 'John');

// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

//* REMOVE LAST ELEMENTS FROM ARRAY
// $friends = ["Mike", "Steve", "Peter"];

// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

// array_pop($friends);

// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

//* REMOVE FIRST ELEMENTS FROM ARRAY
// $friends = ["Mike", "Steve", "Peter"];
// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";
// array_shift($friends);
// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

//* VALIDATE IF ELEMENT EXIST IN ARRAY - RETURN VALUE TRUE OR FALSE
// $friends = ["Mike", "Steve", "Peter"];
// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

// var_dump(in_array('Steve', $friends));

// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

// var_dump(in_array('Bob', $friends));

// if (!in_array('Steve', $friends)) {
//   echo "such element does not exist";
// } else {
//   echo "element is";
// }



//? ASOCIATIVE ARRAY
$person = [
  'name' => 'Brad',
  'lastMame' => 'Traversy',
  'age' => '30',
  'birthyear' => 1987,
  'hobbies' => ['tennis', 'socer', 'cars'],
  'friends' => ['Mike', 'Steve', 'Peter'],
  'job' => "programer"
];


// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

//* GET ASSOCIATIVE ARRAYS VALUE
// echo $person['lastName'];

// if (!in_array('Brand', $person)) {
//   echo "such element does not exist";
// } else {
//   echo "element is";
// }

//* CHECK IF SUCH ASSOCIATIVE ARRAYS KEY EXIST
// if (!in_array($person['age'], $person)) {
//   echo "such element does not exist";
// } else {
//   echo "element is";
// }

//* ADD KEYS AND VALUES TO ARRAY
// $person['location'] = 'Protugal';
// $person['twitter'] = '@Rimas';

// echo "<pre>";
// echo print_r($person); 
// echo "</pre>";

// excercise No hard coding
// echo $person['name'] . " has " . count($person['hobbies']) . " and his best hobby is " . $person['hobbies'][0];




//? FOR LOOP
// basic example
// for($i = 0; $i < 5; $i++) {
//  echo "Counter $i <br>";
// }


//* get index/element value from array using for loop
// $friends = ["Mike", "Steve", "Peter"];
// for($i = 0; $i < count($friends); $i++) {
//   echo "Element index/location " . $i . " // index value: " . $friends[$i] . "<br>";
// }


//* sum all values in array using for loop
// $numbers = [1, 2, 3, 4];
// $sum = 0;
// for($i= 0; $i < count($numbers); $i++) {
   
//     $sum = $sum  +  $numbers[$i];
//     echo "sum " . $sum . " //index of array and loop round " . $i . "//value of array: $numbers[$i]" ."<br>"  ;
// }
// echo $sum;









//? WHILE LOOP
// $counter = 0;
// while($counter < 10) {
//   echo "Counter $counter <br>";
//   $counter++;
// }



//? DO WHILE
// counter nera mazesnis uz 10, taciau veiksmas vistiek atliekamas vienas
// $counter = 10;
// do {
//   //echo "Counter $counter <br>";
//   $counter++;
// } while ($counter < 10);



//? FOREACH LOOP
// foreach($fruits as $key => $value) {
//   //echo "key: $key -- value: $value <br>";
// }

// sum all values in array using foreach loop
// $numbers = [1, 2, 3, 4]; 
// $sum = 0;
// foreach($numbers as $key => $value) {
//   $sum = $sum +  $value;
//   echo "sum " . $sum . " //index of array/loop round " . $key . " //value of array: $value" ."<br>"  ;
// }
// echo "sum " . $sum . " //index of array/loop round " . $key . " //value of array: $value" ."<br>"  ;


//? DATE AND TIME

// echo time() . "<br>";
// echo date('Y-m-d H:i:s') . "<br>";
// echo date('Y-m-d H:i:s',  time() - 60 * 60 * 24) . "<br>"; // yesterday date
// echo date('Y-m-d H:i:s',  strtotime('+1day')) . "<br>"; // tomorrow date


// echo strtotime('+1day'). "<br>";
// echo strtotime("now"), "\n";
// echo strtotime("10 September 2000"), "\n";
// echo strtotime("+1 day"), "\n";
// echo strtotime("+1 week"), "\n";
// echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
// echo strtotime("next Thursday"), "\n";
// echo strtotime("last Monday"), "\n";




// parse date
// $dateString = '2020-02-06 12:45:35'; // Declare date
// $parseDate = date_parse($dateString); // Parse date

// kodel negalima foreah per ta $parseDate jei jis yra array?
// echo "<pre>";
// echo var_dump($parseDate);
// echo "</pre>";
// echo $parseDate['month'];

// parse date from not default format
// $dateString = 'February 4 2020 12:45:35'; // with non default format
// $parseDate = date_parse_from_format('F j Y H:i:s', $dateString);
// echo "<pre>";
// echo var_dump($parseDate);
// echo "</pre>";

//? CLASSES

class Person {
  public $name; // public string $name;
  public $age; // public int $age;
  private $salary; // public float $salary // private can be called from inside class

  public function __construct($name, $age, $salary)
  {
    $this->name = $name;
    $this->age = $age;
    $this->salary = $salary;
  }

  public function getSalary() 
  {
    return $this->salary;
  }

  public function setSalary() 
  {
    $this->salary = $salary;
  }


}

$p = new Person('Rimas', 28, null);

// echo '<pre>'; echo print_r($p); echo '</pre>';
// echo '<pre>'; echo var_dump($p); echo '</pre>';


//? INTERFACE ############################################

// interface PaymentInterface { // we need to define rules which classes should follow if they want to youse that interfase
//   public function payNow(); // if class follows interface rules class should have metchod also payNow()
// }
// interface LoginInterface { 
//   public function loginFirst(); 
// }

// //Payment types
// class Paypal implements PaymentInterface LoginInterface {
//   public function loginFirst(){}
//   public function payNow(){}
//   public function paymentProcess() {
//     $this->loginFirst();
//     $this->payNow();
    
//   }
// }
// class BankTransfer implements PaymentInterface LoginInterface {
//   public function loginFirst(){}
//   public function payNow(){}
//   public function paymentProcess() {
//     $this->loginFirst();
//     $this->payNow();
    
//   }
// }
// class Visa implements PaymentInterface {
//   public function payNow(){}
//   public function paymentProcess() {
//     $this->payNow();
    
//   }
// }
// class Cash implements PaymentInterface {
//   public function payNow(){}
//   public function paymentProcess() {
//     $this->payNow();
    
//   }
// }

// // this class is like route controler linking interface with other classes
// class ByProduct {
//   public function pay(PaymentInterface $paymentType){
//     $paymentType->paymentProcess();
//   }
// }

// $paymentType = new Cash(); // or new Paypal
// $buyProduct = new ByProduct();
// $buyProduct->pay($paymentType);

//?##############################################################
interface newInterfaceClass {
  public function interfaceFunction();
}
class A implements newInterfaceClass {
  public function interfaceFunction();
  public function string()  {
    echo 'This is class A';
  }
}
class B  implements newInterfaceClass {
  public function interfaceFunction();
  public function string() {
    echo 'This is class B';
  }
}

$aClass = new A;
$bClass = new B;
echo $aClass->string();
echo "<br>";
echo $bClass->string();

$newObj = new A;
