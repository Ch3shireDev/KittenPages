<?php
    if(!isset($_GET['id']))exit;
    include 'config.php';

    $id = $_GET['id'];

    $link->query('select * from posts where id = '.$id);

?>