<?php
  // Core App Class
  class Core {
    // if there are no any controllers in out controller folder this page will be automaticaly loaded
    protected $currentController = 'Pages'; 
    // inside Pages controller it will load index method
    protected $currentMetchod = 'index'; 
    // $currentController and $currenMethod chagnes with URL changes and we need create method to fetch that URL
    // ect localhost/projectname/shop/glasses/men/ - shop/glasses/men/ should be putted inside params, 
    // so, index0 - shop, index1 - glasses, index2 - men
    // index[0] - will stand for class name in controllers folder ect User will look for User.php in controllers folder

    // Array to store url
    protected $params = [];

    // checking if getUrl() method works and stores url to array
    public function __construct()
    {
      echo '<pre>'; echo print_r($this->getUrl()); echo '</pre>'; // for checking purpose
      $url = $this->getUrl();

        // Look in 'controllers' folder for first value, ucwords() will capitalize first letter, because classes will be named with first  capital letter 
        // Look for the right file
        if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
          // will set a new controller
          $this->currentController = ucwords($url[0]);
          unset($url[0]);
        }

        // require the controller 
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController; // initiate class

    }

    public function getUrl() 
    {
      if(isset($_GET['url'])) {
        $url = rtrim($_GET['url'], '/'); // we want to trim last slash from URL

        // allows to fillter variales as a string or number and do not allow have characters url should not have
        $url = filter_var($url, FILTER_SANITIZE_URL);

        // Breaking it into an array
        $url = explode('/', $url);
        return $url;
      }
    }
  }