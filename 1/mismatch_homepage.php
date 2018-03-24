<!DOCTYPE html>
<html>

<head>
<title>Mismatch-Where opposites Attract</title>
<link href="mismatch_homepage.css" rel="stylesheet">
</head>

<body>

	<div id="header">
		<span class="buttons">
			<button id="login-open-button"	onclick="document.getElementById('modal').style.display='block'">Login</button>
			<button id="signup-open-button">Signup</button>
		</span>
	<h1><img src="mm13.png"> - Where Opposites Attract</h1>	
	</div>
	
		<div id="modal" >
			<span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>
			
			<form class="modal-content animate" action="/action_page.php">
				
				<div class="container">
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="uname" required>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw" required>

					<button type="submit" >Login</button>
				</div>

			<div class="container" style="background-color:#f1f1f1">
				<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			</div>
  </form>
		</div>
	
	
	
	
	<div id="users">
		<h2>Recently Joined</h2>
		<?php
			$dbc=mysqli_connect('localhost','vaibhav','tester','mismatch') or die("Could not connect");
			$query="SELECT * FROM mismatch_user order by join_date desc limit 5";
			$result=mysqli_query($dbc,$query) or die("could not query");
			while($data=mysqli_fetch_array($result))
			{
				$gender='Female';
				if($data['gender']=='M')
					$gender='Male';
					
				?>
				<div class="records">
					<img src="images/<?php echo $data['picture'];?>"></img>
					<div id="text_data">
						<p>Name: </b><?php echo $data['first_name']." ".$data['last_name'];?></p>
						<p>Gender: </b><?php echo $gender;?></p>
						<p>Birthdate: </b><?php echo $data['birthdate'] ?></p>
					</div>
				</div><br>
		<?php
	}
?>
	</div>
	
	
</body>	
</html>