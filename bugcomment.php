<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 25/03/2016
 * Time: 1:22 PM
 */
SESSION_START();
include ("login/login.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Comment</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>

<img class="img1" src="images/%20logo.png ">
<div class="links">
    <a href="login/home.php">Home Page</a> &nbsp;&nbsp;
    <a href="login.html">Login</a> &nbsp;&nbsp;
    <a href="Signup.html">Signup</a>
</div>
<br><br><br>
<h1>Bug List</h1>
<p>Kindly Click on the bug you wish to comment on..</p>
<div id="content">
    <?php
    //Establish DB connect
    include ("connection.php");
    $_POST["bugID"];


    $sql = "select * from bugs";

    //fetch result from sql query of DB
    $result = mysqli_query($db,$sql);

    //we scanning through each row
    while($row = mysqli_fetch_assoc($result)){
        //get bug title and id
        $bugtitle = $row['title'];
        $bugID = $row['bugID'];

        //write link to page
        echo "<a href='comment.php?id=".$bugID."'>".$bugtitle."</a></br>";
    }
    ?>
</div>
</body>
</html>