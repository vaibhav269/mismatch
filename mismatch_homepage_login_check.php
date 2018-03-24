<?php
		require_once('mismatch_db_info.php');
		$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB)  or die("Could not connect");
		$username=mysqli_real_escape_string($dbc,trim($_POST['user']));
		$password=mysqli_real_escape_string($dbc,trim($_POST['pass']));
		//$username=$_POST['user'];
		//$password=$_POST['pass'];
		$query="SELECT username,USER_ID FROM mismatch_user WHERE username='$username' AND password=SHA('$password')";
		$result=mysqli_query($dbc,$query) or die("could not query");
		if(mysqli_num_rows($result)==1)
			{
				$data=mysqli_fetch_array($result);
				$user_id=$data['USER_ID'];
				setcookie('username',$username);
				setcookie('user_id',"$user_id");
				echo $username;
			}
		else
			echo "NOPE";
?>
