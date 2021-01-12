<?php
 include_once '../Testlogin/header.php';
 include_once '../Testlogin/navbars/navbarshop.php'
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
    <link rel="stylesheet" href="../Testlogin/CSS/itemstyle.css" />
    <link rel="icon" type="image/png" href="../Testlogin/Images/mulogo.png" />
    <title>Item Page</title>
</head>

<body>
    

    <!-- content -->
    <div class="container-fluid">
        <div class="row p-md-5">
            <div class="col-md-6">
                <img class="item-image w-100" src="../Testlogin/Images/Product3.png" alt="Card image cap" />
            </div>

            <div class="col-md-6">
                <div class="container p-md-0 p-3">
                    <h1 class="mt-md-5 mt-2">Nike Jordan 1 Retro Black Toe</h1>
                    <h3 class="text-secondary mt-3">
                        Seller: <span>Franco Arambulo</span>
                    </h3>
                    <div class="row mt-md-5 mt-4">
                        <div class="col-md-5">
                            <h3>Time Left:</h3>
                        </div>
                        <div class="col-md-7">
                            <h3>12 hours, 05 minutes</h3>
                        </div>

                        <div class="col-md-5">
                            <h3>Current Bid:</h3>
                        </div>
                        <div class="col-md-7">
                            <h3>PHP 10,000</h3>
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
                                <input type="number" id="qty_input" class="form-control form-control-md text-center rounded" value="10000" min="10000" />
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary btn-md ml-2 rounded" id="plus-btn">
                      <i class="fa fa-plus"></i>
                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-1 d-flex justify-content-center mb-4">
                            <button type="submit" class="btn btn-primary col-md-3 col-6">
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
                <h6>Auction ID: 123456</h6>
                <h6>Item Condition: Mint Condition</h6>
                <h6>Dimensions: 12.99 x 8.66 x 5.91 inches; 1.21 Pounds</h6>
            </div>

            <div class="col-md-6 pl-5">
                <h6>Department: Mens</h6>
                <h6>Size: 11 Mens</h6>
                <h6>Item Location: Beijing, China</h6>
            </div>
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

    <script src="/JS/homescript.js"></script>
</body>

</html>