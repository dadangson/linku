<?php
session_start();
require '../config/functions.php';

// check login
if( isset($_POST['login']) ) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $result = mysqli_query( $conn, " SELECT * FROM users WHERE username = '$username'" );
  
  // check username
  if( mysqli_num_rows($result) ===1 ) {
    
    // check password
    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row['password']) ) {
      // set session
      $_SESSION['login'] = true;
      
      // check remember remember
      if( isset($_POST['remember']) ) {
        // creat cookie
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60); 
      }
      
      header("location:../index.php");
      exit;
    }
  }
  $error = true;
}


?>