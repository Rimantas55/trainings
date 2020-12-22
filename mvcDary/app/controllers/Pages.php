<?php 

class Pages {

  public function __construct()
  {
    echo 'hello  from Pages controller construct method - loaded' . "<br>";
    
  }

  public function index() 
  {
    echo "Home Page - render from Pages class from index method" . "<br>";
  }

  public function about() 
  {
    echo "About Page - render from Pages class from about method" . "<br>";
  }
}