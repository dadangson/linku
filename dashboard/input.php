<?php
require 'functions.php';

if( isset($_POST[" submit"]) ) {
  //cek data inputan
  if( input($_POST) > 0 ) {
    echo "
      <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'dashboard.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'dashboard.php';
      </script>
    ";
  }
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../asset/fontawesome-free-5.14.0-web">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
</head>
<body>

	<!-- header -->
	<div class="header-left">
		<div class="header">
			<div class="header-logo">
			  <a href="../index.php">LinKu</a>
			</div>
			<div class="header-level">
			  <span>Nama Admin</span>
			</div>
			<div class="header-list">
				<span class="database"><a href="database.php">DATABASE</a></span>
        <span class="input"><a href="input.php">INPUT-DATA</a></span>
        <span class="edit"><a href="edit.php">EDIT-DATA</a></span>
        <span class="accounts"><a href="accounts.php">ACCOUNTS</a></span>
        <span class="comments"><a href="comments.php">COMMENTS</a></span>
        <span class="logout"><a href="logout.php">LOG OUT</a></span>
                
			</div>
		</div>
	</div>

	<!-- content -->
	<div class="content-right">
		<div class="content">
			<div class="content-title">Ini title</div>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa consequuntur labore officiis aut suscipit tempore exercitationem at repellendus, doloribus, aspernatur modi laborum quos fugiat error nobis sunt molestiae explicabo quaerat.</div>
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