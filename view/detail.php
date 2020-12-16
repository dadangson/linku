<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail</title>
	<link rel="stylesheet" type="text/css" href="../asset/fontawesome-free-5.14.0-web">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
				<div class="login"><a href="login.php">Login</a></div>
			</div>
		</div>
	</div>

	<!-- content -->
	<div class="contents">
		<div class="container">
			<!-- content main -->
			<div class="detail-main">
				<div class="detail-wrapper">
					<div class="detail-img">
					  <img src="" alt="">
					</div>
					<div class="detail-title">
					  <table>
					    <tr>
					      <td>Title</td>
					      <td>: </td>
					    </tr>
					    <tr>
					      <td>Actrist</td>
					      <td>: </td>
					    </tr>
					    <tr>
					      <td>Type</td>
					      <td>: </td>
					    </tr>
					    <tr>
					      <td>Release</td>
					      <td>: </td>
					    </tr>
					    <tr>
					      <td>Bit-rate</td>
					      <td>: </td>
					    </tr>
					    <tr>
					      <td>Size</td>
					      <td>: </td>
					    </tr>
					  </table>
					</div>
					<div class="detail-action">
					  <div class="action-buy"><a href="">Buy</a></div>
					  <p>or</p>
					  <div class="action-download">
					    <a href="" class="zippyshare">Download here</a>
					    <a href="" class="googledrive">Download here</a>
					  </div>
					</div>
					<div class="detail-tag">
					  <a href="" class="tag"></a>
					</div>
				</div>
				<div class="comment-wrapper">
					<div class="comment-header">
						<div class="comment-title">Comments Here!</div>
						<div class="comment-group">
							<form action="" method="post" id="comment_form">
								<div class="comment-control">
									<textarea name="comment_content" id="comment_content" class="comment-content" rows="5" placeholder="Enter Comment"></textarea>
								</div>
								<div class="comment-control">
									<input type="hidden" name="comment_id" id="comment_id" value="0">
									<input type="submit" name="submit" id="submit" class="submit" value="Send">
								</div>
							</form>
						</div>
						<div class="comment-message">
							<span id="comment_message"></span>
							<div id="display_comment"></div>
						</div>

					</div>
				</div>
			</div>
			<!-- content asaid -->
			<div class="detail-aside">
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