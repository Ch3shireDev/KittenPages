<?php
if(!isset($_POST['id']))exit;

$id = $_POST['id'];

include_once('../config.php');

$x = mysqli_query($link, 'delete from posts where id = '.$id);

?>