<!DOCTYPE html>
<html>
<head>

<title>Mismatch-Where opposites Attract</title>
<link href="mismatch_users.css" rel="stylesheet">
</head>

<body>
	<?php
	if(isset($_COOKIE['user_id']))
	{
		require_once("mismatch_form_fill_check.php");
	}
	else {
		echo "<script>window.location='mismatch_homepage.php'</script>";
	}
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
	if($_COOKIE['user_id'])
	{
		require_once('mismatch_users_sidebar.php');
	?>

	<div id="users_info">
		<?php
		if(isset($_GET['user_id']))
		{
			require_once('mismatch_db_info.php');
			$user_id=$_GET['user_id'];
			$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB)  or die("could not connect");
			$result=mysqli_query($dbc,"Select * from mismatch_user where user_id='$user_id'") or die("could not query");
			$data=mysqli_fetch_array($result,MYSQLI_ASSOC);
			$fname=$data['first_name'];
			$lname=$data['last_name'];
			$birthdate=$data['birthdate'];
			$city=$data['city'];
			$state=$data['state'];
			$gender=$data['gender'];
			$picture=$data["picture"];
				if($gender=='M')
					$gender="Male";
				else
					$gender="Female";
		?>
		<div id="userProfile_center_record">

			<div id="userProfile_img_data">
				<img id="userProfile_user_img" src="images/<?php echo $data['picture'];?>"></img>
			</div>

			<div id="userProfile_center_btn">
					<button class="userProfileButton" id="mismatch_about_btn" onclick="about_run()"> About</button>
					<button class="userProfileButton" id="mismatch_mismatchCalc_btn" onclick="mismatch_calc_run()"> Mismatch Score</button>
					<button class="userProfileButton" id="mismatch_chat_btn " onclick="chat_run(<?php echo $user_id;?>)"> Chat</button>
			</div>

		<div id="user_data_container">
			<div id="userProfile_center_text_data" class="table">
					<span class="table-row" >  <p class="table-cell1">Name</p>		<p>♥</p><p class="table-cell2" id="fname"><?php echo $fname." ".$lname;?></p>		</span>
					<span class="table-row">	 <p class="table-cell1">Gender</p>		<p>♥</p><p class="table-cell2" id="lname"><?php echo $gender;?></p>					</span>
					<span class="table-row">	 <p class="table-cell1">Birthdate</p>	 <p>♥</p><p class="table-cell2" id="birthdate"><?php echo $birthdate;?></p>			</span>
					<span class="table-row">	 <p class="table-cell1">City</p>			<p>♥</p>	<p class="table-cell2" id="city"><?php echo $city?></p>							</span>
					<span class="table-row">	<p class="table-cell1">State</p>		    <p>♥</p>	<p class="table-cell2" id="state"><?php echo $state?></p>						</span>
			</div>

			<div id="userProfile_center_mismatch_score">
						<?php
							require_once("mismatch_user_mismatch_score.php");
						?>
			</div>

			<div id="userProfile_center_mismatch_chat">
					<?php
						require_once("mismatch_chat.php");
					 ?>
			</div>



		</div>

</div>
<?php
}
else {
		echo "<script>window.location='mismatch_homepage.php'</script>";
	}
 ?>
</div>
<?php
}
 ?>
<script src="login.js"></script>
<script src="mismatch_user_center.js"></script>

</body>
</html>
