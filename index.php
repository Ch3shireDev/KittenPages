<!DOCTYPE html>

<html>
<head>
    <title>PHP Test</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML'></script>
</head>
<body>

    <?php
    // Include config file
    require_once 'config.php';

    session_start();

    // Define variables and initialize with empty values
    $username = $password = "";
    $username_err = $password_err = "";

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = 'Please enter username.';
        } else{
            $username = trim($_POST["username"]);
        }

        // Check if password is empty
        if(empty(trim($_POST['password']))){
            $password_err = 'Please enter your password.';
        } else{
            $password = trim($_POST['password']);
        }

        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            // Prepare a select statement
            $sql = "SELECT username, password FROM users WHERE username = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                // Set parameters
                $param_username = $username;
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Store result
                    mysqli_stmt_store_result($stmt);
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt)){
                            if(password_verify($password, $hashed_password)){
                                $_SESSION['username'] = $username;
                            } else{
                                $password_err = 'The password you entered was not valid.';
                            }
                        }
                    } else{
                        $username_err = 'No account found with that username.';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }

        // Close connection
        mysqli_close($link);
    }
    ?>


    <?php

    include "Parsedown.php";
    include "ParsedownExtra.php";
    include "html-generator.php";
    include "sections-config.php";

    ?>

<div class="sidenav">
    <div class="side-header">
        Sidebar
    </div>

<?php
        for($i=0;$i<$navigation->Num();$i++){
            $name = $navigation->GetName($i);
            $varname = $navigation->GetVarname($i);
            Html::a()
                ->href("index.php?page=$varname")
                ->Content($name)
                ->Show();
        }
?>

</div>
<div class="navbar">
</div>
<div class="content">
    <div class="header">
        <h2>Page Title</h2>
        <h3>page description</h3>
    </div>

    <div class="page">

        <?php

        //include 'login.php';

    $str = NULL;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        for($i=0;$i<$navigation->Num();$i++){
            if($page==$navigation->GetVarname($i)){
                $str = $navigation->GetFilename($i);
            }
        }
    }
    if(!isset($str)){
        $str = $navigation->GetFilename(-1);
    }
    if(isset($_POST['username'])){
        $str = 'login.php';
    }

    include $str;

?>

</div>
</div>
</body>
</html>

