<?php session_start(); ?>

<?php

include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];


$sql = "SELECT * FROM member_table where username = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
{

        $_SESSION['username'] = $id;
        echo '<div>';
        echo 'login successfully!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
        echo '</div>';
}
else
{
        echo '<div>';
        echo 'login failed!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
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
</style>