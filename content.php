<?php
    include_once "config.php";

    $q = mysqli_query($link, "select * from posts order by id desc;");
    $r = null;
    if($q !== false){
        $r = mysqli_fetch_all($q,MYSQLI_ASSOC);
    }
    if($r == null)exit;
    foreach($r as $post){
        $id = $post['id'];
        $title = $post['title'];
        $msg = $post['message'];
        $author = $post['author'];
        $time = $post['time'];

        Baloon($title,$msg,$author,$time,$id)->show();

        //Html::div()
        //    ->class("section")
        //    ->content(
        //        Html::div()
        //        ->class("baloon")
        //        ->content($msg)
        //    )
        //    ->show();
    }


?>