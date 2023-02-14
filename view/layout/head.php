<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Kezdőlap <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gépjármű be- és kiléptetés</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Esemény kezelés</a>
      </li>
    </ul>
<?php

require_once 'modell/db_inc.php';

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM felhasznalok";
    $result = mysqli_query($conn, $query);

    $query = "SELECT * FROM felhasznalok WHERE Felhasznalonev='$username' AND Jelszo='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Hello World!');</script>";
        echo "<script>document.getElementById('username').value = '';</script>";
        echo "<script>document.getElementById('password').value = '';</script>";
    } else {
        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM felhasznalok WHERE Felhasznalonev='$username'")) == 0) {
            echo "<script>alert('Hibás felhasználónév!');</script>";
        } else {
            echo "<script>alert('Hibás jelszó!');</script>";
        }
    }
}
?>
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bejelentkezés
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <form class="px-4 py-3" action="" method="post">
                <div class="form-group">
                    <label for="username">Felhasználónév</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Felhasználónév">
                </div>
                <div class="form-group">
                    <label for="password">Jelszó</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Jelszó">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Bejelentkezés</button>
            </form>
        </div>
  </div>
</nav>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>