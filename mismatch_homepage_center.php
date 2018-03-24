<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="mismatch_homepage_center.css"rel="stylesheet">
</head>
<body>

<?php
require_once('mismatch_db_info.php');
	$query_limit_init=$_POST['query_data_init'];
	$record_number=3;
	$usr=$_COOKIE['username'];
	$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) or die("could not connect");
	$query="SELECT gender FROM mismatch_user WHERE username='$usr'";
	$result=mysqli_query($dbc,$query) or die("could not query");
	$data=mysqli_fetch_array($result);
	$user_gen=$data['gender'];
	$query="SELECT DISTINCT mismatch_user.user_id,mismatch_user.first_name,mismatch_user.last_name,mismatch_user.gender,mismatch_user.birthdate,mismatch_user.picture FROM mismatch_response LEFT JOIN mismatch_user on mismatch_response.user_id=mismatch_user.user_id WHERE gender!='$user_gen' limit $query_limit_init,$record_number";
	$result=mysqli_query($dbc,$query) or die("could not query");
		while($data=mysqli_fetch_array($result))
		{
			$gender='Female';
			if($data['gender']=='M')
			$gender="Male";
		?>
		<div class="center_records">
			<div class="center_img_data">
				<img class="user_center_img" src="images/<?php echo $data['picture'];?>"></img>
			</div>

			<div class="center_text_data">
				<br>
				<p><?php echo $data['first_name']." ".$data['last_name'];?></p>
				<p><?php echo $gender;?></p>
				<p><?php echo $data['birthdate'];?></p>
			</div>
				<button class="center_prof_btn" onclick="window.location='mismatch_users.php?user_id=<?php echo $data['user_id'];?>'">Check</button>
			</div>
			<?php
			}
		?>
		</body>
</html>
