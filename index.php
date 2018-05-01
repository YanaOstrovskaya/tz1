<?php 
session_start();
require_once 'libs/config.php';


require_once 'libs/model.php';
require_once 'libs/router.php';
require_once 'libs/controller.php';
require_once 'libs/view.php';

Router::run();
 







