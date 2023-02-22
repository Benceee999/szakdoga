<?php

require 'modell/belepes.php';
$szemely = new Szemely($db);

$osztalyPeldany = new Osztaly($osztaly, $db);

$osztalyok = $osztalyPeldany->getAll($db);

$eredmenySzovegek = array(
    "Nincs ilyen felhasználónév",
    "Sikertelen belépés: hibás jelszó!",
    "Sikeres belépés"
);

$eredmeny = "";

$action = $_REQUEST['action'] ?? "";

switch ($action) {
    case 'kilepes':
        session_unset();
        $eredmeny = "Sikeres kilépés";
    break;

    case 'belepes':
        if(isset($_POST['felhnev']) && isset($_POST['jelszo'])) {
            $login = $szemely->checkLogin($_POST['felhnev'],$_POST['jelszo']);
            $eredmeny = $eredmenySzovegek[$login];
        }
    break;
}

    /* case 'feltoltes':
        $target_dir = "uploads/";
        $target_file = $target_dir . $_SESSION['id'].".jpg";

        if (move_uploaded_file($_FILES["profilkep"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["profilkep"]["name"])). " has been uploaded.";
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    break;

    case 'kereses':
        if(isset($_POST['keresettNev'])) {
            if(strlen($_POST['keresettNev']) < 3) {
                $hiba = "<h2>Írj be legalább 3 karaktert a kereséshez!</h2>";
            }
            else {
                $talalatok = $szemely->nevetKeres($_POST['keresettNev']);
            }
        }
        $view = 'view/felhasznalo/lista.php';
    break;

    case 'ajaxkereses':
        $talalatok = "";
        if(isset($_GET['keresettNev'])){
            if(strlen($_GET['keresettNev'])>0){
                $talalatok = $szemely-> nevetKeres($_GET['keresettNev']);
            }
        }
        //print_r($talalatok);
        foreach($talalatok as $key => $val){
            echo "<a href = \"index.php?szemelyId=".$key."\" class=\"list-group-item list group-item-action\">".$val."</a>";
        }
        exit;
    break;
}

if($action != 'kereses') {
    if(!isset($_SESSION['id'])) $view = 'view/felhasznalo/belepes.php';
    else $view = 'view/felhasznalo/feltoltes.php';
} */

require $view;
?>