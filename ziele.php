| <?php
/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 28.02.2016
 * Time: 07:53
 */

$ziele = [
            "index.php" => "Startseite",
            "mich.php" => "Über mich",
            "impressum.php" => "Impressum"
        ];

foreach ($ziele as $nav => $titel)
        {
            echo "<a href='$nav'>$titel</a> | ";
        }
?>
<hr>
