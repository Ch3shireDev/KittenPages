<!doctype html>
<html>
<head>

<style type="text/css">
    body {
        display: flex;
        margin: 0;
    }

    .left .leftc {
        background-color: red;
        min-height: 100vh;
    }

    .left {
        width: calc(100% - 250px);
    }

    .leftc {
        height: 100%;
    }


    .right {
        width: 250px;
        background-color: green;
    }
</style>

</head>
<body>
    <div class="left">
        <div class="leftc">
            abc
<?php
for($i=0;$i<100;$i++){
    echo "<p>abc</p>\n";
}
?>
        </div>
    </div>
    <div class="right">

    </div>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    for (i = 0; i < 100; i++)
    $(".leftc").append("<p>xxx</p>");
</script>-->
</body>
</html>