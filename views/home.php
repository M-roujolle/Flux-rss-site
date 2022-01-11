<?php

require_once "../controllers/home-controller.php";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">
    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <title>Allnews</title>
</head>

<body>

    <!-- Navbar -->
    <div class="container">
        <nav class="navbar navbar-dark bg-navbar fixed-top">
            <div class="container justify-content-between my-0 p-0">

                <a class="navbar-brand" href="home.php"><img src="../assets/img/logo.png" class="img-fluid rounded imgLogo" alt="logo">Allnews</a>
                <button class="navbar-toggler text-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <a class="navbar-brand" href="#">Menu</a>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end bg-navbar" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body bg-navbar">
                        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home.php">Allnews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="parameters.php">Paramétre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->

    <h1 class="text-center title1">Actualité</h1>

    <div class="d-flex row justify-content-between m-0 p-0">

        <?php foreach ($rss_load1->channel->item as $item) {
            if ($articles1 < $maxArticle) { ?>
                <div class="card bg-container my-3" style="width: 18rem;">
                    <img src="<?= $item->enclosure->attributes() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item->title . "<br>"; ?></h5>
                        <p class="card-text"><?= $item->description . "<br>"; ?></p>
                        <p class="card-text"><?= $item->pubDate . "<br>"; ?></p>
                    </div>
                </div>
        <?php
                $articles1++;
            };
        } ?>


        <?php foreach ($rss_load2->channel->item as $item) {
            if ($articles2 < $maxArticle) { ?>
                <div class="card bg-container my-3" style="width: 18rem;">
                    <img src="<?= $item->enclosure->attributes() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item->title . "<br>"; ?></h5>
                        <p class="card-text"><?= $item->description . "<br>"; ?></p>
                        <p class="card-text"><?= $item->pubDate . "<br>"; ?></p>
                    </div>
                </div>
        <?php $articles2++;
            };
        } ?>

        <?php foreach ($rss_load3->channel->item as $item) {
            if ($articles3 < $maxArticle) { ?>
                <div class="card bg-container my-3" style="width: 18rem;">
                    <img src="<?= $item->enclosure->attributes() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item->title . "<br>"; ?></h5>
                        <p class="card-text"><?= $item->description . "<br>"; ?></p>
                        <p class="card-text"><?= $item->pubDate . "<br>"; ?></p>
                    </div>
                </div>
        <?php $articles3++;
            };
        } ?>





    </div>

    <!-- Footer -->
    <footer>
        <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="home.php" class="text-decoration-none text-white">Accueil</a></li>
            <li class="list-inline-item"><a href="#" class="text-decoration-none text-white">Politique de confidentialité</a></li>
        </ul>
        <p class="text-center text-white"><img src="../assets/img/logo.png" class="img-fluid rounded imgLogo" alt="logo">Company Allnews© 2021</p>
    </footer>
    <!-- Footer end -->

    <script src="../assets/script/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <!-- Footer script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>


</html>