<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Student Management System</title>
</head>
<body style="background-color: rgb(102, 255, 204);  ">
	<h3 id="ad" align="right" style="font-family:Lucida Handwriting"><a href="login.php">Admin Login</a></h3>
	<h1 id="h1" align="center" style="font-family:Algerian;">Welcome to Student Management System</h1>
	<h4 style="margin-bottom: 2px; color: orange;font-family: Chiller;font-size: 44px;"  align="center" >Student Information </h4>
	<form action="index.php" method="post">
		<table  style="width: 40% margin-top:100px;" align="center">
<tr>
<td style="color: red;" >Roll no</td>
<td align="right"><input type="number" name="uname" placeholder="Enter Your Roll No" required="required" min="1" max="40" /></td>
</tr>
<tr>
	<td style="color: red;" align="left" > CLASS</td>
	<td align="center"><SELECT name="class">
	<OPTION VALUE="1">1nd</OPTION>
		<OPTION VALUE="2">2nd</OPTION>
			<OPTION VALUE="3">3nd</OPTION>
				<OPTION VALUE="4">4th</OPTION>
					<OPTION VALUE="5">5th</OPTION>
						<OPTION VALUE="6">6th</OPTION>
						<OPTION VALUE="7">7th</OPTION>
						<OPTION VALUE="8">8th</OPTION>
						<OPTION VALUE="9">9th</OPTION>
						<OPTION VALUE="10">10th</OPTION>
						<OPTION VALUE="11">11th</OPTION>
						<OPTION VALUE="12">12th</OPTION>
</SELECT></td>
</tr>
<tr>
<td colspan="2"align="center"><input colspan="2" style="background-color: black;color: white;" type="submit" name="submit" value="LOGIN"/></td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$class=$_POST['class'];
$roll=$_POST['uname'];
include('dbconnect.php');
include('function.php');
 details($class,$roll);
}

?>