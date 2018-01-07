<!doctype html>
<html>
<head>
    <style type="text/css">
        html, body{
            height: 100%;
        }

        body {
            /*border: 1px solid;*/
            /*display: flex;*/
            margin: 0;

        }

            body * {
                /*border: 1px solid;*/
                /*position: relative;*/
                /*box-sizing: border-box;*/
            }

        .left, .right {
            /*position: relative;*/
            /*display: table-cell;*/
            float: left;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            flex: 2;
            border: 1px solid;
            /*display: inline-block;*/
        }

        .right{
            width: 246px;
            background-color: red;
        }

        .left{
            width: calc(100% - 250px);
            background-color: green;
        }

        .left p{

        }

    </style>
</head>
<body>
    <div class="left">
        <div class="leftc">
            <?php
        for($i=0;$i<100;$i++){
            echo "left<br/>\n";
        }
        echo "left";
            ?>
        </div>
    </div>
    <div class="right">
        right
    </div>
</body>
</html>