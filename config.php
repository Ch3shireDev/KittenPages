<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'cheshire');
define('DB_PASSWORD', 'ppp');
define('DB_NAME', 'test');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>