<?php

namespace App\Extensions;

/**
 * Configrations Plugin module file file .
 * all main fonfigration is here 
 * Please dot edit anay thing 
 * @package name Module
 * @since MVC (1.0.0)
 * PHP Version 7.5
 *
 * @param urt http://localhost:8080/phpmvc/admin/plugin/myts
 * @param array $args  Associative array of data to display in the view (optional)
 *
 * @return void
 */
class Module extends \Core\Controller
{


    public function myts()
    {

        \Core\Moduleview::make("Paypal/index");
    }
    public function Mypost()
    {

        \Core\Moduleview::make("Post/index");
    }
}