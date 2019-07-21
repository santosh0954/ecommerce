<?php
  session_start();
  include('../includes/conection.php');

  $query = "SELECT * FROM signup";
  $result = mysqli_query($con, $query);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>Data Display</title>
  </head>
  <body>
    <?php
        if (isset($_SESSION["email"]) && $_SESSION["email"] == "santoshvns33@gmail.com") {?>
          <div class="jumbotron text-center bg-dark text-white p-3">
        <h1>My Ecommerce Data</h1>
        <p class="lead"><?php echo "Hi" ." ". "Admin"." ". $_SESSION['first']. "!"; ?></p>
        <p class="lead"><?php echo "Your Email" ." ". $_SESSION['email']; ?></p>
      </div>
      <?php
            if (mysqli_num_rows($result) > 0) {
                // we got some data
                // output the data
                echo "<div class='container text-capitalize'><table class = 'table table-bordered table-hover text-center table-dark table-striped'><tr> <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Address</th> <th>City</th> <th>State</th> <th> Zip </th> <th> Signup Date and time </th>
    </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" .$row["firstname"] . "</td><td> " . $row["lastname"] . "</td><td> " . $row["email"] . "</td><td> " . $row["address"] . "</td><td> " . $row["city"] . "</td><td> " . $row["state"] . "</td><td> "
      . $row["zip"] . "</td><td>". $row["signup_date"] . "</td></tr>";
                }
                echo "</table><p><a class='btn btn-success mr-2' href='../index.php'>home</a>";
                echo "<a class='btn btn-danger' href='../logout.php'>Log out</a></p></div>";
            }
        }else {
          echo "<div class='jumbotron bg-success text-center text-white display-4'> You have to login as a Administrator to view this page  </div>";
        }
    

mysqli_close($con);
      
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>