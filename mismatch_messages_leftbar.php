<!DOCTYPE html>
<html>
<head >
     <meta charset="utf-8">
     <link rel="stylesheet" href="mismatch_messages_leftbar.css">
</head>
<body>

<?php
if(isset($_COOKIE['user_id']))
{
     require_once('mismatch_db_info.php');
     $user_id=$_COOKIE['user_id'];;
     $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) ;
     $query="SELECT DISTINCT user_id,to_user_id FROM mismatch_chat WHERE user_id=$user_id OR to_user_id=$user_id order by time desc";
     $result=mysqli_query($dbc,$query) OR die("fuck");
     $list=array();
     while($data=mysqli_fetch_array($result))
     {
       if($data['user_id']==$user_id){
       array_push($list,$data['to_user_id']);
          }

       else {
              array_push($list,$data['user_id']);
       }
     }

     if(!empty($list))
     {

          $recent_messages_user_id=array();
          $recent_messages_user_id=array_unique($list);
          echo "<div id='mismatch_recent_messages_list'>";
               foreach ($recent_messages_user_id as $messages_user_id)
               {
                    $query="SELECT first_name,last_name from mismatch_user WHERE user_id=$messages_user_id";
                    $result=mysqli_query($dbc,$query) OR die("query didn't worked");
                    $data=mysqli_fetch_array($result);
                    ?>
                    <div class="messages_recent_names">
                              <a href='<?php echo "mismatch_messages.php?user_id=$messages_user_id"?>'>   <?php echo $data['first_name']." ".$data['last_name']."<br>";?></a>
                         </div>
                         <?php
                    }
               }
               else
                    echo "you must start a chat to see messages ... go to homepage and select your partner ";
          }
               ?>
          </div>
</body>
</html>
