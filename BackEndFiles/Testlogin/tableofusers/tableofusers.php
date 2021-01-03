
<?php
    include_once '../includes/dbhandler.inc.php';
?>

<script type="text/javascript">
        window.history.forward();

        function noBack() {
            window.history.forward();
        }
    </script>

    
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8506910b5f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../html/adminstyle.css">
    <link rel="icon" type="image/png" href="../html/mulogo.png">
</head>

<body>
    <div class="wrapper">
        <!-- Navbar -->
        <div id="myHeader">
            <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-between">
                <a class="navbar-brand " href="../index.php">
                    <img src="../html/mulogo.png" width="50" height="50" class="d-inline-block align-middle" alt="">
                    <span class="font-weight-bold">Mark-Up</span>
                </a>
                <button class="navbar-toggler py3" data-toggle="collapse" data-target="#navbarMenu" aria-expanded="false" aria-controls="navbarMenu">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                <a href="../includes/logout.inc.php">
                
                    <div class="btn btn-outline-dark myBtn2 mb-3 mb-md-0" ><b>Logout</b></div>
                </a>
            </nav>
        </div>
        <!-- Sidebar -->
        <div class="container-fluid bg-light p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 sidebar pl-0 py-lg-5">
                        <nav class="navbar navbar-expand-lg navbar-dark py-0 font-weight-bold pl-0">

                            <div class="collapse navbar-collapse" id="navbarMenu">

                                <ul class="navbar-nav flex-column w-100 panel-group py-3" id="accordion">
                                    <li class="nav-item mx-3 my-2">
                                        <a href="tableofusers.php" class="link-effect text-light"><i class="far fa-fw fa-user"></i><span class="ml-1 active">Users</span></a>
                                    </li>
                                    <li class="nav-item mx-3 my-2">
                                        <a href="#" class="link-effect text-light"><i class="far fa-fw fa-list-alt"></i><span class="ml-1">Items</span></a>
                                    </li>
                                    <li class="nav-item mx-3 my-2">
                                        <a href="#" class="link-effect text-light"><i class="far fa-fw fa-clipboard"></i><span class="ml-1">Bidding Thread</span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- Table -->

                    
                    <div class="col-xl-10 col-lg-9 p-5" id="contents">
                        
                        <table id="datable" class="table table-hover table-bordered table-light table-sm" cellspacing="0" width="100%">
                            <thead>
                                
                                <tr class="table-primary">
                                    <th scope="col">User ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions
                                        <span class="table-add float-right" title="Add New User"><a href="#!" class="text-success"><i
                                            class="fas fa-plus fa-1x" aria-hidden="true"></i></a>
                                        </span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                            
                            $sql = "SELECT * FROM accounts;";
                            $result = mysqli_query($conn, $sql);
                            $resulCheck = mysqli_num_rows($result);
    
                            if($resulCheck > 0){
                            while($row = mysqli_fetch_assoc($result)){
                            echo "<tr><td>" . $row['ID'] . "";
                            echo "</td><td>" . $row['First_Name'] . " "; 
                            echo $row['Last_Name']. "<td>" ; 
                            echo $row['Email'] . "";
                            echo "<td>" .$row['Contact_Num'] . "<td>";
                            echo $row['Status'] ."<td>";
                            echo "
                                <button type='button' class='btn btn-success'><i class='fas fa-edit'></i></button>
                                <button type='button' class='btn btn-danger'><i class='far fa-trash-alt'></i></button>
                            <tr>";
            
                             }     
                            }
    
                            ?>
                                                                                                                 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="container-fluid text-center text-light p-3 footer">
            <div class="text-dark">
                <a href="#myHeader" class="text-dark font-weight-bold text-decoration-none">Mark-Up &copy; All Rights Reserved 2020</a>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datable').DataTable();
         });
    </script>
    
    
    
</body>

</html>


