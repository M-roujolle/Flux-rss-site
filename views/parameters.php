<?php

require_once "../controllers/parameters-controller.php";

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
    <link rel="stylesheet" href="../assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">
    <title>Allnews</title>
</head>

<body>
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
                    </div>
                </div>
                <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
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
                                <a class="nav-link active" href="parameters.php">Paramétre</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->
    <!-- Navbar mobile -->
    <nav class="navbar navbar-dark bg-dark fixed-bottom  d-lg-none d-block">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Allnews</a>
            <div class="d-flex align-content-end">
                <a class="nav-link active" aria-current="page" href="home.php"><i class="bi bi-newspaper"></i></i></a>
                <a class="nav-link active" href="parameters.php"><i class="bi bi-tools"></i></a>
            </div>
        </div>
        </div>
    </nav>
    <!-- End Navbar mobile -->


    <div class="d-flex justify-content-center">
        <form class="checkbox m-0 p-0" method="POST">

            <div class="form-check form-switch ms-auto mt-3 me-3 list-inline-item">
                <label class="form-check-label ms-3" for="lightSwitch">

                </label>Dark Mode
                <input class="form-check-input" type="checkbox" id="lightSwitch" />
            </div>

            <select class="form-select m-auto" style="width: 8rem;" name="totalArticles">
                <option selected disabled>Choix</option>
                <option value="6">6</option>
                <option value="9">9</option>
                <option value="12">12</option>
            </select>


            <div>
                <input value="1" id="checkbox1" type="checkbox" name="checkbox[]">
                <label for="checkbox1" class="pt-3">Smartphone <i class="bi bi-phone"></i></label>
            </div>
            <div>
                <input value="2" id="checkbox2" type="checkbox" name="checkbox[]">
                <label for="checkbox2" class="pt-3">Tablette <i class="bi bi-tablet-fill"></i></i></label>
            </div>
            <div>
                <input value="3" id="checkbox3" type="checkbox" name="checkbox[]">
                <label for="checkbox3" class="pt-3">Pc portable <i class="bi bi-laptop"></i></label>
            </div>
            <div>
                <input value="4" id="checkbox4" type="checkbox" name="checkbox[]">
                <label for="checkbox4" class="pt-3">Photo <i class="bi bi-file-image"></i></label>
            </div>
            <div>
                <input value="5" id="checkbox5" type="checkbox" name="checkbox[]">
                <label for="checkbox5" class="pt-3">Vidéo <i class="bi bi-camera-video"></i></label>
            </div>
            <div class="button">
                <button type="submit" class="btn btn-dark bg-dark" value="Validation" name="validation">Validation</button>
            </div>
        </form>
    </div>
    <div>
        <p class="text-white"><?= $error ?></p>
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