<!DOCTYPE html>

<html>
<head>
    <title>PHP Test</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML'></script>
</head>
<body>

    <?php

    include "Parsedown.php";
    include "ParsedownExtra.php";
    include "html-generator.php";

    ?>

<div class="sidenav">
    <div class="side-header">
        Sidebar
    </div>

    <a href="index.php?page=content">Content</a>
    <a href="index.php?page=post">Post</a>
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
    if(!isset($_GET['page']) or $_GET['page']=="content"){
        include 'content.php';
    }
    else if($_GET["page"]=="post"){
        include 'post.php';
    }
    ?>
    </div>

</div>
</body>
</html>

