 <!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="mismatch_homepage_center_mismatch.css"rel="stylesheet">
	</head>
	<body>
	<div id="users">
  <?php
  require_once('mismatch_db_info.php');
  $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) ;   // Connect to the database
  $query = "SELECT * FROM mismatch_response WHERE user_id = '" . $_COOKIE['user_id'] . "'";
  $data = mysqli_query($dbc, $query);

  if (mysqli_num_rows($data) != 0)   // Only look for a mismatch if the user has questionnaire responses stored
  {
	$query = "SELECT mr.response_id, mr.topic_id, mr.response, mt.name AS topic_name " .
      "FROM mismatch_response AS mr " .
      "INNER JOIN mismatch_topic AS mt USING (topic_id) " .
      "WHERE mr.user_id = '" . $_COOKIE['user_id'] . "'";

	$data = mysqli_query($dbc, $query);
    $user_responses = array();

	while ($row = mysqli_fetch_array($data))
	{
      array_push($user_responses, $row);
    }

	$query="SELECT gender FROM mismatch_user WHERE user_id='".$_COOKIE['user_id']."'";
	$data=mysqli_query($dbc,$query);
	$row=mysqli_fetch_array($data);

	$user_gender=$row['gender'];


    $mismatch_score = 0;		// Initialize the mismatch search results
    $mismatch_user_id = -1;
    $mismatch_topics = array();

    $query = "SELECT DISTINCT mismatch_response.user_id FROM mismatch_response LEFT JOIN mismatch_user on mismatch_response.user_id=mismatch_user.user_id where gender!='$user_gender'";	 // Loop through the user table comparing other people's responses to the user's responses
    $data = mysqli_query($dbc, $query) or die("query lost");

	while ($row = mysqli_fetch_array($data)) 	// Grab the response data for the user (a potential mismatch)
	{
      $query2 = "SELECT RESPONSE_ID, TOPIC_ID, response FROM mismatch_response WHERE user_id = '" . $row['user_id'] . "'";
      $data2 = mysqli_query($dbc, $query2);
      $mismatch_responses = array();
      while ($row2 = mysqli_fetch_array($data2,MYSQLI_ASSOC))
	  {
        array_push($mismatch_responses, $row2);
      }
      // Compare each response and calculate a mismatch total
      $score = 0;
      $topics = array();
      for ($i = 0; $i < count($user_responses); $i++) {
        if ((int)$user_responses[$i]['response'] + (int)$mismatch_responses[$i]['response'] == 1) {
          $score += 1;
          array_push($topics, $user_responses[$i]['topic_name']);
        }
      }

      if ($score > $mismatch_score) // Check to see if this person is better than the best mismatch so far
	  {
        $mismatch_score = $score;
        $mismatch_user_id = $row['user_id'];
        $mismatch_topics = array_slice($topics, 0);
      }
    }
    // Make sure a mismatch was found
    if ($mismatch_user_id != -1)
	{
      $query = "SELECT user_id,birthdate,gender, first_name, last_name, city, state, picture FROM mismatch_user WHERE user_id = '$mismatch_user_id'";
      $result = mysqli_query($dbc, $query);
      if (mysqli_num_rows($result) == 1)
	  {
		  $data=mysqli_fetch_array($result);
		  $gender='Female';
			if($data['gender']=='M')
			$gender='Male';
		  ?>

			<h2>Your Mismatch</h2>
			<div class="records">
                    <div class="img_data">
				<img class="user_img" src="images/<?php echo $data['picture'];?>"></img>
               </div>
				<div class="text_data">
					<p><?php echo $data['first_name']." ".$data['last_name'];?></p>
					<p><?php echo $gender;?></p>
					<p><?php echo $data['birthdate']?></p>
				</div>
                    <button class="prof_btn" onclick="window.location='mismatch_users.php?user_id=<?php echo $data['user_id'];?>'">Check</button>
			</div>
		</div>
		<?php
      }
    }
  }
  else {

  }
  mysqli_close($dbc);
?>

</body>
</html>
