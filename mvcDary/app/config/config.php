<?php 


define('DB_HOST', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');

// echo __DIR__ . "<br>";
// echo dirname(__FILE__) . "<br>";
// APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

// URLROOT (Dynamic links)
// you can delete http:// if you want   localhost/Trainings/mvcDary
define('URLROOT', dirname('localhost/Trainings/mvcDary'));
// <a href="localhost/Trainings/mvcDary">
// <a href="URLROOT"> use this

// sitename
define('SITENAME', 'MVC Framework');