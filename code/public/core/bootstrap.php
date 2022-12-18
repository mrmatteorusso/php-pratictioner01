<?php

// $app = [];

// $app['config'] = require 'config.php';

// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';
// $config = require './config.php';


// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );



App::bind('config', require 'config.php');

// die(var_dump(App::get('config')));

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
