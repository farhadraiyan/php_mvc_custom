<?php
define("ROOT", dirname(__DIR__).DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR );
define ('VIEW', APP . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define ('MODEL', APP . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR);
define ('DATA', APP . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR);
define ('CORE', APP . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
define ('CONTROLLER', APP . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR);

$modules = [ROOT, APP, CORE, CONTROLLER, DATA];

set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));

//var_dump(get_include_path());

//This autoloader will load all the class in this project
spl_autoload_register('spl_autoload', false);

#var_dump($_SERVER['REQUEST_URI']);

//cretting the application
new Application();
