<?php
include_once "../html-generator.php";

function display($title, $message, $author, $date, $id){
    return Html::div()
        ->class("post")
        ->content(
            Html::div()
            ->class("background")
            ->content(
                Html::div()
                ->class("title")
                ->content(
                Html::h3($title)
                ),
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