<?php
/**
 * Boostrap file
 *
 * @package ManoWars
 * @author Rafael Dohms
 * @author Augusto Pascutti
 */
if ( ! defined('DS') ) {
    /**
     * Directory separator
     */
    define('DS',DIRECTORY_SEPARATOR);
}
if ( ! defined('PROJECT_ROOT') ) {
    /**
     * Root absolute path
     */
    define('PROJECT_ROOT', dirname(__FILE__));
}
if ( ! defined('LIBS_ROOT') ) {
    /**
     * Library path
     */
    define('LIBS_ROOT', dirname(__FILE__) . DS . 'libs');
}

//Define include Paths
set_include_path( "." . PATH_SEPARATOR . LIBS_ROOT );

require LIBS_ROOT . DS . 'Zend' . DS . 'Loader' . DS . 'Autoloader.php';

// Register autoload
$autoloader = Zend_Loader_Autoloader::getInstance();
$autoloader->registerNamespace(array('Zend_', 'MW_'));