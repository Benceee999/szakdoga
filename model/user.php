<?php

require_once 'db_inc.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once('PHPMailer/src/PHPMailer.php');
require_once('PHPMailer/src/Exception.php');
require_once('PHPMailer/src/SMTP.php');

class User
{

    private $ID;
    private $username;
    private $szintID;
    private $password;
    private $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    public function checkLogin($username, $password)
    {
        $sql = "SELECT * FROM felhasznalok WHERE Felhasznalonev = '" . $username . "'";
        // van ilyen felhasználó?    
        if ($result = $this->db->dbSelect($sql)) {
            if ($row = $result->fetch_assoc()) {
                if ($row['Jelszo'] == md5($password)) {
                    $eredmeny = 2; // Sikeres belépés
                    $_SESSION["nev"] = $row['Nev'];
                    $_SESSION["id"] = $row['ID'];
                    $_SESSION["jog"] = $row['Jog'];
                    $_SESSION["jelszo"] = $row['Jelszo'];
                    $_SESSION["telefon"] = $row['Telefon'];
                    $_SESSION["email"] = $row['email'];
                } else {
                    $eredmeny = 1; // Sikertelen belépés: hibás jelszó!
                }
            }
        } else {
            $eredmeny = 0; // Nincs ilyen felhasználónév
        }
        return $eredmeny;
    }
    public function newuser($felhneve, $fullnev, $emailcim){
        $sql = "INSERT INTO felhasznalok (ID, Felhasznalonev, Nev, Telefon, email, Jog, Jelszo) VALUES (NULL,'$felhneve','$fullnev', NULL, '$emailcim', 'User','".md5("Alap123")."')";
        $result = $this->db->dbinsert($sql);
        /* echo "sikeres hozzáadás"; */
    }

    public function sendmail($emailcim,$fullnev, $felhneve) {
        $link = '<a href="banki13.komarom.net/bence">banki13.komarom.net/bence</a>';
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->CharSet = "UTF-8";
    $mail->Encoding = 'base64';
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'banki13hbence@gmail.com';                     //SMTP username
    $mail->Password   = 'jfmkkupbgwzdbwlk';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPSecure = "ssl";
    $mail->setLanguage('hu', '/optional/path/to/language/directory/');

    //Recipients
    $mail->setFrom('banki13hbence@gmail.com', 'banki13.hbence');
    $mail->addAddress($emailcim);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Felvétel';
    $mail->Body    = "Kedves ".$fullnev." <br>
                    Felvételre került a ".$link." rendszerébe <br>
                    A bejelentkezéshez használható felhasználóneve:".$felhneve." <br>
                    A jelszava: Alap123 <br>
                    Kérjük a jelszavát mielőbb változtassa meg";
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }
}

    
?>