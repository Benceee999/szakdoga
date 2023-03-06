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

// Append the session ID to all links and forms on the page
function append_session_id($url) {
  global $session_id;
  return $url . (strpos($url, '?') === false ? '?' : '&') . 'sid=' . $session_id;
}
ini_set('arg_separator.output', '&amp;'); // Ensure that & is encoded as &amp; in URLs
ob_start('append_session_id'); // Use output buffering to append the session ID to all links and forms
    ?>