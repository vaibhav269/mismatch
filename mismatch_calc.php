  <?php
  require_once('mismatch_db_info.php');
  $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) or die("could not connect");   // Connect to the database
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

    $mismatch_score = 0;		// Initialize the mismatch search results
    $mismatch_user_id = -1;
    $mismatch_topics = array();

    $query = "SELECT user_id FROM mismatch_user WHERE user_id != '" . $_COOKIE['user_id'] . "'";	 // Loop through the user table comparing other people's responses to the user's responses
    $data = mysqli_query($dbc, $query);

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
    if ($mismatch_user_id != -1) {
      $query = "SELECT username, first_name, last_name, city, state, picture FROM mismatch_user WHERE user_id = '$mismatch_user_id'";
      $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 1) {
        // The user row for the mismatch was found, so display the user data
        $row = mysqli_fetch_array($data);

        echo $row['first_name'] . ' ' . $row['last_name'] . '<br />';
        echo $row['city'] . ', ' . $row['state'] . '<br />';
        echo '<img src="images/'. $row['picture'].'" alt="Profile Picture" /><br />';


        // Display the mismatched topics
        echo '<h4>You are mismatched on the following ' . count($mismatch_topics) . ' topics:</h4>';
        foreach ($mismatch_topics as $topic) {
          echo $topic . '<br />';
        }
        // Display a link to the mismatch user's profile
        echo '<h4>View <a href=viewprofile.php?user_id=' . $mismatch_user_id . '>' . $row['first_name'] . '\'s profile</a>.</h4>';
      }
    }
  }
  else {
    echo '<p>You must first <a href="questionnaire.php">answer the questionnaire</a> before you can be mismatched.</p>';
  }
  mysqli_close($dbc);
?>
