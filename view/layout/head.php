<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <?php

    //if-else el átalakítani az egészet
    if(isset($_SESSION['id'])){
            echo '
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>';
            if($_SESSION['jelszo'] == "Alap123"){
              echo '<script>Alert(Kérem változtasson jelszót!)</script>
                  <a class="nav-link" href="index.php?page=profil">Profil</a>
                ';}else{
                  echo '
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Kezdőlap <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=esemenyek">Gépjármű be- és kiléptetés</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Esemény kezelés</a>
                </li>
              </ul>

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menu
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <form class="px-4 py-3" action="" method="post">
                        <div class="form-group">
                          <a class="nav-link" href="#">profil</a>
                          <a class="nav-link" href="#">Valami</a>';}
                          if($_SESSION['jog'] == "1" || $_SESSION['jog'] == "2"){
                          echo '
                          <a class="nav-link" href="index.php?page=admin">Admin</a>';
                          }
                            echo'
                              <a class="nav-link" href="index.php?page=index&action=logout" role="button">
                                Kijelentkezés
                              </a>
                            </div>
                    </form>
                </div>
                    

                          ';
}else{
    echo '
    <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Kezdőlap <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Jelentkezés</a>
            </li>
          </ul>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bejelentkezés
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <form class="px-4 py-3" action="index.php" method="post">
                <div class="form-group">
                    <label for="username">Felhasználónév</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Felhasználónév">
                </div>
                <div class="form-group">
                    <label for="password">Jelszó</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Jelszó">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Bejelentkezés</button>
                <br>
                <a class="form-group" href="#">Elfelejtett jelszó</a>
                <input type="hidden" name="action" value="login">
                <input type="hidden" name="page" value="index">
            </form>
        </div>
    ';
    //print_r($_SESSION['id']);
}
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
</header>