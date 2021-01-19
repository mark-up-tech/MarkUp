<header class="container-fluid header-custom px-0" style="width: 100%">
    <nav class="navbar navbar-expand-md navbar-custom2 p-0">
        <div id="navbar" style="background: url(navbar-bg.jpg); background-size: cover; background-position: center">
            <a class="navbar-brand logo" id="logo" href="home.php">
                <img src="../Images/mulogo.png" class="mx-auto my-2" style="height: 65px" />
            </a>
            <button class="navbar-toggler custom-toggler my-3" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" onclick="changeHeight()" style="float: right">
                <span class="navbar-toggler-icon "></span>
            </button>

            <div class="collapse navbar-collapse my-2 py-2" id="collapsibleNavbar"> 
                <ul class="navbar-nav navbar-custom2 mr-auto my-auto">
                    <li class="nav-item active"><a class="nav-link mx-1 px-3 py-3" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link mx-1 px-3 py-3" href="../content/shop.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link mx-1 px-3 py-3" href="../content/about.php">About</a></li>
                    <?php                       
                        if (isset($_SESSION["Role"])) {
                            echo " <li class ='nav-item' ><a class = 'nav-link mx-1 px-3 py-3' href='../content/maintenance_page.php'>". $_SESSION['fname']. "</a></li>"; 
                            if ($_SESSION["Role"] == 0) {
                                echo "<li class ='nav-item' ><a class = 'nav-link mx-1 px-3 py-3' href='../tables/tableofusers.php'>Tables</a></li>";
                            }
                            echo "<li class ='nav-item' ><a class = 'nav-link mx-1 px-3 py-3' href='../includes/logout.inc.php'>Log Out</a></li>";
                        }
                          else if(isset($_SESSION["email"])){
                            echo " <li class ='nav-item' ><a class = 'nav-link mx-1 px-3 py-3' href='../content/maintenance_page.php'>". $_SESSION['fname']. "</a></li>"; 
                            
                            echo "<li class ='nav-item' ><a class = 'nav-link mx-1 px-3 py-3' href='../includes/logout.inc.php'>Log Out</a></li>";
                        }   
                          else{
                            echo " </li><li class='nav-item'>
                            <a class='nav-link mx-1 px-3 py-3' type='button' href='../content/login.php'>Login</a>";
                            echo "<li><a class = 'nav-link mx-1 px-3 py-3' href='../content/signup.php'>Sign Up</a></li>";
                        }                     
                    ?>
                </ul>
                <form class="form-inline form-search-custom" action="#" method="post">
                    <input name="search-items" id="search" class="form-control search-custom" type="text" placeholder="Search" autocomplete="off" aria-label="Search">
                    <button type="submit" class="btn search-button ml-2 pt-1 pb-2 px-3" name="search_button" id="search_button">Search</button>
                    <div class="search-result"></div> 
                </form>
            </div>

            <div class="container-fluid">
                <div class="searchbar-middle d-flex justify-content-center align-items-center" style="height: 60vh; width: 100vw">
                    <form class="form-inline form-search-custom px-0" action="#" method="post">
                        <input name="search-items" id="search" class="form-control search-custom-middle px-4" type="text" placeholder="&#61442; Search" autocomplete="off" aria-label="Search" style="width: 50vw">
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("navbar").style.padding = "0px 30px";
            document.getElementById("navbar").style.height = "90px";
            document.getElementById("navbar").style.background = "rgba(0,0,0,0.8)";
        } else {
            document.getElementById("navbar").style.padding = "30px 50px";
            document.getElementById("navbar").style.height = "100vh";
            document.getElementById("navbar").style.background = "url(../images/navbar-bg.jpg)";
            document.getElementById("navbar").style.backgroundSize = "cover";
            document.getElementById("navbar").style.backgroundPosition = "center";
        }
    }

    function changeHeight(){
        var x = document.getElementById("navbar");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            if (x.style.height === "90px") {
                x.style.height = "375px";
            } else {
                x.style.height = "90px";
            }
        
        }
    }
</script>