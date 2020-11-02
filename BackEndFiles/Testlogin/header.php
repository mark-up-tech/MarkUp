<?php

session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8506910b5f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="mulogo.png">
    <title>Mark Up</title>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img style="max-width:80px; margin-top: 5px;" src="mulogo.png"> Mark Up
            </a>

            <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarcol">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarcol">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <?php
                        if (isset($_SESSION["email"])){
                            echo " <li><a href='#'>Profile</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                        }
                        else {
                            echo "<li><a href='login.php'>Log In</a></li>";
                            echo "<li><a href='signup.php'>Sign Up</a></li>";
                        }
                    ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    