<!DOCTYPE html>

<html>
<head>
    <title>PHP Test</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

