<?php

/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 27.02.2016
 * Time: 22:17
 */

foreach(glob('php/*.php') as $file){
    require_once $file;
}


if(isset($_GET["page"])){
    $page = $_GET["page"];
} else {
    $page = "startseite";
}

$path = "contents/$page.php";
if(file_exists($path)){
    $content = file_get_contents($path);
    include("templates/frank.php");
} else {
    echo "Error 404";
}


?>