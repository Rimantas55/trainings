<?php
// echo APPROOT;
// echo "<br>";
// echo URLROOT;
// echo "<br>";
// echo SITENAME;

echo '<pre>'; echo var_dump($data); echo '</pre>';

foreach ($data['users'] as $user) {
  echo "information: " . $user->user_name . " " . $user->user_email; 
  echo "<br>";
}


?>