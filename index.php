<?php

session_name('my_session');
session_start();

require 'db_inc.php';
$db = new DataBase();


$page = $_REQUEST['page'] ?? "index";

$controllerFile = 'controller/'.$page.'.php';

if(file_exists($controllerFile)) {
    require $controllerFile;
}
// Generate a session ID based on the current URL
$session_id = md5($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

$_SESSION['session_id'] = $session_id;
    ?>