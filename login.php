<?php
session_start();
if(isset($_SESSION['uid'])){
header('location:admin\admindash.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
.body{
	background-color:rgb(51, 173, 255);
}
#h1{
	color: white;
	animation: anim 4s infinite;
}
#log{
	margin-top: 40px;
	background-color:black;
	color: white;
}
#log:hover{
	color:red;
}
#us{
margin-top: 40px;


}
#txt{
	margin-top: 10px;
}
#pass{
	margin-top: 15px;
}
#pat{
	margin-top: 10px;
}
#h4 a{
	color: white;
	margin-top:5px; 
}
#h4 a:hover{
color:red; 

}
@keyframes anim{
0%{color:red ;transform:scale(1.5);}
25%{color:white ;transform:scale(0.3);}
50%{color:orange ;transform:scale(1.5);}
75%{color:green;transform:scale(0.3;}
100%{color:pink ;transform:scale(1);}

}


</style>

<title>Student Management System</title>
</head>
<body class="body"><h4 id="h4" ><a href="index.php" >BACK</a></h4>
<h1 id="h1" style="margin-top:80px;" align="center">ADMIN LOGIN PANEL</h1>

<form action="login.php" method="post">
		<table align="center" style="width: 20%"  >
			<tr>
				<td id="us" >Username<input id="txt" type="text" placeholder="Enter Username" name="uname" required="required"/></td>
			</tr>
			<tr>
			<td id="pass">Password<input id="pat"  type="password" placeholder=" Password" name="pass" required="required"/></td>
			</tr>
			<tr>
			<td colspan="2" align="center"><input id="log" type="submit"  name="submit" value="LOGIN"/></td>
			</tr>
            </table>
</form>
</body>
</html>
<?php
include("dbconnect.php");
if(isset($_POST['submit'])){
$username=$_POST['pass'];
$password=$_POST['uname'];
$query="SELECT * FROM `Admin` WHERE `Username`='$username' AND `password`='$password';";
$run=mysqli_query($con,$query);
$row=mysqli_num_rows($run);
if($row<1)
	{
		?>
<script>alert("Username or Password Doesn't Match :)");
window.open('login.php','_self');
</script>
<?php
//header("location:login.php");
}
else{
$data=mysqli_fetch_assoc($run);
$id=$data['id'];
$_SESSION['uid']=$id;
header('location:admin\admindash.php');
}
}
?>


