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
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidfname($fname) !== false) {
        header("location: ../signup.php?error=invalidfname");
        exit();
    }

    if (invalidlname($lname) !== false) {
        header("location: ../signup.php?error=invalidlname");
        exit();
    }

    if (invalidcontact($contact) !== false) {
        header("location: ../signup.php?error=invalidcontactno");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passworddontmatch");
        exit();
    }

    if (emailExixst($conn, $email, $contact) !== false) {
        header("location: ../signup.php?error=emailtaken");
        exit();
    }


    createUser($conn, $fname, $lname, $contact, $email, $pwd);

}
else{
    header("location: ../signup.php");
    exit();
}