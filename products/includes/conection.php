<?php
  $serverName = $_SERVER['SERVER_NAME'];
  $userName = "root";
  $password = "password";
  $db_name = "ecommerc";
  
  $con =  mysqli_connect($serverName, $userName, "", $db_name);
  //  if(!$con) {
  //    die("connection failed" . mysqli_connect_error());
  //  }
  //  else {
  //    echo "successful connection";
  //  }

  
?>