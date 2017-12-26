<?php
$servername = "localhost";
$username = "cheshire";
$password = "ppp";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
if(isset($_POST["message"])){
    $msg = $_POST["message"];
    $Extra = new ParsedownExtra();
    $str = $Extra->text($msg);

    Html::div()
        ->class("section")
        ->content(
            Html::div()
            ->class("baloon")
            ->content($str)
        )
        ->show();
}
?>



<?php

$str = "";
if(isset($_POST["message"])){
    $str = $_POST["message"];
}

$send_button = null;

if(isset($_POST["message"])){
    $send_button = Html::input()
                    ->type("submit")
                    ->value("Send")
                    ->formmethod("post");
}

Html::div()
    ->class("section")
    ->content(
        Html::div()
        ->class("baloon")
        ->content(
            Html::header()
            ->content(
                Html::p("Admin Panel")
                ->class("head")
            ),
            Html::p("Publish new post:"),
            Html::div()
            ->class("input")
            ->content(
                Html::form()
                ->content(
                    Html::textarea()
                    ->id("NewPost")
                    ->cols("50")
                    ->rows("5")
                    ->placeholder("Enter some text...")
                    ->name("message")
                    ->dontFormat()
                    ->content($str),
                    Html::div()
                    ->class("button")
                    ->content(
                        Html::input()
                        ->type("submit")
                        ->value("Preview")
                        ->formmethod("post"),
                        $send_button
                    )
                )
            )
        )
    )
    ->show();
?>