<?php

namespace App\Libs;

/**
 * Application configuration
 *
 * PHP version 7.4
 */
class Config
{

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
     * @var string this is theme root DIR
     */
    const THEME_ROOT = file_build_path("app", "Themes",THEME);

}
