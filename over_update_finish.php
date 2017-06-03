<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html">
<?php
include("mysql_connect.inc.php");

$other = $_POST['other'];


if($_SESSION['username'] != null)
{
        $id = $_SESSION['username'];
        

        $sql = "update member_table set other= '$other' where username='$id' ";
        if(mysql_query($sql))
        {
                echo '<div>';
                echo 'success!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
                echo '</div>';
        }
        else
        {
                echo '<div>';
                echo 'fail!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
                echo '</div>';
        }
}
else
{
        echo '<div>';
        echo 'not authorized!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
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