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
				<div class="search-wrapper">
				  <form action="../process/process_search.php" method="post">
				    <span>
				      <input type="text" name="keyword" class="search" placeholder="search here.." autocomplete="" >
				      <button type="submit" name="search"><span class="fas fa-search"></span></button>
				    </span>
				  </form>
				</div>
				<div class="login"><a href="view/login.php">Login</a></div>
			</div>
		</div>
	</div>

	<!-- content -->
	<div class="content">
		<div class="container">
			<!-- content main -->
			<div class="content-main">
			  <?php ?>
				<div class="content-item">
					<div class="content-title">
					  <a href="view/detail.php?"><?= $item['title']; ?></a>
					</div>
					<small><?= $item['upload']; ?></small>
				</div>
				<?php endforeach; ?>
				
				<!-- pagination -->
				<div class="pagination">1,2,3</div>
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