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
include('titlehead.php');
include('../dbconnect.php');
$id=$_GET['sid'];
$query="SELECT * FROM `student` WHERE `id`='$id';";
$run=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($run);
?>
<form action="updatedata.php" method="post" enctype="multipart/form-data">
	<table style="width: 40%" align="center" border="1">
		<tr><th>Name</th>
		<td><input type="text" name="name" required="required" value="<?php echo $data['sname'] ?>" /></td></tr>
		<tr><th>City</th>
		<td><input type="text" name="city" required="required" value="<?php echo $data['city'] ?>" /></td></tr>
		<tr><th>Parent Contact No</th>
		<td><input type="number" name="contact" required="required" value="<?php echo $data['pcont'] ?>" /></td></tr>
		<tr><th>Roll No</th>
		<td><input type="number" name="roll" required="required" value="<?php echo $data['rollno'] ?>" /></td></tr>
		<tr><th>Class</th>
		<td><input type="number" name="class" required="required" value="<?php echo $data['class'] ?>" /></td></tr>
		<tr><th>Image</th>
		<td><input type="file" name="simage" required="required"  /></td></tr>
		<tr><th>Attendance%</th>
		<td><input type="number" name="simage" required="required" value="<?php echo $data['Attendance'] ?>" /></td></tr>
		<tr>
<td colspan="2" align="center"><input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>
				<input type="submit" name="submit" value="Submit"/></td>
		</tr>
		</table>	
</form>
</body>
</html>