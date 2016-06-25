<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
#box{
background-color:red;
height:200;
width:300;
}

</style>
</head>

<body>

<form  action="newpage.php" method="post">
DESCRIPTION:<input type="text" name="desc"><br/><br/>
ID:<input type="text" name="id"><br/><br/>
<input type="submit" name="submit" value="ADD" style="float:right;">
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
	//$query = "INSERT INTO taskspidey ( Description ) VALUES ('$_POST[desc]')";
    //mysql_query($query,$con);
	/*$sql = "SELECT * FROM taskspidey";
    $myData=mysql_query($sql,$con);
	$record = mysql_fetch_array($myData);
	while($record = mysql_fetch_array($myData)){
	echo'<div style="width:500px;height:100px;border:1px solid #000;">';
	echo $record['Description'];
	echo'</div>';
	}*/
if(isset($_POST['submit'])){
	mysql_select_db("spidey",$con);
	$sql = "CREATE TABLE taskspidey(
Description text

)";
	mysql_query($sql,$con);
	$query = "INSERT INTO taskspidey ( Id,Description ) VALUES ('$_POST[id]','$_POST[desc]')";
    mysql_query($query,$con);
	/*$record = mysql_fetch_array($dt);
	//$record = mysql_fetch_array($dt)
	echo'<div style="width:500px;height:100px;border:1px solid #000;">';
	echo $record['Description'];
	echo'</div>';
	*/
	$sql = "SELECT * FROM taskspidey";
    $myData=mysql_query($sql,$con);
	$record = mysql_fetch_array($myData);
	while($record = mysql_fetch_array($myData)){
	echo'<div style="width:500px;height:100px;border:1px solid #000;">';
	echo $record['Id'];
	echo'.';
	echo $record['Description'];
	//echo $record['Id'];
	echo'</div>';
	}
	//$query = "INSERT INTO taskspidey ( Description ) VALUES ('$_POST[desc]')";
    //mysql_query($query,$con);
	

}

?>
</body>
</html>