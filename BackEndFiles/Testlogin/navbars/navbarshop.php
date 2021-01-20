<!-- Navbar -->
<nav
      id="MyHeader"
      class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow-sm p-3 mb-5 bg-white">
      <div class="container">
        <a class="navbar-brand" href="../index.php">
          <img
            src="../Images/mulogo.png"
            width="50"
            height="50"
            class="d-inline-block align-middle"
            alt=""
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../content/shop.php">Shop</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="../content/about.php">About</a>
            </li>
            <?php
                        
                        if (isset($_SESSION["Role"])) {
                            echo " <li class ='nav-item' ><a class = 'nav-link' href='../content/maintenance_page.php'>". $_SESSION['fname']. "</a></li>"; 
                            if ($_SESSION["Role"] == 0) {
                              echo "<li class ='nav-item' ><a class = 'nav-link' href='../Tables/tableofusers.php'>Tables</a></li>";
                          }
                            echo "<li class ='nav-item' ><a class = 'nav-link' href='../includes/logout.inc.php'>Log Out</a></li>";
                        }
                        else if(isset($_SESSION["email"])){
                            echo " <li class ='nav-item' ><a class = 'nav-link' href='../content/maintenance_page.php'>". $_SESSION['fname']. "</a></li>"; 
                            
                            echo "<li class ='nav-item' ><a class = 'nav-link' href='../includes/logout.inc.php'>Log Out</a></li>";
                        }   
                        else{
                            echo " </li><li class='nav-item'>
                            <a class='nav-link' type='button' href='../content/login.php'>Login</a>";
                            echo "<li><a class = 'nav-link' href='../content/signup.php'>Sign Up</a></li>";
                        }                     
                    ?>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>