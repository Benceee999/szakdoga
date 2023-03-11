<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Kezdőlap</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <li class="nav-item">
    <a class="nav-link" href="index.php?page=esemenyek">
      <i class="bi bi-grid"></i><span>Eseménykezelő</span>
    </a>
  </li><!-- End Hírek Nav -->
  <li class="nav-item">
    <a class="nav-link" href="index.php?page=gepjarmu">
      <i class="bi bi-grid"></i><span>Gépjármű be- és kiléptetés</span>
    </a>
  </li><!-- End Hírek Nav -->
  <li class="nav-item">
    <a class="nav-link" href="index.php?page=beosztas">
      <i class="bi bi-grid"></i><span>Beosztás</span>
    </a>
  </li><!-- End Beosztás Nav -->


  <?php
  if($_SESSION['jog'] == 'Admin' || $_SESSION['jog'] == 'vezető'){
    echo'

    <li class="nav-heading">Vezetőségi részleg</li>

  <li class="nav-item">
    <a class="nav-link" href="index.php?page=hirek">
      <i class="bi bi-grid"></i><span>Hírek</span>
    </a>
  </li><!-- End Hírek Nav -->

  <li class="nav-item">
    <a class="nav-link" href="index.php?page=korlevel">
      <i class="bi bi-grid"></i><span>Körlevél</span>
    </a>
  </li><!-- End Körlevél Nav -->

  <li class="nav-item">
    <a class="nav-link" href="index.php?page=felhasznalok">
      <i class="bi bi-grid"></i><span>Felhasználók</span>
    </a>
  </li><!-- End Felhasználók Nav -->
</ul>
  ';
}
?>
</aside><!-- End Sidebar-->