<main id="main" class="main">

    <section class="section profile">
      <div class="row">

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Felhasználó hozzáadása</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Felhasználók kezelése</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                  <h5 class="card-title">Új felhasználó felvétele</h5>
                  <?php
                  echo '
          
                  <div class="row mb-3">
                  <label for="felhneve" class="col-md-4 col-lg-3 col-form-label">Felhasználónév</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="text" type="text" class="form-control" id="felhneve" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullnev" class="col-md-4 col-lg-3 col-form-label">Teljes név</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullnev" type="text" class="form-control" id="fullnev" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="emailcim" class="col-md-4 col-lg-3 col-form-label">Email-cím</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="emailcim" type="text" class="form-control" id="emailcim" required>
                  </div>
                </div>

                <div class="text-center">
                      <button type="submit" class="btn btn-primary">Felhasználó hozzáadása</button>
                    </div>
              '
                    ?>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <?php
                  echo '
              <form>
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="assets/img/profile-img.jpg" alt="Profile">
                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                  </div>
                </div>

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


                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
              </form><!-- End Profile Edit Form -->
              '
                    ?>
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->