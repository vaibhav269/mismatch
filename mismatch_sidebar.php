<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="mismatch_homepage_sidebar.css"rel="stylesheet">
</head>
<body>

<div id="users">
	<h2>Random Match</h2>
		<?php
		require_once('mismatch_db_info.php');
			$user_id=$_COOKIE['user_id'];
			$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB)  or die("could not connect");
			$query="SELECT gender FROM mismatch_user WHERE user_id='$user_id'  ";
			$result=mysqli_query($dbc,$query) or die("could not connect");
			$data=mysqli_fetch_array($result);
			$user_gender=$data['gender'];

			$query="SELECT * FROM mismatch_user WHERE user_id!='$user_id' AND gender!='$user_gender' order by RAND() limit 5 ";
			$result=mysqli_query($dbc,$query) or die("could not connect");
			while($data=mysqli_fetch_array($result))
			{
				$gender='Female';
				if($data['gender']=='M')
					$gender='Male';
		?>
			<div class="records">
				<img class="user_img" src="images/<?php echo $data['picture'];?>"></img>
				<div class="text_data">
					<p><?php echo $data['first_name']." ".$data['last_name'];?></p>
					<p><?php echo $gender;?></p>
					<p><?php echo $data['birthdate']?></p>
					<button class="prof_btn" onclick="window.location='mismatch_users.php?username=<?php echo $data['username'];?>'">Check</button>
				</div>
				</div>
				<?php
				}
				?>
			</div>
</body>
</html>
