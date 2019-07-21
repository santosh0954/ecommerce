<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            height: 100%;
        }
    .col-sm-2 {
        height: 100%;
    }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>



    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Account
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Profile</a>
        <a class="dropdown-item" href="#">Home</a>
        <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i>Log Out </a>
    </div>

</nav>
    <div class="container-fluid">
       <div class="row">
           <div class="col-sm-2 bg-dark p-0">
               <div class="list-group list-group-flush">
                   <a href="" class="list-group-item bg-dark text-white py-5"> <span  class="rounded-circle overflow-hidden border d-inline-block align-middle mr-2" style="width: 75px; height: 75px;"> <img src="images/profile.jpg" alt="profile pic" width="80"> </span> Profile <i class="fa fa-circle text-sm text-success ml-2"></i></a>
                   <a href="" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa fa-dashboard mr-2"></i>Dashboard</a>
                   <a href="showdata.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa fa-database mr-2"></i>Database</a>
                   <a href="" class="list-group-item bg-dark text-white"><i class="fa fa-pencil mr-2"></i>Products </a>
                   <a href="" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa fa-envelope mr-2"></i>Orders <span class="badge badge-primary badge-pill">18</span></a>
                   <a href="" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa fa-comment mr-2"></i>comments <span class="badge badge-primary badge-pill">11</span></a>
                   <a href="" class="list-group-item list-group-item-action bg-dark text-white"><i class="fa fa-power-off mr-2"></i>Log Out</a>
                   
               </div>
            
           </div>
           <div class="col-sm-9">

           </div>
       </div> 
    </div>
</body>
</html>