<?php

/**
 * Configrations index.php file .
 * all main fonfigration is here 
 * @package name Routes
 * @since MVC (1.0.0)
 * PHP Version 7.5
 */
require_once(__DIR__ . '/vendor/autoload.php');
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\Debug\DebugClassLoader;

/* ---------------Enable debug show error-----------------*/
Debug::enable();
ErrorHandler::register();
ExceptionHandler::register();
DebugClassLoader::enable();

if (ISAPP === "admin") {
    /** @param string Global parameter name is admin loding admin*/
    $router = new Core\Router();
} elseif (ISAPP === "api") {
    /** @param string Global parameter name is api loding api*/
    $router = new Core\Router();
} elseif (ISAPP === "web") {
    /** @param string Global parameter name is web loding web*/
    $router = new Core\Themerouter();
} else {
    exit;
}

require 'routes.php';
$router->dispatch($_SERVER['QUERY_STRING']);
