<?php 

class Pages extends Controller {

  public function __construct()
  {
    echo 'hello  from Pages controller construct method - loaded' . "<br>";
    
    
  }

  public function index() 
  {
    $data = [
      'title' => 'Home page',
      'name'=> 'Lebron James'
    ];
    // echo "Home Page - render from Pages class from index method" . "<br>";
    $this->view('pages/index', $data);
  }

  public function about() 
  {
    $this->view('pages/about');;
  }
}