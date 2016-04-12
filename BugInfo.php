<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 18/03/2016
 * Time: 3:57 PM
 */
include ("login/login.php");
session_start();
$username = $_SESSION['username'];
$bugid = $_GET['bid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Info</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>

<img class="img1" src="images/%20logo.png ">
<div class="links">
    <a href="login/home.php">Home Page</a> &nbsp;&nbsp;
    <a href="login/logout.php">Logout</a> &nbsp;&nbsp;
</div>
<nav class = "format">
    <h3><?php echo "Hello" . " " .  $_SESSION["username"]; ?></h3>
    <h3>Report Bug</h3>
    <form method="POST" action="Bug.php" enctype="multipart/form-data">
        <input type="hidden" name="bug" value="<?php echo $username; ?>" >
        <table cellpadding="10" align="center" id = "signup">
            <tbody>
            <tr>
                <td>Bug Tiltle</td>
                <td>
                    <input type="text" name="bugtitle" required>
                </td>
            </tr>
            <tr>
                <td>
                    Bug Description
                    <br>
                    <br>
                    <br>
                </td>
                <td>
                    <textarea cols="30" rows="4" name="bugdescription" style="width: 330px; height: 88px;"></textarea>
                </td>
            </tr>
            <tr>
                <td>Attachments</td>
                <td>
                    <input type="file" name="image">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Submit" name="submit">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</nav>
<footer>
    <p>(c) 2016 Ganama's Design</p>
</footer>

</body>
</html>
