<?php 
require_once(__DIR__ . '/vendor/autoload.php');
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\Debug\DebugClassLoader;

Debug::enable();
ErrorHandler::register();
ExceptionHandler::register();
DebugClassLoader::enable();

//******** GLOBAL REQUEST VARIAVLE********* */
// $GLOBALS['Request']=Request::createFromGlobals();

// if (ISADMIN=="admin") {
//     $router = new Libs\Router();
// }
// else{
//     $router = new Libs\Themerouter();
// }

$router = new Core\Router();

require 'routes.php';
$router->dispatch($_SERVER['QUERY_STRING']);

