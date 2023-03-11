<main id="main" class="main">

    <section class="section profile">
        <div class="row">

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Felhasználó hozzáadása</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">
                            <form method="post" name="myemailform" action="form-to-email.php">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <h5 class="card-title">Jelentkezés munkára</h5>

                                    <div class="row mb-3">
                                        <label for="fullnev" class="col-md-4 col-lg-3 col-form-label">Teljes név</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="fullnev" type="text" class="form-control" id="fullnev"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="emailcim" class="col-md-4 col-lg-3 col-form-label">Email-cím</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="emailcim" type="email" class="form-control" id="emailcim"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="telefon"
                                            class="col-md-4 col-lg-3 col-form-label">Telefonszám</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="telefon" type="text" class="form-control" id="telefon"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="cv" class="col-md-4 col-lg-3 col-form-label">Önéletrajz</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="cv" type="text" class="form-control" id="cv" required>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="jelentkezes" class="btn btn-primary">Jelentkezés</button>
                                    </div>

                                </div>
                            </form>


                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
        </div>
    </section>

</main><!-- End #main -->