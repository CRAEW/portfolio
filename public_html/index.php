<?php

// Error handling
ini_set('display_errors',1); error_reporting(E_ALL);

  // dirname -> returns parrent directory of current parameter
  // DIRECTORY_SEPERATOR -> to run on different platforms

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Define different directories
define('APP', ROOT . 'app');
define('VIEW', ROOT . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('MODEL', ROOT . 'app' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR);
define('DATA', ROOT . 'app' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR);
define('CORE', ROOT . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);  
define('CONTROLLER', ROOT . 'app' . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR);  

// Create Array with all your paths
$modules = [ROOT,APP,CORE,CONTROLLER,DATA];
//$modules = [APP,VIEW,MODEL,DATA,CORE,CONTROLLER];

// Path inludes all paths of the projects
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));

// autoloader !ALL LOWERCASE FILENAMES IMPORTANT
spl_autoload_register('spl_autoload',false);

// Call constructor
new Application;

?>