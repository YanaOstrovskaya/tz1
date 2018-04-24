<?php 
require_once 'libs/config.php';

/*
require_once 'libs/model.php';
require_once 'libs/router.php';
require_once 'libs/controller.php';
require_once 'libs/view.php';
*/


/*
function __autoload($class){
require_once 'libs/'.$class.'.php';	
}
*/
//require_once 'vendor/autoload.php';


spl_autoload_register(function($class){
require_once 'libs/'.$class.'.php';
});

Router::run();
 







