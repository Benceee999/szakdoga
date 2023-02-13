<?php

// Adatbázis adatok
$host = "localhost";
$user = "c31hbencedbu";
$password = "mJaTyh!D52";
$dbname = "c31hbencedb";

// Adatbázis csatlakozás létrehozása
$conn = mysqli_connect($host, $user, $password, $dbname);

// Ha nem sikerült a csatlakozás, akkor hibát jelez
if (!$conn) {
    die("Adatbázis csatlakozás sikertelen: " . mysqli_connect_error());
}
echo "Sikeres adatbázis csatlakozás!";

// Adatbázis csatlakozás lezárása
mysqli_close($conn);

