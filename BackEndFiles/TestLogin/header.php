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
        <title>MarkUp</title>
    </head>
    <body>
<!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <?php
            if(isset($_SESSION["lname"]) && ($_SESSION["fname"])){
                echo "<p class = 'p2'> Hello There " . $_SESSION["fname"]." ".$_SESSION["lname"]."!</p>";
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
                        if (isset($_SESSION["email"])){
                            echo " <li class ='nav-item' ><a class = 'nav-link' href='#'>". $_SESSION['fname']. "</a></li>";
                            echo "<li class ='nav-item' ><a class = 'nav-link' href='includes/logout.inc.php'>Log Out</a></li>";
                        }
                        else {
                            echo " <li class='nav-item'>
                            <a class='nav-link' type='button' data-toggle='modal' data-target='#MoLog'>Login</a>
                          </li>";
                            echo "<li><a class = 'nav-link' href='#'>Sign Up</a></li>";
                        }
                    ?>
                    
                  </ul>
            </div>
        </nav>
    