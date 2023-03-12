<!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  ======================================================== -->


<head>

  <title>Users / Profile - NiceAdmin Bootstrap Template</title>
</head>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Profile</h1>
    <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav> -->
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <?php

            if (file_exists('assets/img/'.$_SESSION['id'].'.jpg')) {
              echo '<img class="rounded-circle" src="assets/img/'.$_SESSION['id'].'.jpg">';
            }
            else {
              echo '<img class="rounded-circle" src="assets/img/default.jpg">';
            }
            echo '
            
              <h2> ' . $_SESSION['nev'] . ' </h2>
              <h3> ' . $_SESSION['jog'] . ' </h3>
              '
              ?>
          </div>
        </div>

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profil
                  adatok</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Profil
                  szerkeszétes</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Jelszó
                  változtatás</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <h5 class="card-title">Profil adatok</h5>
                <?php
                echo '
              
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Teljes név</div>
                    <div class="col-lg-9 col-md-8">' . $_SESSION['nev'] . '</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jog</div>
                    <div class="col-lg-9 col-md-8">' . $_SESSION['jog'] . '</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Telefonszám</div>
                    <div class="col-lg-9 col-md-8">' . $_SESSION['telefon'] . '</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">' . $_SESSION['email'] . '</div>
                  </div>
                  '
                  ?>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->

                <form action="?action=feltoltes" method="post" enctype="multipart/form-data">
                  <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9">
                      <div class="pt-2">
                          Profilkép feltöltése: <br>
                          <!-- <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image" ><i class="bi bi-upload"></i></a> -->
                          <input type="file" name="profilkep" id="fileToUpload" class="btn btn-primary btn-sm"> <br>
                          <input type="submit" value="Feltöltés" name="submit" class="btn btn-primary btn-sm">
                        </form>
                      </div>
                    </div>
                  </div>

                  <?php
                  echo '
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Teljes név</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" value="' . $_SESSION['nev'] . '">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Telefonszám</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="' . $_SESSION['telefon'] . '">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="' . $_SESSION['email'] . '">
                      </div>
                    </div>
                    '
                    ?>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
              </div>

              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form><!-- End Change Password Form -->
              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->