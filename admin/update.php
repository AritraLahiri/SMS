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
<form action="update.php" method="post">
	<table align="center" >
<tr>
		<th>Student Name</th><td><input type="text" name="sname" required="required" /></td>	
<th>Enter Roll</th><td><input type="number" name="roll" required="required" /></td>
<td><input type="submit" name="submit" value="Search" /></td>
</tr>
</table>
</form>
<table align="center" width="80%" style="margin-top: 20px;" border="1">
	<tr style="background-color:black;color:white;">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Roll</th>
		<th>Edit</th>
</tr>
<?php
include('../dbconnect.php');
if(isset($_POST['submit'])){
	$name=$_POST['sname'];
	$roll=$_POST['roll'];
	$query="SELECT * FROM `student` WHERE `sname` LIKE '%$name%' AND `rollno`='$roll';";
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)<1){
		?><script>alert("No Records Found");</script><?php
		}
else{
	$count=0;
	while ($data=mysqli_fetch_assoc($run)) {
		$count++;
		?>
	<tr>
		<td align="center"><?php echo $count; ?></td>
		<td align="center"><img src="../dataimages/<?php echo $data['image'];?>" style="max-width:100px;"/></td>
		<td align="center"><?php  echo $data['sname'];?></td>
		<td align="center"><?php  echo $data['rollno'];?></td>
<td align="center"><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
</tr>

		<?php
		
	
}
}
}

?>
</table>
