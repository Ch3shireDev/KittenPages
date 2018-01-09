<!doctype html>
<html>
<head>
    <style type="text/css">
        body {
            margin: 0;
            display: flex;
            /*font-family: "Open Sans",Arial,sans-serif;*/
            font-family: -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                Roboto,
                "Helvetica Neue",
                Arial,
                sans-serif,
                "Apple Color Emoji",
                "Segoe UI Emoji",
                "Segoe UI Symbol";
            height: 100%;
        }

        .h1, h1 {
            font-size: 2.5rem;
        }

        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
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
            background: hsl(238, 53%, 66%);
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
            min-height: calc(100vh - 150px);
            color: black;
        }

        .right {
            padding-top: 70px;
            background: hsl(0, 0%, 85%);
            width: 200px;
        }

        .left{
            background: hsl(0, 0%, 90%);
            width: calc(100% - 200px);
            padding-top: 10px;
        }

        .button{
            padding: 20px;
            text-align:center;
            text-transform:capitalize;
        }

        .button:hover{
            background: rgba(255, 255, 255, 0.64);
        }

        .post {
            margin: 10%;
            background: hsl(0, 0%, 85%);
            /*opacity: 0.5;*/
            min-height: 200px;
            border-radius: 10px;
            padding: 5px 5% 5px 5%;
        }

    </style>
</head>
<body>
    <div class="all">
        <div class="header">
            <h1>My First Page</h1>
        </div>
        <div class="content">
            <div class="left">
                <div class="post">
                    <h2>Post Title</h2>
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