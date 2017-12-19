<!DOCTYPE html>

<html>
<head>
    <title>PHP Test</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        }

        textarea{
            width:100%;
            resize: none;
            font-family: "Helvetica Neue",Helvetica,Arial,serif;
        }

        .navbar{
            background-color: #222222;
            padding: 30px;
            width:100%;
            position: fixed;
            /*padding-bottom: 50px;*/
        }

        .header {
            /*background-color: #f1f1f1;*/
            background: linear-gradient(black 30%,darkred);
            padding-top: 100px;
            padding-bottom: 50px;
            /*padding: 50 px;*/
            text-align: center;
            color: #dddddd;
            text-shadow: 0 0 1px #dddddd;
            font-size: xx-large;
        }

        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
        }


        /* Side navigation links */
        .sidenav a {
            color: white;
            padding: 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color on hover */
        .sidenav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Style the content */
        .content {
            margin-left: 200px;
            /*padding-left: 20px;*/
        }

        p {
            margin-left: 20px;
            margin-right: 20px;
            /*width: 90%;*/
            text-align: justify;
        }

        div.baloon {
            background: #e8d1d1;
            padding: 30px;
            -webkit-border-radius: 30px 10px;
            border-radius: 30px 10px;
        }

        div.section{
            /*margin = 10px;*/
            /*color = red;*/
            /*border: 1px solid black;*/
            margin-top: 50px;
            margin-bottom: 50px;
            margin-right: 80px;
            margin-left: 80px;
            /*background-color: lightblue;*/
        }

        header{
        }

        .side-header{
            color:white;
            padding: 50px;
            text-align: center;
            font-family: "Droid Sans";
            font-size: xx-large;
        }

        p.head{
            font-family: "Droid Sans";
            font-weight: bold;
            text-transform: uppercase;
            flex: 10px;
        }

    </style>

</head>
<body>


<div class="sidenav">

    <div class="side-header">
        Sidebar
    </div>

    <a href="index.php?page=content">Content</a>
    <a href="index.php?page=admin">Admin</a>
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
    if(!isset($_GET['page']) or $_GET["page"]=="content"){
        include 'content.php';
    }
    else if($_GET["page"]=="admin"){
        include 'admin.php';
    }
    ?>
    </div>

</div>
</body>
</html>

