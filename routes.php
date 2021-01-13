<?php
    $router->add('', ['controller' => 'Home', 'action' => 'index']);
    $router->add('{controller}/{action}');
    $router->add('{controller}/{id:\d+}/{action}');
    $router->add('{controller}/{action}/{id:\d+}');
    //************************************ this is admin route aria ***************************
    //*****************************************************************************************
    $router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
    $router->add('admin/{controller}/{id:\d+}/{action}', ['namespace' => 'Admin']);
    $router->add('admin/{controller}/{action}/{id:\d+}', ['namespace' => 'Admin']);