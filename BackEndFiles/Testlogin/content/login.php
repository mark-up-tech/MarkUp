<?php
 include_once '../content/header.php';
 include_once '../navbars/navbarlogin.php';
?>   
    <!-- no back function--> 
<script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>
    <!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="icon" type="image/png" href="../Images/mulogo.png">
        <title>Login</title>
        <link rel="stylesheet" href="../CSS/Loginstyle.css">
</head>
<body>
        <!-- Login Form-->
    <section class="login-form">
        <form action="../includes/login.inc.php" method="post">
            <div class="box">
                <div class="img">
                <img src="../Images/mulogo.png" alt="user"/>
                </div>
                <div class="form-fields">
                        <p>Email</p>
                    <div class="input-box">
                    <input type="text" name="contact" placeholder="Enter Email" class="form-control">
                    </div>
                        <p>Password</p>
                    <div class="input-box">
                        <input type="password" name="pwd" placeholder="Enter password" class="form-control">
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Login" name="submit">
                    <div class="text-field">
                        <p>Don't have an account yet?<a href="signup.php"> Sign up!</a> </p>
                    </div>
                    </div>
                </div>
                <!-- Error Messages --> 
                <?php
                
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p> Fill in all fields!<p>";
        }
        elseif ($_GET["error"] == "wrongLogin"){
            echo "<p>Incorrect email address/contact number or password!<p>";
        }
        elseif ($_GET["error"] == "wrongpassword"){
            echo "<p>Incorrect email address/contact number or password!<p>";
        }
    }
    
?>
            </div>
            
        </form>
        
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
</body>

    

