<?php
 include_once 'header.php';
 include_once '../Testlogin/navbars/navbarshop.php';
 include_once '../Testlogin/includes/dbhandler.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" href="../Testlogin/CSS/shopstyle.css">
        <link rel="icon" type="image/png" href="../Testlogin/Images/mulogo.png">
        <title>Shop</title>
    </head>
    <body>
    
      <!-- Categories -->
      <div class="col-xl-10 col-lg-9" id="contents">   
        <form class="row">        
          <div class="col-md-3 ml-md-5 p-0">
            <select class="form-control">
              <option selected="selected">Default</option>
              <option>Women</option>
              <option>Men</option>
              <option>Kids</option>
            </select>
          </div>
        </form>
      </div>
      <!-- Card -->
      <div class="col-xl-10 col-lg-9 p-5" id="contents">             
                  <div class="row">                                       
        <?php
                                                                                    
            $sql = "SELECT * FROM ais;";
            $result = mysqli_query($conn, $sql);
             $resultCheck = mysqli_num_rows($result);
    
           if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){?>                      
                    <div class="col-md-4">
                        <div class="col-4 col-sm-10 card-deck">
                            <a href="itempage.php" class="card">
                              <img class="card-img-top" src="Images/shopItems/<?= $row['Image'] ?>.jpg" alt="Card image cap">
                          <div class="card-block">
                              <h4 class="card-title"> <?= $row['Item_Description'] ?> </h4>
                            <p class="card-text">Highest Ask:</br> <?= $row['Starting_Amount'] ?> </p>
                          </div>
                            </a>
                          </div>  
                      </div>                               
            <?php                                                   
            }     
           }   ?>
            </div>
              </div>
                                                                                        
    <!-- FOOTER -->
    <footer>
      <div class="container-fluid text-center text-light p-0 footer">
        <div class="footer-container">                         
          <p>Mark-Up &copy; All Rights Reserved 2020</p>
        </div>
     </div>
    </footer>    

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </body>
</html>