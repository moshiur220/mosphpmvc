<?php

namespace App\Controllers\Admin;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 5.4
 */
class Dashboard extends \Core\Controller
{

    public function index(){
        View::make('Dashboard/index');
    }

}