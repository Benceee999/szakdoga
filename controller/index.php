<?php

require_once('db_inc.php');
$db = new DB();

require_once 'model/user.php';
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
        header('Location: index.php');
        break;

    case 'login':
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $login = $user->checkLogin($_POST['username'], $_POST['password']);
            $eredmeny = $eredmenySzovegek[$login];
            header('Location: index.php');
        }
        break;

    case 'feltoltes':
            $target_dir = "assets/img/";
            $target_file = $target_dir . $_SESSION['id'].".jpg";
            if (move_uploaded_file($_FILES["profilkep"]["tmp_name"], $target_file)) {
                header('Location: index.php?page=profil');
            } 
        break;

    case 'newuser':
            if(isset($_POST['felhneve']) && isset($_POST['fullnev']) && isset($_POST['emailcim'])){
                $felhneve = $_POST['felhneve'];
				$fullnev = $_POST['fullnev'];
				$emailcim = $_POST['emailcim'];

				$user->newuser($felhneve, $fullnev, $emailcim);
                $user->sendmail($emailcim,$fullnev,$felhneve);
               

                header('Location: index.php?page=felhasznalok');
            }
        break;
    case 'changeuser':
        if(isset($_POST['felhneve']) && isset($_POST['fullnev']) && isset($_POST['emailcim']) && isset($_POST['telefon'])){
            $felhneve = $_POST['felhneve'];
            $fullnev = $_POST['fullnev'];
            $emailcim = $_POST['emailcim'];
            $telefon = $_POST['phone'];

            $user->updateuser($felhneve,$fullnev,$telefon,$emailcim);
            header('Location: index.php?page=profil');
        }
        break;
}

require 'view/index.php';
?>