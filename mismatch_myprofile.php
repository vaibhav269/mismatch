<!DOCTYPE html>
<html>
<head>
<title>Mismatch-Where opposites Attract</title>
<link href="mismatch_myprofile.css" rel="stylesheet">
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

	<?php
	if(isset($_COOKIE['user_id']))
	{
		require_once('mismatch_db_info.php');
		$user_id=$_COOKIE['user_id'];
		$db=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) ;
		$query="select * from mismatch_response where user_id='$user_id'";
		$result=mysqli_query($db,$query);
		$data_count=mysqli_num_rows($result);
		if($data_count==0){
		echo"<div id='questionaire_fill_msg'>Please answere the questionaire below to start.... it will not take more than a minute</div>";
	}
		require_once('mismatch_myprofile_sidebar.php');
	?>
		<div id="guyPropAlt">
		<?php
			require_once('TRYTRYTRY.php');
		?>
	</div>
	<?php
}
	 ?>

<script src="login.js">
</script>

</body>
</html>
