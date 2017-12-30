<?php
include_once "config.php";

$username = null;

if(isset($_SESSION["username"])){
    $username = $_SESSION["username"];
    echo $username;
}
else{
    echo "User not logged in.";
}

if(!isset($_SESSION["username"])){
    exit;
}
$str = "";
$send_button = null;

$showSendButton = false;

if(isset($_POST["message"])){

    $msg = $_POST["message"];
    $sub = $_POST["submit"];
    $time = date("Y-m-d h:i:s");


    if (isset($sub["send"])) {

        //$sql = "create table posts(id int(6) primary key, message mediumtext, varchar(64) author, time datetime)";
        //$link->query($sql);
        //$sql = "insert into posts values(0,\"aaa\", \"abc\")"

        $q = mysqli_query($link, "select max(id) as maxid from posts;");
        $f = mysqli_fetch_all($q, MYSQLI_ASSOC);

        $id = $f[0]['maxid'] + 1;

        $x = "insert into posts values(".$id.", '".$msg."', '".$username."', '".$time."');";
        $res = mysqli_query($link, $x);
        
        header("Location: index.php");
        die();

    }
    elseif (isset($sub["preview"])) {

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
        $str = $_POST["message"];
        $showSendButton = true;

    }

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
                ->action("index.php?page=post")
                ->method("POST")
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

//<form action='' method=POST>
//    (...) some input fields (...)
//    <input type=submit name=submit[save] value=Save>
//    <input type=submit name=submit[delete] value=Delete>
//</form>


//if (isset($_POST["submit"])) {
//    $sub = $_POST["submit"];

//    if (isset($sub["save"])) {
//        // save something;
//    } elseif (isset($sub["delete"])) {
//        // delete something
//    }
//}
?>