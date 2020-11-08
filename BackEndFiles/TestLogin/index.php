<?php
    include_once 'header.php';
    
?>

<!-- Modal Login -->

<div id="MoLog" class="modal fade">
	<div class="modal-dialog modal-login modal-dialog-centered" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
                <div class="avatar">
                    <img src="mulogo.png" alt="">
				<h4 class="modal-title">Login</h4>
                </div>
				<form action="includes/login.inc.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" minlength="11" maxlength="99" name= "contact" placeholder="Contact no/Email..." required="required">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name = "pwd" placeholder="Password..." required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" name= "submit" value="Login">
                    </div>
                    <p class="font-small blue-text d-flex justify-content-center">Don't have an account?<a href="#" class="blue-text ml-1">Sign up here</a></p>
                
                </form>
                
                		<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p> Fill in all fields!<p>";
        }
        elseif ($_GET["error"] == "wrongLogin"){
            echo "<p> Incorrect email address/contact number or password!<p>";
        }
        elseif ($_GET["error"] == "wrongpassword"){
            echo "<p> Incorrect email address/contact number or password!<p>";
        }
    }
    
    
?>		
<script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>
		</div>
	</div>
</div> 

    

<!-- Slideshow -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="1.jpg" class="d-block w-100" alt="First">
            <div class="carousel-caption d-none d-md-block">
                <h1>About us</h1>
                <p>Mark-Up is a newly developed Auction System created by a team of 6 students in Technological University of the Philippines.</p>
                <a href="#" class="btn btn-primary mr-1">
                    Start Bidding Now
                </a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="2.jpg" class="d-block w-100" alt="Second">
              <div class="carousel-caption text-left d-none d-md-block">
                <h3>How does it work?</h3>
                <h5>Step 1: Lorem ipsum dolor sit amet. <br/>
                    Step 2: Lorem ipsum dolor sit amet. <br/>
                    Step 3: Lorem ipsum dolor sit amet.
                </h5>
                <a href="#" class="btn btn-primary mr-1">
                    Start Bidding Now
                </a>
              </div>
          </div>
          <div class="carousel-item">
            <img src="3.jpg" class="d-block w-100" alt="Third">
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
          <img class="card-img-top" src="4.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Women's</h4>
          <a href="#" class="btn btn-outline-info mr-1">Start Bidding Here</a>
          </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card text-center">
          <img class="card-img-top" src="5.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Men's</h4>
          <a href="#" class="btn btn-outline-info mr-1">Start Bidding Here</a>
          </div>
        </div>  
        </div>
        <div class="col-md-4">
        <div class="card text-center">
          <img class="card-img-top" src="6.jpg" alt="Card image cap">
          <div class="card-block">
            <h4 class="card-title">Miscellaneous</h4>
          <a href="#" class="btn btn-outline-info mr-1">Start Bidding Here</a>      
          </div>
        </div>  
        </div>
      </div>


<?php
    include_once 'footer.php'
?>
