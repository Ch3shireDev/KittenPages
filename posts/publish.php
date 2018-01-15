<?php

include_once('../html-generator.php');

$title = '';
$message = '';
$showSendButton = true;

Html::div()
    ->class("post")
    ->content(
        Html::div()
            ->class("background")
            ->content(
            Html::div()
            ->class("title")
            ->content(Html::h3("Publish new post:")),
            Html::div()
            ->class("input")
            ->content(
                Html::form()
                ->action('')
                ->method("POST")
                ->content(
                    Html::textarea()
                    ->class("titlebox")
                    ->cols("50")
                    ->name("title")
                    ->placeholder("Enter title")
                    ->content($title)
                    ->dontFormat(),
                    Html::textarea()
                    ->class("messagebox")
                    ->cols("50")
                    ->rows("5")
                    ->placeholder("Enter some text...")
                    ->name("message")
                    ->dontFormat()
                    ->content($message),
                    Html::div()
                    ->class("button")
                    ->content(
                        Html::input()
                        ->type("submit")
                        ->value("Preview")
                        ->name("submit[preview]", false),
                        $showSendButton ? Html::input()
                                            ->type("submit")
                                            ->value("Send")
                                            ->name("submit[send]", false) : null
                    )
                )
            )
            )

    )
    ->show();


?>