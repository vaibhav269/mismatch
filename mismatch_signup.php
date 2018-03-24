<!DOCTYPE html>
<html>

<head>
<title>Mismatch-Where opposites Attract</title>
<link href="mismatch_signup.css" rel="stylesheet">
</head>

<body>

	<div id="header">
		<span class="buttons">
			<button id="login-open-button" onclick="window.location='mismatch_homepage.php'">Login/Homepage</button>
		</span>
	<h1><img src="mm6.png"> - Where Opposites Attract</h1>
	</div>
	<pre>
	<?php
	require_once('mismatch_db_info.php');
	$form=false;
		$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB)  or die("Could not conect");

		if((empty($_POST['first_name']))||(empty($_POST['last_name']))||(empty($_POST['city']))||(empty($_POST['state']))||(empty($_POST['username']))||(empty($_POST['password']))||(empty($_POST['DOBYear']))||(empty($_POST['DOBDay']))||(empty($_POST['DOBMonth']))||($_FILES['picture']['size']==0))
		{
			$form=true;
			if(isset($_POST['Submit']))
			{
				echo "<div class='error_invalid_data'>Please enter the data first before submitting the form</div>";
			}
		}

		else if(preg_match('/[^a-z]/i', (string)$_POST['first_name']))		//firstname only letters validate
		{
			$form=true;
			if(isset($_POST['Submit']))
			{
				echo "<div class='error_invalid_data'>Invalid firstname,should contain only letters</div>";
			}
		}

		else if(preg_match('/[^a-z]/i', (string)$_POST['last_name']))		//lastname only letters validate
		{
			$form=true;
			if(isset($_POST['Submit']))
			{
				echo "<div class='error_invalid_data'>Invalid lastname,should contain only letters</div>";
			}
		}

		else if(preg_match('/[^a-z]/i', (string)$_POST['city']))				//city only letters validate
		{
			$form=true;
			if(isset($_POST['Submit']))
			{
				echo "<div class='error_invalid_data'>Invalid city,should contain only letters</div>";
			}
		}

		else if(preg_match('/[^a-z]/i', (string)$_POST['state']))			//state only letters validate
		{
			$form=true;
			if(isset($_POST['Submit']))
			{
				echo "<div class='error_invalid_data'>Invalid state,should contain only letters</div>";
			}
		}

		else if((preg_match('/^[A-Za-z0-9_~\-!@#\$%\^&\*\(\)]+$/',$_POST['password'])==0)||(strlen($_POST['password'])<6))  //password only letters validate
		{
			$form=true;
			if(isset($_POST['Submit']))
			{
				echo "<div class='error_invalid_data'>Invalid password,,should be atleast 6 characters long, can contain letters,numbers and  any of ~ ! @ # $% ^ & * ( )  _ -</div>";
			}
		}

		else if(preg_match('/[^a-z0-9_]/i', (string)$_POST['username']))		//username letters,numbers,underscore validate
		{
			$form=true;
			if(isset($_POST['Submit']))
			{
				echo "<div class='error_invalid_data'>Invalid username,should contain only letters,numbers or underscores</div>";
			}
		}

		else if((!is_int((int)$_POST['DOBYear']))||(int)$_POST['DOBYear']<1947||(int)$_POST['DOBYear']>2017)
		{
			$form=true;
				if(isset($_POST['Submit']))
				{
					echo "<div class='error_invalid_data'>Invalid birthYear</div>";
				}
		}

		else if((!is_int((int)$_POST['DOBDay']))||(int)$_POST['DOBDay']>31||(int)$_POST['DOBDay']<1)
		{
			$form=true;
				if(isset($_POST['Submit']))
				{
					echo "<div class='error_invalid_data'>Invalid birthDay</div>";
				}

		}

		else if((!empty($_POST['username']))&&(isset($_POST['Submit'])))
		{
			$bool=true;
			$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB)  or die("Could not conect");
			$query="Select username from mismatch_user";
			$result=mysqli_query($dbc,$query);
			$user=$_POST['username'];
			while($data=mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				if($user==$data['username'])
				$bool=false;
			}

			if($bool==false)
			{
				$form=true;
				echo "<div class='error_invalid_data'>Username not available</div>";
			}
		}

		if(isset($_FILES['picture']))
		{
			// Check if image file is a actual image or fake image
				$check = getimagesize($_FILES["picture"]["tmp_name"]);
				if($check === false) {
						$form=true;
   	  					if(isset($_POST['Submit']))
   	  						{
   	  						echo "<div class='error_invalid_data'>File is not an image.</div>";
   	  						}
				}
			// Check file size
				else if ($_FILES["picture"]["size"] > 8388608) {
						$form=true;
   	  					if(isset($_POST['Submit']))
   	  						{
							echo "<div class='error_invalid_data'>Sorry, your file is too large.</div>";
						}
					}
		}

		if(isset($_POST['DOBMonth']))
		{
			switch($_POST['DOBMonth'])
			{
				      case "March":
					 case "January":
				      case "May":
				      case "July":
				      case "August":
				      case "October":
				      case "December":
				                  if((int)$_POST['DOBDay']>31||(int)$_POST['DOBDay']<1)
				                    {
				                      $form=true;
				                        if(isset($_POST['Submit']))
				                        {
				                          echo "<div class='error_invalid_data'>Invalid Birthdate</div>";
				                        }
				                  }
				                    break;

				      case "Febuary":	if((((int)$_POST['DOBYear'] % 4 == 0) && ((int)$_POST['DOBYear'] % 100 != 0)) || ((int)$_POST['DOBYear'] % 400 == 0))
				                    {
				                      if((int)$_POST['DOBDay']>29||(int)$_POST['DOBDay']<1){
				                        $form=true;
				                          if(isset($_POST['Submit']))
				                          {
				                            echo "<div class='error_invalid_data'>Invalid Birthdate</div>";
				                          }
				                        }
				                    }
				                    else if((int)$_POST['DOBDay']>28||(int)$_POST['DOBDay']<1){
				                      $form=true;
				                        if(isset($_POST['Submit']))
				                        {
				                          echo "<div class='error_invalid_data'>Invalid birthDay</div>";
				                        }
				                      }
				                      break;
				        case "April":
				        case "June":
				        case "September":
				        case "November":	if((int)$_POST['DOBDay']>31||(int)$_POST['DOBDay']<1){
				                      $form=true;
				                        if(isset($_POST['Submit']))
				                        {
				                          echo "<div class='error_invalid_data'>Invalid birthDay</div>";
				                        }
				                    }
				                      break;
				        default:$form=true;
				                if(isset($_POST['Submit']))
				                {
				                  echo "<div class='error_invalid_data'>Invalid birthDay</div>";
				                }
			}
	}

	if($form==true)
	{
	?>
	</pre>
	<div id="form">
		<form enctype="multipart/form-data"  onsubmit="return validate_form()" action="mismatch_signup.php" method="POST">

				<input type="hidden" name="MAX_FILE_SIZE"  value="8388608">

				<div class="trow">

					<div class="tcell">
						<input required size="20" onfocus="borderBlue(this)" onblur="borderRed(this)" title="Enter Your First Name" id="firstname" type="text" name="first_name" placeholder="First name"></input>
					</div>

					<div class="tcell">
						<input required size="20" onfocus="borderBlue(this)" title="Enter Your Last name" onblur="borderRed(this)" id="lastname" type="text" name="last_name" placeholder="Last Name"></input><br>
					</div>

				</div>

						<input id="Gender"  type="radio" title="Enter your gender" name="Gender" value="Male" checked>Male</input>
						<input id="Gender"  type="radio" title="Enter your gender" name="Gender" value="Female">Female</input><br>

					<div class="trow">
						<div class="tcell">
						<input required type="text" title="Enter your City" onfocus="borderBlue(this)" onblur="borderRed(this)" name="city" id="city" placeholder="City"></input>
						</div>
					<div class="tcell">
						<input  required id="state" title="Enter your State" onfocus="borderBlue(this)" onblur="borderRed(this)" type="text" name="state" placeholder="State"></input><br>
					</div>
				</div>

				<input required id="username" title="Enter your username"  onblur="borderRed(this)" type="text" name="username" onkeyup="checkInfo(this)" placeholder="Username"></input><br>


				<input required id="password" title="Enter your password" onfocus="borderBlue(this)" onblur="borderRed(this)" type="password" name="password" placeholder="Password"></input><br>

				<label required for="Birthdate">Birthday:</label><br>
				<?php
					require_once('mismatch_signup_date.php');
				 ?><br>

				<label for="picture">Picture:</label><br>
				<input required type="file" title="Upload your profile picture" id="picture"  name="picture"></input><br>

				<input type="submit" name="Submit" value="Submit"></input>

			</form>
		</div>
	<?php
	}
		else
		{
			$first_name=$_POST['first_name'];
			$last_name=$_POST['last_name'];
			$gender=$_POST['Gender'];
			$city=$_POST['city'];
			$state=$_POST['state'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$DOBDay=$_POST['DOBDay'];
			$DOBMonth=$_POST['DOBMonth'];
			$DOBYear=$_POST['DOBYear'];
			$birthdate=$DOBDay."-".$DOBMonth."-".$DOBYear;
			$picture=$username.".".end((explode(".", $_FILES['picture']['name'])));
			//$target=".\\images\\".$picture;
			 $target="./images/".$picture;



			if(mysqli_query($dbc,"INSERT INTO mismatch_user VALUES(0,'$username',SHA('$password'),NOW(),'$first_name','$last_name','$gender','$birthdate','$city','$state','$picture')") or die("could not query"))
			{	echo "succesfully submitted ";
				move_uploaded_file($_FILES['picture']['tmp_name'],$target);
			}
		}
	?>
	<div id="nowork"></div>

<script>
	var request;
	function borderRed(ele)
	{
		if(ele.value=="")
		ele.style.border="1px solid red";
	}

	function borderBlue(ele)
	{
		ele.style.border="1px solid #c2c2c4";
	}


	function checkInfo(username)
	{
		var value=username.value;
		var url="signup_username_check.php?user="+value;

		if(window.XMLHttpRequest)
		{
		request=new XMLHttpRequest();
		}

		else if(window.ActiveXObject)
		{
		request=new ActiveXObject("Microsoft.XMLHTTP");
		}

		try{
				request.onreadystatechange=getInfo;
				request.open("GET",url,true);
				request.send();
		}catch(e)
		{
			alert("Can't connect to server");
		}
	}

	function getInfo()
	{
		if(request.readyState==4)
		{
			var val=request.responseText;
			var user=document.getElementById('username');
			if(val=="NO")
				user.style.border="3px solid red";
			else
				user.style.border="3px solid green";
				console.log(val);
		}
	}

	function validate_form()
	{
		var firstname=document.getElementById('firstname').value.toString().trim();
		var lastname=document.getElementById('lastname').value.toString().trim();
		var city=document.getElementById('city').value.toString().trim();
		var state=document.getElementById('state').value.toString().trim();
		var username=document.getElementById('state').value.toString().trim();
		var password=document.getElementById('password').value.toString();

		var DOBDay=Number(document.getElementById('DOBDay').value);
		var DOBMonth=document.getElementById('DOBMonth').value;
		var DOBYear=Number(document.getElementById('DOBYear').value);

		var firstname_validate= /^[a-zA-z\s]+$/.test(firstname); 		//regex for letters
		var lastname_validate= /^[a-zA-z\s]+$/.test(lastname);		   //regex for letters
		var city_validate=/^[a-zA-z\s]+$/.test(city);									//regex for letters
		var state_validate=/^[a-zA-z\s]+$/.test(state);								//regex for letters
		var username_validate=/^[a-zA-Z0-9]+$/.test(username);				//regex for letters and numbers
		var password_validate=/^[A-Za-z0-9_~\-!@#\$%\^&\*\(\)]+$/.test(password);		//password must contain at least one digit,one lower case,one uppercase,atleast 8 characters,no special character

		var allow=true;
		if(!firstname_validate)
		{	allow=false;
			alert(" firstname should contain only valid letters");
		}
		else if(!lastname_validate){
			allow=false;
			alert("lastname should contain only valid letters");
		}

		else if(!city_validate){
			allow=false;
			alert("city should contain only valid letters");
		}

		else if(!state_validate){
			allow=false;
			alert("state should contain only valid letters");
		}

		else if(!username_validate){
				allow=false;
				alert("username should contain only valid letters or numbers");
			}

		else if(!password_validate||password.length<6){
				allow=false;
				alert("Invalid password,should be atleast 6 characters long, can contain letters,numbers and  any of ~ ! @ # $% ^ & * ( )  _ - ");
			}

		else if((!Number.isInteger(DOBYear))||(DOBYear<1947||DOBYear>2017))
		{
			allow=false;
			alert("Invalid Birthdate");
		}

		else if((!Number.isInteger(DOBDay))||(DOBDay>31||DOBDay<1))
		{
			allow=false;
			alert("Invalid Birthdate");
		}

		else{
			switch(DOBMonth){
						case "January":
						case "March":
						case "May":
						case "July":
						case "August":
						case "October":
						case "December":	if(DOBDay>31||DOBDay<1)
													{allow=false;
													alert("Invalid Birthdate");
												}
													break;

						case "Febuary":	if(((DOBYear % 4 == 0) && (DOBYear % 100 != 0)) || (DOBYear % 400 == 0))
													{
														if(DOBDay>29||DOBDay<1){
																allow=false;
																alert("Invalid Birthdate");
															}
													}
													else if(DOBDay>28||DOBDay<1){
															allow=false;
															alert("Invalid Birthdate");
														}
														break;
							case "April":
							case "June":
							case "September":
							case "November":	if(DOBDay>31||DOBDay<1){
														allow=false;
														alert("Invalid Birthdate");
													}
														break;
							default:allow=false; alert("invalid birthdate");
			 	}
			}
		return allow;
	}

	function validateImage() {
    		var formData = new FormData();
	    	var file = document.getElementById("picture").files[0];
	    formData.append("Filedata", file);
	    var t = file.type.split('/').pop().toLowerCase();
	    	if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
	        	alert('Please select a valid image file');
	        	document.getElementById("picture").value = '';
	        	return false;
	    }
	    	if (file.size > 8388608) {
	        	alert('Max Upload size is 8MB only');
	        	document.getElementById("picture").value = '';
	        	return false;
	    }
    return true;
    }
</script>
</body>
</html>
