<?php
   
    require_once('includes/header.php');

  
    $first = $last = $email = $password = "";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first = stripForm($_POST["first_name"]);
        $last = stripForm($_POST["last_name"]);
        $email = stripForm($_POST["email"]);
        $password = password_hash($_POST["sign_password"], PASSWORD_DEFAULT);
        $address = stripForm($_POST["address"]);
        $city = stripForm($_POST["city"]);
        $state = stripForm($_POST["state"]);
        $zip = stripForm($_POST["zip"]);
      
     }


?>
<main class="container-fluid mt-5 p-3 pt-5">


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(empty($first) || empty($last) || empty($email) || empty($password) || empty($state) || empty($city) || empty($zip)) {
         $_SESSION['message'] = "all field must be filled out";
        RedirectTo('index.php?message=empty');

      }elseif(isset($_POST['terms'])== false) {
        
        RedirectTo('index.php?message=termsError');
      }else {
              
                   $query = "INSERT INTO signup(firstname, lastname, email, password, address, city, state, zip) 
        VALUES ('$first', '$last', '$email', '$password', '$address', '$city', '$state', '$zip')";
                   if (mysqli_query($con, $query)) {
                       echo "<div class='alert alert-success'>successful signup
                       <p><small>automaticaly going to home page if not <a href='index.html'>Click here</a></small></p>
                       </div>";
                   } else {
                       echo "<div class='alert alert-danger'>Error:". $query . "<br/>". mysqli_error($con) . "<p><small>automaticaly going to home page if not <a href='index.html'>Click here</a></small></p></div>";
                   }
               
           }
          }

?>





</main>
<script>
  setTimeout(function () {
   window.location.href= 'index.php'; // the redirect goes here

},5000);
</script>

<?php
 include('includes/footer.php');
?>