var reloading_chat_box=setInterval(chat_display_reload,100);

function send_msg_enter_button(event){
      if (event.keyCode == 13)
      {
        //event.preventDefault();
        if(event.shiftKey===true)
        {
        }
        else{
            event.preventDefault();
            //document.execCommand('insertHTML', false, ' '); //to prevent extra <br> on pressing enter
            document.getElementById('msg_send_btn').click();
          }
      }

}

function send_msg(){
      var msg_box=document.getElementById('msg');
      var msg=msg_box.innerHTML.replace(/(&nbsp;)*/g,"");
      msg=msg.trim();
      msg=msg.replace(/[/\\]/g,"\\\\");           //to avoid escaping with \
      msg=msg.replace(/[/'']/g," '' ");            //to avoid escaping with '
      msg=msg.replace(/^(<br>)*/,"");       //to avoid  <br > from starting of string
      msg=msg.replace(/(<br>)+$/,"");     //to avoid  <br> from end of string
        if(msg!=="" )
          {
            var url="mismatch_msg_store.php";
    				var data="msg= "+ encodeURIComponent(msg.toString())+" &"+"to_user_id="+to_user_id; // encodeURIComponent() encodes the symbols that don't work normally must to send &<>+ symbols
            console.log(data);
            if(window.XMLHttpRequest)
    				{
    					request=new XMLHttpRequest();
    				}

    				else if(window.ActiveXObject)
    				{
    					request=new ActiveXObject("Microsoft.XMLHTTP");
    				}

    				try{
    					request.onreadystatechange=store_msg;
    					request.open("POST",url,true);
    					request.setRequestHeader("content-type","application/x-www-form-urlencoded");
    					request.send(data);
    				}catch(e)
    				{
    					alert("Can't connect to server");
    				}

    				function store_msg()
    					{
    						if(request.readyState==4)
    						{
    							var msg_report=request.responseText;
                  //console.log(msg_report);
    						}
    					}
              msg_box.innerHTML="";
          }
}



function chat_display_reload()
{
            var msg_container=document.getElementById('mismatch_message_container');
            var url="mismatch_chat_update.php";

            ele=document.getElementsByClassName('all_msgs_time');
            time=ele[ele.length-1].innerHTML;
    				var data="to_user_id="+to_user_id+"&"+"time="+time;

            if(window.XMLHttpRequest)
    				{
    					request1=new XMLHttpRequest();
    				}

    				else if(window.ActiveXObject)
    				{
    					request1=new ActiveXObject("Microsoft.XMLHTTP");
    				}

    				try{
    					request1.onreadystatechange=show_msg;
    					request1.open("POST",url,true);
    					request1.setRequestHeader("content-type","application/x-www-form-urlencoded");
    					request1.send(data);
    				}catch(e)
    				{
    					alert("Can't connect to server");
    				}

    				function show_msg()
    					{
    						if(request1.readyState==4)
    						{
    							     var msg=request1.responseText;
                       if (!msg.trim())
                       { }

                      else{
                      msg_container.innerHTML=msg_container.innerHTML+msg;
                      var chatWindow = document.querySelector('#mismatch_message_container');
                      chatWindow.scrollTop = chatWindow.scrollHeight;
                            }

    						}
    					}
}



  function block_user(){
            var url="mismatch_block_user.php";
            var data="to_user_id="+to_user_id+"&"+"todo=Block";

            var block_button_value=document.getElementById('block-button').innerHTML;

            if(block_button_value=="Unblock")
                data="to_user_id="+to_user_id+"&"+"todo=Unblock";

                console.log(data);

            if(window.XMLHttpRequest)
            {
              request=new XMLHttpRequest();
            }

            else if(window.ActiveXObject)
            {
              request=new ActiveXObject("Microsoft.XMLHTTP");
            }

            try{
                request.onreadystatechange=response;
                request.open("POST",url,true);
                request.setRequestHeader("content-type","application/x-www-form-urlencoded");
                request.send(data);
              }catch(e)
              {
                alert("Can't connect to server");
              }

              function response()
              {
                if(request.readyState==4)
                {
                  var report=request.responseText;
                  window.location.reload();
                }
              }
}
