<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 25/03/2016
 * Time: 1:44 AM
 */

session_start();
// est DB connect
include ("connection.php");


$sql = "select * from bugs WHERE bugID = ".$_GET["id"];

$result = mysqli_query($db,$sql);

$row = mysqli_fetch_assoc($result);

 $bugtitle = $row['title'];
 $bid = $row['bugID'];
 $bugdesc = $row['description'];
 $uid = $row['userID'];

 $comment = $_POST["comment"];


$intid = intval($uid);
$intbid = intval($bid);

    if(isset($_POST["submit"])) {

    $query = mysqli_query($db, "INSERT INTO comments (comment, postDate) VALUES ('$comment', now())")
    or die(mysqli_error($db));
    }
    else{
    //echo "Please add a comment";
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Comments</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>

<img class="img1" src="images/%20logo.png ">
<div class="links">
    <a href="login/home.php">Home Page</a> &nbsp;&nbsp;
    <a href="login/logout.php">Logout</a> &nbsp;&nbsp;
</div>
<br><br>
<nav class = "format">
    <?php
    echo "<h2>" . "Bug Title: " .$bugtitle."</h2>";
    echo "<p>" . "Bug Description: " .$bugdesc."</p>";
    ?>
    <h3>Add Comment</h3>
    <form method="POST" action="comment.php">
        <table cellpadding="10" align="center" id = "signup">
            <tbody>
            <tr>
                <td>
                    Comment
                    <br>
                    <br>
                    <br>
                </td>
                <td>
                    <textarea cols="30" rows="4" name="comment" style="width: 330px; height: 88px;"></textarea>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <input type="submit" value="Add Comment" name="submit">
                    <input type = "hidden" value= "<?php echo $bid; ?>" name = "bid" id="bid"/>
                    <input type = "hidden" value= "<?php echo $uid; ?>" name = "uid" id="uid"/>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
    <?php
    $getquery = mysqli_query($db, "Select * from comments ORDER BY commentID DESC");
    while ($rows = mysqli_fetch_assoc($getquery))
    {
        $id = $rows['commentID'];
        $comment = $rows['comment'];
        $post = $rows['postDate'];
        $delink="<a href=\"delete.php?id=" . $id . "\">Delete</a>";

        echo "Date Posted: " .  $post . '<br />' . $comment . '<br />' . $delink  . '<br />' .  '<hr width="1000px" />';
    }

    ?>





</nav>
<footer>
    <p>(c) 2016 Ganama's Design</p>
</footer>
</body>
</html>
