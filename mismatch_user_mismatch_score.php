<!Doctype html>
<html>
<head>
     <meta charset="utf-8">
     <link href="mismatch_user_mismatch_score.css" rel="stylesheet">
</head>
<body>
     <?php
          $user_id=$_COOKIE['user_id'];
          $mismatch_user_id=$_GET['user_id'];

          $query="select name,response from mismatch_response INNER JOIN mismatch_topic on mismatch_response.topic_id=mismatch_topic.topic_id where user_id='$user_id'";
          $result=mysqli_query($dbc,$query);

          $user_responses=array();
          while($data=mysqli_fetch_array($result,MYSQLI_ASSOC))
               {
                          array_push($user_responses, $data);
               }

               $query="select name,response from mismatch_response INNER JOIN mismatch_topic on mismatch_response.topic_id=mismatch_topic.topic_id where user_id='$mismatch_user_id'";
               $result=mysqli_query($dbc,$query);

               $mismatch_user_responses=array();
               while($data=mysqli_fetch_array($result,MYSQLI_ASSOC))
                    {
                               array_push($mismatch_user_responses, $data);
                    }

                    $score = 0;
                    $mismatched_topics = array();
                    $mismatched_responses=array();
                    for ($i = 0; $i < count($user_responses); $i++)
                    {
                         if ((int)$user_responses[$i]['response'] + (int)$mismatch_user_responses[$i]['response'] == 1)
                        {
                             $score += 1;
                             array_push($mismatched_topics, $user_responses[$i]['name']);
                             array_push($mismatched_responses, $mismatch_user_responses[$i]['response']);
                       }
                    }
                    ?>
                    <div id="mismatched_topics" class="table">
                              <?php
                              if($score!=0)
                              {
                                   for ($i = 0; $i < count($mismatched_topics); $i++)
                                        {
                                             if($mismatched_responses[$i]==1)
                                                  $mismatched_responses[$i]='Love';
                                                  else
                                                       $mismatched_responses[$i]='Hate';
                                   ?>

<span class="table-row" >  <p class="table-cell1"> <?php echo $mismatched_topics[$i] ?> </p>	<p>♥</p>  <p class="table-cell2" id="fname"><?php echo $mismatched_responses[$i]  ?></p>	</span>

                              <?php
                                        }
                                   }
                                   else{
                                   echo "All your choices matched completely ..... There is no mismatched topic.......This is your perfect match";
                              }
                              ?>
                    </div>

</body>
</html>
