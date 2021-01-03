<?php
 include_once 'header.php'
?>
<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <link rel="icon" type="image/png" href="/Images/mulogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="html/signupstyle.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#MoLog">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="signup.php">SIGN UP</a>
                    </li>
                </ul>
            </div>
    </nav>

    <section>
        <div class="imgBx">
            <img src="html/Sign Up.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Create your Mark-Up Account</h2>
                <form action="includes/signup.inc.php" method="post">
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
                        <p>By clicking "SIGN UP", I agree to Mark-Up's <a href="#">Terms and Conditions</a> </p>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="SIGN UP" name="submit">
                    </div>
                    <div class="inputBx">
                        <p>Already a member? <a data-toggle="modal"  href="#MoLog">Login here</a> </p>
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