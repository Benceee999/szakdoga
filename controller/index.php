<?php

require 'model/user.php';
$user= new User($db);

$eredmeny = "";

$action = "";

$action = $_REQUEST['action'] ?? "";

$eredmenySzovegek = array(
    "Nincs ilyen felhasználónév",
    "Sikertelen belépés: hibás jelszó!",
    "Sikeres belépés"
);

switch ($action){
    case 'logout':
        session_unset();
        $loginResult = "Sikeres kijelentkezés";
    break;

    case 'login':
        if(isset($_POST['username']) && isset($_POST['password'])){
        $login = $user->checkLogin($_POST['username'], $_POST['password']);
        $eredmeny = $eredmenySzovegek[$login];
        }
    break;
}

require 'view/index.php';
?>