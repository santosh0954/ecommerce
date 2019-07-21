<?php
  if(isset($_COOKIE[ session_name()])) {
      setcookie( session_name(), '', time()-86400, '/');
  }
  session_unset();
  session_destroy();

  // session_distroy($_SESSION['first'],$_SESSION['last'], $_SESSION['email'], $_SESSION['address'], $_SESSION['city'], $_SESSION['state'], $_SESSION['zip'], $_SESSION['signup_date']);

  header('location: index.php');


?>