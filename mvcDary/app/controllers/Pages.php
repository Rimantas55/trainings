<?php 

class Pages extends Controller {

  public function __construct()
  {
    // echo 'hello  from Pages controller construct method - loaded' . "<br>";
    $this->userModel = $this->model('User'); // file User
  }

  public function index() 
  {
    $users = $this->userModel->getUsers();

    $data = [
      'title' => 'Home page',
      'users'=> $users
    ];
    // echo "Home Page - render from Pages class from index method" . "<br>";
    $this->view('pages/index', $data);
  }

  public function about() 
  {
    $this->view('pages/about');;
  }
}