<?php session_start(); ?>

<?php
include("mysql_connect.inc.php");

$id = $_SESSION['username'];
$tx = $_POST['taxt'];
date_default_timezone_set("Asia/Taipei");



if($tx != null)
{
        
        $re = "[".date("Y-m-d")." ".date("h:i")."] ".$tx ;
        $sql ="insert into msg (name,taxt) values ('$id','$re')";
        if(mysql_query($sql))
        {
                echo '<div>';
                echo 'success!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=msg.php>';
                echo '</div>';
        }
        else
        {
                echo '<div>';
                echo 'failed!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=msg.php>';
                echo '</div>';
        }
}
else
{
        echo '<div>';
        echo 'message can not be empty!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=msg.php>';
        echo '</div>';
}
?>
<style>
div{
    background-color:#ccff99;
    color:#00994d;
	  width:500px;
	  height:auto;
    margin: auto;
  	padding:10px;
  	line-height:5px;
  	text-align:center;
  	font-family:Calibri;
  	font-size:25px;
  	border-radius:10px;
    line-height: normal ;
}
.myButton{
  	background-color:#00cc66;
  	border-radius:10px;
  	font-family:Calibri;
  	color:white;
  	font-size:20px;
  	font-weight:bold;
  	padding:5px 25px;
  	text-decoration:none;
}
.myButton:hover {
  	background-color:#00994d;
  	color:white;
}
.myButton:active {
  	position:relative;
  	top:2px;
}
</style>