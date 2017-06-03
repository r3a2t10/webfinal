<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//±Nsession²MªÅ
unset($_SESSION['username']);
echo '<div>';
echo 'logging out......';
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
echo '</div>';
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