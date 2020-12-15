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
					<li><a href="index.php">Home</a></li>
					<li><a href="view/list.php">List</a></li>
					<li><a href="view/help.php">Help</a></li>
				</ul>
			</div>
			<div class="header-search">
				<div class="search"></div>
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
                    <form action="" method="post">
                        <div class="login-username">
                            <p>Username</p>
                            <input type="text" name="username" id="">
                        </div>
                        <div class="password-password">
                            <p>Password</p>
                            <input type="password" name="password" id="">
                        </div>
                        div.
                        <div class="-login-button">
                            <input type="submit" name="login" placeholder="Login" value="">
                        </div>
                    </form>
                </div>

                <div class="register">
                    <form action="" method="post">
                        <div class="register-username">
                            <p>Username</p>
                            <input type="text" name="username" id="">
                        </div>
                        <div class="register-email">
                            <p>Email</p>
                            <input type="email" name="email" id="">
                        </div>
                        <div class="register-password">
                            <p>Password</p>
                            <input type="password" name="password" id="">
                        </div>
                        <div class="register-confirm-password">
                            <p>Password</p>
                            <input type="password" name="password2" id="">
                        </div>
                        <div class="register-button">
                            <input type="submit" name="register" placeholder="Register" value="">
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