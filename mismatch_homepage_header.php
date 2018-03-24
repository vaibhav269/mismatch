<div id="header">
		<span class="buttons">
				<?php
			if(!isset($_COOKIE['user_id']))
				{
			  ?>
			<button id="login-open-button"	onclick="document.getElementById('modal').style.display='block'">Login</button>
			<button id="signup-open-button" onclick="window.location='mismatch_signup.php'">Signup</button>
			<?php
		}
		else {
 			?>
			<button id="notification-button" onclick="window.location='mismatch_homepage.php'">Notification</button>
			<button id="messages-button" onclick="window.location='mismatch_messages.php'">Messages</button>
			<button id="profile-button" onclick="window.location='mismatch_myprofile.php'">My profile</button>
			<button id="logout-button" onclick="logout()" >Logout</button>
			<?php
		}
			 ?>
		</span>
	<h1><img src="mm6.png"> - Where Opposites Attract</h1>
	</div>
