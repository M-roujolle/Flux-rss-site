<?php
setlocale(LC_TIME, array('fr_FR.utf8', 'French'));
date_default_timezone_set('Europe/Paris');

if (isset($_COOKIE["flux1"])) {
    $rss_link1 = $_COOKIE["flux1"];
} else {
    $_COOKIE["flux1"] = "https://www.01net.com/rss/smartphones/";
    $rss_link1 = $_COOKIE["flux1"];
}
if (isset($_COOKIE["flux2"])) {
    $rss_link2 = $_COOKIE["flux2"];
} else {

    $_COOKIE["flux2"] = "https://www.01net.com/rss/tablettes/";
    $rss_link2 = $_COOKIE["flux2"];
}
if (isset($_COOKIE["flux3"])) {
    $rss_link3 = $_COOKIE["flux3"];
} else {
    $_COOKIE["flux3"] = "https://www.01net.com/rss/pc-portables/";
    $rss_link3 = $_COOKIE["flux3"];
}


$rss_load1 = simplexml_load_file($rss_link1);
$rss_load2 = simplexml_load_file($rss_link2);
$rss_load3 = simplexml_load_file($rss_link3);
$articles1 = 0;
$articles2 = 0;
$articles3 = 0;


if (isset($_COOKIE["totalArticles"])) {
    $maxArticle = $_COOKIE["totalArticles"] / 3;
} else {
    $maxArticle = 6 / 3;
}
