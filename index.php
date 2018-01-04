<!doctype html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    <div class="mainbar">
        <div class="header">
            <p>header</p>
        </div>
        <div class="content">
            <?php
            include 'content.php';
            ?>
        </div>
    </div>
    <div class="sidebar">
        <?php
        include 'navigation.php';
        ?>
    </div>
</body>
</html>