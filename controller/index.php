<?php

require 'model/user.php';
$user = new User($db);

$eredmeny = "";

$action = "";

$action = $_REQUEST['action'] ?? "";

$eredmenySzovegek = array(
    "Nincs ilyen felhasználónév",
    "Sikertelen belépés: hibás jelszó!",
    "Sikeres belépés"
);

switch ($action) {
    case 'logout':
        session_unset();
        $loginResult = "Sikeres kijelentkezés";
        break;

    case 'login':
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $login = $user->checkLogin($_POST['username'], $_POST['password']);
            $eredmeny = $eredmenySzovegek[$login];
        }
        break;
    case 'feltoltes':
            $target_dir = "assets/";
            $target_file = $target_dir . $_SESSION['id'].".jpg";
    
            if (move_uploaded_file($_FILES["profilkep"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["profilkep"]["name"])). " has been uploaded.";
            } 
            else {
                echo "Sorry, there was an error uploading your file.";
            }
        break;
}

require 'view/index.php';
?>