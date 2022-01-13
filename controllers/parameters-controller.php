<?php
$choice = [
    1 => "https://www.01net.com/rss/smartphones/",
    2 => "https://www.01net.com/rss/tablettes/",
    3 => "https://www.01net.com/rss/pc-portables/",
    4 => "https://www.01net.com/rss/photo/",
    5 => "https://www.01net.com/rss/tv-video/"
];
$fluxColor = [
    1 => 'borderSmartphone',
    2 => 'borderTablet',
    3 => 'borderPc',
    4 => 'borderPhoto',
    5 => 'borderVideo',
];
$fluxName = [
    1 => "Smartphone",
    2 => "Tablette",
    3 => "PC portable",
    4 => "Photo",
    5 => "Vidéo",
];
$fluxMobile = [
    1 => '<i class="bi bi-phone"></i> Smartphone',
    2 => '<i class="bi bi-tablet-landscape"></i> Tablette',
    3 => '<i class="bi bi-laptop"></i> PC portable',
    4 => '<i class="bi bi-file-earmark-image"></i> Photo',
    5 => '<i class="bi bi-camera-reels"></i> Vidéo',
];
if (isset($_POST["validation"])) {

    if (isset($_POST["checkbox"])) {
        if (count($_POST["checkbox"]) == 3) {
            if (isset($_POST["checkbox"][0])) {
                setcookie("flux1", $choice[$_POST["checkbox"][0]]);
            }
            if (isset($_POST["checkbox"][1])) {
                setcookie("flux2", $choice[$_POST["checkbox"][1]]);
            }
            if (isset($_POST["checkbox"][2])) {
                setcookie("flux3", $choice[$_POST["checkbox"][2]]);
            }
        } else {
            $error = "Vous devez faire 3 choix obligatoirement";
        }
    } else {
        $error = "Veuillez choisir 3 centre d'intèrêts";
    }

    if (isset($_POST["totalArticles"])) {
        setcookie("totalArticles", $_POST["totalArticles"]);
    } else {
        $error = "Veuillez choisir le nombre de pages";
    }

    if (!isset($error)) {
        header("Location: ./home.php");
    }
};
