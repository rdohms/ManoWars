<?php
//Define some constants
define('PROJECT_ROOT', dirname(__FILE__));
define('LIBS_ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'libs');

//Define include Paths
set_include_path( get_include_path() . PATH_SEPARATOR . LIBS_ROOT );

require LIBS_ROOT . DIRECTORY_SEPARATOR . 'Zend' . DIRECTORY_SEPARATOR . 'Loader' . DIRECTORY_SEPARATOR . 'Autoloader.php';

$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->registerNamespace(array('Zend_', 'MW_'));