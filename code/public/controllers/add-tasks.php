<?php



//var_dump($app);
$task = $_POST['task'];
//var_dump($task);

//$app['database']->storeTask($task);
App::get('database')->storeTask("todos",  ["item" => $task]);
//echo "you have reached add task php";
// var_dump($_POST['task']);
header('Location: /');
