<!doctype html>
<html>
<head>
    <style type="text/css">
        body {
            margin: 0;
            display: flex;
            font-family: "Open Sans",Arial,sans-serif;
            color: white;
            font-size: 20px;
        }

        .all{
            margin-top: 0;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            margin: 0;
        }

        .header {
            display: flex;
            margin-top: 0;
            margin: 0;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            height: 150px;
            background: #4d0202;
            text-align: center;
            vertical-align: middle;
            /*align-content:center;*/
            justify-content: center;
            align-items: center;
        }

        .header h1{
            margin: 0;
            /*text-align: center;*/
            /*display: table-cell;*/
            /*margin-top: auto;*/
            /*margin-bottom: auto;*/
        }

        .content{
            display: flex;
            width: 100%;
            background: black;
        }

        .left{
            background: darkred;
            width: calc(100% - 250px);
        }

        .right{
            background: #6f0101;
            width: 250px;
        }

        .button{
            padding: 20px;
            text-align:center;
        }

        .button:hover{
            background: white;
            opacity: 0.5;
            color: black;
            text-shadow: 2px 2px 2px black;
        }

    </style>
</head>
<body>
    <div class="all">
        <div class="header">
            <h1>header</h1>
        </div>
        <div class="content">
            <div class="left">
        left
        <?php
        for($i=0;$i<100;$i++)
            echo "<p>abc</p>\n";
        ?>
    </div>
    <div class="right">
        <div class="button">a</div>
        <div class="button">b</div>
        <div class="button">c</div>
    </div>
        </div>
    </div>
</body>
</html>