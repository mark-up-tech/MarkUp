<?php

if(isset($_POST["submit"])) {

    $contact = $_POST["contact"];
    $pwd= $_POST["pwd"];

    require_once 'dbhandler.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($contact, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }


    loginUser($conn, $contact, $pwd);
    
}
else{
    header("location: ../index.php");
    exit();
}