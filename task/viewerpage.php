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
Description text,
Id int
)";
mysql_query($sql,$con);
$sql = "SELECT * FROM taskspidey";
    $myData=mysql_query($sql,$con);
	$record = mysql_fetch_array($myData);
	while($record = mysql_fetch_array($myData)){
	echo "<form action=adminpage.php method=post>";
	echo'<div style="width:500px;height:100px;border:1px solid #000;">';
	echo $record['Id'];
	echo'.';
	echo $record['Description'];
	echo'</div>';
	}
mysql_close($con);
?>
</body>
</html>	