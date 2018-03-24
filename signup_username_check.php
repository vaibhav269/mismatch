<?php
require_once('mismatch_db_info.php');
  $bool=true;
  $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB)  or die("Could not conect");
  $query="Select username from mismatch_user";
  $result=mysqli_query($dbc,$query);
  $user=$_GET['user'];

     while($data=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	if($user==$data['username'])
		$bool=false;
	}

	if($bool==false)
	echo"NO";

	else
		echo "YES";

?>
