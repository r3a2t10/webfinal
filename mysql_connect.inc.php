<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "faciclub.database.windows.net";//web.2y.idv.tw
//資料庫名稱
$db_name = "FaciClub";//s103000021
//資料庫管理者帳號
$db_user = "davidchou";//s103000021
//資料庫管理者密碼
$db_passwd = "David40104";//wu3po2yao10

//對資料庫連線
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("can't connect with database");

//資料庫連線採UTF8
//mysql_query("SET NAMES utf8");
mysql_query("SET NAMES'utf8'");

//選擇資料庫
if(!@mysql_select_db($db_name))
        die("can't use database");
?> 