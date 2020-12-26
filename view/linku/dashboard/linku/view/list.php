<?php
require 'function.php';

$items = query("SELECT * FROM items");

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>List</title>
	<link rel="stylesheet" type="text/css" href="asset/fontawesome-free-5.14.0-web">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-logo"><a href="../index.php">LinKu</a></div>
			<div class="header-list">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="list.php">List</a></li>
					<li><a href="help.php">Help</a></li>
				</ul>
			</div>
			<div class="header-search">
				<div class="search"></div>
				<div class="login"><a href="">Login</a></div>
			</div>
		</div>
	</div>

	<!-- content -->
	<div class="content">
		<div class="container">
			<!-- content main -->
			<div class="content-main">
				<div class="content-list">
					<div class="list-pagination"></div>
					<?php foreach( $items as $item ) : ?>
					  <div class="list-item"><?= $item["nama"]; ?></div>
					<?php endforeach; ?>
				</div>
			</div>
			<!-- content asaid -->
			<div class="content-aside">
				<div class="aside-populer"></div>
				<div class="aside-letter"></div>
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