<?php
    include_once "config.php";

    $q = mysqli_query($link, "select * from posts order by id desc;");

    $r = mysqli_fetch_all($q,MYSQLI_ASSOC);

    foreach($r as $post){
        $id = $post['id'];
        $msg = $post['message'];
        $author = $post['author'];
        $time = $post['time'];

        Html::div()
            ->class("section")
            ->content(
                Html::div()
                ->class("baloon")
                ->content($msg)
            )
            ->show();
    }


?>