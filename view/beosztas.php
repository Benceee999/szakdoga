<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
                                        data-bs-target="#ujesemeny">Beosztás listája</button>
                                </li>
                                <?php
                                if ($_SESSION['jog'] == 'Admin' || $_SESSION['jog'] == 'vezető') {
                                    echo '
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#korabbiesemeny">Beosztás kezelése</button>
                                </li>';
                                }
                                ?>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active ujesemeny" id="ujesemeny">

                                    <h5 class="card-title">Beosztások</h5>

                                      <!-- kilistázás -->

                                    <div class="row mb-3">
                                        <label for="bedatum" class="col-md-4 col-lg-3 col-form-label">Esemény
                                            dátuma</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="bedatum" type="date" class="form-control" id="bedatum"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="rendszam" class="col-md-4 col-lg-3 col-form-label">Esemény
                                            megnevezés</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="rendszam" type="text" class="form-control" id="rendszam"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="hibabe" class="col-md-4 col-lg-3 col-form-label">Jegyzőkönyv</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="hibabe" type="text" class="form-control" id="hibabe"
                                                rows="5" required>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Feltöltés</button>
                                    </div>

                                </div>

                                <div class="tab-pane fade korabbiesemeny pt-3" id="korabbiesemeny">

                                    <div class="tab-pane fade show active korabbiesemeny" id="korabbiesemeny">

                                        <h5 class="card-title">Korábbi események</h5>

                                        <div class="row mb-3">
                                            <label for="bedatum" class="col-md-4 col-lg-3 col-form-label">Kiléptetés
                                                dátuma</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="bedatum" type="date" class="form-control" id="bedatum"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="rendszam" class="col-md-4 col-lg-3 col-form-label">Jármű
                                                rendszáma</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="rendszam" type="text" class="form-control" id="rendszam"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="ceg" class="col-md-4 col-lg-3 col-form-label">Jármű szolgáltató
                                                cég</label>
                                            <div class="col-md-8 col-lg-9">
                                                <!-- dropdown dbből -->
                                                <input name="ceg" type="text" class="form-control" id="ceg" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="hibaki" class="col-md-4 col-lg-3 col-form-label">Esetleges
                                                hiba</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="hibaki" type="text" class="form-control" id="hibaki">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Feltöltés</button>
                                        </div>

                                    </div>
                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
</body>

</html>