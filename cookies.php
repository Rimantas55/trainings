<?php
// coockies is a piece of data stored in users browwer
// - for session management, coockies saves session ID which allows
//to understand who the browser is
//  - cockies are used for personalization - amazon, you do not logged in
// you click on Samsung galaxy and nex day open amazon, and broswers suggest you that phone
// information been saved in coociked, server understands that I am previous user
// - tracking
// limitation up to 4 kb, and not good for saving sensitive information, because it can be chaked by the haker
// some sensitive information should be save in sessions probably,not in coockies
// destroy all coockies you need to set time to negative minus


// name, value, exparation coockie time from now, root path where to save
setcookie('name','TheCodeholic', time() + 60, '/');





?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>