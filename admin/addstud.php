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
?>
<form action="addstud.php" method="post" enctype="multipart/form-data">
	<table style="width: 40%;margin-top: 40px;border: 1px solid brown;" align="center" >
		<tr><th>Name</th>
		<td><input type="text" name="name" required="required" placeholder="Enter YOUR Name" /></td></tr>
		<tr><th>City</th>
		<td><input type="text" name="city" required="required" placeholder="Enter YOUR City" /></td></tr>
		<tr><th>Parent Contact No</th>
		<td><input type="number" name="contact" required="required" placeholder="Enter NUMBER"  max="10" /></td></tr>
		<tr><th>Roll No</th>
		<td><input type="number" name="roll" required="required" placeholder="Enter YOUR ROLL" min="1" max="40" /></td></tr>
		<tr><th>Class</th>
		<td><input type="number" name="class" required="required" placeholder="Enter YOUR CLASS" min="1" max="12" /></td></tr>
		<tr><th>Image</th>
		<td><input type="file" name="simage" required="required"  /></td></tr>
		<tr>
		<th>Attendance%</th><td><input type="number" name="Attendance" placeholder="Enter Student Attendace" required="required" min="1" max="100"></td>	
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"/></td>
		</tr>
		</table>	
</form>
</body>
</html>
<?php
include('../dbconnect.php');
if(isset($_POST['submit'])){
$name=$_POST['name'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$roll=$_POST['roll'];
$class=$_POST['class'];
$per=$_POST['Attendance'];
$image=$_FILES['simage']['name'];
$tempimage=$_FILES['simage']['tmp_name'];
move_uploaded_file($tempimage,"../dataimages/$image");
$query="INSERT INTO `student`(`sname`, `city`, `pcont`, `rollno`, `class`,`image`,`Attendance`) VALUES ('$name','$city','$contact','$roll','$class','$image','$per');";
$run=mysqli_query($con,$query);
if($run){
?><script >alert("DATA INSERTION SUCCESSFULL");</script>
<?php
}
else{
	echo "error";
}

}



?>