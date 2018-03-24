<?php
     require_once('mismatch_db_info.php');
     $todo=$_POST['todo'];
     $user_id=$_COOKIE['user_id'];
     $to_user_id=$_POST['to_user_id'];
     $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) or die("could not connect");




if(strcmp($todo,"Block")==0)
{
     $query="SELECT user_id,to_user_id FROM mismatch_block where user_id='$user_id' and to_user_id='$to_user_id'";
     $result=mysqli_query($dbc,$query);

     if(mysqli_num_rows($result)==0)
     {
          $query="INSERT INTO mismatch_block(user_id,to_user_id) values('$user_id','$to_user_id')";
          $result=mysqli_query($dbc,$query);
          echo $result;
     }
     else
     echo "already blocked";
}

if(strcmp($todo,"Unblock")==0)
{
          $query="DELETE FROM mismatch_block WHERE user_id='$user_id' and to_user_id='$to_user_id'";
          $result=mysqli_query($dbc,$query) OR die("query failed");
          echo $result;
}
?>
