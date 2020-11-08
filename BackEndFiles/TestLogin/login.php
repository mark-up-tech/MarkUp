<?php
 include_once 'header.php'
?>

<script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>
    
    <h2>Log  In</h2>
    <form action="includes/login.inc.php" method="post">
        <input type="text" minlength="11" maxlength="99" name="contact" placeholder="Contact no/Email..."><br> </br>
        <input type="password" name="pwd" placeholder="Password..."><br> </br>
        <button type="submit" name="submit">Log In</button>
    </form>

    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p> Fill in all fields!<p>";
        }
        elseif ($_GET["error"] == "wrongLogin"){
            echo "<p> Contact / Email Does not Exist!<p>";
        }
        elseif ($_GET["error"] == "wrongpassword"){
            echo "<p> Wrong Password!<p>";
        }
    }
    
?>

<?php
 include_once 'footer.php'
?>