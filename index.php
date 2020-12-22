<?php 
require_once './Classes/Person.php';
require_once './Classes/Student.php';
require_once './Classes/abstractManager.php';
define('BR', '</br>');

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
<a href="about.php">About</a>
<a href="file_uplaod.php">File Upload</a><br>
<button class="btn btn-success">Click Me</button> <br>

<form action="index.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

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

// constance
// define('PI', 3.14);
// echo PI . BR;

//* DESTROY ARRAY OR VARIABLE
//unset destroys variable, array or variable array, but index position does not changes.
// unset($variable);
// $array = [1,2,3];
//print_r($array);
// unset($array[0], $array[1], $array[2]);
// print_r($array);
// $array[] = 1; 
// print_r($array); // value will start from index 3. 

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


//? NUMBERS - integers and floats

// is_numeric can understand that in string is number
// is_numeric("3.45"); // true
// is_numeric("3g.45"); // false

//* INTEGERS - integers are numbers without any decimals points 1 2 3 ... 
// $p = (int) 5.98; // output 5 / value is rounded
// var_dump(is_int($p)); 
// $p = (float) 5; // output 5 // cast (float)

//* FLOATS - floats 1.1, 15.9, 22.5 ...
// https://www.youtube.com/watch?v=d3c_OOD4Jzs&t=1s

// $a = 13.5e3; //  x1000 / output 13500
// $x = 13.5e-3 // /1000 / 0.0135

// $x = floor((0.1 + 0.7) * 10); // is really 8?
// echo $x; // output 7
// $x = ceil((0.1 + 0.7) * 10); // output 8
// echo $x; // output 8

// $x = ceil((0.1 + 0.2) * 10); // is it really 3?
// echo $x; // output 4

// atention - do not compare directly floats!!
// $x = 0.23;
// $y = 1 - 0.77;

// var_dump($x, $y);

// if ($x == $y) {
//   echo 'Yes';
// } else {
//   echo 'No';
// }

// #######################################
// $x = 4;
// $y = 9;
// $z = 4;

// $sum = $x+$y+$z;
// $average = ($x + $y + $z) / 3;
// echo $sum . "<br>" . $average . "<br>";
// echo number_format($average, 2, ',', ' ');


// echo round(0.54335); // output 1
// echo round(0.54335, 4); // output 0.5433

// rand();
// rand(1,5);



// echo "<pre>";
// echo var_dump();
// echo "</pre>";


//? STRINGS
// is_string();
// $string = "Bananas, Apple, Morka";
// $string = "Bananas, Apple, Morka, 1, Hello, @";

//* COUNT STRING LENGTH
// strlen($string) ; // output number with included spaces

//* CONVERT STRING TO ARRAY, STORE VALUE IN VARIABLE
// $makeArray = explode(",", $string); // galima saugoti variable, gaunasi tipas ARRAY

//* COUNT STRING WORDS
// str_word_count($string);

//* FIND WORD IN A STRING
// if (strpos($string, "@")) {
//   echo "String contains @ sign";
// } else {
//   echo "String do not contain @ sign";
// }




//? ARRAYS 
// $vegetables = ["Bulve", "Kopustas", "Burokas"];
// $fruits = ['Banana', 'Apple', 'Orange'];
// $friends = ["Mike", "Steve", "Peter"];

//* CONVERT STRING TO ARRAY, STORE VALUE IN VARIABLE
// $makeArray = explode(",", $string); // galima saugoti variable, gaunasi tipas ARRAY

//* CONVERT ARRAY TO STRING, STORE VALUE IN VARIABLE
// $makeFromArrayToString = implode(" && ", $fruits); // galima saugoti variable, gaunasi STRINGAS

//? ASOCIATIVE ARRAY
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

//* TERNERY OPERATOR - short comparison
// $age = 25;
// echo $age >= 25 ? "age is $age" : "Person ir younger than $age";



