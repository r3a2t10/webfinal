<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html" />
<?php
 include("mysql_connect.inc.php");
 $id = $_SESSION['username'];
 //echo  "$id";
 //取得上傳檔案資訊
 $filename=$_FILES['image']['name'];
 $tmpname=$_FILES['image']['tmp_name'];
 $filetype=$_FILES['image']['type'];
 $filesize=$_FILES['image']['size'];    
 $file=NULL;
 if(isset($_FILES['image']['error'])){    
    if($_FILES['image']['error']==0){ 
      $instr = fopen($tmpname,"rb" );
      $file = addslashes(fread($instr,filesize($tmpname)));      
   }
 }
 
 //新增圖片到資料
 //$conn=@mysql_pconnect("127.0.0.1","s103000021","wu3po2yao10");        
 //mysql_select_db("s103000021");
 //mysql_query("SET NAMES'utf8'");
 $id = $_SESSION['username'];
 $sql_delete = "delete from pic_table where username='$id'";
 $sql_insert = "insert into pic_table (username,image) values ('$id','$file')";
 
  mysql_query($sql_delete);
  mysql_query($sql_insert);
  echo '<div>';
  echo 'image change!';
  echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
  echo '</div>';
 //mysql_close($conn);
  
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