<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="html/style.css">
    <link rel="icon" type="image/png" href="mulogo.png">
    <title>Mark Up</title>
</head>


<body>  

     

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <?php
     
     if(isset($_SESSION["lname"]) && ($_SESSION["fname"])){
         
        echo "<h2 class='header2'> Hello There " . $_SESSION["fname"]." ". $_SESSION["lname"]."!</h2>";       
        unset($_SESSION["lname"]);
         }        
    ?>
 
        <div class="container">
            <a class="navbar-brand" href="index.php">MarkUp</a>
            <div class="searchbar">
                <input type="text" placeholder="search">
                <div class="icon">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    
                    <?php
                        
                        if (isset($_SESSION["email"])) {
                            echo " <li class ='nav-item' ><a class = 'nav-link' href='#'>". $_SESSION['fname']. "</a></li>"; 
                            echo "<li class ='nav-item' ><a class = 'nav-link' href='includes/logout.inc.php'>Log Out</a></li>";
                        }
                        else {
                            echo " </li><li class='nav-item'>
                            <a class='nav-link' type='button' data-toggle='modal' data-target='#MoLog'>Login</a>";
                            echo "<li><a class = 'nav-link' href='#'>Sign Up</a></li>";
                        }                        
                    ?>
                </ul>
            </div>
    </nav>
    <!-- Modal Login -->

    <div id="MoLog" class="modal fade">
        <div class="modal-dialog modal-login modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="avatar">
                    <img src="mulogo.png" alt="">
                    <h4 class="modal-title">Login</h4>
                </div>
                <form action="includes/login.inc.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="Login">
                    </div>
                    <p class="font-small blue-text d-flex justify-content-center">Don't have an account?<a href="#" class="blue-text ml-1">Sign up here</a></p>
                </form>
                <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p> Fill in all fields!<p>";
        }
        elseif ($_GET["error"] == "wrongLogin"){
            echo "<script>alert('Incorrect email address/contact number or password!') </script>";
        }
        elseif ($_GET["error"] == "wrongpassword"){
            echo "<script>alert('Incorrect email address/contact number or password!') </script>";
        }
    }
    
?>
    <script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>

            </div>
        </div>
    </div>

    
    