

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
			  <span class="dashboard"><a href="dashboard.php">DASHBOARD</a></span>
				<span class="database"><a href="database.php">DATABASE</a></span>
        <span class="input"><a href="input.php">INPUT</a></span>
        <span class="edit"><a href="update.php">UPDATE</a></span>
        <span class="accounts"><a href="accounts.php">ACCOUNTS</a></span>
        <span class="comments"><a href="comments.php">COMMENTS</a></span>
        <span class="message"><a href="message.php">MESSAGE</a></span>
        <span class="logout"><a href="logout.php">LOG OUT</a></span>
                
			</div>
		</div>
	</div>

	<!-- content -->
	<div class="content-right">
		<div class="content">
			<div class="content-title">Update data items</div>
			<div>
			  <form action="../process/process_update" method="post" enctype="multipart/form-data">
			    <table>
			      <tr>
			        <td>
			          <label for="title">Title</label>
			        </td>
			        <td>
			          <input type="text" name="title" id="title">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <label for="actrist">Actrist</label>
			        </td>
			        <td>
			          <input type="text" name="actrist" id="actrist">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <label for="type">Type</label>
			        </td>
			        <td>
			          <input type="text" name="type" id="type">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <label for="release">Release</label>
			        </td>
			        <td>
			          <input type="text" name="release" id="release">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <label for="bit_rate">Bit Rate</label>
			        </td>
			        <td>
			          <input type="text" name="bit_rate" id="bit_rate">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <label for="size">Size</label>
			        </td>
			        <td>
			          <input type="text" name="size" id="size">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <label for="buy">Buy</label>
			        </td>
			        <td>
			          <input type="text" name="buy" id="buy">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <label for="link1">Link1</label>
			        </td>
			        <td>
			          <input type="text" name="link1" id="link1">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <label for="link2">Link2</label>
			        </td>
			        <td>
			          <input type="text" name="link2" id="link2">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <label for="tags">Tags</label>
			        </td>
			        <td>
			          <input type="checkbox" name="tags" id="title" value="single">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <label for="image">image</label>
			        </td>
			        <td>
			          <input type="file" name="image" id="image">
			        </td>
			      </tr>
			      <tr>
			        <td>
			          <button type="submit" name="update">Send</button>
			        </td>
			      </tr>
			    </table>
			    
			  </form>
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