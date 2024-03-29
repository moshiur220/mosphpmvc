<?php

namespace Core;

/**
 * View
 *
 * PHP version 5.4
 */
class View
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
        $file = "resources/views/$view.php";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }

    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = "resources/views/$view";  // relative to Core directory
       // $file = "../resources/Views/$view.php";  // relative to Core directory

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }
}
