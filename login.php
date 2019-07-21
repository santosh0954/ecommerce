<?php
    include('includes/conection.php');

    function stripForm($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $usermail = stripForm($_POST['login_name']);
     $login_pwd = $_POST['login_pass'];
    

     $query = "SELECT * FROM signup WHERE email = '$usermail'";

     $result = mysqli_query($con, $query);
     // varify data is available
     if (mysqli_num_rows($result) > 0) {
         // we have data so you can use it
         //store basic user data in some variable
         while ($row = mysqli_fetch_assoc($result)) {
             $first = $row['firstname'];
             $last = $row['lastname'];
             $email = $row['email'];
             $address = $row['address'];
             $city = $row['city'];
             $state = $row['state'];
             $zip = $row['zip'];
             $signup_date = $row['signup_date'];
             $hashpass = $row['password'];
         }
         if ($usermail == "santoshvns33@gmail.com") {
             if (password_verify($login_pwd, $hashpass)) {
           
            // correct login details

                 session_start();
         
                 // store data in session varable
                 $_SESSION['first'] = $first;
                 $_SESSION['last'] = $last;
                 $_SESSION['email'] = $email;
                 $_SESSION['address'] = $address;
                 $_SESSION['city'] = $city;
                 $_SESSION['state'] = $state;
                 $_SESSION['zip'] = $zip;

                 header("location: index.php");
             } else {
                 $login_error = "<div class='alert alert-danger display-5'>Wrong password you are trying to login as admin <button type='button' class='close' data-dismiss='alert'>&times;</button></div>";
             }
         }else if (password_verify($login_pwd, $hashpass)) {
             session_start();

             // store data in session varable
             $_SESSION['first'] = $first;
             $_SESSION['email'] = $email;
             $_SESSION['address'] = $address;
             $_SESSION['city'] = $city;
             $_SESSION['state'] = $state;
             $_SESSION['zip'] = $zip;
             $_SESSION['signup_date'] = $signup_date;

             //and it will go to account log in nav bar index page
             header("location: index.php") ;
         } else {
             $login_error = "<div class='alert alert-danger'>You have entered wrong login credential. <button type= 'button' class= 'close' data-dismiss= 'alert'>&times;</button></div>";
         }
     } else {
         $login_error = "<div class='alert alert-danger'>Wrong email or password  you have typed.</div>";
     }
 }


mysqli_close($con);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Data Display</title>
  </head>
  <body>
      <?php
      if (isset($login_error)) {
          echo $login_error;
      }
      ?>
   <script>
  setTimeout(function () {
   window.location.href= 'index.php'; // the redirect goes here

},5000);
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>