<?php
require_once('mismatch_db_info.php');
     $user_id =$_COOKIE['user_id'];
     $new_city=$_POST['city'];
     $new_state= $_POST['state'];
     $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB)  or die("database not opened");
     $query="UPDATE mismatch_user set state='$new_state',city='$new_city'  WHERE user_id='$user_id'";
     $result=mysqli_query($dbc,$query);
     echo $result;
?>
