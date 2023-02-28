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
    
    
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bejelentkezés
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <form class="px-4 py-3" action="index.php" method="POST">
                <div class="form-group">
                    <label for="username">Felhasználónév</label>
                    <input type="text" class="form-control" name="felhnev" placeholder="Felhasználónév" required>
                </div>
                <div class="form-group">
                    <label for="password">Jelszó</label>
                    <input type="password" class="form-control" name="jelszo" placeholder="Jelszó" required>
                </div>
                <input type="hidden" name="action" value="belepes">
                <input type="hidden" name="page" value="felhasznalo">
                <button type="submit" name="submit" class="btn btn-primary">Bejelentkezés</button>
            </form>
        </div>
        
  </div>
</nav>
</body>
