<?php

if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $contact = $_POST["contactno"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbhandler.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($fname, $lname, $contact, $email, $pwd, $pwdRepeat) !== false) {
        header("location: ../content/signup.php?error=emptyinput");
        exit();
    }

    if (invalidfname($fname) !== false) {
        header("location: ../content/signup.php?error=invalidfname");
        exit();
    }

    if (invalidlname($lname) !== false) {
        header("location: ../content/signup.php?error=invalidlname");
        exit();
    }

    if (invalidcontact($contact) !== false) {
        header("location: ../content/signup.php?error=invalidcontactno");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../content/signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../content/signup.php?error=passworddontmatch");
        exit();
    }

    if (emailExist($conn, $email, $contact) !== false) {
        header("location: ../content/signup.php?error=emailtaken");
        exit();
    }

    if (contactExist($conn, $contact) !== false) {
        header("location: ../content/signup.php?error=contacttaken");
        exit();
    }


    createUser($conn, $fname, $lname, $contact, $email, $pwd);

}
else{
    header("location: ../content/login.php");
    exit();
}