| <?php
/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 28.02.2016
 * Time: 07:53
 */

$ziele = [
            "?page=startseite" => "Startseite",
            "?page=mich" => "Über mich",
            "?page=impressum" => "Impressum"
        ];

foreach ($ziele as $nav => $titel)
        {
            echo "<a href='$nav'>$titel</a> | ";
        }
?>

