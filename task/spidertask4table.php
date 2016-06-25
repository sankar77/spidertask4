<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$con=mysql_connect("localhost","sankar3","goodluck");
if(!$con){
die("can not connect:".mysql_error());
}

mysql_select_db("spidey",$con);
$sql = "CREATE TABLE taskspider(
Username varchar(20),
Password varchar(70),
Status varchar(20),
Email varchar(30),
Mobno bigint
)";
mysql_query($sql,$con);
mysql_close($con);
?>
</body>
</html>