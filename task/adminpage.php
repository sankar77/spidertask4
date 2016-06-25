<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form  action="adminpage.php" method="post">
<input type="submit" name="adm" value="GO TO ADMIN PANEL" style="float:right;">
</form>
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
if(isset($_POST['adm'])){
	header("location:../first/adminpanel.php");
}
if(isset($_POST['delete'])){
	//echo'$_POST[hidden]';
$Deletequery="DELETE FROM taskspidey WHERE Id='$_POST[hidden]'";
mysql_query($Deletequery,$con);
//echo $_POST['hidden'];
};	
$sql = "SELECT * FROM taskspidey";
    $myData=mysql_query($sql,$con);
	$record = mysql_fetch_array($myData);
	while($record = mysql_fetch_array($myData)){
	echo "<form action=adminpage.php method=post>";
	echo'<div style="width:500px;height:100px;border:1px solid #000;">';
	echo $record['Id'];
	echo'.';
	echo $record['Description'];
	//echo $record['Id'];
	//echo'</div>';
	echo "<form action=adminpage.php method=post>";
	echo"<input type=hidden name=hidden value= '$record[Id]'>";
	echo'</div>';
	//echo'</div>';
	echo'<input type=submit name=delete value=delete>';
	//echo'</div>';
	//echo'</div>';
	echo'<br/>';
	echo'<br/>';
	}
	//echo $record['Id'];
mysql_close($con);	
?>
</body>
</html>	