//array map? reduce of array? arrow function in php?
/*
echo "<pre>";
echo var_dump($makeFromArrayToString);
echo "</pre>" . "</;>-----------------------</br>";
echo $makeFromArrayToString;
*/





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

//* ADD ELEMENT TO THE END OF ARRAY 
// $friends = ["Mike", "Steve", "Peter"];

// echo "<pre>";
// echo var_dump($friends); 
// echo "</pre>";

// option 1
// $friends = ["Mike", "Steve", "Peter"];
//$friends[] = 'Jhon'; // → ["Mike", "Steve", "Peter", "John"]
// option2
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
// } while ($counter <br 10);



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

// echo (int)((mktime(0,0,0,11,6,2021) - time()) / 86400) . " Days til the next b-day";

// set timezone
// date_default_timezone_set('Europe/Vilnius');
// echo date('H:i:s a');

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

//? include and require, include_once and require_once difrences

//? CLASSES
// check Folder Classes and files Person.php and Student.php for basics


// inhereted functionalilty
// $student = new Student('Lukas', 30, 100000, 0624530);
// echo $student->name . BR;
// echo $student->studentId . " students ID" . BR;
// echo $student->getSalary() . " students salary" ;

// $person1 = new Person('Rimas', 28, null); //  instace Object 
// echo $person1->name . " Age". BR;
// echo $person1->age . " Name" . BR;
// echo $person1->getSalary() . " Salary". BR;
// $person1->setSalary(100);
// echo $person1->getSalary() .  " New Salary" . BR;
// echo '<pre>'; echo var_dump($person1); echo '</pre>';


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
// interface newInterfaceClass {
//   public function interfaceFunction();
// }
// class A implements newInterfaceClass {
//   public function interfaceFunction();
//   public function string()  {
//     echo 'This is class A';
//   }
// }
// class B  implements newInterfaceClass {
//   public function interfaceFunction();
//   public function string() {
//     echo 'This is class B';
//   }
// }

// $aClass = new A;
// $bClass = new B;
// echo $aClass->string();
// echo "<br>";
// echo $bClass->string();

// $newObj = new A;

// example interface 2
// interface ShapeInterface {
//   public function draw();
//   public function color();
//   public function reDraw();
// }
// class Circle implements ShapeInterface {
//   public function draw(){}
//   public function color(){}
//   public function reDraw(){}
// }
// class Square implements ShapeInterface {
//   public function draw(){}
//   public function color(){}
//   public function reDraw(){}
// }
// class Line implements ShapeInterface {
//   public function draw(){}
//   public function color(){}
//   public function reDraw(){}
// }
// class Painter {
//   public function addShape(ShapeInterface $shape) {
//     return $shape->draw();
//   }
// }

// $shape = new Circle();
// $artist = new Painter();
// $artist->addShape($shape);

// example interface 3
// interface StndardPaymentInterface{
//   public function pay();
// }
// interface FraudCheckInterface {
//   public function fraudCheck();
// }
// interface ThreeDSecureCheck {
//   public function ThreeDCheck();
// }
// interface PaymentProcessInterface {
//   public function process();
// }
// class PayFee implements StndardPaymentInterface, ThreeDSecureCheck, PaymentProcessInterface {
//   public function pay(){}
//   public function ThreeDCheck(){}
//   public function process(){
//     $this->ThreeDCheck();
//     $this->pay();
//   }
// }
// class WorldFee implements StndardPaymentInterface, PaymentProcessInterface {
//   public function pay(){}
//   public function process(){
//     $this->pay();
//   }
// }
// class MintFee implements StndardPaymentInterface, PaymentProcessInterface, FraudCheckInterface  {
//   public function pay(){}
//   public function fraudCheck(){}
//   public function process(){
//     $this->fraudCheck();
//     $this->pay();
//   }
// }
// class PaymentGateWay {
//   public function takePayment(PaymentProcessInterface $paymentType){
//     $paymentType->process();
    
//   }
// }

// $paymentType = new MintFee();
// $getWay = new PaymentGateWay();
// $getWay->takePayment($paymentType);
