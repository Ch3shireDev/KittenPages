<?php
include_once "config.php";
include "baloon.php";

if(isset($_POST['index'])){
    $i = $_POST['index'];
    $x = mysqli_query($link, "select * from posts order by id desc limit ".$i.", 1");
    $x = mysqli_fetch_all($x)[0];
    
    $id = $x[0];
    $title = $x[1];
    $message = $x[2];
    $author = $x[3];
    $date = $x[4];

    echo Baloon($title,$message,$author,$date,$id);

}
?>