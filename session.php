<?php

//https://www.youtube.com/watch?v=jort8_4U-88
// you should start session on every page in header
//session must starts before any php code
session_start() . "<br>";
echo session_id();

// count how many times visit the page, on refpresh it will change
// short version
/*$_SESSION['counter'] ??=0;
$_SESSION['counter']++;
*/

if (isset($_SESSION['counter'])) {
  $_SESSION['counter']++;
} else {
  $_SESSION['counter'] = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>You have visitied web site: <?= $_SESSION['counter'] ?> times</h3>
</body>
</html>