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
$sql = "CREATE TABLE taskspidey(
Description text

)";
mysql_query($sql,$con);
mysql_close($con);
?>
</body>
</html>