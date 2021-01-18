<?php include 'home_header.php';?>

    <body>
        <?php include 'navbar2.php'; ?>

        <!-- INPUT CONTENT HERE -->
        <main class="container-fluid mb-5">
            <div class="card-container mx-auto" style="width: 90%; margin-top: 45vh"> <!-- navbar - 25px, navbar2 - 40-50vh -->
                <h3>Browse our Auction</h3>
                <div class="row d-flex justify-content-center mx-auto">
                    <div class="col-md-3 card container mx-3 my-3 px-0">
                        <div class="image-container">
                            <img src="white.jpg" class="item-image" alt="Item" />
                        </div>
                        <div class="bidding my-3">
                            <h4>Women's</h4>
                            <a href="../shop.php" class="btn mx-auto d-flex justify-content-center">Start Bidding Here</a>
                        </div>
                    </div>

                    <div class="col-md-3 card container mx-3 my-3 px-0">
                        <div class="image-container">
                            <img src="shoes1.png" class="item-image" alt="Item" />
                        </div>
                        <div class="bidding my-3">
                            <h4>Men's</h4>
                            <a href="../shop.php" class="btn mx-auto d-flex justify-content-center">Start Bidding Here</a>
                        </div>
                    </div>

                    <div class="col-md-3 card container mx-3 my-3 px-0">
                        <div class="image-container">
                            <img src="shoes2.png" class="item-image" alt="Item" />
                        </div>
                        <div class="bidding my-3">
                            <h4>Kid's</h4>
                            <a href="../shop.php" class="btn mx-auto d-flex justify-content-center">Start Bidding Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include 'footer.php';?>
    </body>

</html>