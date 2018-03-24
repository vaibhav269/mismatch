<?php
require_once('mismatch_db_info.php');
$user_id=$_COOKIE['user_id'];
 $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) or die("could not connect");
  $query="SELECT message,user_id,time from (select message,time,user_id from mismatch_chat where user_id=$user_id and to_user_id=$to_user_id OR user_id=$to_user_id and to_user_id=$user_id order by time desc limit 2000) sub order by time asc;";
  $result=mysqli_query($dbc,$query) or die("bitch query didn't worked");
   while($data=mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
       $time=strtotime($data['time']);
      if($data['user_id']==$user_id)
          {
               echo "<div class='msg_box_1'>";
                    echo "<div class='msg_from_you' >";
                         echo "<div class='msg_text'>". $data['message']."</div>";
                    echo "</div>";
                    echo "<div class='reply_from_other_user_time all_msgs_time'>".$time."</div>";
               echo "</div>";
          }

          else
          {
               echo "<div class='msg_box_2'>";
                    echo "<div class='reply_from_other_user'>";
                         echo "<div class='msg_text'>".$data['message']."</div>";
                    echo "</div>";
               echo "<div class='reply_from_other_user_time all_msgs_time' >".$time."</div>";
                    echo "</div>";
          }

 }
?>
