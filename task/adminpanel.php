<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
//$x="hi";
$con=mysql_connect("localhost","sankar3","goodluck");
if(!$con){
die("can not connect:".mysql_error());
}
mysql_select_db("spidey",$con);
if(isset($_POST['update'])){
$Updatequery="UPDATE taskspider SET Status='$_POST[status]' WHERE Status='$_POST[hidden]'";
mysql_query($Updatequery,$con);
};
//$uploadDir = 'images/'; //Image Upload Folder
$sql = "CREATE TABLE taskspider(
Username varchar(20),
Password varchar(70),
Status varchar(20)
Email varchar(30),
Mobno bigint
)";
mysql_query($sql,$con);
$sql = "SELECT * FROM taskspider";
$myData=mysql_query($sql,$con);
echo"<table border=1>
<tr>
<th>USERNAME</th>
<th>PASSWORD</th>
<th>STATUS</th>
<th>EMAIL</th>
<th>MOBNO</th>
</tr>";
while($record = mysql_fetch_array($myData)){

echo"<tr>";
echo "<td>". $record['Username']. "</td>";
echo "<td>". $record['Password']."</td>";
echo "<td>".$record['Status']."</td>";
echo "<td>".$record['Email']."</td>";
echo "<td>".$record['Mobno']."</td>";
//echo "<td>".$record['Aboutme']."</td>";
//echo "<td>".$record['Password']."</td>";
echo "</tr>";
//echo "</table>";
/*echo"<table border=1>
<tr>
<th>NAME</th>
<th>DEPT</th>
<th>EMAIL</th>
<th>ADDR</th>
<th>ABOUTME</th>
</tr>";
//echo "</table>";
	echo "<form action=adminpanel.php method=post>";
	echo "<tr>";
	echo "<td>". "<input type=text name=topic value=".$record['Username']." </td>";
	echo "<td>". "<input type=text name=name value=" .$record['Status']." </td>";
	echo "<td>". "<input type=text name=attendance value= ".$record['Attendance']." </td>";
	echo "<td>". "<input type=hidden name=hidden value= ".$record['Topic']." </td>";
	echo "<td>". "<input type=submit name=update value=update" ." </td>";
	echo "<td>". "<input type=submit name=delete value=delete" ." </td>";

	echo "</form>";
*/
	}

echo "</table>";
echo"<table border=1>
<tr>
<th>STATUS</th>
</tr>";
$sql = "SELECT Status FROM taskspider WHERE Status!='admin'";
$myData=mysql_query($sql,$con);
while($record = mysql_fetch_array($myData)){
echo "<form action=adminpanel.php method=post>";	
echo"<tr>";
echo "<td>" . "<input type=text name=status value=" . $record['Status'] . " </td>";
//echo "<td>" . "<input type=text name=rno value=" . $record['Rollno'] . " </td>";
//echo "<td>" . "<input type=text name=dept value=" . $record['Dept'] . " </td>";
//echo "<td>" . "<input type=text name=email value=" . $record['Email'] . " </td>";
//echo "<td>" . "<input type=text name=add value=" . $record['Addr'] . " </td>";
//echo "<td>" . "<input type=text name=abm value=" . $record['Aboutme'] . " </td>";
//echo "<td>" . "<input type=text name=pswrd value=" . $record['Password'] . " </td>";
echo "<td>" . "<input type=hidden name=hidden value=" . $record['Status'] . " </td>";
echo "<td>" . "<input type=submit name=update value=update" . " </td>";
echo "</tr>";
echo "</form>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>