<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<<<<<<< HEAD
<p>
    <?php
$days = array("mon", "tues", "wed", "thurs", "fri", "sat", "sun");
    for($x = 0; $x <= 6; $x=$x+3) {
        echo "mugs are avail n " .  $days[$x], '<br>';
    }
    ?>
</p>
=======
<h1>PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="login.php">
        <p><label>Username:</label><br></p>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />  <br><br>
        <input type="submit" name="submit" value = "login"/>
    </form>
    <div class="error"><?php //echo $error;?><?php //echo $username; echo $password;?></div>

</div>
>>>>>>> origin/master
</body>
</html>
