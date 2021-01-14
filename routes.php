<?php
/**
 * Configrations Route there are three type of and all are defaulte router .
 * all Routes you can add new routes here
 * @package name Routes
 * @since MVC (1.0.0)
 *
 * @param string web     The domain defaulte URL for WEB.
 * @param string admin   The domain admin URL for ADMIN.
 * @param string api   The domain api URL for API.
 * @param any user paramiter ID
 */
//************************************ The domain defaulte URL for WEB. ***************************
    $router->add('', ['controller' => 'Home', 'action' => 'index']);
    $router->add('{controller}/{action}');
    $router->add('{controller}/{id:\d+}/{action}');
    $router->add('{controller}/{action}/{id:\d+}');
//************************************ The domain admin URL for ADMIN. ***************************
    $router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
    $router->add('admin/{controller}/{id:\d+}/{action}', ['namespace' => 'Admin']);
    $router->add('admin/{controller}/{action}/{id:\d+}', ['namespace' => 'Admin']);    
//************************************ The domain api URL for API. ***************************
    // $router->add('api', ['controller' => 'Home', 'action' => 'index'],['namespace' => 'Api']);
    $router->add('api/{controller}/{action}', ['namespace' => 'Api']);
    $router->add('api/{controller}/{id:\d+}/{action}', ['namespace' => 'Api']);
    $router->add('api/{controller}/{action}/{id:\d+}', ['namespace' => 'Api']);