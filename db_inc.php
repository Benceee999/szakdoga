<?php

class DB {

    private $servername = "localhost";
    private $username = "c31hbencedbu";
    private $password = "mJaTyh!D52";
    private $dbname = "c31hbencedb";

    /* private $servername = "localhost";
    private $username = "Bencee999";
    private $password = "E(NN(!YKO-tRqSwt";
    private $dbname = "szakdoga"; */ 


    private $conn;

    function __construct() {
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $this->conn = $conn;
    }

    /**
     * 
     */
    public function dbSelect($sql) {
        if($result = $this->conn->query($sql)) {
            if ($result->num_rows > 0) {
                return $result; 
              }
              else {
                  return NULL;
              }
        }
        elseif($this->conn->error) {
            die("SQL hiba: " . $this->conn->error);
        }
    }
    public function dbInsert($sql) {
		if($this->conn->query($sql) === true) {return null;}
		else {
			return 'Nem jó.';
		}
	}
    public function dbUpdate($sql){
        if ($this->conn->query($sql) === true) {return null;}
        else {
            echo "nem jó";
        }
    }
}


?>