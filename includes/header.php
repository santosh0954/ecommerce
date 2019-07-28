<?php 
  require_once('includes/session.php');
  require_once('includes/conection.php');
  require_once('includes/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="author" content="Santosh Jha" />
  <meta name="description" content="e-mart, online shopping, low cost shopping" />
  <meta name="keyword" content="online shopping, e-mart, clothes, shoes, electronics, mobile, best offer" />
  <title>One deals</title>
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/bootstrap.min.js"></script>
</head>

<body id="to-top">
  
<?php if(Isset($_SESSION['id'])) {
    $email = $_SESSION['email'];
    $count = "SELECT * FROM cart WHERE email = '$email'";
    $result = mysqli_query($con,$count);
      $qq = mysqli_num_rows($result);

  ?>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success text-bold">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand ml-0 px-1" href="index.php"><img src="images/ecommerce2.png" alt="website logo" width="120px"></a>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle cat" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu bg-success mt-1 cat-m" aria-labelledby="navbarDropdown">
            <?php 
                  $q = "select menu from categories";
                  $result = mysqli_query($con, $q);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<a class='dropdown-item' href='".$row ['menu'].".php'>".$row ['menu'] ."</a>";
                  }
              ?>
            </div>
          </li>
        </ul>
        <!---this is search bar-------->
        <form class="form-inline my-md-2 my-lg-0 mx-auto w-75 w-md-100">
          <div class="input-group w-75 mx-md-auto search">
            <div class="input-group-prepend">
              <button class="btn btn-outline-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
              <div class="dropdown-menu search-pre">
                <a class="dropdown-item" href="#">All</a>
                <a class="dropdown-item" href="#">Men</a>
                <a class="dropdown-item" href="#">Women</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Electronics</a>
              </div>
            </div>
            <input type="search" class="form-control text-success" aria-label="Text input with dropdown button" placeholder="Search your item here">
            <div class="input-group-append">
              <button class="btn  btn-outline-light my-2 my-sm-0 " id="basic-addon2" type="submit">Search</button>
            </div>
          </div>
        </form>
      </div>
      <!---------this is login account------->
      <div class="account">
          <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle cat" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hii <?php echo ucwords( $_SESSION['first'] ); ?>
            </a>
            <div class="dropdown-menu bg-success mt-1 cat-m" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="profile.php"><i class="fa fa-user mr-2"></i>Profile</a>
              <?php if($_SESSION['email']== "santoshvns33@gmail.com") {
               echo "<a class='dropdown-item' href='admin/showData.php'><i class='fa fa-gear mr-2'></i>Admin</a>";
              } ?>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out mr-2"></i>Log Out</a>
            </div>
        </div>
      </div>
      <div class="ml-3">
        <span class="badge badge-warning  text-white text-bold badge-pill"><?=$qq?></span>
      <a href="cart.php" class="text-white cart-icon"><i class="fa fa-shopping-cart" style="font-size: 120%;"></i> Cart</a>
      
      </div>
    </div>
  </nav>
  <main class="container-fluid px-2" style="padding-top: 70px;" >
  <?php } else {?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success text-bold">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand ml-0 px-1" href="index.php"><img src="images/ecommerce2.png" alt="website logo" width="120px"></a>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle cat" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu bg-success mt-1 cat-m" aria-labelledby="navbarDropdown">
              <?php include('includes/conection.php');
                  $q = "select * from categories";
                  $result = mysqli_query($con, $q);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<a class='dropdown-item' href='".$row ['menu_link'] . "' >".$row ['menu'] ."</a>";
                  }
              ?>
            </div>
          </li>
        </ul>
        <!---this is search bar-------->
        <form class="form-inline my-2 my-lg-0 mx-auto w-75 w-md-100 w-sm-100">
          <div class="input-group w-75 mx-auto search">
            <div class="input-group-prepend">
              <button class="btn btn-outline-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
              <div class="dropdown-menu search-pre">
                <a class="dropdown-item" href="#">All</a>
                <a class="dropdown-item" href="#">Men</a>
                <a class="dropdown-item" href="#">Women</a>
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Electronics</a>
              </div>
            </div>
            <input type="search" class="form-control text-success" aria-label="Text input with dropdown button" placeholder="Search your item here">
            <div class="input-group-append">
              <button class="btn  btn-outline-light my-2 my-sm-0 " id="basic-addon2" type="submit">Search</button>
            </div>
          </div>
        </form>
      </div>
      <!---------this is login account------->
      <div class="account">
        <a href="#" data-toggle="modal" data-target=".logIn"><i class="fa fa-sign-in mr-1"></i>Login</a> <span class="text-success">OR</span> <a href="#" data-toggle="modal" data-target=".signUp">Signup</a>
      </div>
      <div class="ml-3">
        <span class="badge badge-warning  text-white text-bold badge-pill">0</span>
      <a href="cart.php" class="text-white cart-icon"><i class="fa fa-shopping-cart" style="font-size: 120%;"></i> Cart</a>
      
      </div>
    </div>
  </nav>
  <main class="container-fluid px-2" style="padding-top: 70px;" >
  <?php }
  
  ?>
  <!-----------navigation ending------->