<?php

namespace Core;
/**
 * Configrations Moduleview file .
 * all main fonfigration is here 
 * Please dot edit anay thing 
 * @package name Routes
 * @since MVC (1.0.0)
 * PHP Version 7.5
 */
class Moduleview
{

    /**
     * Render a view file
     *
     * @param string $view  The view file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function make($view, $args = [])
    {
        extract($args, EXTR_SKIP);

       // $file = "../resources/Views/$view";  // relative to Core directory
        // $file = "resources/Views/$view.php";  // relative to Core directory
        $file = "app/Extensions/$view.php";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }

    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file ="app/Extensions/$view.php";  // relative to Core directory
       // $file = "../resources/Views/$view.php";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }

}