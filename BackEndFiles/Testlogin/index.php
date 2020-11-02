<?php
    include_once 'header.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
     <h1>Welcome!!</h1>
     
     <?php
     if(isset($_SESSION["ID"])){
        echo "<p>Hello There " . $_SESSION["ID"]."</p>";                 
             }
                        
                    ?>
     <?php

    ?>
</body>
</html>



<?php
    include_once 'footer.php'
?>