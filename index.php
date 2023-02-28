<?php

session_start();

require 'db_inc.php';
$db = new DataBase();


$page = $_REQUEST['page'] ?? "index";

$controllerFile = 'control/'.$page.'.php';

if(file_exists($controllerFile)) {
    require $controllerFile;
}

?>