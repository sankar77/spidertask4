<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<center>
<form action="spidertask4insert.php" method="post">
USERNAME:<input type="text" name="uname"><br/><br/>
PASSWORD:<input type="password" name="pswrd"><br/><br/>
CONFIRM PASSWORD:<input type="password" name="psrd"><br/><br/>
EMAIL:<input type="email" name="email"><br/><br/>
MOBNO:<input type="text" name="mno"><br/><br/>
<input type="submit" name="submit" value="submit"><br/><br/>
</form>
</center>
<hr>
<form action="spidertask4insert.php" method="get">
USERNAME:<input type="text" name="uname"><br/><br/>
PASSWORD:<input type="password" name="pswrd"><br/><br/>
<input type="submit" name="view" value="VIEW"><br/><br/>
<?php
//$x="hi";
$con=mysql_connect("localhost","sankar3","goodluck");
if(!$con){
die("can not connect:".mysql_error());
}
if(isset($_POST['submit'])){
	if($_POST['psrd']==$_POST['pswrd']){
	mysql_select_db("spidey",$con);
//$uploadDir = 'images/'; //Image Upload Folder
$sql = "CREATE TABLE taskspider(
Username varchar(20),
Password varchar(70),
Status varchar(20)
Email varchar(30),
Mobno bigint
)";
mysql_query($sql,$con);
//$phash=password_hash('$_POST[pswrd]', PASSWORD_DEFAULT);
//echo $phash;
$stat="viewer";
$query = "INSERT INTO taskspider ( Username,Password,Status,Email,Mobno ) VALUES ('$_POST[uname]','$_POST[pswrd]','$stat','$_POST[email]','$_POST[mno]')";
mysql_query($query,$con);
}
}
if(isset($_GET['view'])){
	//echo $x;
    /*if($_SESSION['Status'] == 'admin'){
//redirect
    //header("location:../first/databaseinsertimage.php");
	echo $x;
     exit;	
	//include_once('databaseinsertimage.php');
	}*/
	 /*if( == 's'){
		header("location:../first/ptfm1.php");
          //header("Location:../http://www.google.com");
		  exit;
		}*/
 mysql_select_db("spidey",$con);
 $sql = "SELECT Status FROM taskspider WHERE Username='$_GET[uname]'";
$myData=mysql_query($sql,$con);
 $record = mysql_fetch_array($myData);
 if($record['Status']=='admin'){
	 header("location:../first/adminpage.php");
 }
 else if($record['Status']=='editor') {
	 header("location:../first/newpage.php");
 }
 else if($record['Status']=='viewer'){
	 header("location:../first/viewerpage.php");
 }
}
		
	mysql_close($con);
?>
</body>
</html>