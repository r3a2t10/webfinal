<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html">
<?php
include("mysql_connect.inc.php");

$id = $_SESSION['username'];

$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
/*
$filename=$_FILES['image']['name'];
$tmpname=$_FILES['image']['tmp_name'];
$filetype=$_FILES['image']['type'];
$filesize=$_FILES['image']['size'];    
$file=NULL;
if(isset($_FILES['image']['error'])){    
  if($_FILES['image']['error']==0){ 
    $instr = fopen($tmpname,"rb");
    $file = addslashes(fread($instr,filesize($tmpname)));      
 }
}
*/

if($_SESSION['username'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        //$x = $_SESSION['username'];
        //$sql_delete = "delete from member_table where username='$x'";
        //mysql_query($sql_delete);
        //$sql = "insert into member_table (username, password, telephone, address, other,image) values ('$id', '$pw', '$telephone', '$address', '$other','$file')";
        
        $sql = "update member_table set password='$pw' where username='$id' ";
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