<?php
$user = 'root';
$pass = '';
$db = 'Ganama';

$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo"Great work!!!";



?>