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
    $id = 0;


    if (isset($sub["send"])) {

        $sql = "create table if not exists posts(id int(6) primary key, title varchar(255), message mediumtext, author varchar(64), time datetime)";
        $res = $link->query($sql);

        $q = mysqli_query($link, "select max(id) as maxid from posts;");

        print(gettype($q));

        $f = mysqli_fetch_all($q, MYSQLI_ASSOC);
        $id = $f[0]['maxid'] + 1;

        if(gettype($q)!="boolean"){

            $x = "insert into posts values(".$id.", '".$title."', '".$message."', '".$username."', '".$time."');";
            $res = mysqli_query($link, $x);

        }
        header("Location: index.php");
        die();

    }
    elseif (isset($sub["preview"])) {

        $Extra = new ParsedownExtra();
        $str = $Extra->text($message);

        Baloon($title,$message,$username,$time,$id)->show();

        $message = $_POST["message"];
        $showSendButton = true;

    }

}


?>