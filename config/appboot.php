<?php 

use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');

// this is root url
define( 'ROOT', $_ENV['APPLICATION_URL']);
define( 'DS', DIRECTORY_SEPARATOR);
// this code update tomoro variable name come from database
// define( 'THEME', $_ENV['APPLICATION_URL']);
//Check admin
$isAdmin=explode("/",$_SERVER['QUERY_STRING']);
if ($isAdmin[0]=="admin") {
    define( 'ISADMIN', "admin");
}else{
    define( 'ISADMIN', "web");
}

// this is database informations 
define( 'HOST', $_ENV['HOST'] );
define( 'DB', $_ENV['DB'] );
define( 'USER', $_ENV['USER'] );
define( 'PASSWORD', $_ENV['PASSWORD'] );
define( 'DRIVER', $_ENV['DRIVER'] );
define( 'CHARSET', $_ENV['CHARSET'] );
define( 'COLLATION', $_ENV['COLLATION'] );
define( 'PREFIX', $_ENV['PREFIX'] );
// create path genarate by os and mac , windows
function file_build_path(...$segments) {
    return join(DS, func_get_args($segments));
}