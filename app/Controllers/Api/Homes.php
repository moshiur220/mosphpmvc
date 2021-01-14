<?php

namespace App\Controllers\Api;

//http://localhost:8080/phpmvc/api/homes/index
/**
 * Home controller
 *
 * PHP version 5.4
 */
class Homes extends \Core\Controller
{
    private $myget;

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
        echo 'Iam form Api';

        // View::make('my/index');
    }

    /**
     * Get the value of myget
     */ 
    //https://en.wikipedia.org/wiki/Fluent_interface
    public function getMyget()
    {
        return $this->myget;
    }

    /**
     * Set the value of myget
     *
     * @return  self
     */ 
    public function setMyget($myget)
    {
        $this->myget = $myget;

        return $this;
    }
}
