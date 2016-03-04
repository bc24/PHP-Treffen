<?php
/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 04.03.2016
 * Time: 18:34
 */

if(isset($_POST["login"]))
{
    $db = new mysqli("localhost", "root", "", "login");
    $result = $db->query("SELECT id FROM user WHERE user = '".mysqli_real_escape_string($db, $_POST["user"])."' AND passwort = '".md5($_POST["passwort"])."';");
    if($result->num_rows == 0)
    {
        echo'fehler';
    }
    else
    {
        echo'login erfolgreich';
        $row = $result->fetch_assoc();
        $_SESSION["uid"] = $row["id"];
    }
}
?>