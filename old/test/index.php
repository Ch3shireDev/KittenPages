<!doctype html>
<html>
<head>
    <style>
        div {

            /*display:block;*/
            border: solid 1px;
            padding: 0;
            height: 100%;
            top: 0;
            bottom: 0;

            position:absolute;
        }

        .left {
            overflow:auto;
            border-spacing: 0px;
            left: 0;
            width: auto;
            /*float: left;*/
            /*min-height: 50px;*/
        }

        .right {
            right: 0;
            float: right;
            width: 20%;
            background-color: lightgrey ;
            height: 100%;
            /*min-height: 50px;*/
        }



        /*body{
            table-layout: auto;
        }
        body *{
            position: fixed;
            border:solid;
            border-color:black;
            border-width: 1px;
            height: 100%;
            top: 0;
            bottom: 0;
        }

        #mainbar{
            overflow: hidden;
            width: 80%;
            left: 0;
            float: left;
        }

        #sidebar{
            right: 0;
            width: 20%;
            float: right;
            /*background-color:#ccc;*/
        /*}*/
        /*
        #header{
            height: 20%;
            margin-top: 0;
            padding-top: 0;
        }

        #content{
            height: 80%;
        }*/
    </style>
</head>
<body>
    <div class="right">right</div>
    <div class="left">left</div>
<!--
    <div id="mainbar">
        Mainbar
        <!--<div id="header">Header</div>
        <div id="content">Content</div>
    </div>
    <div id="sidebar">
    Sidebar
    </div>
    -->
</body>
</html>

<?php

?>