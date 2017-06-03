<?php session_start(); ?>

<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
//$telephone = $_POST['telephone'];
//$address = $_POST['address'];
//$other = $_POST['other'];

$flag   = false ;
$flag_1 = false ;
$flag_2 = false ;
$flag_3 = false ;

if(strlen($id)<5) $flag_1 = true ;
if(strpos ($id," ")) $flag_2 = true ;
if(strpos ($id,";")) $flag_3 = true ;

if(strlen($id)<5||strpos ($id," ")||strpos ($id,";"))$flag=true;



if($flag == false && $id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        
        
        $sql = "insert into member_table (username, password, telephone, address, other) values ('$id', '$pw',null,null,null)";
        if(mysql_query($sql))
        {
                echo '<div>';
                echo 'create account successfully!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
                echo '</div>';
        }
        else
        {
                echo '<div>';
                echo 'failed!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
                echo '</div>';
        }
}
else
{
        if($flag_1==true)
        {
          echo '<div>';
          echo 'user id must longer than 5 letters';
          echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
          echo '</div><br>';
        }
        if($flag_2==true)
        {
          echo '<div>';
          echo 'user id can not cintain " "';
          echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
          echo '</div><br>';
        }
        if($flag_3==true)
        {
          echo '<div>';
          echo 'user id can not cintain ";"';
          echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
          echo '</div><br>';
        }
        
        echo '<div>';
        echo 'please try again !';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
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