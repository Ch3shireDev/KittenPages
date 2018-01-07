<!doctype html>
<html>
<head>
</head>
<body>
    <ul>
        <?php
$arr = scandir('./');

foreach($arr as $x){

    print '<li><a href="'.$x.'">'.$x.'</a></li>'."\n";
}

        ?>
    </ul>
</body>
</html>