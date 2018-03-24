<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Mismatch-Where opposites Attract</title>
<link href="mismatch_homepage.css" rel="stylesheet">
<script>
window.onload=function(){
	document.getElementById('se-pre-con').style.display="none";
}
</script>
</head>
<body>

<div id="se-pre-con" ></div>

<?php
	if(isset($_COOKIE['user_id']))
	{
		require_once("mismatch_form_fill_check.php");
	}
		require_once('mismatch_homepage_header.php');
?>
<script src="cookie_check_logout.js"></script>
<?php
	if(!isset($_COOKIE['user_id'])){
?>
	<img id="guyprop" src="guy-proposing2.jpg"></img>
	<?php
	}
	?>
		<div id="modal" >
			<span onclick="document.getElementById('modal').style.display='none'" class="close" title="Close Modal">&times;</span>

			<form class="modal-content animate" method="POST" >

				<div class="data">
					<label><b>Username</b></label>
					<input type="text" onfocus="borderBlue(this)" onblur="borderRed(this)" id="username" placeholder="Enter Username" name="uname" required>

					<label><b>Password</b></label>
					<input type="password" onfocus="borderBlue(this)" onblur="borderRed(this)" id="password" placeholder="Enter Password" name="psw" required>

					<input id="login-button" onclick="checkLogin()" type="button" value="Login"></input>
				</div>

			<div  id="canbtn">
				<input id="cancel-button" type="button" onclick="document.getElementById('modal').style.display='none'" value="Cancel"></input>
			</div>
			</form>
		</div>


		<?php
		if(isset($_COOKIE['user_id']))
		{
			require_once('mismatch_homepage_sidebar.php');
		?>


	<div id="users_center">

<?php
	require_once('mismatch_homepage_center_2nd.php');
?>

	<script>
				var url="mismatch_homepage_center.php";
				var record_number=3;
				var query_data_init;

				window.onscroll=fetch_center_data;

			function fetch_center_data()
			{
				  if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight)
				{

					if(query_data_init==undefined)
					{
						query_data_init=3;
					}

					var data_send="query_data_init="+query_data_init;
					if(window.XMLHttpRequest)
					{
						req_center=new XMLHttpRequest();
					}

					else if(window.ActiveXObject)
					{
						req_center=new ActiveXObject("Microsoft.XMLHTTP");
					}

					try{
						req_center.onreadystatechange=get_center_data;
						req_center.open("POST",url,true);
						req_center.setRequestHeader("content-type","application/x-www-form-urlencoded");
						req_center.send(data_send);
					}catch(e)
					{
						alert("Can't connect to server");
					}

					function get_center_data()
						{
							if(req_center.readyState==4)
							{
								var val2=req_center.responseText;
								var center_data=document.getElementById('users_center');
								center_data.innerHTML=center_data.innerHTML+val2;
								query_data_init=query_data_init+record_number;
							}
						}
				}
			}
	</script>

</div>
<?php
}
 ?>
<script src="login.js"></script>
</body>
</html>
