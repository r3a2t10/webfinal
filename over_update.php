<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html" />
<?php
include("mysql_connect.inc.php");

$lel = $_POST['lel'];
$num = $_POST['num'];
$if  = $_POST['if'];

if($_SESSION['username'] != null)
{

        $id = $_SESSION['username'];

        $sql = "SELECT * FROM member_table where username='$id'";
        $result = mysql_query($sql);
        $row = mysql_fetch_row($result);
        
        echo '<div>';
        echo '<h2>Your score!<h2>';
        echo '</div><br>'; 
        date_default_timezone_set("Asia/Taipei");
        if($if == "0"){
          //not sucess
          echo "<div>";
          echo "<form name=\"form\" method=\"post\" action=\"over_update_finish.php\">";
          echo "history: <textarea name=\"other\" cols=\"45\" rows=\"5\" readonly>".
				"$row[4]"."\n[".date("Y-m-d")." ".date("h:i")." "."->level:"."$lel"."->failed]</textarea> <br>";
          echo "<input type=\"submit\" name=\"button\" class=\"myButton\" value=\"submit\" />";
          echo "</form>";
          echo "</div>";
        }
        if($if != "0"){
          //sucess
          echo "<div>";
          echo "<form name=\"form\" method=\"post\" action=\"over_update_finish.php\">";
          echo "account: <input type=\"text\" name=\"id\" value=\"$row[0]\" readonly/><br>";
		  echo "history: <textarea name=\"other\" cols=\"45\" rows=\"5\" readonly>".
				"$row[4]"."\n[".date("Y-m-d")." ".date("h:i")." "."->level:"."$lel"."->movement:"."$num"."]</textarea> <br>";
          echo "<input type=\"submit\" name=\"button\" class=\"myButton\" value=\"submit\" />";
          echo "</form>";
          echo "</div>";
        }
        
}
else
{
        echo '<div>';
        echo 'you are not authorized to see this page!';
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
h2{
  text-align:center;
  color:#00994d;
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