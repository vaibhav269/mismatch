/*
1.This file handles the login button and the form decoration.
2.checkLogin():- Function called on clicking Login-button,runs mismatch_homepage_login_check.php function to check for password.
3.getInfo():-handles the response from the file mismatch_homepage_login_check.php and stores the value in variable val2 calls afterLogin() function.
4.afterLogin():-this function takes action on whether to hide or show elements.
*/


	var user=document.getElementById('username');
	var pass=document.getElementById('password');
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

	function checkLogin()
	{
		if(user.value==""&&pass.value=="")
			alert("please enter username and password first");
		else if(user.value=="")
			alert("Please enter username first");

		else if(pass.value=="")
			alert("please enter password first");

		else {
				var url="mismatch_homepage_login_check.php";
				var data="user="+user.value+"&"+"pass="+pass.value;
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
					request.open("POST",url,true);
					request.setRequestHeader("content-type","application/x-www-form-urlencoded");
					//request.setRequestHeader("content-length","data.length");
					//request.setRequestHeader("connection","close");
					request.send(data);
				}catch(e)
				{
					alert("Can't connect to server");
				}

				function getInfo()
					{
						if(request.readyState==4)
						{
							var val2=request.responseText;
							afterLogin(val2);
						}
					}

				function afterLogin(val2)
				{
					if(val2=='NOPE'){
						alert("Incorrect Password");
					}
					else
					{
						location.reload();
					}

				}
			}
	}
