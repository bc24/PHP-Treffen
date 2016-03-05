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
}elseif(isset($_GET["admin"])){
    $page = "";
}
else{
    $page = "startseite";
}
$pfad = "html/$page.html";


if ($database->has("content", array("name" => $page))){
    $content = $database->get("content", "content", array("name" => $page));

    include("tpl/main.php");
}elseif(isset($_GET["admin"])){
    if (is_eingeloggt()){
        $page = $_GET["admin"];
        $pfad = "admin/$page.php";
        if(file_exists($pfad)) {
            include $pfad;
        }
    }else{
        echo "Zugriff verweigert.";
    }

}


else {
    echo "Die Datei existiert nicht";
}

?>
