<?php
    include_once "config.php";


    if(isset($_POST["submit"])){

        echo "ccc";

        $sub = $_POST["submit"];
        if (isset($sub["clear"])) {

            $sql = "drop table posts;";
            $res = $link->query($sql);

            exit(header("Location: index.php"));
        }
    }

    Html::form()
        ->method("post")
        ->action("")
        ->action(htmlentities($_SERVER["PHP_SELF"]."?page=".$_GET['page']))
        ->content(
            Html::input()
            ->type("submit")
            ->name("submit[clear]", false)
            ->value("Clear database")
        )->show();
?>
