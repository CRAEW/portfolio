<?php

// Class to extract information from url and call upon proper methods
class Application 
{

    protected $controller = 'portfolioController';
    protected $action = 'index';
    protected $params = [];


    public function __construct() 
    {
        $this->prepareURL();

        // Check if CONTROLLER exists, if not create object of that controller
        $controllerFile = strtolower(CONTROLLER . $this->controller . '.php');

        if(file_exists($controllerFile))
        {
            // Create object of Class HomeController
            $this->controller = new $this->controller;

            if(method_exists($this->controller,$this->action))
            {
                call_user_func_array([$this->controller,$this->action],$this->params);
            }
        }

    }

    protected function prepareURL() {
        $request = trim($_SERVER['REQUEST_URI'], '/');

        if(!empty($request))
        {
            $url = explode('/', $request);
            // If the 1st url element is set add the controller to it
            $this->controller = isset($url[0]) ? $url[0].'Controller' : 'portfolioController';
            // add 2nd element of the url is set, use that, otherwise use index
            $this->action = isset($url[1]) ? $url[1] : 'index';
            // unset the url array in th url, because the parameters are set 
            unset($url[0], $url[1]);
            // If the url array is not empty use the values
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }

}


?>