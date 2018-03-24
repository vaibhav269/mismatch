<?php
	if($_GET['a']=='check')
	{
		if(isset($_COOKIE['username']))
			echo $_COOKIE['username'];
		else
			echo "No";
	}

	if($_GET['a']=='delcookie')
	{
		setcookie('username',$_GET['b'],time()-3600);
		setcookie('user_id',$_GET['b'],time()-3600);
		setcookie('center_data',$_GET['b'],time()-3600);
	}
	?>
