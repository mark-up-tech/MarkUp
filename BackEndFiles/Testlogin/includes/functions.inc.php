<?php

function emptyInputSignup($fname, $lname, $contact, $email, $pwd, $pwdRepeat) {

    $result;

    if (empty($fname) || empty($lname) || empty($contact) || empty($email)  || empty($pwd) || empty($pwdRepeat))
    {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function  invalidfname($fname){
    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $fname )) {
        $result = true;
    }
    else{ 
        $result = false;
    }
    return $result;
}

function  invalidlname($lname){
    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $lname )) {
        $result = true;
    }
    else{ 
        $result = false;
    }
    return $result;
}

function  invalidcontact($contact){
    $result;

    if (!preg_match("/^[0-9]{11}+$/", $contact )) {
        $result = true;
    }
    else{ 
        $result = false;
    }
    return $result;
}

function  invalidEmail($email){
    $result;

    if  (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function  pwdMatch($pwd, $pwdRepeat){
    $result;

    if  ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function  emailExixst($conn, $email, $contact ){
   $sql = "SELECT * FROM accounts WHERE Email = ? OR Contact_Num = ?;";
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "si", $email, $contact);
   mysqli_stmt_execute($stmt);


   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData)){
    return $row;
   }
   else{
       $result = false;
       return $result;
   }

   mysqli_stmt_close($stmt);
}

function  createUser($conn, $fname, $lname, $contact, $email, $pwd){
    $sql = "INSERT INTO  accounts (First_Name, Last_Name, Contact_Num, Email, UserPwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
     header("location: ../signup.php?error=stmtfailed");
     exit();
    }
 

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssiss", $fname, $lname, $contact, $email, $hashedPwd);
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt);
        header("location: ../signup.php");
        exit();
 }

 function emptyInputLogin($contact, $pwd) {

    $result;

    if (empty($contact) || empty($pwd))
    {
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $contact, $pwd) {
    $emailExists = emailExixst($conn, $contact, $contact );

    if($emailExists === false) {
        header("location: ../index.php?error=wrongLogin");
        exit();
    }

    $pwdhashed = $emailExists["UserPwd"];
    $checkPwd = password_verify($pwd, $pwdhashed);

    if($checkPwd === false) {
        header("location: ../index.php?error=wrongpassword");
        exit();
    }
    elseif ($checkPwd === true){
        session_start();
        $_SESSION["fname"] = $emailExists["First_Name"];
        $_SESSION["email"] = $emailExists["Email"];
        $_SESSION["lname"] = $emailExists["Last_Name"];
        $_SESSION["Role"] = $emailExists["Role"];
        
        header("location: ../index.php");
        exit();

    }
}
