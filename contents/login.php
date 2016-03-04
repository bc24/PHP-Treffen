<?php session_start();

/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 16.02.2016
 * Time: 09:00
 */

function is_eingeloggt()
{
    return isset($_SESSION["uid"]);
}
function logout()
{
    unset($_SESSION["uid"]);
}
if(isset($_GET["logout"]))
{
    logout();
}
?>
<!DOCTYPE html>
<html>

<body>

<?php if(!is_eingeloggt()){?>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label>Benutzer:</label>
                <input type="text" name="user" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Passwort:</label>
                <input type="password" name="passwort" class="form-control"/>
            </div>
            <input type="submit" class="btn btn-primary" name="login"></button>

        </form>
    </div>
<?php }
else
{
    echo '<a href="?page=logout" class="btn btn-default">logout</a>';
}
?>


</body>
</html>