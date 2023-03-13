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
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#korlevel">Körlevél írása</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active ujesemeny" id="ujesemeny">

                                    <h5 class="card-title">Új körlevél írása</h5>

                                    <div class="row mb-3">
                                        <label for="bedatum" class="col-md-4 col-lg-3 col-form-label">Körlevél tárgya</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="bedatum" type="text" class="form-control" id="bedatum"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="hibabe" class="col-md-4 col-lg-3 col-form-label">Körlevél szövege</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="hibabe" type="text" class="form-control" id="hibabe" rows="5" required></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Feltöltés</button>
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