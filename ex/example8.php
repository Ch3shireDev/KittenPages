<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        .container{
            margin: auto;
            width: 60%;
            align-self:center;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container text-center">
        <h3>What We Do</h3>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Current Project</p>
            </div>
            <div class="col-sm-3">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Project 2</p>
            </div>
            <div class="col-sm-3">
                <div class="well">
                    <p>Some text..</p>
                </div>
                <div class="well">
                    <p>Some text..</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="well">
                    <p>Some text..</p>
                </div>
                <div class="well">
                    <p>Some text..</p>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container text-center">
        <h3>Our Partners</h3>
        <br>
        <div class="row">
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 1</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 2</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 3</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 4</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 5</p>
            </div>
            <div class="col-sm-2">
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                <p>Partner 6</p>
            </div>
        </div>
    </div><br>

    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>

</body>
</html>
