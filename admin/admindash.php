<?php
session_start();
if(isset($_SESSION['uid'])){
	
}
else{
	header('location:../login.php');
}

?>

<?php
include('header.php');
?>
<div class="admin" align="center">
<h1>ADMIN DASHBOARD</h1>
<h4><a href="../logout.php" style="float:right;margin-right: 30px;color: white;font-size:27px;margin-top:140px;">Logout</h4></a>
</div>
<div class="dashboard">
<table align="right" style="margin-top: 20px; width:48%" >
<tr>
<td >1</td><td><a href="addstud.php">INSERT STUDENT</td>
</tr>
<tr>
<td>2</td><td><a href="update.php">UPDATE STUDENT</td>
</tr>
<tr>
<td>3</td><td><a href="delete.php">DELETE STUDENT</td>
</tr>	
</table>	
</div>
</body>
</html>