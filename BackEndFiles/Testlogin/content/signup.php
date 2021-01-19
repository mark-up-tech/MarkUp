<?php
 include_once '../content/header.php';
 include_once '../navbars/navbarsignup.php'
?>
<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="icon" type="image/png" href="../Images/mulogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/signupstyle.css">
</head>


        <!-- Sign-up Form--> 
    <section>
        <div class="imgBx">
            <img src="../Images/Sign Up.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Create your Mark-Up Account</h2>
                <form action="../includes/signup.inc.php" method="post">
                    <div class="inputBx">
                        <input type="text" name="fname" placeholder="First Name">
                    </div>
                    <div class="inputBx">
                        <input type="text" name="lname" placeholder="Last Name">
                    </div>
                    <div class="inputBx">
                        <input title="Number Must Start With 09" type="text" pattern="09.+" minlenght="11" maxlength ="11" name="contactno" placeholder="Mobile No.">
                    </div>
                    <div class="inputBx">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="inputBx">
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <div class="inputBx">
                        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    </div>
                        <!-- Error Messages -->
                     <?php
                     if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                         echo "<p> Fill in all fields!<p>";
                    }
                    elseif ($_GET["error"] == "invalidfname"){
                        echo "<p> Fill in Firstname field!<p>";
                    }
                    elseif ($_GET["error"] == "invalidlname"){
                        echo "<p> Fill in Lastname field!<p>";
                    }
                    elseif ($_GET["error"] == "invalidcontactno"){
                        echo "<p> Contact No. Must be 11 digits!<p>";
                    }
                    elseif ($_GET["error"] == "invalidemail"){
                        echo "<p> Choose a proper email!<p>";
                    }
                    elseif ($_GET["error"] == "passworddontmatch"){
                        echo "<p> Passwords doesn't match!<p>";
                    }
                    elseif ($_GET["error"] == "stmtfailed"){
                        echo "<p> Something went wrong, try Again!<p>";
                    }
                    elseif ($_GET["error"] == "emailtaken"){
                        echo "<p> Email already taken!<p>";
                    }
                    elseif ($_GET["error"] == "contacttaken"){
                        echo "<p> Contact Number already taken!<p>";
                    }
                    elseif ($_GET["error"] == "none"){
                        echo "<p> You have signed Up! Click the Log-in to Login!<p>";   
                    }
                     }
    
                    ?>
                    <div class="inputBx">
                        <p>By clicking "SIGN UP", I agree to Mark-Up's <a href="maintenance_page.php">Terms and Conditions</a> </p>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="SIGN UP" name="submit">
                    </div>
                    <div class="inputBx">
                        <p>Already a member? <a class="link"  href="login.php">Login here</a> </p>
                    </div>
                    
                </form>
            </div>
        </div>
        
    </section>
</body>


</html>
<?php
 include_once 'footer.php'
?>