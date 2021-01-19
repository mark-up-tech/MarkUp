<?php
 include_once '../content/header.php';
 include_once '../navbars/navbarshop.php';
 include_once '../includes/dbhandler.inc.php'
 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="../CSS/itemstyle.css" />
    <script src="../JS/homescript.js"></script>
    <link rel="icon" type="image/png" href="../Images/mulogo.png" />
    <title>Item Page</title>
    
</head>

<body>
    

    <!-- content -->
    <div class="container-fluid">
        <div class="row p-md-5">           
<?php

                                                                                    
            $sql = "SELECT * FROM ais;";
            $result = mysqli_query($conn, $sql);
             $resultCheck = mysqli_num_rows($result);
             
    
           if($resultCheck > 0){              
            if($row = mysqli_fetch_assoc($result))
                            $datetime1 = strtotime(date('Y-m-d H:i:s'));
                            $datetime2 = strtotime($row['End_Date']) ;
                            $secs = $datetime2 - $datetime1;// == <seconds between the two times>
                            $days = floor($secs / 86400);
                            $hours = floor(($secs % 86400)/3600);  {?>
            <div class="col-md-6">
                <img class="item-image w-100" src="../Images/shopItems/<?= $row['Image']?>.jpg" alt="Card image cap" />
            </div>
            <div class="col-md-6">
                <div class="container p-md-0 p-3">
                    <h1 class="mt-md-5 mt-2"><?= $row['Item_Description'] ?></h1>
                    <h3 class="text-secondary mt-3">
                        Seller: <span><?= $row['Auctioneer'] ?></span>
                    </h3>
                    <div class="row mt-md-5 mt-4">
                        <div class="col-md-5">
                            <h3>Time Left:</h3>
                        </div>
                        <div class="col-md-7">
                        
                            <h3><?= $days?> Day/s and <?= $hours?> Hrs</h3>
                        </div>
                        <div class="col-md-5">
                            <h3>Current Bid:</h3>
                        </div>
                        <div class="col-md-7">
                            <h3 id="currentbid">8000</h3>
                            <span id="newbid"></span>
                        </div>
                    </div>                      
                              
                     
                    <div class="row mt-md-5 mt-4">
                        <div class="col-12 d-flex justify-content-center">
                            <div class="col-md-7 input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary btn-md mr-2 rounded" id="minus-btn">
                      <i class="fa fa-minus"></i>
                    </button>
                                </div>
                                <input type="number" id="qty_input" class="form-control form-control-md text-center rounded" onkeydown="return false" value="500" min="500" />
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary btn-md ml-2 rounded" id="plus-btn">
                      <i class="fa fa-plus"></i>
                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-1 d-flex justify-content-center mb-4">
                            <button type="submit" onclick="setbid()" class="btn btn-primary col-md-3 col-6">
                            Bid
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid m-0 p-4">
        <h1 class="col-12 text-center mb-5 font-weight-bold">Item Description</h1>
        <div class="row">

            <div class="col-md-6 pl-5">
                <h6>Auction ID:<?= $row['Bidding_ID'] ?></h6>
                <h6>Item Condition: Mint Condition</h6>
                <h6>Dimensions: 12.99 x 8.66 x 5.91 inches; 1.21 Pounds</h6>
            </div>

            <div class="col-md-6 pl-5">
                <h6>Department: Mens</h6>
                <h6>Size: <?= $row['Size'] ?></h6>
                <h6>Item Location: Beijing, China</h6>
            </div>
        </div>
    </div>
<?php                                                   
            }     
           }   ?>

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
    
    <!-- Bidding function-->
    <script>$("#qty_input").prop("disabled", true);
$("#plus-btn").click(function() {
    $("#qty_input").val(parseInt($("#qty_input").val()) + 500);
});
$("#minus-btn").click(function() {
    $("#qty_input").val(parseInt($("#qty_input").val()) - 500);
    if ($("#qty_input").val() <= 500) {
        $("#qty_input").val(500);
    }


});
function setbid() {
    var x = parseInt(document.getElementById("currentbid").innerHTML)
    document.getElementById("currentbid").innerHTML = x +
        parseInt(document.getElementById("qty_input").value)
}
</script>
    


</body>

</html>