<?php
include ("connection.php");
{
    header('Location: ../login.html');
}
$msg = "";

if(isset($_POST["submit"])) {
    // Validation of fields
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["mobile"])) {
        $error = "All fields are required.";
    } else {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $mobile = $_POST["mobile"];
        $name = mysqli_real_escape_string($db, $name);
        $email = mysqli_real_escape_string($db, $email);
        $password = mysqli_real_escape_string($db, $password);
        $password = md5($password);
        $mobile = mysqli_real_escape_string($db, $mobile);


        $sql = "SELECT email FROM users WHERE email='$email'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (mysqli_num_rows($result) == 1) {
            $msg = "Sorry...This email already exists...";
        } else {
            //echo $name." ".$email." ".$password;
            $query = mysqli_query($db, "INSERT INTO users (username, email, password, phone)VALUES ('$name', '$email', '$password', '$mobile')")
            or die(mysqli_error($db));
            if ($query) {
                $msg = "Thank You! you are now registered. Kindly click on the Login link";
            }

        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Found Bugs</title>
    <link type="text/css" rel="stylesheet" href="../style.css"/>
</head>
<body>
<img class="img1" src="../images/%20logo.png ">
<div class="links">
    <a href="../index.html">Home Page</a> &nbsp;&nbsp;
    <a href="../login.html">Login</a> &nbsp;&nbsp;
    <a href="../Signup.html">Signup</a>
</div>
<br><br><br>
<p><? echo $msg; ?></p>
</body>
</html>
