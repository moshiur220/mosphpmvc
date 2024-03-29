<?php
// database connections 
use Illuminate\Database\Capsule\Manager as BD;
$capsule = new BD;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => HOST,
    'database'  => DB,
    'username'  => USER,
    'password'  => PASSWORD,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => 'my_',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

?>