<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'aboutus' => 'controllers/aboutus.php',
//     'contacts' => 'controllers/contacts.php',
//     'tasks' => 'controllers/add-tasks.php'
// ]);

$router->get('', 'controllers/index.php');
$router->get('aboutus', 'controllers/aboutus.php');
$router->get('contactus', 'controllers/contactus.php');
$router->post('tasks', 'controllers/add-tasks.php');
