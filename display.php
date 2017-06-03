<?php
    
    session_start();
    $id = $_SESSION['username'];
    //echo  "$id";//correct
    
    $conn=@mysql_pconnect("127.0.0.1","s103000021","wu3po2yao10");        
    mysql_select_db("s103000021");
    mysql_query("SET NAMES'utf8'");
    //include("mysql_connect.inc.php");
    
    $sql="select * from pic_table where username='$id'";
    $result=mysql_query($sql);
    if($row=mysql_fetch_assoc($result)){
      header("Content-type: image/jpeg");     
      print $row['image'];
    }
?>