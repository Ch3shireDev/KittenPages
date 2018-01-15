<?php
include '../config.php';
include 'generate.php';

if(!isset($_POST['index']))exit;

$i = $_POST['index'];

$N = mysqli_query($link, "select count(id) from posts");
$N = mysqli_fetch_all($N)[0][0];

if($i<$N){
    $x = mysqli_query($link, "select * from posts order by id desc limit ".$i.", 1");
    $x = mysqli_fetch_all($x);
    $x = $x[0];
    $id = $x[0];
    $title = $x[1];
    $message = $x[2];
    $author = $x[3];
    $date = $x[4];
    echo generate($title, $message, $author, $date, $id);
}
?>