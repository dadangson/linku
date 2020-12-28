<?php
require '../config/functions.php';

if( isset($_POST['login']) ) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $result = mysqli_query( $conn, " SELECT * FROM users WHERE username = '$username'" );
  
  // check username
  if( mysqli_num_rows($result) ===1 ) {
    
    // check password
    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row['password']) ) {
      header("location:../index.php");
      exit;
    }
  }
  $error = true;
}


?>