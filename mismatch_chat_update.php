<?php
require_once('mismatch_db_info.php');
          $user_id=$_COOKIE['user_id'];
           $to_user_id=$_POST['to_user_id'];
           $old_time=$_POST['time'];
           $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) or die("could not connect");
          $query="SELECT message,time,user_id from mismatch_chat where user_id=$user_id and to_user_id=$to_user_id OR user_id=$to_user_id and to_user_id=$user_id order by time desc limit 1";
           $result=mysqli_query($dbc,$query) or die("bitch query didn't worked");
           $data=mysqli_fetch_array($result,MYSQLI_ASSOC);

           $new_time= strtotime($data['time']);
           $new_msg=$data['message'];


           if($new_time>$old_time)
           {
                if($data['user_id']==$user_id)
                    {
                         echo "<div class='msg_box_1'>";
                              echo "<div class='msg_from_you' >";
                                   echo "<div class='msg_text'>". $new_msg."</div>";
                              echo "</div>";
                              echo "<div class='reply_from_other_user_time all_msgs_time'>".$new_time."</div>";
                         echo "</div>";
                     }

                     else
                {
                     echo "<div class='msg_box_2'>";
                          echo "<div class='reply_from_other_user'>";
                               echo "<div class='msg_text'>".$new_msg."</div>";
                          echo "</div>";
                     echo "<div class='reply_from_other_user_time all_msgs_time' >".$new_time."</div>";
                          echo "</div>";

                }

           }
?>
