function about_run()
{
  document.getElementById('user_data_container').style.display="none";
  document.getElementById('userProfile_center_mismatch_score').style.display="none";
  document.getElementById('userProfile_center_mismatch_chat').style.display="none";
  document.getElementById('userProfile_center_text_data').style.display="none";

  document.getElementById('user_data_container').style.display="block";
  document.getElementById('userProfile_center_text_data').style.display="table";
}

function mismatch_calc_run(mismatch_user)
{
  document.getElementById('user_data_container').style.display="none";
  document.getElementById('userProfile_center_text_data').style.display="none";
  document.getElementById('userProfile_center_mismatch_chat').style.display="none";
  document.getElementById('userProfile_center_mismatch_score').style.display="none";

  document.getElementById('user_data_container').style.display="block";
  document.getElementById('userProfile_center_mismatch_score').style.display="block";
}

function chat_run(to_user_id)
{
  document.getElementById('user_data_container').style.display="none";
  document.getElementById('userProfile_center_text_data').style.display="none";
  document.getElementById('userProfile_center_mismatch_chat').style.display="none";
  document.getElementById('userProfile_center_mismatch_score').style.display="none";

  document.getElementById('user_data_container').style.display="block";
  document.getElementById('userProfile_center_mismatch_chat').style.display="block";

    var chatWindow = document.querySelector('#mismatch_message_container');
    chatWindow.scrollTop = chatWindow.scrollHeight;

}
