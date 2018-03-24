<!DOCTYPE html>
<html>
<head>
<title>Mismatch-Where opposites Attract</title>
<link href="mismatch_messages.css" rel="stylesheet">
</head>
<body>

	<?php
		require_once('mismatch_homepage_header.php');
	?>

	<script src="cookie_check_logout.js"></script>
<?php
	if(!isset($_COOKIE['user_id']))
	{
 ?>
	<img id="guyprop" src="guy-proposing2.jpg"></img>
<?php
	}
 ?>
		<div id="modal" >
			<span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>

			<form class="modal-content animate" method="POST" >

				<div class="data">
					<label><b>Username</b></label>
					<input type="text" onfocus="borderBlue(this)" onblur="borderRed(this)" id="username" placeholder="Enter Username" name="uname" required>

					<label><b>Password</b></label>
					<input type="password" onfocus="borderBlue(this)" onblur="borderRed(this)" id="password" placeholder="Enter Password" name="psw" required>

					<input id="login-button" onclick="checkLogin()" type="button" value="Login"></input>
				</div>

			<div   id="canbtn">
				<input id="cancel-button" type="button" onclick="document.getElementById('modal').style.display='none'" value="Cancel"></input>
			</div>
			</form>
		</div>

		<script src="login.js"></script>
<?php
	if(isset($_COOKIE['user_id']))
	{
 ?>
				<div id="mismatch_messages_leftbar">
					<?php
						require_once('mismatch_messages_leftbar.php');
 					?>
			</div>

		<div id="mismatch_messages_chat_box">
			<?php
				require_once('mismatch_chat.php');
		 	?>
	 </div>
	 	<script>
					var chatWindow = document.querySelector('#mismatch_message_container');
					chatWindow.scrollTop = chatWindow.scrollHeight;
					console.log("ye to fdskb");
	 	</script>
		<?php
}
		 ?>
</body>
</html>
