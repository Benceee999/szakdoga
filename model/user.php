<?php

require_once 'db_inc.php';

class User{

    private $ID;
    private $username;
    private $szintID;
    private $password;
    private $db;

    function __construct($db){
        $this->db=$db;
    }

    public function checkLogin($username, $password) {
        $sql = "SELECT * FROM felhasznalok WHERE Felhasznalonev = '".$username."'";
        // van ilyen felhasználó?    
        if($result = $this->db->dbSelect($sql)) {
            if($row = $result->fetch_assoc()) {
                if($row['Jelszo'] == md5($password)) {
                    $eredmeny = 2; // Sikeres belépés
                    $_SESSION["nev"] = $row['Nev'];
                    $_SESSION["id"] = $row['ID'];
                    $_SESSION["jog"] = $row['Jog'];
                    $_SESSION["jelszo"] = $row['Jelszo'];
                    $_SESSION["telefon"] = $row['Telefon'];
                    $_SESSION["email"] = $row['email'];
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