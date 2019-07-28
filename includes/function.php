<?php 
require_once 'conection.php';

// Sanitize user data 
function stripForm($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
// function for redirect 
function RedirectTo($link) {
    header("location: $link");
}
 // checking user is available or not
 function accountCheck($email) {
     global $con;
     $sql = "SELECT * FROM signup WHERE email = '$email';";
     $result = mysqli_query($con, $sql);
     if(mysqli_num_rows($result) > 0) {
         return true;
     }
     return false;
 }