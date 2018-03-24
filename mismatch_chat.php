<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="mismatch_chat.css" rel="stylesheet">
	</head>

	<body>
		<div id="mismatch_message_container">

		<div class='msg_box_1'>
			<div class='reply_from_other_user_time all_msgs_time'>0</div>
		</div>
					<?php
							if(isset($_GET['user_id']))
								{
									$user_id=$_COOKIE['user_id'];
									$to_user_id=$_GET['user_id'];
									require_once('mismatch_chat_display.php');
						?>
		</div>

				<?php
				require_once('mismatch_db_info.php');
						$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) or die("could not connect");
						$query="SELECT user_id,to_user_id FROM mismatch_block WHERE user_id='$user_id' and to_user_id='$to_user_id' or user_id='$to_user_id' and to_user_id='$user_id'";
						$result=mysqli_query($dbc,$query);
						if(mysqli_num_rows($result)==0)
						{
				?>

				<div id="mismatch_send_box">
					<div id="text_emoji">
						<div id="msg" contenteditable="true" cols="50"  tabindex="0" onkeydown="send_msg_enter_button(event)" autofocus></div>	<div id="btn_emoji_show"><?php require_once('mismatch_emoji.php'); ?></div>
					</div>
						<br><button id="msg_send_btn" onclick="send_msg()">Send</button><br>
				</div>

				<div id="block_button_container">
					    <button id="block-button" onclick="block_user()"  title="You will not recieve any messages from him/her after blocking">Block</button>
				   </div>

				<?php
					}
					else  {
							$data=mysqli_fetch_array($result);
								if($data['user_id']==$user_id)
								{
									?>
									<div id="block_button_container">
										    <button id="block-button" onclick="block_user()"  title="You will not recieve any messages from him/her after blocking">Unblock</button>
									   </div>

								<?php
									echo "<div id='block_msg'>"."Unblock to continue the chat"."</div>";
								}
								else {
										echo "<div id='block_msg'>"."The user is taking a break"."</div>";
								}
						}
 				?>

				<?php
						}
						else
						echo "Please select the user first";
		 			?>

		<script>
			to_user_id=<?php echo $to_user_id;?>; //setting to_user_id to make it accessible to the mismatch_chat.js
		</script>

		<script src="mismatch_chat.js"></script>

	</body>
</html>
