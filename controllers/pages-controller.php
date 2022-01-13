<?php
$choice = [
    1 => "https://www.01net.com/rss/smartphones/",
    2 => "https://www.01net.com/rss/tablettes/",
    3 => "https://www.01net.com/rss/pc-portables/",
    4 => "https://www.01net.com/rss/photo/",
    5 => "https://www.01net.com/rss/tv-video/"
];

if (isset($_GET["flux"]) && $_GET["flux"] < 6) {
    $rss_load = simplexml_load_file($choice[$_GET["flux"]]);
} else {
    header("Location: ../404.php");
};
