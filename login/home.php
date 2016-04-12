<?php
session_start();
$username= $_SESSION['username'];


	include("check.php");
	include("connection.php");

    $sql = "SELECT MAX(bugID) FROM bugs";
	$r = mysqli_query($db, $sql);

	while ($fetch = $r -> fetch_array()){
		$bid = $fetch[0];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link type="text/css" rel="stylesheet" href="../style.css"/>
</head>
<body>
<img class="img1" src="../images/%20logo.png ">
<div class="links">
	<a href="../index.html">Home</a> &nbsp;&nbsp;
	<a href="logout.php">Logout</a>

</div>
<body>
<br><br>
<div class="link">
<h1 id="hello">WELCOME <?php echo $_SESSION ["username"];?>!</h1>
	<a href="../BugInfo.php?bid=<?php echo $bid; ?>">  <img src="../images/white.jpg" style{width="150" height="100"} class="icons"> </a>
	<a href="../buglist.php"> 	<img src="../images/white1.jpg" style{width="150" height="100"} class="icons"> </a>
	<a href="../bugcomment.php"> 	<img src="../images/white2.jpg" style{width="150" height="100"} class="icons"> </a>
	<p id="footer"> . </p>
</div>

<footer>
	(c) 2016 Ganama's Design
</footer>

</body>
</html>
