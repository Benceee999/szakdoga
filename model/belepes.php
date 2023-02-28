<?php

require_once 'db_inc.php';

class Belepes{

 
    private $db;

    function __construct($db){
        $this->db=$db;
    }

    public function checkLogin($username, $password){
        $sql = "SELECT * FROM felhasznalok WHERE Felhasznalonev = '".$_POST['username']."'";
        if($result = $this->db->dbselect($sql)){
            if($row = $result->fetch_assoc()){
                if($row['userName'] == $username){
                    echo $username;
                    if($row['userPassword'] == md5($password)){
                        $loginResult = 2 ;
                        $_SESSION["username"] = $row['userName'];
                        $_SESSION["id"] = $row['userID'];
                    }
                    else{
                        $loginResult = 1 ;
                    }
                }
                else{
                    echo "Wrong username.";
                }
            }
        }
        else{
            $loginResult = 0; 
        }
        return $loginResult;
    }
    
}
?>