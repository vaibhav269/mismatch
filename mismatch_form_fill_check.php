<?php
require_once('mismatch_db_info.php');
$user_id=$_COOKIE['user_id'];
$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB) or die("could not connect");
$query="select * from mismatch_response where user_id='$user_id'";
$result=mysqli_query($dbc,$query);
$data_count=mysqli_num_rows($result);
if($data_count==0)
{
?>
<script>window.location="mismatch_myprofile.php"</script>
<?php
echo "fuck";
}
 ?>
