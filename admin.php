<?php

include "HtmlGeneration.php";

if(isset($_POST["message"])){
    Html::div()
        ->class("section")
        ->content(
            Html::div()
            ->class("baloon")
            ->content("ciastka")
        )
        ->show();

}
?>



<?php


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
                    ->name("message"),
                    Html::div()
                    ->class("button")
                    ->content(
                        Html::input()
                        ->type("submit")
                        ->value("Send")
                        ->formmethod("post")
                    )
                )
            )
        )
    )
    ->show();
?>


<!--<div class = "section">
    <div class = "baloon">
        <header>
            <p class="head">Admin Panel</p>
        </header>
        <p>Publish new post:</p>
        <div class="input">
            <form>
<textarea id = "NewPost" cols="50" rows="5" placeholder="Enter some text..." name="message"></textarea>
                <div class="button">
                    <input type="submit" value="Send" onclick="" formmethod="post" />
                </div>
            </form>
        </div>
    </div>
</div>-->