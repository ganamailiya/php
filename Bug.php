<?php

SESSION_START();

// est DB connection and Login Info
include ("login/login.php");
$msg = "";

if(isset($_POST["submit"])) {

    if (getimagesize($_FILES['image']['tmp_name'])== FALSE)
    {
        $msg1 = "Please select an image.";
    }
    else {

        $file_name = $_FILES['image']['name'];
        $dir = $_FILES['image']['tmp_name'];
        $location = "uploads/";
        $fp = fopen($dir, 'r');
        $content = fread($fp, filesize($dir));
        $content = addslashes($content);
        fclose($fp);
        move_uploaded_file($dir, $location.$file_name);
        }
// Validation of fields
    if (empty($_POST["bugtitle"]) || empty($_POST["bugdescription"])) {
        $error = "All fields are required.";
    } else {
        $Bugtitle = $_POST["bugtitle"];
        $BugDesc = $_POST["bugdescription"];
        $PresentUser = $_POST['bug'];

        $Bugtitle = mysqli_real_escape_string($db, $Bugtitle);
        $BugDesc = mysqli_real_escape_string($db, $BugDesc);
    }


    $query2 = mysqli_query($db, "SELECT * FROM users WHERE username = '$PresentUser'") or die (mysqli_error($db));

    while ($rows = mysqli_fetch_array($query2)) {
        $xname = $rows['username'];
        $xid = $rows['userID'];


    }


    $query = mysqli_query($db, "INSERT INTO bugs (title, description, postDate, userID) VALUES ('$Bugtitle', '$BugDesc', now(), '$xid')")
    or die(mysqli_error($db));

    // getting data from bugs
    $sql1 = mysqli_query($db, "select * from bugs where title = '$Bugtitle'");

    while ($runsql = mysqli_fetch_array($sql1)){
        $newbugid = $runsql ['bugID'];
    }
    // insert into attachments
    $query1 = mysqli_query($db, "insert into attachments (URL, userID, bugID) VALUES ('$content', '$xid', '$newbugid')");

    if($query1) {
        $txt = "Image Uploaded.";
       // echo "<br/> $txt";
    }
    else
    {
        echo "<br/>Image Not Uploaded.";
    }



    if($query)
    {
        $msg = "Bug successfully submitted..";
        echo "<br>$msg<br>";
    }
    else
    {
        echo "submission error";
    }
}

?>