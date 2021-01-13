<?php
    include_once 'header.php';
    include_once '../Testlogin/navbars/navbarhome.php'
    
?>

<!-- Slideshow -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../Testlogin/Images/Carousel1.jpg" class="d-block w-100" alt="First">
                <div class="carousel-caption d-none d-md-block">
                    <h1>About us</h1>
                    <p>Mark-Up is a newly developed Auction System created by a team of 6 students in Technological University of the Philippines.</p>
                    <a href="shop.php" class="btn btn-primary mr-1">
                    Start Bidding Now
                </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../Testlogin/Images/Carousel2.jpg" class="d-block w-100" alt="Second">
                <div class="carousel-caption text-left d-none d-md-block">
                    <h3>How does it work?</h3>
                    <h5>Step 1: Lorem ipsum dolor sit amet. <br/> Step 2: Lorem ipsum dolor sit amet. <br/> Step 3: Lorem ipsum dolor sit amet.
                    </h5>
                    <a href="shop.php" class="btn btn-primary mr-1">
                    Start Bidding Now
                </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../Testlogin/Images/Carousel3.jpg" class="d-block w-100" alt="Third">
                <div class="carousel-caption text-right d-none d-md-block">
                    <h3>Got any question?</h3>
                    <a href="#" class="btn btn-primary mr-1">
                    F.A.Qs
                </a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <!-- Card deck -->
    <div class="card-deck">
        <div class="col-md-4">
            <div class="card text-center">
                <img class="card-img-top" src="../Testlogin/Images/Card1.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Women's</h4>
                    <a href="shop.php" class="btn btn-outline-info mr-1">Start Bidding Here</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <img class="card-img-top" src="../Testlogin/Images/Card2.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Men's</h4>
                    <a href="shop.php" class="btn btn-outline-info mr-1">Start Bidding Here</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <img class="card-img-top" src="../Testlogin/Images/Card3.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Miscellaneous</h4>
                    <a href="shop.php" class="btn btn-outline-info mr-1">Start Bidding Here</a>
                </div>
            </div>
        </div>
    </div>



<?php
    include_once 'footer.php'
?>