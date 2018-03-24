function edit_user_prof()
{
    document.getElementById('city').remove();
    document.getElementById('state').remove();
    var city_input=document.createElement("INPUT");
    var state_input=document.createElement("INPUT");
    var myprofile_sidebar_text_data=document.getElementById("myprofile_sidebar_text_data");
    var myprofile_sidebar_edit_btn=document.getElementById("myprofile_sidebar_edit_btn");
    var myprofile_sidebar_submit_btn=document.getElementById("myprofile_sidebar_submit_btn");
    var space=document.createElement("br");
    var space1=document.createElement("br");

    city_input.id="city_input";
    state_input.id="state_input";
    city_input.placeholder="City";
    state_input.placeholder="State";
    myprofile_sidebar_text_data.insertBefore(city_input,myprofile_sidebar_edit_btn);
    myprofile_sidebar_text_data.insertBefore(space,myprofile_sidebar_edit_btn);
    myprofile_sidebar_text_data.insertBefore(state_input,myprofile_sidebar_edit_btn);
    myprofile_sidebar_text_data.insertBefore(space1,myprofile_sidebar_edit_btn);
    myprofile_sidebar_edit_btn.style.display="none";
    myprofile_sidebar_submit_btn.style.display="inline";
  }

function submit_user_prof(){
	var city_input= document.getElementById('city_input').value;
	var state_input=document.getElementById('state_input').value;
  if(city_input!="" &&state_input!="")
  {
        var myprofile_sidebar_edit_btn=document.getElementById("myprofile_sidebar_edit_btn");
        var myprofile_sidebar_submit_btn=document.getElementById("myprofile_sidebar_submit_btn");
        var x=submit_data();
            if(x=="done")
            {
                myprofile_sidebar_edit_btn.style.display="inline";
                myprofile_sidebar_submit_btn.style.display="none";
              }
          }
          else {
            alert("please enter the details first");
          }
  }

function submit_data()
{
    var city_data=document.getElementById('city_input').value;
    var state_data=document.getElementById('state_input').value;
    var url="mismatch_prof_edit.php";
    var data="city="+city_data+"&"+"state="+state_data;

      if(window.XMLHttpRequest)
    {
      req_user_prof=new XMLHttpRequest();
    }
    else if(window.ActiveXObject)
    {
      req_user_prof=new ActiveXObject("Microsoft.XMLHTTP");
    }
    try{
      req_user_prof.onreadystatechange=responseData;
      req_user_prof.open("POST",url,true);
      req_user_prof.setRequestHeader("content-type","application/x-www-form-urlencoded");
      req_user_prof.send(data);
  }catch(e)
  {
    alert("Can't connect to server");
  }

function responseData()
  {
    if(req_user_prof.readyState==4)
    {
      var x=req_user_prof.responseText;
     if(x==1)
     location.reload();
    }
  }
  return "done";
}
