<?php

require_once 'db_inc.php';

class Belepes {
    
    private $szemelyId;
    private $nev;

    private $db;

    function __construct($db) {
        $this->db = $db;
    }

public function checkLogin($felhNev, $jelszo) {
        $sql = "SELECT * FROM felhasznalok WHERE Felhasznalonev = '".$felhNev."'";
        // van ilyen felhasználó?    
        if($result = $this->db->dbSelect($sql)) {
            if($row = $result->fetch_assoc()) {
                // jó ez a jelszó hozzá?
                if($row['Jelszo'] == md5($jelszo)) {
                    $eredmeny = 2; // Sikeres belépés
                    $_SESSION["nev"] = $row['nev'];
                    $_SESSION["id"] = $row['szemelyId'];
                }
                else {
                    $eredmeny = 1; // Sikertelen belépés: hibás jelszó!
                }
            }
        }
        else {
            $eredmeny = 0; // Nincs ilyen felhasználónév
        }
        return $eredmeny;
    }
}
?>