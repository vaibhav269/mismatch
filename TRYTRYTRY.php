<!DOCTYPE html>
<html>
<body>
	<?php
		$db=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB)  or die("could not connect");
		$user_id="";
		$already_filled=false;
		$form=true;
		$edit=false;
		if(isset($_COOKIE['user_id']))
		{
			$user_id=$_COOKIE['user_id'];
			$result=mysqli_query($db,"SELECT * FROM mismatch_response where USER_ID=$user_id") or die("row check failed");
			if(mysqli_num_rows($result)==25)
			{
				$already_filled=true;
			}
		}
			if(isset($_POST['Edit']))
				$edit=true;

			if(isset($_POST['Submit']))
			{
				$topic_id_passed=$_POST['topic_id'];
					foreach($topic_id_passed as $t_id)
					{
						$response=1;
						if($_POST["$t_id"]=='Hate')
							$response=0;
						$check_record=mysqli_query($db,"SELECT * FROM mismatch_response WHERE USER_ID='$user_id' AND topic_id='$t_id'") or die("Fucking bitch and suckers");
						if(mysqli_num_rows($check_record)==1)
							$query="UPDATE mismatch_response SET response=$response WHERE USER_ID='$user_id' AND TOPIC_ID='$t_id'";
						else{
							$query="INSERT INTO mismatch_response VALUES(0,$user_id,$t_id,$response)";
							}
						mysqli_query($db,$query) or die("ERROR DURING INSERT");
					}
				$form=false;
			}
	if($form==true&&$already_filled!=true||$edit==true)
	{
	?>
	<div class="content">
		<form id="form_tag_response" action="mismatch_myprofile.php" method="POST">
		<div id="response_form">
		<?php
			$category_list_query=mysqli_query($db,"Select DISTINCT category from mismatch_topic") or die("could not query");
			while($category_list=mysqli_fetch_array($category_list_query))
			{
				$cat=$category_list['category'];
				echo "<h2>";
				echo $cat;
				echo "</h2>";
				$category_query=mysqli_query($db,"Select * from mismatch_topic where category='$cat' order by topic_id ") or die("could not query");
						while($category_data=mysqli_fetch_array($category_query))
						{
		?>
							<div class="response_form_row">
								<div class="response_form_cell1">	<?php echo $category_data['name'];?>	</div>
								<div class="response_form_cell2">
									<input type="radio" name="<?php echo $category_data['TOPIC_ID'];?>" value="Love" checked>Love</input>
									<input type="radio" name="<?php echo $category_data['TOPIC_ID'];?>" value="Hate">Hate</input>
									<input type="hidden" name="topic_id[]" value="<?php echo $category_data['TOPIC_ID'];?>"></input>
								</div>
							</div>
			<?php
						}
				echo"<br>";
			}
			?>
			<input  id="submit_button" type="submit" name="Submit" value="Submit" ></input>
		</div>
		</form>
	</div>
	<?php
	}
	else
		{
	?>
		<div class="content">
			<div id="response_table">
				<?php
					$user_id=$_COOKIE['user_id'];
					$category_list_query=mysqli_query($db,"Select DISTINCT category from mismatch_topic") or die("could not query");
					while($category_list=mysqli_fetch_array($category_list_query))
					{
						$cat=$category_list['category'];
						echo "<h2>";
						echo $cat;
						echo "</h2>";
						$category_query=mysqli_query($db,"Select * from mismatch_topic where category='$cat' order by topic_id ") or die("could not query");
							while($category_data=mysqli_fetch_array($category_query))
							{
							$topic_id=$category_data['TOPIC_ID'];
							$response_query=mysqli_query($db,"SELECT response FROM mismatch_response WHERE TOPIC_ID='$topic_id' and USER_ID='$user_id'");
							$response_value=mysqli_fetch_array($response_query);
							$response="Hate";
							if($response_value['response']==1)
								$response="Love";

				?>

						<div class="response_table_row">
								<div class="response_table_cell1">	<?php echo $category_data['name'];?>	</div>
								<div class="response_table_cell2">	<?php echo $response;?>
								</div>
							</div>
			<?php
							}
				echo"<br>";
					}
				echo "<br>";

			?>
			<form id="edit_button_form" action="mismatch_myprofile.php" method="POST">
				<input id="edit_button"type="submit" name="Edit" value="Edit"></input>
			</form>
			</div>
		</div>
		<?php
		}
		?>

	</body>
	</html>
