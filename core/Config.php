<?php

namespace Core;
use App\Libs\DB;
/**
 * Application configuration
 *
 * PHP version 5.4
 */
class Config
{

    private $activeTheme;
    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'mvc';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'root';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'secret';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;    
    
    /**
     * Theme directory and name space
     * @var boolean
     */
    // const THEME_ROOT = file_build_path("app", "Themes");



}
