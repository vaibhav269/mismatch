/*
1.This script checks if the user is already logged in.
2.using AJAX runs the file mismatch_login_check.php file and passes an argument 'a=check' to it.
3.getinf():-This function recieves the response of mismatch_login_check.php in variable 'val' and calls the function loginInfo();
4.loginInfo():-This function takes actions on the basis of the value of 'val' i.e. response from mismatch_login_check.php.
5.logout():-This function again calls the mismatch_login_check.php file with different value of 'a' and deletes the cookie(logout the user) and calls function delInf().
6.delInf():-This function checks the response of mismatch_login_check.php and calls afterLogout().
7.afterLogout():-This functions takes the action on logout i.e hiding and showing different elements.
*/

		var req;
		var req1;
		var val;
		var url="mismatch_login_check.php?a=check";
		if(window.XMLHttpRequest){
			req=new XMLHttpRequest();
		}
		else if(window.ActiveXObject){
		req=new ActiveXObject("Microsoft.XMLHTTP");
		}
		try{
				req.onreadystatechange=getInf;
				req.open("GET",url,true);
				req.send();
		}catch(e){
			alert("Can't connect to server");
		}


	function getInf()
	{
		if(req.readyState==4)
		{
		window.val=req.responseText;
			loginInfo();
			req.abort();
		}
	}

	function loginInfo()
	{
		if(window.val!='No')
		{
		var prof=document.getElementById('profile-button');
		prof.innerHTML=val;
		}
	}

	function logout()
	{
		url="mismatch_login_check.php?a=delcookie&b="+val;
			try{
				req.onreadystatechange=delInf;
				req.open("GET",url,true);
				req.send();
		}catch(e){
			alert("Can't connect to server");
		}
	}

	function delInf()
	{
		if(req.readyState==4)
		{
			afterLogout();
			req.abort();
			window.location='mismatch_homepage.php';
		}
	}

	function afterLogout()
	{
		document.getElementById('password').value="";
	}
