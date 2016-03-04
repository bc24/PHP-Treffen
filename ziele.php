| <?php
/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 16.02.2016
 * Time: 09:00
 */

$ziele = [
            "?page=startseite" => "Startseite",
            "?page=mich" => "Über mich",
            "?page=impressum" => "Impressum",
            "?page=login" => "Login"
        ];

foreach ($ziele as $nav => $titel)
        {
            echo "<a href='$nav'>$titel</a> | ";
        }
?>

