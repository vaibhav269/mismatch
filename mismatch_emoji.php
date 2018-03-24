<!DOCTYPE html>
<html>
<head>
     <link href="mismatch_emoji.css" rel="stylesheet">
</head>
<body>
     <div id="emoji_all">
          <div id="emoji_button">
               <button id="emoji_show_btn" onclick="show_emoji()"> <img src="emoji_show.png"></img></button>
               <button id="emoji_hide_btn" onclick="hide_emoji()"> <img src="emoji_hide.png"></img></button>
          </div>
     <div id="emoji_box">
          <table >
               <?php
                         $img_num=0;
                         for($i=1;$i<=12; $i++)
                         {
                              echo "<tr>";
                                   for($j=0;$j<=5;$j++)
                                        {
                                             $img_num++;
                                             $source="./selected emoji/".$img_num.".png";
                         ?>
                                                  <td class="emoji" onclick="append_emoji('<?php echo $source ?>')"><img src= '<?php echo $source?>' ></td>
                                        <?php
                                                  }
                                                  echo "</tr>";
                              }
                                        ?>

          </table>
     </div>
</div>
     <script>
               function append_emoji(emoji_clicked){
                    var emoji_img="<img style='display:inline' src='"+emoji_clicked+"'</img> ";
                    var input_box=document.getElementById('msg');
                    console.log(input_box.innerHTML);
                         try{
                                   input_box.innerHTML=input_box.innerHTML.replace(/(&nbsp;)*/g,"");     //for chrome and opera contenteditable problem
                              }
                         catch(err)
                              {

                              }

                         try{
                                        input_box.innerHTML=input_box.substring(0, str.lastIndexOf("<br>"))  //for mozzila contenteditable problem
                              }
                              catch(err)
                                   {

                                   }
                    console.log(input_box.innerHTML);
                    input_box.innerHTML=input_box.innerHTML+emoji_img;
                         console.log(input_box.innerHTML);

               }
               function show_emoji(){
                    document.getElementById('emoji_box').style.display="inline-block";
                    document.getElementById('emoji_show_btn').style.display="none";
                    document.getElementById('emoji_hide_btn').style.display="inline-block";

               }
               function hide_emoji(){
                    document.getElementById('emoji_box').style.display="none";
                    document.getElementById('emoji_hide_btn').style.display="none";
                    document.getElementById('emoji_show_btn').style.display="inline-block";
               }
     </script>
</body>
</html>
