<?php
// load the model and the view
// echo "Hello from Libraries Controller " . "<br>";
class Controller 
{
  public function model($model) // if we want to load post or shop model
  {
    // require model file
    require_once '../app/models' . $model . '.php';
    //instantiate model
    return new $model();
  }

  // this woll be looking for the file inside the views folder and the empty array will be basically be dynamic data
  // that we will have from the database that will be passed into the view
  // load the view (checks for the view file)
  public function view($view, $data = []) 
  {
    // check for the views file
    if(file_exists('../app/views/' . $view . '.php')) {
      require_once '../app/views/' . $view . '.php';
    } else {
      die("View does not exist");
    }
  }
}
