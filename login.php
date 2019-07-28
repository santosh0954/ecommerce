<?php
    require_once('includes/session.php');
    require_once('includes/conection.php');
    require_once('includes/function.php');

  
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $usermail = stripForm($_POST['login_name']);
     $login_pwd = $_POST['login_pass'];
     
     if (empty($usermail) || empty($password)) {
         $_SESSION['message'] = "<div class='text-danger'>All field must be filled out!</div>";
         RedirectTo("index.php?message=empty");
     }elseif(!accountCheck($usermail)) {
        $_SESSION['message'] = "<div class='text-danger'>Email is incorrect</div>";
        RedirectTo('index.php');
     } else {
         $query = "SELECT * FROM signup WHERE email = '$usermail'";

         $result = mysqli_query($con, $query);
         // varify data is available
         if (mysqli_num_rows($result) > 0) {
             // we have data so you can use it
             //store basic user data in some variable
             while ($row = mysqli_fetch_assoc($result)) {
                 $id = $row['id'];
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

                     // store data in session varable
                     $_SESSION['id'] = $id;
                     $_SESSION['first'] = $first;
                     $_SESSION['last'] = $last;
                     $_SESSION['email'] = $email;
                     $_SESSION['address'] = $address;
                     $_SESSION['city'] = $city;
                     $_SESSION['state'] = $state;
                     $_SESSION['zip'] = $zip;

                     header("location: index.php");
                    }else {
                        $_SESSION['message'] = "<div class='text-danger'>password is incorrect</div>";
                        header("location: index.php");
                 }
                }
                 elseif (password_verify($login_pwd, $hashpass)) {

                 // store data in session varable
                 $_SESSION['first'] = $first;
                 $_SESSION['email'] = $email;
                 $_SESSION['address'] = $address;
                 $_SESSION['city'] = $city;
                 $_SESSION['state'] = $state;
                 $_SESSION['zip'] = $zip;
                 $_SESSION['signup_date'] = $signup_date;

                 //and it will go to account log in nav bar index page
                 RedirectTo('index.php?login=success');
             } else {
                $_SESSION['message'] = "<div class='alert alert-danger'>You have entered wrong login credential. <button type= 'button' class= 'close' data-dismiss= 'alert'>&times;</button></div>";
             }
         } else {
            $_SESSION['message'] = "<div class='alert alert-danger'>Wrong email or password  you have typed.</div>";
         }
     }
 }




mysqli_close($con);



