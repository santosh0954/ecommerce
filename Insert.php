<?php
    include('includes/conection.php');
    include('includes/header.php');

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $first = $last = $email = $password = "";
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first = test_input($_POST["first_name"]);
        $last = test_input($_POST["last_name"]);
        $email = test_input($_POST["email"]);
        $password = password_hash($_POST["sign_password"], PASSWORD_DEFAULT);
        $address = test_input($_POST["address"]);
        $city = test_input($_POST["city"]);
        $state = test_input($_POST["state"]);
        $zip = test_input($_POST["zip"]);
      
     }


?>
<main class="container-fluid mt-5 p-3 pt-5">


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
              
                   $query = "INSERT INTO signup(firstname, lastname, email, password, address, city, state, zip) 
        VALUES ('$first', '$last', '$email', '$password', '$address', '$city', '$state', '$zip')";
                   if (mysqli_query($con, $query)) {
                       echo "<div class='alert alert-success'>successful signup</div>";
                   } else {
                       echo "<div class='alert alert-danger'>Error:". $query . "<br/>". mysqli_error($con) . "</div>";
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