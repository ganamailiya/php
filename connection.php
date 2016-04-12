<?php
/**
 * Created by PhpStorm.
 * User: iliyaganama
 * Date: 12/04/2016
 * Time: 11:17 PM
 */
define('DB_SERVER', 'eu-cdbr-azure-west-d.cloudapp.net');
define('DB_USERNAME', 'b896bf3ed7b5f5');
define('DB_PASSWORD', '25d1fd49');
define('DB_DATABASE', 'NetSecCW');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>
