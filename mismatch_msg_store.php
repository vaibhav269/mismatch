<?php
require_once('mismatch_db_info.php');
$user_id=$_COOKIE['user_id'];
$to_user_id=$_POST['to_user_id'];
  $msg=(string)$_POST['msg'];
  $seen=0;
  $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) ;
 $query="INSERT INTO mismatch_chat(USER_ID,TO_USER_ID,message,seen) values($user_id,$to_user_id,'$msg',$seen)";
 $result=mysqli_query($dbc,$query);
 echo $result;
?>
