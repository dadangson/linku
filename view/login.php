<?php
session_start();

// check cookie
if( isset($_COOKIE['id'] && $_COOKIE['key']) ) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];
  
  // get username and id
  $result = mysqli_query(" SELECT username FROM users WHERE id = $id ");
  $row = mysqli_fetch_assoc($result);
  
  // check cookie and username
  if( $key === hash('sha256', $row['username']) ) {
    $_SESSION['login'] = true;
  }
}

if( isset($_SESSION['login']) ) {
  header("location:../index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="asset/fontawesome-free-5.14.0-web">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-logo"><a href="index.php">LinKu</a></div>
			<div class="header-list">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="view/list.php">List</a></li>
					<li><a href="view/help.php">Help</a></li>
				</ul>
			</div>
			<div class="header-search">
				<div class="search-wrapper">
				  <form action="../process/process_search.php" method="post">
				    <span>
				      <input type="text" name="keyword" class="search" placeholder="search here.." autocomplete="" >
				      <button type="submit" name="search"><span class="fas fa-search"></span></button>
				    </span>
				  </form>
				</div>
				<div class="login"><a href="login.php">Login</a></div>
			</div>
		</div>
	</div>

	<!-- content -->
	<div class="content">
		<div class="container">
			<!-- login & register form -->
			<div class="login-wrapper">
                <div class="login">
                    <form action="../process/process_login.php" method="post">
                        <div class="login-username">
                            <label for="log_username">username</label>
                            <input type="text" name="username" id="log_username">
                        </div>
                        <div class="login-password">
                            <label for="log_pass">password</label>
                            <input type="password" name="password" id="log_pass">
                        </div>
                        <div class="login-remember">
                          <input type="checkbox" name="remember" id="log_remember">
                          <label for="log_remember">remember me</label>
                        </div>
                        <div class="-login-button">
                            <button type="submit" name="login">Login</button>
                        </div>
                    </form>
                </div>

                <div class="register">
                    <form action="../process/process_register.com" method="post">
                        <div class="register-username">
                            <label for="reg_username">username</label>
                            <input type="text" name="username" id="reg_username">
                        </div>
                        <div class="register-email">
                            <label for="reg_email">email</label>
                            <input type="email" name="email" id="reg_email">
                        </div>
                        <div class="register-password">
                            <label for="reg_pass">password</label>
                            <input type="password" name="password" id="reg_pass">
                        </div>
                        <div class="register-confirm-password">
                            <label for="reg_pass2">confirm password</label>
                            <input type="password" name="password2" id="reg_pass2">
                        </div>
                        <div class="register-button">
                            <button type="submit" name="register">Register</button>
                        </div>
                    </form>
                </div>
            </div>
		</div>
	</div>

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-logo">LinKu</div>
			<div class="footer-title"><small>copy right made heart by Linku.</small></div>
		</div>
	</div>

</body>
</html>