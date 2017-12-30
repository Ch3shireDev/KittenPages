<!DOCTYPE html>

<html>
<head>
    <title>PHP Test</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML'></script>
</head>
<body>

    <?php
    // Include config file
    require_once 'config.php';

    session_start();



    //if(isset($_GET['page']) && $_GET['page'] == 'login'){


        // Processing form data when form is submitted

    //}



    include "Parsedown.php";
    include "ParsedownExtra.php";
    include "html-generator.php";
    include "sections-config.php";

    ?>

<div class="sidenav">
    <div class="side-header">
        Sidebar
    </div>

    <?php

    $username = $password = "";
    $username_err = $password_err = "";


        for($i=0;$i<$navigation->Num();$i++){
            $name = $navigation->GetName($i);
            $varname = $navigation->GetVarname($i);
            Html::a()
                ->href("index.php?page=$varname")
                ->Content($name)
                ->Show();
        }
?>

</div>
<div class="navbar">
</div>
<div class="content">
    <div class="header">
        <h2>Page Title</h2>
        <h3>page description</h3>
    </div>

    <div class="page">

<?php
    $str = NULL;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        for($i=0;$i<$navigation->Num();$i++){
            if($page==$navigation->GetVarname($i)){
                $str = $navigation->GetFilename($i);
            }
        }
    }
    if(!isset($str)){
        $str = $navigation->GetFilename(-1);
    }
    if(isset($_POST['username'])){
        $str = 'login.php';
    }

    include $str;
?>

</div>
</div>
</body>
</html>

