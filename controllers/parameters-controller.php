<?php
var_dump($_POST);
$error = "";

$choice = [
    1 => "https://www.01net.com/rss/smartphones/",
    2 => "https://www.01net.com/rss/tablettes/",
    3 => "https://www.01net.com/rss/pc-portables/",
    4 => "https://www.01net.com/rss/photo/",
    5 => "https://www.01net.com/rss/tv-video/"
];


if (isset($_POST["totalArticles"])) {
    setcookie("totalArticles", $_POST["totalArticles"]);
}

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
        header("Location: ./home.php");
    } else {
        $error = "Faites 3 choix";
    }
}
