<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//��Ʈw�]�w
//��Ʈw��m
$db_server = "faciclub.database.windows.net";//web.2y.idv.tw
//��Ʈw�W��
$db_name = "FaciClub";//s103000021
//��Ʈw�޲z�̱b��
$db_user = "davidchou";//s103000021
//��Ʈw�޲z�̱K�X
$db_passwd = "David40104";//wu3po2yao10

//���Ʈw�s�u
if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("can't connect with database");

//��Ʈw�s�u��UTF8
//mysql_query("SET NAMES utf8");
mysql_query("SET NAMES'utf8'");

//��ܸ�Ʈw
if(!@mysql_select_db($db_name))
        die("can't use database");
?> 