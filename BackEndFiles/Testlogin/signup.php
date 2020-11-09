<?php
 include_once 'header.php'
?>

<script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>

    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="fname" placeholder="Firstname..."><br> </br>
        <input type="text" name="lname" placeholder="Lastname..."><br> </br>
        <input type="text" minlength="11" maxlength="11" name="contactno" placeholder="Contact No..."><br> </br>
        <input type="text" name="email" placeholder="Email..."><br> </br>
        <input type="password" name="pwd" placeholder="Password..."><br> </br>
        <input type="password" name="pwdrepeat" placeholder="Repeat password..."><br> </br>
        <button type="submit" name="submit">Sign Up</button><br> </br>
    </form>
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
        elseif ($_GET["error"] == "none"){
            echo "<p> You have signed Up!<p>";   
        }
    }
    
?>

<?php
 include_once 'footer.php'
?>