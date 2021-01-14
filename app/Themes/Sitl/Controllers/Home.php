<?php

namespace App\Themes\Sitl\Controllers;
use \Core\Themeview as View;
/**
 * Home controller
 *
 * PHP version 7.4
 */
class Home extends \Core\Themecontroller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function index()
    {
        View::make("index");
    }  


}