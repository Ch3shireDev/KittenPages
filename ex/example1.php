<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Example</title>
    <style type="text/css">
        body {
            /*border: 1px solid;*/
            /*display: flex;*/
            margin: 0;
        }

            body * {
                border: 1px solid;
                /*position: relative;*/
                box-sizing: border-box;
            }

        /*
    The box-sizing property defines how the width and height 
    of an element are calculated: should they include padding 
    and borders, or not.

    content-box 	Default. The width and height properties 
                    (and min/max properties) includes only the 
                    content. Border and padding are not included

    border-box 	    The width and height properties (and min/max 
                    properties) includes content, 
                    padding and border
*/

        .column {
            width: 50%;
            float: left;
        }

        .left, .right {
            /*width: 250px;*/
            padding: 10px;
            min-height: 100vh;
            /*height: 100vh;*/
        }

        .left {
            float: left;
            width: 75%;
        }

        .right {
            background: green;
            width: 25%;
        }

        .header {
        }

        .content {
        }
    </style>
</head>
<body>
    <div class="column">
        left
    </div>
    <div class="column">
        right
    </div>
</body>
</html>
