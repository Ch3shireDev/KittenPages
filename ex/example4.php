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
            height: 100%;
        }

        .all{
            margin-top: 0;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            margin: 0;
            min-height: 100%;
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
        }

        .content{
            display: flex;
            width: 100%;
            background: black;
            min-height: calc(100vh - 150px);
        }

        .left{
            background: darkred;
            width: calc(100% - 250px);
            padding-top: 10px;
        }

        .right{
            padding-top: 70px;
            background: #6f0101;
            width: 250px;
        }

        .button{
            padding: 20px;
            text-align:center;
            text-transform:capitalize;
        }

        .button:hover{
            background: white;
            font-weight: 900;
            opacity: 0.5;
            color: black;
        }

        .post{
            margin: 10%;
            background: rgba(255, 255, 255, 0.49);
            /*opacity: 0.5;*/
            min-height: 200px;
            border-radius: 10px;
            color: white;
            padding: 5px 5% 5px 5%;
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
                <div class="post">
                    <h3>Post Title</h3>
                </div>
            </div>
    <div class="right">
        <div class="button">button 1</div>
        <div class="button">button 2</div>
        <div class="button">button 3</div>
    </div>
        </div>
    </div>
</body>
</html>