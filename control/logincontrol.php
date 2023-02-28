<?php

    require 'model/belepes.php';
    $belepes= new Belepes($db);

    $loginResult = "";

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
            $login = $belepes->checkLogin($_POST['username'], $_POST['password']);
            $eredmeny = $eredmenySzovegek[$login];
            }
        break;
    }