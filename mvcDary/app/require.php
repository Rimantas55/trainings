<?php
  // require libraries from folder libraries
  // connects all libraries files with public/index.php
  require_once 'libraries/Core.php';
  require_once 'libraries/Controller.php';
  require_once 'libraries/Database.php';

  require_once 'config/config.php';

  // Instantiate Core class
  $init = new Core();