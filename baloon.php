<?php


function Baloon($title, $message, $author, $date, $id){
    return Html::div()
        ->class("section")
        ->content(
            Html::div()
            ->class("baloon")
            ->content(
                Html::div()
                ->class("title")
                ->content($title),
            Html::div()
                ->class("message")
                ->content($message),
            Html::div()
                ->class("author")
                ->content($author),
            Html::div()
                ->class("date")
                ->content($date)
                )
            );
}

?>