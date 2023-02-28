<?php

    require 'model/belepes.php';
    $belepes= new Belepes($db);

    $loginResult = "";

    $action = "";

    $action = $_REQUEST['action'] ?? "";

    $loginReaction = array(
        "Rossz felhasználónév",
        "Rossz jelszó",
        "Sikeres bejelentkezés",
    );

    switch ($action){
        case 'logout':
            session_unset();
            $loginResult = "Sikeres kijelentkezés";
        break;

        case 'login':
            if(isset($_POST['username']) && isset($_POST['password'])){

            $login = $user->checkLogin($_POST['username'], $_POST['password']);

            $loginResult = $loginReaction[$login];

            echo $loginResult . "<br>";
            }
        break;
    }