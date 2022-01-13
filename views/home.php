<?php

require_once "../controllers/home-controller.php";
require_once "../controllers/parameters-controller.php";

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <title>Allnews</title>
</head>

<body>
    <a class="navbar-brand text-center" href="home.php">Allnews</a>
    <!-- Navbar -->
    <div class="container m-0 p-0">
        <nav class="navbar navbar-dark bg-dark fixed-top d-none d-lg-block">
            <div class="container justify-content-between my-0 p-0">
                <a class="navbar-brand" href="home.php"><img src="../assets/img/logo.png" class="img-fluid rounded imgLogo" alt="logo">Allnews</a>
                <div class="list-inline">
                    <div class="list-inline-item">
                        <button class="navbar-toggler text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <a class="navbar-brand" href="#">Menu</a>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="list-inline-item">
                            <a class="nav-link active" href="parameters.php"><i class="bi bi-gear"></i></a>
                        </div>
                    </div>

                </div>
                <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="form-check form-switch ms-auto mt-5 me-3 d-none">
                        <label class="form-check-label ms-3" for="lightSwitch">
                        </label>Dark Mode
                        <input class="form-check-input" type="checkbox" id="lightSwitch" />
                    </div>
                    <div class="offcanvas-header">
                        <h5 class="navbar-brand" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home.php">Actualité</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" value="Validation" name="validation" href="<?= isset($_COOKIE["flux1"]) ? "pages.php?flux=" . array_search($_COOKIE["flux1"], $choice) : "" ?>"><?= isset($_COOKIE["flux1"]) ? $fluxName[array_search($_COOKIE["flux1"], $choice)] : "" ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" value="Validation" name="validation" href="<?= isset($_COOKIE["flux2"]) ? "pages.php?flux=" . array_search($_COOKIE["flux2"], $choice) : "" ?>"><?= isset($_COOKIE["flux2"]) ? $fluxName[array_search($_COOKIE["flux2"], $choice)] : "" ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" value="Validation" name="validation" href="<?= isset($_COOKIE["flux3"]) ? "pages.php?flux=" . array_search($_COOKIE["flux3"], $choice) : "" ?>"><?= isset($_COOKIE["flux3"]) ? $fluxName[array_search($_COOKIE["flux3"], $choice)] : "" ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->

    <div class="mt-5">
        <h1 class="text-center title1 mt-5">Actualité</h1>
    </div>
    <div class="container d-flex justify-content-center my-0 py-0">
        <!-- CAROUSEL -->
        <div id="carouselExampleControls" class="carousel slide w-75 d-none d-lg-block" da ta-bs-ride=" carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= $rss_load1->channel->item->enclosure->attributes() ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= $rss_load2->channel->item->enclosure->attributes() ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= $rss_load3->channel->item->enclosure->attributes() ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- END CAROUSEL -->


    <div class="container my-3 pb-5">
        <div class="d-flex row justify-content-between m-0 p-0">
            <!-- FLUX1 -->

            <?php
            $nb = 1;
            foreach ($rss_load1->channel->item as $item) {
                if ($articles1 < $maxArticle) { ?>
                    <div class="card mb-3" style="max-width: 200rem;">
                        <span class="<?= $fluxColor[array_search($_COOKIE["flux1"], $choice)] ?>"></span>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= $item->enclosure->attributes() ?>" class="card-img-top h-auto" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item->title . "<br>"; ?></h5>
                                    <p class="card-text align-text-bottom"><?= utf8_encode(strftime("%A %d %B %G, %H:%M", strtotime($item->pubDate)))  . "<br>"; ?></p>
                                    <button type="button" class="btn btn-dark bg-dark" data-bs-toggle="modal" data-bs-target="#flux-<?= $nb ?>"><i class="bi bi-search"></i></button>
                                    <!-- Modal -->
                                    <div class="article modal fade" id="flux-<?= $nb ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="border bg-light modal-content">
                                                <div class="modal-body">
                                                    <div class="col">
                                                        <h2 class="card-title"><?= $item->title . "<br>"; ?></h2>
                                                        <h3 class="p-5 text-center card-text"><?= $item->description . "<br>"; ?></h3>
                                                        <a aria-current="page" href="<?= $item->guid ?>">Accéder au site</a>
                                                        <p class="p-5 card-text align-text-bottom"><?= utf8_encode(strftime("%A %d %B %G, %H:%M", strtotime($item->pubDate)))  . "<br>"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark bg-dark" data-bs-toggle="modal" data-bs-target="#flux-<?= $nb ?>">
                                                        Fermer
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                </div>
                            </div>
                        </div>
                    </div>
            <?php $articles1++;
                    $nb++;
                };
            } ?>
            <!-- END FLUX1 -->

            <?php foreach ($rss_load2->channel->item as $item) {
                if ($articles2 < $maxArticle) { ?>
                    <div class="card mb-3" style="max-width: 200rem;">
                        <span class="<?= $fluxColor[array_search($_COOKIE["flux2"], $choice)] ?>"></span>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= $item->enclosure->attributes() ?>" class="card-img-top h-auto" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item->title . "<br>"; ?></h5>
                                    <p class="card-text align-text-bottom"><?= utf8_encode(strftime("%A %d %B %G, %H:%M", strtotime($item->pubDate)))  . "<br>"; ?></p>
                                    <button type="button" class="btn btn-dark bg-dark" data-bs-toggle="modal" data-bs-target="#flux2-<?= $nb ?>"><i class="bi bi-search"></i></button>
                                    <!-- Modal -->
                                    <div class="article modal fade" id="flux2-<?= $nb ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="border bg-light modal-content">
                                                <div class="modal-body">
                                                    <div class="col">
                                                        <h2 class="card-title"><?= $item->title . "<br>"; ?></h2>
                                                        <h3 class="p-5 text-center card-text"><?= $item->description . "<br>"; ?></h3>
                                                        <a aria-current="page" href="<?= $item->guid ?>">Accéder au site</a>
                                                        <p class="p-5 card-text align-text-bottom"><?= utf8_encode(strftime("%A %d %B %G, %H:%M", strtotime($item->pubDate)))  . "<br>"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark bg-dark" data-bs-toggle="modal" data-bs-target="#flux2-<?= $nb ?>">
                                                        Fermer
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                </div>
                            </div>
                        </div>
                    </div>
            <?php $articles2++;
                    $nb++;
                };
            } ?>

            <?php foreach ($rss_load3->channel->item as $item) {
                if ($articles3 < $maxArticle) { ?>
                    <div class="card mb-3" style="max-width: 200rem;">
                        <span class="<?= $fluxColor[array_search($_COOKIE["flux3"], $choice)] ?>"></span>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= $item->enclosure->attributes() ?>" class="card-img-top h-auto" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item->title . "<br>"; ?></h5>
                                    <p class="card-text align-text-bottom"><?= utf8_encode(strftime("%A %d %B %G, %H:%M", strtotime($item->pubDate)))  . "<br>"; ?></p>
                                    <button type="button" class="btn btn-dark bg-dark" data-bs-toggle="modal" data-bs-target="#flux3-<?= $nb ?>"><i class="bi bi-search"></i></button>
                                    <!-- Modal -->
                                    <div class="article modal fade" id="flux3-<?= $nb ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                            <div class="border bg-light modal-content">
                                                <div class="modal-body">
                                                    <div class="col">
                                                        <h2 class="card-title"><?= $item->title . "<br>"; ?></h2>
                                                        <h3 class="p-5 text-center card-text"><?= $item->description . "<br>"; ?></h3>
                                                        <a aria-current="page" href="<?= $item->guid ?>">Accéder au site</a>
                                                        <p class="p-5 card-text align-text-bottom"><?= utf8_encode(strftime("%A %d %B %G, %H:%M", strtotime($item->pubDate)))  . "<br>"; ?></p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark bg-dark" data-bs-toggle="modal" data-bs-target="#flux3-<?= $nb ?>">
                                                        Fermer
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                </div>
                            </div>
                        </div>
                    </div>
            <?php $articles3++;
                    $nb++;
                };
            } ?>
        </div>

        <!-- Navbar mobile -->
        <div class="container m-0 p-0">
            <nav class="navbar navbar-dark bg-dark fixed-bottom  d-lg-none d-block m-0 p-0" style="height: 3rem;">
                <div class="container-fluid d-flex justify-content-between align-items-baseline">
                    <div class="d-flex justify-content-evenly">
                        <a class="nav-link active" style="font-size: 1.5rem;" aria-current="page" href="home.php"><i class="bi bi-house"></i></a>
                        <a class="nav-link active" style="font-size: 1.5rem;" href="parameters.php"><i class="bi bi-gear"></i></a>
                    </div>
                    <div class=" d-flex justify-content-evenly">
                        <a class="navbar-brand sizeIcon" style="font-size: 1rem;" href="<?= isset($_COOKIE["flux1"]) ? "pages.php?flux=" . array_search($_COOKIE["flux1"], $choice) : "" ?>"><?= isset($_COOKIE["flux1"]) ? $fluxMobile[array_search($_COOKIE["flux1"], $choice)] : "" ?></a>
                        <a class="navbar-brand sizeIcon" style="font-size: 1rem;" href="<?= isset($_COOKIE["flux2"]) ? "pages.php?flux=" . array_search($_COOKIE["flux2"], $choice) : "" ?>"><?= isset($_COOKIE["flux2"]) ? $fluxMobile[array_search($_COOKIE["flux2"], $choice)] : "" ?></a>
                        <a class="navbar-brand sizeIcon" style="font-size: 1rem;" href="<?= isset($_COOKIE["flux3"]) ? "pages.php?flux=" . array_search($_COOKIE["flux3"], $choice) : "" ?>"><?= isset($_COOKIE["flux3"]) ? $fluxMobile[array_search($_COOKIE["flux3"], $choice)] : "" ?></a>
                    </div>
                </div>
            </nav>

            <!-- End Navbar mobile -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark d-none d-lg-block">
        <div class="list-inline text-center">
            <p class="list-inline-item">Accueil</p>
            <p class="list-inline-item">Politique de confidentialité</p>
        </div>
        <p class="text-center"><img src="../assets/img/logo.png" class="img-fluid rounded imgLogo" alt="logo">Company Allnews© 2021</p>
    </footer>
    <!-- Footer end -->
    <script src="../assets/script/script.js"></script>
    <script src="../assets/script/switch.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <!-- Footer script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>


</html>