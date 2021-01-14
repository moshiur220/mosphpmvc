<?php

/**
 * Configrations main file .
 * all main fonfigration is here 
 * Please dot edit anay thing 
 * @package name Routes
 * @since MVC (1.0.0)
 * PHP Version 7.5
 */

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

// this is root url
define('ROOT', $_ENV['APPLICATION_URL']);
/** @param string Application Root app Url*/
define('DS', DIRECTORY_SEPARATOR);
/** @param string DIRECTORY_SEPARATOR*/
// create path genarate by os and mac , windows
function file_build_path(...$segments)
{
    return join(DS, func_get_args($segments));
}

$isAdmin = explode("/", $_SERVER['QUERY_STRING']);
if ($isAdmin[0] === "admin") {
    define('ISAPP', "admin");
    /** @param string admin it is loding admin panel */
} else if ($isAdmin[0] === 'api') {
    define('ISAPP', "api");
    /** @param string api it is loding api panel */
} else {
    define('ISAPP', "web");
    /** @param string api it is loding defaulte active theme */
}
// this is database informations 
define('HOST', $_ENV['HOST']);
/** @param string database host name */
define('DB', $_ENV['DB']);
/** @param string database name */
define('USER', $_ENV['USER']);
/** @param string database user name */
define('PASSWORD', $_ENV['PASSWORD']);
/** @param any database password */
define('DRIVER', $_ENV['DRIVER']);
/** @param string database driver name defaulte mysql */
define('CHARSET', $_ENV['CHARSET']);
/** @param string database CHARSET name defaulte utf8*/
define('COLLATION', $_ENV['COLLATION']);
/** @param string database COLLATION name defaulte utf8_unicode_ci*/
define('PREFIX', $_ENV['PREFIX']);
/** @param string database PREFIX name defaulte null*/
//************************************ here is include all require files ************************************
/** @return string include database confirations file*/
$database = file_build_path("config", "database.php");
if (file_exists($database)) {
    require $database;
}

/** @return string this parametter return acrrent active themes dir name*/

use App\Libs\DB;

$activeTheme = DB::table('settings')->where('settingName', 'active_theme')->first();
/** @param string Theme Dir name*/
define('THEME_DIR', $activeTheme->settingValue);
/** @param string Theme root  Dir name*/
define('THEME_ROOT', file_build_path("app", "Themes",$activeTheme->settingValue,""));

/** @return string include appboot confirations file*/
$appboot = file_build_path("config", "appboot.php");
if (file_exists($appboot)) {
    require $appboot;
}
