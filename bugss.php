
    <?php
    session_start();
    // est DB connect
    include ("connection.php");

    $sql = "select * from bugs WHERE bugID = ".$_GET["id"];

    $result = mysqli_query($db,$sql);

    $row = mysqli_fetch_assoc($result);

    $bugtitle = $row['title'];
    $bugID = $row['bugID'];
    $bugdesc = $row['description'];
    $userID = $row['userID'];
    //echo $userID;
   // echo $bugID;

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
    </nav>
    <footer>
        <p>(c) 2016 Ganama's Design</p>
    </footer>
    </body>
    </html>
