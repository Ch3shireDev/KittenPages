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
$title = "";
$message = "";
$showSendButton = false;

if(isset($_POST["message"])){

    $title = $_POST["title"];
    $message = $_POST["message"];
    $sub = $_POST["submit"];
    $time = date("Y-m-d h:i:s");


    if (isset($sub["send"])) {

        $sql = "create table if not exists posts(id int(6) primary key, title varchar(255), message mediumtext, author varchar(64), time datetime)";
        $res = $link->query($sql);

        print_r($res);

        //$sql = "insert into posts values(0,\"aaa\", \"abc\")"

        $q = mysqli_query($link, "select max(id) as maxid from posts;");

        $id = 0;

        print(gettype($q));

        if(gettype($q)!="boolean"){
            $f = mysqli_fetch_all($q, MYSQLI_ASSOC);
            $id = $f[0]['maxid'] + 1;
        }

        $x = "insert into posts values(".$id.", '".$title."', '".$message."', '".$username."', '".$time."');";
        $res = mysqli_query($link, $x);

        print_r($res);

        //header("Location: index.php");
        //die();

    }
    elseif (isset($sub["preview"])) {

        $Extra = new ParsedownExtra();
        $str = $Extra->text($message);

        Html::div()
            ->class("section")
            ->content(
                Html::div()
                ->class("baloon")
                ->content($str)
            )
            ->show();
        $message = $_POST["message"];
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
                ->action(htmlentities($_SERVER["PHP_SELF"]."?page=".$_GET['page']))
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