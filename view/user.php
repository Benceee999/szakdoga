<?php
    if(isset($_SESSION['id'])){
            echo '
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

    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <form class="px-4 py-3" action="" method="post">
                <div class="form-group">
                  <a class="nav-link" href="#">profil</a>
                  <a class="nav-link" href="#">Valami</a>
                  <a class="nav-link" href="index.php?page=index&action=logout"  role="button">
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
                <input type="hidden" name="action" value="login">
                <input type="hidden" name="page" value="index">
            </form>
        </div>
    ';
    //print_r($_SESSION['id']);
}