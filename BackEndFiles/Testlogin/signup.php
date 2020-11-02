<?php
 include_once 'header.php'
?>

    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="fname" placeholder="Firstname...">
        <input type="text" name="lname" placeholder="Lastname...">
        <input type="text" name="contactno" placeholder="Concact No...">
        <input type="text" name="email" placeholder="Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <button type="submit" name="submit">Sign Up</button>
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
        elseif ($_GET["error"] == "invalidcontact"){
            echo "<p> Choose a proper contact no!<p>";
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
        elseif ($_GET["error"] == "usernametaken"){
            echo "<p> Username already taken!<p>";
        }
        elseif ($_GET["error"] == "none"){
            echo "<p> You have signed Up!<p>";
        }
    }
?>

<?php
 include_once 'footer.php'
?>