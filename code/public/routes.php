<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'aboutus' => 'controllers/aboutus.php',
//     'contacts' => 'controllers/contacts.php',
//     'tasks' => 'controllers/add-tasks.php'
// ]);

$router->get('', 'PagesController@home');
$router->get('aboutus', 'PagesController@about');
$router->get('contacts', 'PagesController@contact');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');
