<?php
include_once "../html-generator.php";

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
                ->class("footer")
                ->content(
                    Html::div()
                        ->class("author")
                        ->content($author),
                    Html::div()
                        ->class("date")
                        ->content($date)
                ),
                Html::div()
                    ->class("admin")
                    ->content(
                        Html::div()
                            ->class("edit")
                            ->content("Edit"),
                        Html::div()
                            ->class("delete")
                            ->content("Delete")
                        )
                    )
                );
}

?>