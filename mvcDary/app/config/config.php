<?php 


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mvcframework');

// echo __DIR__ . "<br>";
// echo dirname(__FILE__) . "<br>";
// APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

// URLROOT (Dynamic links)
// you can delete http:// if you want   localhost/Trainings/mvcDary
define('URLROOT', dirname('http://localhost/Trainings/mvcDary'));
// <a href="localhost/Trainings/mvcDary">
// <a href="URLROOT"> use this

// sitename
define('SITENAME', 'MVC Framework');