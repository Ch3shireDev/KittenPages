<!--
    
Login system taken from https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

-->
 
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>-->

<?php
echo $_SESSION["username"];
?>

<div class="section">
    <div class="baloon">
        <div class="login">
            <h2>Login</h2>
            <p>Please fill in your credentials to login.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>
                        Username:
                    </label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" />
                    <span class="help-block">
                        <?php echo $username_err; ?>
                    </span>
                </div>
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>
                        Password:
                    </label>
                    <input type="password" name="password" class="form-control" />
                    <span class="help-block">
                        <?php echo $password_err; ?>
                    </span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
                <p>
                    Don't have an account?
                    <a href="register.php">Sign up now</a>.
                </p>
            </form>
        </div>
    </div>
</div>