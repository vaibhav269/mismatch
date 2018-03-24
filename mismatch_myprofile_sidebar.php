<!Doctype html>
<html>
<head>
	<script src="mismatch_myprofile_sidebar.js"></script>
	<meta charset="utf-8">
<link href="mismatch_myprofile_sidebar.css"rel="stylesheet">
</head>
<body>
	<div id="users">
		<?php
		require_once('mismatch_db_info.php');
					$user_id=$_COOKIE['user_id'];
					$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB)  or die("could not connect");
					$query="SELECT first_name,last_name,gender,birthdate,city,state,picture FROM mismatch_user WHERE user_id='$user_id'";
					$result=mysqli_query($dbc,$query);
					$data=mysqli_fetch_array($result,MYSQLI_ASSOC);
					$fname=$data['first_name'];
					$lname=$data['last_name'];
					$birthdate=$data['birthdate'];
					$picture="images/".$data['picture'];
					$city=$data['city'];
					$state=$data['state'];
					$gender='Male';
					if($data['gender']=='F')
						$gender='Female';
			?>

				<div id="record">
				<div id="img_data">
					<img id="user_img" src="images/<?php echo $data['picture'];?>"></img>
				</div>
					<div id="myprofile_sidebar_text_data">
						<p id="fname"><?php echo $fname." ".$lname;?></p>
						<p id="lname"><?php echo $gender;?></p>
						<p id="birthdate"><?php echo $birthdate;?></p>
						<p id="city"><?php echo $city?></p>
						<p id="state"><?php echo $state?></p>
						<button id="myprofile_sidebar_edit_btn" onclick="edit_user_prof()">Edit</button>
						<button id="myprofile_sidebar_submit_btn" onclick="submit_user_prof()">Submit</button>
					</div>
				</div>
			</div>

</body>
</html>
